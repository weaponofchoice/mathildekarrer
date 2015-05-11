<?php
// Options
$slider_o_menu = get_sub_field( 'slider_o_menu' );

$slider_o_h_pos = get_sub_field( 'slider_o_h_pos' );
$slider_o_h_align = get_sub_field( 'slider_o_h_align' );

// Content
$slider_h_title = get_sub_field( 'slider_h_title' );
$slider_h_text = preg_replace( '/<p>/', '<p class="s-4 columns is_aligned-' . $slider_o_h_align . '">', get_sub_field( 'slider_h_text' ) );
$slider_c_images = get_sub_field( 'slider_c_images' );

// Output
echo '<section class="section section_slider' . (( $slider_o_menu == true ) ? ' has_anchor" id="anchor-' . $i_anchor : "") . '">';
  
  // Gallery header
  if( $slider_h_title || $slider_h_text ): 
    echo '<div class="section_header row">';
      echo '<h2 class="s-4 columns is_aligned-' . $slider_o_h_align . '">' . $slider_h_title . '</h2>';
      echo $slider_h_text;
    echo '</div>';
  endif;
  
  // Gallery content
  if( $slider_c_images ):
    echo '<div class="section_content row">';
      
      // The images
      echo '<ul class="slider-images s-4 columns">';
        foreach( $slider_c_images as $image ):
          
          if( $detect->isMobile() ):
            echo '<li><img src="' . $image['sizes']['m-large'] . '" width="' . $image['width'] . '" height="' . $image['height'] . '"></li>';
          else :
            echo '<li><img src="' . $image['sizes']['large'] . '" width="' . $image['width'] . '" height="' . $image['height'] . '"></li>';
          endif;
          
        endforeach;
      echo '</ul>';
      
      // The bullets
      echo '<ul class="slider-bullets">';
        foreach( $slider_c_images as $image ):
          echo '<li><i></i></li>';
        endforeach;
      echo '</ul>';
    
      // The controls
      if(! $detect->isMobile() ):
        echo '<div class="slider-controls">';
          echo '<a class="slider-prev arrow arrow-left" href="javascript:;"><i></i></a>';
          echo '<a class="slider-next arrow arrow-right" href="javascript:;"><i></i></a>';
        echo '</div>';
      endif;
      
    echo '</div>';
  endif;
  
echo '</section>';
?>