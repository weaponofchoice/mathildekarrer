<?php
get_header();

$case_title = get_the_title();
$case_year = get_field( 'case_year' );
$case_images = get_field( 'case_images' );
$case_desc = get_field( 'case_desc' );
?>

<div class="case_slider">
  <div class="case_slider-content slider row">
    <ul class="slider-images s-4 columns">
      <?php foreach( $case_images as $image ): ?>
        <li>
          <div>
            <?php if( $detect->isMobile() ): ?>
              <img src="<?php echo $image['sizes']['m-large']; ?>" width="<?php echo $image['width']; ?>" height="<?php echo $image['height']; ?>">
            <?php else: ?>
              <img src="<?php echo $image['sizes']['large']; ?>" width="<?php echo $image['width']; ?>" height="<?php echo $image['height']; ?>">
            <?php endif; ?>
          </div>
        </li>
      <?php endforeach; ?>
    </ul>

    <?php if(! $detect->isMobile() ): ?>
      <div class="slider-controls">
        <li class="slider-prev arrow arrow-left"><img src="<?php echo get_template_directory_uri(); ?>/img/arrow.svg"></li>
        <li class="slider-next arrow arrow-right"><img src="<?php echo get_template_directory_uri(); ?>/img/arrow.svg"></li>
      </div>
    <?php endif; ?>
  </div>
</div>

<div class="case_info modal s-4 columns is_fullwidth">
  <div class="case_info-header modal_header">
    <a class="modal_trigger modal_open"><span class="system is_uppercase"><img src="<?php echo get_template_directory_uri(); ?>/img/arrow.svg">more info : </span><?php echo $case_title; ?></a>

    <a class="modal_trigger modal_close"><span class="system is_uppercase"><img src="<?php echo get_template_directory_uri(); ?>/img/close.svg">close window</span></a>
  </div>

  <div class="case_info-content modal_content">
    <ul>
      <li>
        <p class="system is_uppercase">client</p>
        <p class="is_bold"><?php echo $case_title; ?></p>
      </li>
      <li>
        <p class="system is_uppercase">year</p>
        <p><?php echo $case_year; ?></p>
      </li>
      <li>
        <p class="system is_uppercase">description</p>
        <div><?php echo $case_desc; ?></div>
      </li>
    </ul>
  </div>
</div>

<?php
get_footer();
?>