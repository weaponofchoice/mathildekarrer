<?php
/**
 * @package WordPress
 */
?>

<!DOCTYPE html>
<!--[if IE 9]>    <html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
<head>
  <title>Mathilde Karrer</title>
  
  <!-- META TAGS -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=no">
  
  <!-- LINK tags -->
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/app.css">
  
  <!-- Fonts from Typography.com -->
  <link rel="stylesheet" type="text/css" href="//cloud.typography.com/680076/710968/css/fonts.css" />
  
  <!-- WP_HEAD() -->
  <?php wp_head(); ?>
</head>

<body class="is-loading">
  <!-- Header -->
  <header>
    <a href="<?php echo home_url(); ?>">
      <p>
        <span class="is_bold is_uppercase">Mathilde Karrer</span>
        <span class="is_italic">Photography</span>
      </p>
    </a>
    
    <a class="is_uppercase">About & Contact</a>
    <!-- <a class="trigger trigger-menu"><i></i></a> -->
  </header>
  
  <?php
  // Hero element
  if( get_field( 'hero_banner' ) ):
    echo '<!-- Hero -->';
    include_once( locate_template('content/hero.php') );
  endif;
  ?>
  
  <!-- Main content -->
  <main role="main">