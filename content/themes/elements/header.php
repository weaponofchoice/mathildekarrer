<?php
/**
 * @package WordPress
 */
?>

<!DOCTYPE html>
<!--[if IE 9]>    <html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
<head>
  <title>Mathilde Karrèr</title>

  <!-- META TAGS -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=no">

  <!-- LINK tags -->
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/app.css">

  <!-- Fonts from Typography.com -->
  <link rel="stylesheet" type="text/css" href="//cloud.typography.com/680076/710968/css/fonts.css" />

  <!-- Fonts from Fontdeck -->
  <link rel="stylesheet" href="//f.fontdeck.com/s/css/uH5+KWQnibDTJRYggGJ9XZLTAgw/DOMAIN_NAME/55988.css" type="text/css" />

  <!-- WP_HEAD() -->
  <?php wp_head(); ?>
</head>

<body <?php body_class('is-loading'); ?>>
  <!-- Header -->
  <header>
    <a href="<?php echo home_url(); ?>">
      <h1 class="is_bold is_uppercase">Mathilde Karrèr</h1>
      <h1 class="is_italic">Photography</h1>
    </a>

    <a class="overlay_open system is_uppercase">About & Contact</a>
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
