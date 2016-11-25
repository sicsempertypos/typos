<!DOCTYPE html>
<html>
<head>
	<title>Sic Semper Typos</title>
	<link rel="stylesheet" type-="text/css" href="../css/normalize.css">
	<link rel="stylesheet" type="text/css" href="../css/contact.css">
    <link href='https://fonts.googleapis.com/css?family=Almendra:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
</head>
<body>
	<div class="wrappernav">
		<header class="navbarhead">
			<img src="../img/logo/sst70.png" alt="logo sst sic semper typos">
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
		<!--<img src="../img/scroll/anniv-old-paper.png">-->
		<div class="form-box">
			<div class="wrapper">
				<h2>Contact Sic Semper Typos</h2>
				<form method="POST" action="contact_process.php">
					<fieldset class="container">
						<legend>Contact Information</legend>
						<div class="flex-wrapper">
							<div class="box-contact">
								<div class="col-1">
									First Name * <br>
									Last Name * <br>
									Phone <br>
									Email * <br>
								</div>
								<div class="col-2">	
									<input type="text" name="fname" id="fname" 
										class="forminput lineup" required>
									<input type="text" name="lname" id="lname" 
										class="forminput lineup" required>
									<input type="tel" name="phone" id="phone"
										class="forminput lineup" optional>
									<input type="email" name="email" id="email"
										class="forminput lineup" required	
								</div>
								<div class="col=3">
									<div id="errfname" class="errmsg">	</div>
									<div id="errlname" class="errmsg">	</div>
									<div id="errphone" class="errms"> 	</div>
									<div id="erremail" class="errmsg">	</div>
								</div>
							</div>
						</div>
					</fieldset>
					<fieldset>
						<legend>Sample Edit</legend>
							<input type="checkbox" name="request" id="request" class="forminputck">
								Please edit my sample - 1000 characters max.
							<br>
						<textarea name="sample" id="sample" class="forminput" maxlength="1000" wrap="soft"
							cols="70" rows="6" ></textarea>
					</fieldset>
					<fieldset>
						<Legend>Service Interests</Legend>
						<input type="checkbox" name="proof" id="proof" 
								class="forminputck"><label for="proof">Proofreading</label>
						<br>
						<input type="checkbox" name="copy" id="copy" 
								class="forminputck"><label for="copy">Copy Editing</label>
						<br>
						<input type="checkbox" name="publish" id="publish" 
								class="forminputck"><label for="publish">ePublish</label>
						<br>
						<input type="checkbox" name="format" id="format" 
								class="forminputck"><label for="format">Formatting</label>
						<br>
						<input type="checkbox" name="other" id="other" 
								class="forminputck"><label for="other">Other (Explain)</label>
					</fieldset>
					<fieldset>
						<legend>Comments</legend>
						<textarea name="comments" id="comments" class="forminput" cols="70" rows="4" value=""></textarea>
					</fieldset>
					<fieldset class="buttons">
						<input type="submit" class="button" name="submit" value="Submit">
						<input type="reset" class="button" name="reset" value="Clear Form">
						<input type="button" class="button" name="john" value="Email John">
					</fieldset>
				</form>
			</div>
		</div>
	</section>
	<hr>
	<footer>
		<p class="copyright">
			Copyright: 2017 <br> Silver Skunk Web Works
		</p>
	</footer>
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->

</body>
</html>
