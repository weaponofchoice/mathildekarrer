<?php
// Creates ACF options pages
if( function_exists('acf_add_options_page') ){
  
  acf_add_options_page( array(
    'page_title'  => 'About',
    'menu_title'  => 'About',
    'menu_slug'   => 'about',
    'redirect'    => false
  ));
}
?>