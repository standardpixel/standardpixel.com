# StandardPixel.com

This is my personal homepage built with Jekyll.

## Local Development

This site uses Jekyll for static site generation.

### Prerequisites
- Ruby (version 2.7 or higher)
- Bundler (`gem install bundler`)

### Running Locally

1. If using Homebrew Ruby (recommended), add it to your PATH:
   ```bash
   export PATH="/opt/homebrew/opt/ruby/bin:$PATH"
   ```

2. Install dependencies:
   ```bash
   bundle install
   ```

3. Start the Jekyll development server:
   ```bash
   bundle exec jekyll serve
   ```

4. Open your browser to `http://localhost:4000`

The site will automatically rebuild when you make changes to files.

**Note:** If you encounter Ruby version errors, make sure you're using Ruby 3.0 or higher. The system Ruby on macOS is often too old. Use Homebrew to install a newer version: `brew install ruby`

## Adding Blog Posts

Create a new file in the `_posts` directory with the format:
```
YYYY-MM-DD-title-of-post.md
```

Add front matter at the top:
```yaml
---
layout: post
title: "Your Post Title"
date: YYYY-MM-DD HH:MM:SS -0800
---

Your content here in Markdown...
```

## Managing Articles

Articles are synced from your Obsidian vault at:
`~/Library/Mobile Documents/iCloud~md~obsidian/Documents/evg/Links.md`

### Automatic Syncing

A **pre-commit hook** automatically syncs articles before each commit:

1. Add new links to the top of `Links.md` in Obsidian (plain URLs or markdown links)
2. Make any commit to this repo
3. The hook runs `./sync-articles.rb` automatically
4. If articles changed, `_data/articles.yml` is staged and included in your commit

No manual steps needed! Just add links to Obsidian and commit as normal.

### Manual Syncing

You can also run the sync script manually:
```bash
./sync-articles.rb
```

The script will:
- Read URLs from your Links.md file
- Fetch page titles automatically
- Generate `_data/articles.yml`
- Preserve the order (newest at top)

### Manual Article Management

You can also manually edit `_data/articles.yml`:

```yaml
- title: "Article Title"
  url: "https://example.com"
  date: 2026-02-14
  description: "Optional description"
```

## Deployment

This site is hosted on GitHub Pages. Changes pushed to the `gh-pages` branch will be automatically deployed.

To deploy:
1. Make changes on `master` branch
2. Test locally with `bundle exec jekyll serve`
3. Commit and push to `master`
4. Merge `master` to `gh-pages` when ready to publish
