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
	define('DB_HOST','localhost');
	
	$link=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
	if (!$link) {
		die('Could no connect: '.mysql_error());
	}
	
	$db_selected=mysql_select_db(DB_NAME,$link);
	if (!$db_selected) {
		die('Can\'t use '.DB_NAME.'; '.mysql_error());
	}

	echo 'Connected sucessfully';
	
	mysql_query("UPDATE SicSemperInfoRequest SET `Replied` = NULL WHERE Id = 2");
	$collect = mysql_query("SELECT * FROM SicSemperInfoRequest WHERE Id = '2'");
	while ($row = mysql_fetch_array($collect)) {
		$id = $row["Id"];
		$timestamp = $row["TimeStamp"];
		$replied = $row["Replied"];
	};
	
?>

<p>Have I replied? <?php print $replied; ?> NOTE: 1 = yes, 0 = no</p>
</body>
</html>
