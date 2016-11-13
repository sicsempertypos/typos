<?php

include("phptesting.php");

$lname=$_POST['lname'];
$fname=$_POST['fname'];
$email=$_POST['email'];
$source=$_POST['sample'];

//inserting data into table
$query=mysqli_query($db_connect,
	"INSERT INTO SicSemperInfoRequest(FirstName,LastName,Email,Source)
	VALUES ('$lname','$fname','$email','$source')");
	
mysqli_close($db_connect);

header('location:contact_index.php?note=success');