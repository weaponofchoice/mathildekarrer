if $('.modal').length > 0
  modal = $('.modal')
  trigger_open = $('.modal_open')
  trigger_close = $('.modal_close')

  Pace.on 'done', ->
    trigger_open.click ->
      modal.addClass "is_active"

    trigger_close.click ->
      modal.removeClass "is_active"