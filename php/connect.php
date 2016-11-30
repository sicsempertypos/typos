<!DOCTYPE html>
<html>
<head>
 <title>Page Title</title>
</head>
<body>
<?php
 define('DB_NAME','Typos');
 define('DB_USER','root');
 define('DB_PASSWORD','');
 define('DB_HOST','localhost:8080');
 
 $link=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
 if (!$link) {
  die('Could no connect: '.mysql_error());
 }