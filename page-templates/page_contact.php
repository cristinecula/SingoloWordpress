<?php /* Template Name: Contact */ ?>
<?php get_header(); ?>

<div class="contact" id="contact">
  <div class="midpage">
    <div class="page_title">
       <h1 ><?php echo get_the_title(); ?></h1>
      <p><?php echo get_post_meta($post->ID, 'Contact', true);; ?></p>
    </div>
    <div class="contact_container">
      <form class="contact_form" method ="POST" action="" >
        <input type="hidden" name="form_title" value="Contact"/>
        <input type="text" name="TheName" placeholder="Name (Required)" required>
        <input type="email" name="TheEmail" placeholder="Email (Required)" required>
        <input type="text" name="TheSubject" placeholder="Subject">
        <textarea name="TheTextarea" placeholder="Describe your project in detail..."></textarea>
        <input class = "contact_submit" type="submit" value="Send">
      </form>
      <?php echo do_shortcode("[cfdb-save-form-post]"); ?>

      <div class="contact_info">
        <h3>Contact Information</h3>
        <p>
          Quisque hendrerit purus dapibus, ornare nibh vitae, viverra nibh. Fusce vitae aliquam tellus. Proin sit amet volutpat libero. Nulla sed nunc et tortor luctus faucibus. Morbi at aliquet turpis, et consequat felis. 
        </p>
        <div>

          <?php $args = array( 'post_type' => 'contactInfo');
          $loop = new WP_Query( $args );
          while ( $loop->have_posts() ) : $loop->the_post();
            $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
            echo '<p><img src=" '; echo $image[0]; echo '">'; echo the_content(); echo '</p>';
          endwhile;
          ?>

        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>