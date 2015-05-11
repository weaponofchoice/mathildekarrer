if $('.overlay p').length > 0
  body = $('body')
  overlay = $('.overlay')
  open = $('.overlay_open')
  close = $('.overlay_close')
  
  delay = (ms, func) -> setTimeout func, ms
  
  open.click ->
    overlay.addClass "is_active"  
    body.addClass "overlay_active"
    
  close.click ->
    overlay.removeClass "is_active"
    body.removeClass "overlay_active"