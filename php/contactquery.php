<?php
	include 'contactdb.php';
?>
<?php	
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	//$request = false;
	if(isset($_POST['request'])){
		$request = $_POST['request'];
	 } 
//		echo $request; //guarenteed to be set so isset not needed	
//	$request = $_POST['request'];
	$sample = $_POST['sample'];
	$proof = false;
	if(isset($_POST['proof'])){
		$proof = $_POST['proof'];
	};
	$copy = false;
	if(isset($_POST['copy'])){
		$copy = $_POST['copy'];
	};
	$publish = false;
	if(isset($_POST['publish'])){
		$publish = $_POST['publish'];
	};
	$format = false;
	if(isset($_POST['format'])){
		$format = $_POST['format'];
	};
	$other = false;
	if(isset($_POST['other'])){
		$other = $_POST['other'];
	};
	$comments = $_POST['comments'];
	$querysource = 'testing a';

	printf('First: %s
		<br>Last: %s
		<br>Phone: %s 
		<br>Email: %s 
		<br>Request: %s 
		<br>)
	
	$sql = "INSERT INTO sstinforequest (
		fname,
		lname,
		phone,
		email,
		request,
		sample,
		svcproof,
		svccopy,
		svcpublish,
		fsvcormat,
		svcother,
		comments,
		querysource)
		VALUES (
		'$fname',
		'$lname',
		'$phone',
		'$email',
		'$request',
		'$sample',
		'$proof',
		'$copy',
		'$publish',
		'$format',
		'$other',
		'$comments',
		'$querysource')";
	$result = mysqli_query($db_connect,$sql);
	echo 'end of contactquery.php';
?>