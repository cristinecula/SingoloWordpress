<?php /* Template Name: Services */ ?>
<?php get_header() ?>
<div class="services" id="services">
  <div class="midpage">
    <div class="page_title">
      <h1 >Our Services</h1>
      <p>
        Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum. Duis mollis, non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.
      </p>
    </div>
    
    <?php $args = array( 'post_type' => 'services', 'posts_per_page' => 10 );
      $loop = new WP_Query( $args );
      while ( $loop->have_posts() ) : $loop->the_post();
        the_title();
        echo '<div class="entry-content">';
        the_content();
        echo '</div>';
      endwhile;
      ?>

    <div class="text-box">
      <div class = "text-box_image"><img src="lib/gui-icons/pen.png" alt="pen"></div>
      <div class="text-box_content">
        <h2>Custom Design</h2>
        <p>Curabitur vestibulum eget mauris quis laoreet. Phasellus in quam laoreet, viverra lacus ut, ultrices velit.</p>
      </div>
      </div>

</div>
<?php get_footer() ?>