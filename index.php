<?php get_header(); ?>

<div class="slideshow" id="slide-1">
  <div class="slideshow_container">
    <div class="slideshow_slide">
      <img class="slideshow_banner" src='<?php echo get_bloginfo('template_directory');?>/images/slide.png' />
    </div>
    <div class="slideshow_slide">
      <img class="slideshow_banner" src='<?php echo get_bloginfo('template_directory');?>/images/slide.png' />
    </div>
    <div class="slideshow_slide">
      <img class="slideshow_banner" src='<?php echo get_bloginfo('template_directory');?>/images/slide.png'/>
    </div>
  </div>
  <img src="<?php echo get_bloginfo('template_directory');?>/images/next.png" class="btn-next" />
  <img src="<?php echo get_bloginfo('template_directory');?>/images/prev.png" class="btn-prev" />
</div>
<script src="<?php echo get_bloginfo('template_directory');?>/scripts/slider.js"></script>

<?php get_footer(); ?>