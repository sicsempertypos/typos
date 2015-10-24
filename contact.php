<?php
include 'core/init.php';
if (empty($_POST) === false) {
	$required_fields = array('username','email');
	echo '<pre>' , print_r($_POST, true), '</pre>';
}

?>