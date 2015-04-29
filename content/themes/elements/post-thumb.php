<?php
$case_title = get_the_title();
$case_year = get_field( 'case_year' );
$case_images = get_field( 'case_images' );
$case_thumb = $case_images[0];
$case_link = get_permalink();
?>
<li>
  <a href="<?php echo $case_link; ?>">
    <img src="<?php echo $case_thumb['sizes']['large']; ?>" width="<?php echo $case_thumb['width']; ?>" height="<?php echo $case_thumb['height']; ?>">
    <p><span class="system"><?php echo $case_year; ?>: </span><?php echo $case_title; ?></p>
  </a>
</li>