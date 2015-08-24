<?php /* Template Name: Portfolio */ ?>
<?php get_header() ?>
<div class="portofolio" id="portofolio">
  <div class="midpage">
    <div class="page_title">
      <h1 ><?php echo get_the_title(); ?></h1>
      <p><?php echo get_post_meta($post->ID, 'Portfolio', true);; ?></p>
      </p>
    </div>
      <div class="displayer">
      </div>
      <div class="filter-list">
      </div>
      <div class="gallery">
      </div>

  </div>
</div>

<?php get_footer() ?>