<?php
  require_once('../../../wp-load.php');

  global $wpdb;
  
  $name     = $_POST['TheName'];
  $email    = $_POST['TheEmail'];
  $subject  = $_POST['TheSubject'];
  $textarea = $_POST['TheTextarea'];
  $table_name = $wpdb->prefix . "contact";

  $wpdb->insert( $table_name, array( 'name' => $name, 'email' => $email,
    'subject' => $subject,'text' => $textarea,)
  );


 ?>
