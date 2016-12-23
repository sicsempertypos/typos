<<!DOCTYPE html>
<html>
<head>
	<title>Contact Sic Semper Typos</title>
	<link rel="stylesheet" type-="text/css" href="../css/normalize.css">
	<link rel="stylesheet" type="text/css" href="../css/contact.css">
    <link href='https://fonts.googleapis.com/css?family=Almendra:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Aref+Ruqaa" rel="stylesheet"> 
</head>
?php
//if "email" variable is filled out, send email
  if (isset($_REQUEST['email']))  {
  
  //Email information
  $admin_email = "silverskunk@gmail.com@example.com";
  $email = $_REQUEST['email'];
  $subject = $_REQUEST['subject'];
  $comment = $_REQUEST['comment'];
  
  //send email
  mail($admin_email, "$subject", $comment, "From:" . $email);
  
  //Email response
  echo "Thank you for contacting us!";
  echo "We will gwet back to you as soon as possinle 
  //if "email" variable is not filled out, display the form
  else  {
?>

 <form method="post">
  Email: <input name="email" type="text" /><br />
  Subject: <input name="subject" type="text" /><br />
  Message:<br />
  <textarea name="comment" rows="15" cols="40"></textarea><br />
  <input type="submit" value="Submit" />
  </form>
  
<?php
  }
?><?php
<?php
//if "email" variable is filled out, send email
  if (isset($_REQUEST['email']))  {
  
  //Email information
  $admin_email = "silverskunk@gmail.com";
  $email = $_REQUEST['email'];
  $subject = $_REQUEST['subject'];
  $comment = $_REQUEST['comment'];
  
  //send email
  mail($admin_email, "$subject", $comment, "From:" . $email);
  
  //Email response
  echo "Thank you for contacting us!";
  }
  
  //if "email" variable is not filled out, display the form
  else  {
?>

 <form method="post">
  Email: <input name="email" type="text"><br>
  Subject: <input name="subject" type="text"><br>
  Message:<br>
  <textarea name="comment" rows="15" cols="40"></textarea><br>
  <input type="submit" value="Submit">
  </form>
  
<?php
  }
?>