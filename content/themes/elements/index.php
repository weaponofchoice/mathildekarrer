<?php
get_header();

$cases = get_field( 'page_cases' );

if( $cases ):
  
  echo '<section class="section section_grid section_gridSec">';
    echo '<div class="section_content">';
      echo '<ul class="s-grid-1 m-grid-2">';
      
      foreach( $cases as $post ):
        
        include( 'post-thumb.php' );
        
      endforeach;
      
      echo '</ul>';
    echo '</div>';
  echo '</section>';
  
  else:
  ?>
    
    <div style="max-width: 500px">
      <h2>404, page not found</h2>
      <p>Sorry, but the page you are looking for has not been found. Try checking the URL for errors, then hit the refresh button on your browser.</p>
      
      <p>To get back to the homepage <a href="<?php echo home_url(); ?>">click here</a></p>
    </div>
    
<?php
endif; wp_reset_postdata();

get_footer();
?>