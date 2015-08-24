<?php /* Template Name: Contact */ ?>
<?php get_header(); ?>

<div class="contact" id="contact">
  <div class="midpage">
    <div class="page_title">
      <h1>Get a Quote</h1>
      <p>
        Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum. Duis mollis, non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.
      </p>
    </div>
    <div class="contact_container">
      <form class="contact_form"action="#">
        <input type="text" name="name" placeholder="Name (Required)" required>
        <input type="email" name="email" placeholder="Email (Required)" required>
        <input type="text" name="subject" placeholder="Subject">
        <textarea>Describe your project in detail...</textarea>
        <input class = "contact_submit"type="submit" value="Send">
      </form>
      <div class="contact_info">
        <h3>Contact Information</h3>
        <p>
          Quisque hendrerit purus dapibus, ornare nibh vitae, viverra nibh. Fusce vitae aliquam tellus. Proin sit amet volutpat libero. Nulla sed nunc et tortor luctus faucibus. Morbi at aliquet turpis, et consequat felis. 
        </p>
        <div>
          <p><img src="images/contact_pin.png">Elm St. 14/05 Lost City</p>
          <p><img src="images/contact_phone.png">03528 331 86 35</p>
          <p><img src="images/contact_mail.png">info@singolo.com</p>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>