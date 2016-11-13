<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Contact Sic Semper Typos</title>
 	<link rel="stylesheet" type-="text/css" href="../css/normalize.css">
	<!--<link rel="stylesheet" type="text/css" href="../css/stylecontact.css">-->
    <link href="css/stylecontactgit.css" text="text/css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Nothing+You+Could+Do" rel="stylesheet" type="text/css" media="all" >
    <link href='https://fonts.googleapis.com/css?family=Almendra:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
	<!-- if IE]>
		<link rel="stylesheet" text="text/css" href="/stylesheets/ie.css" media="screen, projection"/>
	<![endif]-->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->	<title>contact_index.php</title>
	<link rel="stylesheet" type-="text/css" href="../css/normalize.css">
	<link rel="stylesheet" type="text/css" href="../css/stylecontactgit.css">
</head>
<body>
	<div class="wrappernav">
		<header class="navbarhead">
			<img src="img/logo/sst70.png" alt="logo sst sic semper typos">
			<nav class="container">
				<div class="brand">
					<a href="index.html"></a>
						<!--<img scr="img/logo/ico/sst.png" class="navbar-brand sst-image">-->
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
						<button type="submit" class="submit">Submit</button>
					</form>
					<ul class="navbarul">
						<li class="active">
							<a href="index.html">
								<span class="navitem"></span>Home
							</a>
						</li>
						<li><a href="#">Services &amp; Rates </a></li>
						<li><a href="#">About John</a></li>
						<li><a href="php/contact_index.php">Contact</a></li>
					</ul>
				</div>
			</nav>
		</header>
	</div>
  	<header class="titlehead">
		<div class="title">
			<p><span class="name">Sic Semper Typos</span>
				<br><span class="trans">Thus always to typos</span>
				<br><span class="svcs">Proofreading - Copyediting - Writing</span>
			</p>
		</div>
	</header>
	<section class="contact-form">
		<!--<img src="../img/scroll/anniv-old-paper.png">-->
		<div class="form-box">
			<div class="wrapper">
				<h2>Contact Sic Semper Typos</h2>
				<form method="POST" action="contact_process.php">
					<fieldset>
						<legend>Contact Information</legend>
						First Name* <span class="lineup"><input type="text" name="fname" id="fname" 
								class="forminput" required></span>
							<br><br>
							<span id="errfname" class="errmsg"></span>
							<wbr>
						Last Name* <span class="lineup"><input type="text" name="lname" id="lname" 
								class="forminput" required></span>
							<br><br>
							<span id="errlname" class="errmsg"></span>
							<wbr>
						Phone <span class="lineup"><input type="tel" name="phone" id="phone"
								class="forminput" optional></span>
							<br><br>
							<span id="errphone" class="errmsg"></span>
							<wbr>
						Email* <span class="lineup"><input type="email" name="email" id="email"
								class="forminput" required></span>
							<br<br>>
							<span id="erremail" class="errmsg"></span>
							<wbr>
					</fieldset>
					<fieldset>
						<legend>Sample Edit</legend>
						<br>
							<input type="checkbox" name="request" id="request" class="forminput">
								Please edit my sample - 1000 characters max.
							<br>
						<textarea name="sample" id="sample" class="forminput" maxlength="1000" wrap="soft"
							cols="70" rows="6" ></textarea>
					</fieldset>
					<fieldset>
						<Legend>Service Interests</Legend>
						<input type="checkbox" name="proof" id="proof" 
								class="forminput"><label for="proof">Proofreading</label>
						<br>
						<input type="checkbox" name="copy" id="copy" 
								class="forminput"><label for="copy">Copy Editing</label>
						<br>
						<input type="checkbox" name="publish" id="publish" 
								class="forminput"><label for="publish">ePublish</label>
						<br>
						<input type="checkbox" name="format" id="format" 
								class="forminput"><label for="format">Formatting</label>
						<br>
						<input type="checkbox" name="other" id="other" 
								class="forminput"><label for="other">Other (Explain)</label>
					</fieldset>
					<fieldset>
						<legend>Comments</legend>
						<textarea name="comments" id="comments" class="forminput" cols="70" rows="4" value=""></textarea>
					</fieldset>
						<p><input type="submit" name="submit" value="Submit"><input type="reset" name="reset" value="Clear Form">
							<input type="button" name="john" value="email John">
						</p>
				</form>
			</div>
		</div>
	</section>
</body>
</html>
