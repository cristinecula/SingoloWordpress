<?php /* Template Name: Services */ ?>
<?php get_header() ?>
<div class="services" id="services">
  <div class="midpage">
    <div class="page_title">
      <h1 ><?php echo get_the_title(); ?></h1>
      <p><?php echo get_post_meta($post->ID, 'Service', true);; ?></p>
    </div>
    
    <?php $args = array( 'post_type' => 'services' );
      $loop = new WP_Query( $args );
      while ( $loop->have_posts() ) : $loop->the_post();
      $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
        echo '<div class="text-box">
           <div class = "text-box_image"><img src="';echo $image[0]; echo '" alt="pen"></div>
           <div class="text-box_content">';
            echo '<h2>';the_title(); echo '</h2>';
            echo '<p>';the_content(); echo '</p>';
       echo '</div>
       </div>';
      endwhile;
      ?>

  </div>
</div>
<?php get_footer() ?>