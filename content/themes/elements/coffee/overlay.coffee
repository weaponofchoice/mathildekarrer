$ ->
  overlay = $('.overlay')
  open = $('.overlay_open')
  close = $('.overlay_close')
  
  open.click ->
    overlay.addClass "is_active"
    
  close.click ->
    overlay.removeClass "is_active"