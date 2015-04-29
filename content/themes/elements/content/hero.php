<?php
$hero_banner = get_field( 'hero_banner' );

// Output
echo '<section class="section section_hero has_no-pad">';
  
  // Hero background image
  echo '<div class="section_hero-banner is-stretched-wrapper">';
    echo '<img class="is-stretched-object" src="' . $hero_banner['sizes']['large'] . '" width="' . $hero_banner['width'] . '" height="' . $hero_banner['height'] . '">';
  echo '</div>';
  
echo '</section>';

// <a href="javascript:;" class="arrow arrow-scroll"><img src="<?php echo bloginfo( 'template_directory' ) . /img/arrow.svg"></a>
?>