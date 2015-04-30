if $('.modal').length > 0
  modal = $('.modal')
  modal_header = $('.case_info-header')
  trigger_open = $('.modal_open')
  trigger_close = $('.modal_close')
  
  Pace.on 'done', ->
    modal_h = modal.outerHeight()
    modal_header_h = modal_header.outerHeight()
    
    modal.css "bottom", -(modal_h - modal_header_h)
    
    trigger_open.click ->
      modal.addClass "is_active"
      
    trigger_close.click ->
      modal.removeClass "is_active"