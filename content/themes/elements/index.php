<?php
get_header();

$query = new WP_Query( array('posts_per_page' => 2) );

if( $query->have_posts() ):

  echo '<section class="section section_grid section_gridSec">';
    echo '<div class="section_content">';
      echo '<ul>';

      while( $query->have_posts() ): $query->the_post();
        include( 'post-thumb.php' );
      endwhile;

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