<?php
get_header();

// Loop into ACF groups
if( have_rows('page') ): $i_anchor = 1;
  while( have_rows('page') ): the_row();
    
    // Hero section is placed before main
    
    if( get_row_layout() == 'text' ):
      include( locate_template('content/text.php') ); $i_anchor++;
    elseif( get_row_layout() == 'grid_secondary' ):
      include( locate_template('content/gridSec.php') ); $i_anchor++;
    elseif( get_row_layout() == 'slider' ):
      include( locate_template('content/slider.php') ); $i_anchor++;
    endif;
    
  endwhile;
endif;

get_footer();
?>