<!DOCTYPE html>
<!--[if IEMobile 7 ]><html class="no-js iem7"><![endif]-->
<!--[if lt IE 9]><html class="no-js lte-ie8"><![endif]-->
<!--[if (gt IE 8)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head>
  <meta charset="utf-8">
  <title><?php wp_title( '|', true, 'right' ); ?></title>
  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <!-- http://t.co/dKP3o1e -->
  <meta name="HandheldFriendly" content="True">
  <meta name="MobileOptimized" content="320">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="/favicon.ico" rel="icon">
  <link href="<?php echo get_template_directory_uri(); ?>/style.css" media="screen, projection" rel="stylesheet" type="text/css">
  <script src="<?php echo get_template_directory_uri(); ?>/javascripts/modernizr-2.0.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/javascripts/ender.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/javascripts/octopress.js" type="text/javascript"></script>

  <script type="text/javascript" src="//use.typekit.net/qku3ghs.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>

  <?php wp_head(); ?>
</head>

<body>
  <header role="banner">
    <hgroup>
      <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
      <h2><?php bloginfo( 'description' ); ?></h2>
    </hgroup>
  </header>
 
  <nav role="navigation">
    <ul class="main-navigation">
      <?php wp_nav_menu( array( 'items_wrap' => '%3$s' ) ); ?>
    </ul>
  </nav>
