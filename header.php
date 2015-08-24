<!DOCTYPE HTML>
<html>
<head>
  <title><?php bloginfo('title')?></title>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
   <?php wp_head(); ?>
</head>
<body>
    <div class="header">
      <div class="midpage">
        <div class="header_logo">
          <a href="<?php bloginfo('url'); ?>"> <?php bloginfo('name'); ?> </a>
        </div>
         <?php wp_nav_menu( array( 'container_class' => 'main-nav', 'theme_location' => 'primary' ) ); ?>
      </div>
    </div>