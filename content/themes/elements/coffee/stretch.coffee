###
  Theory:
    This only works for an object which ratio is 2x1:
    If wrapper's width is smaller than twice the height, then crop the sides. Else, crop the top and bottom.
    
    Wrapper's width = w
    Wrapper's height = h
    
    w < (2 * h) = crop sides
    w > (2 * h) = crop top & bottom
  
  Method:
    1. Wrap your stretched object(usually an image) in a wrapper
    2. Calculate wrapper's width & height(even if default is 100%)
    3. Set object's min-height to wrapper's height
    4. Set classes based on the theory shown above.
###

if $('html').length > 0
  wrapper = $('.is-stretched-wrapper')
  object = $('.is-stretched-object')
  
  wrapper_w = wrapper.width()
  wrapper_h = wrapper.height()
  
  object.css "min-height", wrapper_h
  
  if wrapper_w < 2 * wrapper_h
    object.removeClass "is-stretched-wide"
    object.addClass "is-stretched-high"
  else
    object.removeClass "is-stretched-high"
    object.addClass "is-stretched-wide"
    
  $(window).on 'resize', ->
    wrapper = $('.is-stretched-wrapper')
    object = $('.is-stretched-object')
  
    wrapper_w = wrapper.width()
    wrapper_h = wrapper.height()
  
    object.css "min-height", wrapper_h
  
    if wrapper_w < 2 * wrapper_h
      object.removeClass "is-stretched-wide"
      object.addClass "is-stretched-high"
    else
      object.removeClass "is-stretched-high"
      object.addClass "is-stretched-wide"