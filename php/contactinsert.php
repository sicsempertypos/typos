<!DOCTYPE html>
<html>
<head>
	<title>Contact Confirm Sic Semper Typos</title>
	<link rel="stylesheet" type-="text/css" href="../css/normalize.css">
	<link rel="stylesheet" type="text/css" href="../css/contactinsert.css">
    <link href='https://fonts.googleapis.com/css?family=Almendra:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Aref+Ruqaa" rel="stylesheet"> 
</head>
<body>
	<div class="wrappernav">
		<header class="navbarhead">
			<img src="../img/logo/sst70.png" alt="logo sst sic semper typos">
			<nav class="container">
				<div class="brand">
					<a href="index.html"></a>
					<span class="sr-only" alt="Toggle navigation"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>		
				</div>
				<div class="navbar">
					<form class="navform" role="search">
						<div class="form-group">
							<input type="text" class="search" placeholder="Search">
						</div>
						<button type="submit" class="submit">Search</button>
					</form>
					<ul class="navbarul">
						<li class="active">
							<a href="../index.html">
								<span class="navitem"></span>Home
							</a>
						</li>
						<li><a href="../services.html">Services &amp; Rates </a></li>
						<li><a href="../aboutjohn.html">About John</a></li>
						<li><a href="contact_indexxampp.php">Contact</a></li>
					</ul>
				</div>
			</nav>
		</header>
	</div>
	<section class="contact-form">
		<?php
		$db_host="localhost";
		$db_username="root";
		$db_password="";
		$db_name="Typos";

		$db_connect= new mysqli($db_host, $db_username, $db_password, $db_name) or die;

		//Check connection_aborted
		if ($db_connect->connect_error)  {
			die("Connection failed: " . mysqli_connect_error());
		} else {
			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$phone = $_POST['phone'];
			$email = $_POST['email'];
			$request = 'off';
				if(isset($_POST['request'])){
				$request = $_POST['request'];
				}
			$sample = $_POST['sample'];
			$proof = 'off';
				if(isset($_POST['proof'])){
				$proof = $_POST['proof'];
				}
			$copy = 'off';
				if(isset($_POST['copy'])){
				$copy = $_POST['copy'];
				}
			$publish = 'off';
				if(isset($_POST['publish'])){
				$publish = $_POST['publish'];
				}
			$format = 'off';
				if(isset($_POST['format'])){
				$format = $_POST['format'];
				}
			$other = 'off';
				if(isset($_POST['other'])){
				$other = $_POST['other'];
				}
			$comments = $_POST['comments'];
		}

		$sql = sprintf(
			"INSERT INTO sstinforequest (FirstName, LastName, Phone, Email
				, Request, Sample, SvcProof, SvcCopy, SvcPublish, SvcFormat
				, SvcOther, Comments)
			VALUES ('%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s')",
			mysqli_real_escape_string($db_connect,$fname),
			mysqli_real_escape_string($db_connect,$lname),
			mysqli_real_escape_string($db_connect,$phone),
			mysqli_real_escape_string($db_connect,$email),
			mysqli_real_escape_string($db_connect,$request),
			mysqli_real_escape_string($db_connect,$sample),
			mysqli_real_escape_string($db_connect,$proof),
			mysqli_real_escape_string($db_connect,$copy),
			mysqli_real_escape_string($db_connect,$publish),
			mysqli_real_escape_string($db_connect,$format),
			mysqli_real_escape_string($db_connect,$other),
			mysqli_real_escape_string($db_connect,$comments));
		mysqli_query($db_connect,$sql);
		mysqli_close($db_connect);

		?>
			<p>Contact Information Saved</p>
		<?php
			printf('First Name: %s
				<br>Last Name: %s 
				<br>Phone: %s 
				<br>Email:<br>%s 
				<br>Request Sample: %s 
				<br>Proofreading: %s 
				<br>Copyediting: %s 
				<br>ePublishing: %s 
				<br>Formatting: %s 
				<br>Other: %s 
				<br>Comments:<br>%s',
				$fname,
				$lname,
				$phone,
				$email,
				$request,
				$proof,
				$copy,
				$publish,
				$format,
				$other,
				$comments);
			?>
	</section>
	<footer>
		<hr>
		<div class="copyright">
			&#169;: 2017<br>Silver Skunk<br>Web Works
		</div>
	</footer>
</body>
</html>