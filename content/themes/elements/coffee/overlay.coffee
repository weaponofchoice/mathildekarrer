$ ->
  body = $('body')
  overlay = $('.overlay')
  open = $('.overlay_open')
  close = $('.overlay_close')
  
  open.click ->
    overlay.addClass "is_active"
    body.addClass "overlay_active"
    
  close.click ->
    overlay.removeClass "is_active"
    body.removeClass "overlay_active"