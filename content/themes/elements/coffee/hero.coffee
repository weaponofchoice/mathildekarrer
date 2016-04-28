$ ->
  hero = $('.section_hero')
  hero_banner = $('.section_hero-banner')

  # Scroll fade-out
  $(window).scroll ->
    window_scroll = $(window).scrollTop()
    hero_banner.css "opacity", (1000 - window_scroll) / 1000