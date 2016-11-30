<!DOCTYPE html>
<html>
<head>
	<title>Processing Contact</title>
</head>
<body>
<?php
	define('DB_NAME','Typos');
	define('DB_USER','root');
	define('DB_PASSWORD','');
	define('DB_HOST','localhost:8080');
	
	$link=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD);
	if (!$link) {
		die('Could no connect: '.mysql_error());
	}
	
	$db_selected=mysqli_select_db($link,DB_NAME);
	if (!$db_selected) {
		die('Can\'t use '.DB_NAME.'; '.mysqli_error());
	}

	echo 'Connected sucessfully';
	
	mysqli_query("INSERT SstInfoRequest SET `Replied` = NULL WHERE Id = 2");
	$collect = mysqli_query("SELECT * FROM SicSemperInfoRequest WHERE Id = '2'");
	while ($row = mysqli_fetch_array($collect)) {
		$id = $row["Id"];
		$timestamp = $row["TimeStamp"];
		$replied = $row["Replied"];
	};
?>