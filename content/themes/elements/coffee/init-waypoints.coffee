$ ->
  anchor = $('.has_anchor')
  anchor_last = anchor.last()
  
  Pace.on 'done', ->
    waypoint = new Waypoint(
      element: $('header')
      handler: ->
        $('header').toggleClass "is_fixed"
        return
    )