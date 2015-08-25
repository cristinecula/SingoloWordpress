<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'Contact');
define('DB_USER','Mircea');
define('DB_PASSWORD','123456');

  $con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); $db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());


  $name     = $_POST['Name'];
  $email    = $_POST['Email'];
  $subject  = $_POST['Subject'];
  $textarea = $_POST['Textarea'];

  $query = "INSERT INTO contact(name,email,subject,textarea)
            VALUES('$name','$email','$subject','$textarea')"; 

  $result = mysql_query($query);
  if($result) 
  { 
    header("Location: http://localhost/?page_id=28");
    die();

  } 
   else { die('Error: '.mysql_error($con)); }


  mysql_close($con);
  

?>

