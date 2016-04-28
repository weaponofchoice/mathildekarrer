<?php
$hero_banner = get_field( 'hero_banner' );

// Output
echo '<section class="section section_hero has_no-pad">';

  // Hero background image
  echo '<div class="section_hero-banner" style="background-image: url(' . $hero_banner["sizes"]["large"] . ');"></div>';

echo '</section>';
?>