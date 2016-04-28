<?php
add_action( 'wp_ajax_nopriv_more_posts', 'more_posts' );
add_action( 'wp_ajax_more_posts', 'more_posts' );

function more_posts(){
  global $detect;
  $query_data = $_POST;
  $offset = $query_data['offset'];

  // The Query
  $query = array(
    'posts_per_page'  => 10,
    'offset'          => $offset
  );
  $wp_query = new WP_Query( $query );

  // The Loop
  if( $wp_query->have_posts() ):
    while( $wp_query->have_posts() ) : $wp_query->the_post();

      $case_title = get_the_title();
      $case_year = get_field( 'case_year' );
      $case_images = get_field( 'case_images' );
      $case_thumb = $case_images[0];
      $case_link = get_permalink();
      ?>
      <li>
        <a href="<?php echo $case_link; ?>">

          <?php if( $detect->isMobile() ): ?>
            <figure>
              <img src="<?php echo $case_thumb['sizes']['m-medium']; ?>" width="<?php echo $case_thumb['width']; ?>" height="<?php echo $case_thumb['height']; ?>">
            </figure>
          <?php else: ?>
            <figure>
              <img src="<?php echo $case_thumb['sizes']['medium']; ?>" width="<?php echo $case_thumb['width']; ?>" height="<?php echo $case_thumb['height']; ?>">
            </figure>
          <?php endif; ?>

          <p><span class="system"><?php echo $case_year; ?>: </span><?php echo $case_title; ?></p>
        </a>
      </li>

      <?php
    endwhile;
  endif;
  wp_reset_postdata();

  die();
}
?>