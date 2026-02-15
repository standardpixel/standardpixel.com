#!/usr/bin/env ruby
# Sync articles from Obsidian Links.md to Jekyll data file

require 'uri'
require 'net/http'
require 'date'
require 'yaml'

LINKS_FILE = File.expand_path("~/Library/Mobile Documents/iCloud~md~obsidian/Documents/evg/Links.md")
ARTICLES_FILE = File.expand_path("_data/articles.yml")

def fetch_title(url)
  uri = URI.parse(url)

  http = Net::HTTP.new(uri.host, uri.port)
  http.use_ssl = (uri.scheme == 'https')
  http.open_timeout = 5
  http.read_timeout = 10

  request = Net::HTTP::Get.new(uri.request_uri)
  request['User-Agent'] = 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36'

  response = http.request(request)

  if response.is_a?(Net::HTTPSuccess)
    html = response.body

    # Try multiple title extraction methods
    # Method 1: <title> tag
    if html =~ /<title[^>]*>(.*?)<\/title>/im
      title = $1.strip
      # Decode HTML entities
      title = title.gsub('&amp;', '&').gsub('&quot;', '"').gsub('&#39;', "'").gsub('&lt;', '<').gsub('&gt;', '>')
      # Clean up common patterns
      title = title.gsub(/\s*[\|\-–—]\s*[^|\-–—]*$/, '').strip
      return title unless title.empty?
    end

    # Method 2: og:title meta tag
    if html =~ /<meta[^>]+property=["']og:title["'][^>]+content=["']([^"']+)["']/i
      return $1.strip
    end

    # Method 3: twitter:title meta tag
    if html =~ /<meta[^>]+name=["']twitter:title["'][^>]+content=["']([^"']+)["']/i
      return $1.strip
    end
  end

  # Fallback: use domain name
  uri.host
rescue => e
  puts " (fetch failed: #{e.message})"
  uri.host
end

def extract_urls(content)
  urls = []

  # Process line by line to properly handle notes
  content.each_line do |line|
    line = line.strip
    next if line.empty?

    # Match markdown links: [text](url)
    if line =~ /\[([^\]]+)\]\(([^)]+)\)/
      urls << { url: $2.strip, title: $1.strip, note: nil }
    # Match plain URLs with bullet points, with optional note after " - "
    # Format: - URL or - URL - note text
    elsif line =~ /^-\s+(https?:\/\/\S+)(?:\s+-\s+(.+))?$/
      note = $2 ? $2.strip : nil
      urls << { url: $1.strip, title: nil, note: note }
    end
  end

  urls
end

puts "Reading links from: #{LINKS_FILE}"

unless File.exist?(LINKS_FILE)
  puts "Error: Links.md not found at #{LINKS_FILE}"
  exit 1
end

links_content = File.read(LINKS_FILE)
urls = extract_urls(links_content)

puts "Found #{urls.size} links"

if urls.empty?
  puts "No links found in #{LINKS_FILE}"
  exit 0
end

# Load existing articles to preserve dates
existing_articles = {}
if File.exist?(ARTICLES_FILE)
  begin
    existing_data = YAML.load_file(ARTICLES_FILE)
    if existing_data.is_a?(Array)
      existing_data.each do |article|
        existing_articles[article['url']] = article['date']
      end
      puts "Loaded #{existing_articles.size} existing articles"
    end
  rescue => e
    puts "Warning: Could not load existing articles.yml: #{e.message}"
  end
end

puts "Fetching titles..."

articles = []
urls.each_with_index do |link, index|
  print "Processing #{index + 1}/#{urls.size}... "

  title = if link[:title] && !link[:title].empty?
    link[:title]
  else
    fetch_title(link[:url])
  end

  # Use existing date if article already exists, otherwise use today
  article_date = existing_articles[link[:url]] || Date.today
  is_new = !existing_articles.key?(link[:url])

  articles << {
    title: title,
    url: link[:url],
    date: article_date,
    note: link[:note]
  }

  puts "✓ #{title}#{is_new ? ' (new)' : ''}#{link[:note] ? ' [has note]' : ''}"
  sleep 1 # Be polite to servers
end

# Generate YAML
puts "\nGenerating #{ARTICLES_FILE}..."

File.open(ARTICLES_FILE, 'w') do |f|
  f.puts "# Auto-generated from #{LINKS_FILE}"
  f.puts "# Last updated: #{Time.now}"
  f.puts

  articles.each do |article|
    # Escape quotes in title
    escaped_title = article[:title].gsub('"', '\\"')
    f.puts "- title: \"#{escaped_title}\""
    f.puts "  url: \"#{article[:url]}\""
    f.puts "  date: #{article[:date]}"
    if article[:note] && !article[:note].empty?
      escaped_note = article[:note].gsub('"', '\\"')
      f.puts "  note: \"#{escaped_note}\""
    end
    f.puts
  end
end

puts "✓ Done! #{articles.size} articles synced to #{ARTICLES_FILE}"
puts "\nNext steps:"
puts "  git add _data/articles.yml"
puts "  git commit -m 'Update articles from Obsidian'"
puts "  git push origin master"
