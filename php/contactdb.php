<?php
/** Testing php, mysql, html */
$db_host="localhost";
$db_username="root";
$db_password="";
$db_name="Typos";

$db_connect=mysqli_connect($db_host, $db_username, $db_password, $db_name) or die;

//Check connection_aborted
if (!$db_connect)	 {
	die("Connection failed: " . mysqli_connect_error());
} else {
	echo 'Contactdb.php';
}
?><br>
	
	
	
	
	
	
	