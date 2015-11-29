<?php
	require_once 'login.php';
	$link = new mysqli($hn, $un, $pw);

	if (!$link) {
    	die('failed to connect to server: ' . mysqli_connect_error());
	}
	if (!@mysqli_select_db($link, 'typos')) {
		die('failed to connect to the database: ' . mysqli_error($link));
	}
	else {
		printf ('it worked');
	}
	$query = "SELECT * FROM sicsemperinforequest";
	$result = $link->query($query);
	if (!$result) die ($conn->error);
	echo $result;


?>