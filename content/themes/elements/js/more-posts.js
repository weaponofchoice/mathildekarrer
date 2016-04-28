jQuery(document).ready( function($) {

  var infiniteScrollPosts = function() {
    var grid = $('.section_grid');

    $(document).on('scroll', function() {
      trigger_point = $(document).height() - 300;
      screen_bottom = $(window).scrollTop() + $(window).height();

      if( screen_bottom > trigger_point ){
        $(document).off('scroll');

        loadPosts();
      }
    });
  };

  if( $('.section_grid').length > 0 ){
    infiniteScrollPosts();
  }

  var loadPosts = function() {
    // Add spinner below the grid
    $('.section_grid ul').after('<div class="loader"></div>');

    // Count already loaded products
    var post_count = $('.section_grid li').length;

    // The ajax call
    jQuery.ajax({
      url : moreposts.ajax_url,
      type : 'post',
      data : {
        action : 'more_posts',
        offset: post_count
      },
      success : function( response ) {
        jQuery('.section_grid ul').append(response);

        // If the response is not empty, recalculate waypoints
        if( response ){
          $('.loader').remove();
          infiniteScrollPosts();
        } else {
          $('.loader').remove();
        }
      }
    });
  };

})