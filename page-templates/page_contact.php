<?php /* Template Name: Contact */ ?>
<?php get_header(); ?>

<div class="contact" id="contact">
  <div class="midpage">
    <div class="page_title">
       <h1 ><?php echo get_the_title(); ?></h1>
      <p><?php echo get_post_meta($post->ID, 'Contact', true);; ?></p>
    </div>
    <div class="contact_container">
      <form class="contact_form" method ="POST" action="<?php echo get_bloginfo('template_directory');?>/conectivity.php" >
        <input type="text" name="Name" placeholder="Name (Required)" required>
        <input type="email" name="Email" placeholder="Email (Required)" required>
        <input type="text" name="Subject" placeholder="Subject">
        <textarea name="Textarea" placeholder="Describe your project in detail..."></textarea>
        <input class = "contact_submit" type="submit" value="Send">
      </form>
      <div class="contact_info">
        <h3>Contact Information</h3>
        <p>
          Quisque hendrerit purus dapibus, ornare nibh vitae, viverra nibh. Fusce vitae aliquam tellus. Proin sit amet volutpat libero. Nulla sed nunc et tortor luctus faucibus. Morbi at aliquet turpis, et consequat felis. 
        </p>
        <div>
          <p><img src="http://localhost/wp-content/uploads/2015/08/contact_pin.png">Elm St. 14/05 Lost City</p>
          <p><img src="http://localhost/wp-content/uploads/2015/08/contact_phone.png">03528 331 86 35</p>
          <p><img src="http://localhost/wp-content/uploads/2015/08/contact_mail.png">info@singolo.com</p>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>