# Data Files

## articles.yml

This file contains a list of articles to display on the `/articles.html` page.

### Adding a new article

Add a new entry to the file with this format:

```yaml
- title: "Article Title"
  url: "https://example.com/article-url"
  date: 2026-02-14
  description: "Optional description of why this article is interesting"
```

### Example

```yaml
- title: "How to Use Jekyll Data Files"
  url: "https://jekyllrb.com/docs/datafiles/"
  date: 2026-02-14
  description: "Official Jekyll documentation on using data files"

- title: "Building Better Websites"
  url: "https://example.com/better-websites"
  date: 2026-02-13
```

The articles will appear in the order you add them to the file (most recent at bottom will show at bottom of the page).
