<?php
/** Testing php, mysql, html */
$db_host="localhost";
$db_username="root";
$db_password="";
$db_name="Typos";

$db_connect=mysqli_connect($db_host, $db_username, $db_password, $db_name) or die;

//Check connection_aborted
if(mysqli_connect_error()) {
	echo 'Failed to connect to MySql: '.mysqli_connect_error();
}  else {
	echo 'Did it';
}

	
	