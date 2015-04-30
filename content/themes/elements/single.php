<?php
get_header();

$case_title = get_the_title();
$case_year = get_field( 'case_year' );
$case_images = get_field( 'case_images' );
$case_desc = get_field( 'case_desc' );
?>

<div class="case_slider">
  <div class="case_slider-content row">
    <ul class="slider-images s-4 columns">
      <?php foreach( $case_images as $image ): ?>
        <li><div><img src="<?php echo $image['sizes']['large']; ?>" width="<?php echo $image['width']; ?>" height="<?php echo $image['height']; ?>"></div></li>
      <?php endforeach; ?>
    </ul>
    
    <?php if(! $detect->isMobile() ): ?>
      <div class="slider-controls">
        <a class="slider-prev arrow arrow-left" href="javascript:;"><i></i></a>
        <a class="slider-next arrow arrow-right" href="javascript:;"><i></i></a>
      </div>
    <?php endif; ?>
  </div>
</div>

<div class="case_info modal s-4 columns">
  <div class="case_info-header modal_header">
    <a class="modal_trigger modal_open"><span class="system is_uppercase">more info : </span><?php echo $case_title; ?></a>
    <a class="modal_trigger modal_close"><span class="system is_uppercase">close window</span></a>
  </div>
  
  <div class="case_info-content modal_content">
    <ul>
      <li>
        <p class="system is_uppercase">client</p>
        <p><?php echo $case_title; ?></p>
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