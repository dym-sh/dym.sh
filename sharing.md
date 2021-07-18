# Sharing

- default OGP-thumbnails: 16-colors pattern-dithered PNGs
- about 16:9, 900x500px


# Feeds

## RSS 2.0
> `https://dym.sh/feed.xml`

- supports pagination: `?page=3` (defaults to 1, overflow pages empty)
- item amount per page: `?limit=100` (defaults to 20, max 1000)
- start with oldest: `?order=reverse`


## JSON
> `https://dym.sh/feed.json`

- same parameters as with [rss](#RSS_2.0)
- supports streaming over websocket


## SVG
> `https://dym.sh/feed.svg?grid=3x3&img_w=100px&gap=10px`

- a grid of latest post, consisting of OGP-thumbnails


## cli / Terminal
> `curl https://dym.sh/feed.ascii`

- text output in raw markdown
- imgages: max_w 80ch

