if $('.modal').length > 0
  modal = $('.modal')
  modal_header = $('.case_info-header')
  modal_content = $('.case_info-content')
  trigger_open = $('.modal_open')
  trigger_close = $('.modal_close')

  Pace.on 'done', ->
    # modal_h = modal.outerHeight()
    # modal_header_h = $('.modal_header .modal_trigger').outerHeight() + 30
    # modal_content_h = modal_content.outerHeight()
    #
    # modal_header.css "height", modal_header_h
    # modal_content.css "height", modal_content_h
    #
    # # modal.css "bottom", -(modal_h - modal_header_h)
    #
    trigger_open.click ->
      modal.addClass "is_active"

    trigger_close.click ->
      modal.removeClass "is_active"