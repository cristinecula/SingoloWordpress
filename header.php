<!DOCTYPE HTML>
<html>
<head>
  <title><?php bloginfo('title')?></title>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="<?php echo get_bloginfo('template_directory');?>/scripts/responsive.js"></script>
</head>
<body>
    <div class="header">
      <div class="midpage">
        <div class="header_logo">
        <?php 
        $logo = get_bloginfo();
        $begin = substr($logo, 0,strlen($logo)-1);
        $final = substr($logo, -1);
         ?>
          <a href="<?php bloginfo('url'); ?>"><?php echo $begin; ?>  </a>
          <span><?php echo $final ?></span>
        </div>
         <?php wp_nav_menu( array( 'container_class' => 'main-nav', 'theme_location' => 'primary' ) ); ?>
      </div>
    </div>