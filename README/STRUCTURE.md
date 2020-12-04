# STUCTURE - WEBIES

***

# HOME PAGE

## Section 1
- Age
- Rating
- Genre
- Release
- Summary
- Trailer-src
- Book-ticket-url (?)

## Section 2 - Slider
>  Ça aurait dû être des liens

- img-src
- img-alt

## Section 3 - Videos (iFrame)

- video-src
- movie-title
- book-ticket-url

## Section 4 - News (section pas claire)

- movie-title
- movie-release-date
- movie-Summary

## Section 5 - slider 2

- img-src
- img-alt

***

# PAGE VIDEOS

- img-src
- img-alt
- title
- watch-now-url

***

# MOVIE REVIEWS PAGE

## Section 1 - Top 5

- movie-title
- movie-director
- ratings
- avg-readers-ratings
- cast
- direction
- Genre
- duration
- trailer-src

## Section 2 - Featured Today in Movie Reviews

- img-src
- img-alt
- movie-title

## Section 3 - Featured Today in Entertainment

- img-src
- img-alt
- movie-title
- trailer-src

***

# SINGLE PAGE

## First Section

- img-src
- img-alt
- movie-title
- director
- tnn ?
- realease-date
- critic-ratings
- avg-readers-ratings
- cast
- direction
- Genre
- duration
- trailer-src
- summary (résumé)

## Review Section

### Best Review

- review-title
- reviewer-name
- review-date
- review-text

### Other Reviews

- calc - Number of comments
- reviewer-name
- review-date
- review-text
- reviewer-profile-pic-src

***

- Films
  - id
  - meta_keywords
  - meta_description
  - meta_img
  - featured (boolean)
  - teased (boolean)
  - title
  - description
  - cover_img
  - cover_alt
  - featured_img
  - featured_alt
  - trailer_url
  - public_id
  - released_at
  - published_at
  - created_at
  - updated_at
  - deleted_at
- film_translations
  - id
  - film_id
  - locale
- Publics
  - id
  - label
  - color
  - slug (l'identifiant URL)
- film_genre
  - film_id
  - genre_id
  - order
- genres
  - id
  - label
  - slug
- film_producer
  - film_id
  - producer_id
- Producers
  - id
  - firstname
  - lastname
- Reviews
  - id
  - film_id
  - cookie_key
  - rating
- Discounts
  - id
  - percentage
  - condition
  - activated
- articles
  - id
  - title
  - published_at
  - excerpt
  - slug
  - content
- Navigations Links
  - id
  - order
  - url
  - label
  - icon

  ***

La vieille version, DB pas récente (ex: ovh)

code ISO : language iso code

JSON SYntaxe
