<?php /* Template Name: Slider */ ?>
<?php get_header(); ?>
<script src="<?php echo get_bloginfo('template_directory');?>/scripts/slider.js"></script>



<div class="slideshow" id="slide-1">

  <div class="slideshow_container">

    <?php $args = array( 'post_type' => 'slides' );
      $loop = new WP_Query( $args );
      while ( $loop->have_posts() ) : $loop->the_post();
      $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );

        echo '<div class="slideshow_slide">
                 <img class="slideshow_banner" src= " '; echo $image[0]; echo'" />
                 <div class="slide-content"> ';the_content(); echo '</div>
              </div>';
      endwhile;
    ?>

  </div>
  <img src="<?php echo get_bloginfo('template_directory');?>/images/next.png" class="btn-next" />
  <img src="<?php echo get_bloginfo('template_directory');?>/images/prev.png" class="btn-prev" />
</div>

<?php get_footer(); ?>
