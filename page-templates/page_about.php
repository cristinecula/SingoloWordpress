<?php /* Template Name: About */ ?>
<?php get_header(); ?>

<div class="about" id="about">
  <div class="midpage">
    <div class="page_title">
       <h1 ><?php echo get_the_title(); ?></h1>
      <p><?php echo get_post_meta($post->ID, 'About', true);; ?></p>
    </div>
    <div class="about_person">
      <img src="lib/pictures/person1.png" alt="">
      <h3>Adam Jensen</h3>
      <p>Quisque luctus, quam eget molestie commodo, lacus purus cursus purus, nec rutrum tellus dolor id lorem.</p>
      <div class="social-media">
        <div><img src="images/facebook.png" alt=""></div>
        <div><img src="images/google+.png" alt=""></div>
        <div><img src="images/twitter.png" alt=""></div>
        <div><img src="images/linkedin.png" alt=""></div>
      </div>
    </div>
    <div class="about_person">
      <img src="lib/pictures/person2.png" alt="">
      <h3>Desmond Miles</h3>
      <p>Curabitur vestibulum eget mauris quis laoreet. Phasellus in quam laoreet, viverra lacus ut, ultrices velit.</p>
      <div class="social-media">
        <div><img src="images/facebook.png" alt=""></div>
        <div><img src="images/google+.png" alt=""></div>
        <div><img src="images/twitter.png" alt=""></div>
        <div><img src="images/linkedin.png" alt=""></div>
      </div>
    </div>
    <div class="about_person">
      <img src="lib/pictures/person3.png" alt="">
      <h3>Scolara Visari</h3>
      <p>Nulla sed nunc et tortor luctus faucibus. Morbi at aliquet turpis, et consequat felis. Quisque condimentum.</p>
      <div class="social-media">
        <div><img src="images/facebook.png" alt=""></div>
        <div><img src="images/google+.png" alt=""></div>
        <div><img src="images/twitter.png" alt=""></div>
        <div><img src="images/linkedin.png" alt=""></div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>