<?php
$case_title = get_the_title();
$case_year = get_field( 'case_year' );
$case_images = get_field( 'case_images' );
$case_thumb = $case_images[0];
$case_thumb_ext = wp_check_filetype($case_thumb['sizes']['medium']);
$case_thumb_ext = $case_thumb_ext['ext'];
$case_link = get_permalink();
?>
<li>
  <a href="<?php echo $case_link; ?>">

    <?php if( $detect->isMobile() ): ?>
      <img src="<?php echo $case_thumb['sizes']['m-medium']; ?>" width="<?php echo $case_thumb['width']; ?>" height="<?php echo $case_thumb['height']; ?>">
    <?php elseif( $case_thumb_ext == 'gif' ): ?>
      <img src="<?php echo $case_thumb['url']; ?>" width="<?php echo $case_thumb['width']; ?>" height="<?php echo $case_thumb['height']; ?>">
    <?php else: ?>
      <img src="<?php echo $case_thumb['sizes']['medium']; ?>" width="<?php echo $case_thumb['width']; ?>" height="<?php echo $case_thumb['height']; ?>">
    <?php endif; ?>

    <p><span class="system"><?php echo $case_year; ?>: </span><?php echo $case_title; ?></p>
  </a>
</li>