<!DOCTYPE html>
<html>
<head>
	<title>contact_index.php</title>
	<link rel="stylesheet" type-="text/css" href="../css/normalize.css">
	<link rel="stylesheet" type="text/css" href="../css/stylecontact.css">
</head>
<body>
	<section class="contact-form">
		<!--<img src="../img/scroll/anniv-old-paper.png">-->
		<h2>Contact Sic Semper Typos</h2>
		<div class="form-box">
			<div class="wrapper">
				<form method="POST" action="contact_process.php">
					<fieldset>
						<legend>Contact Information</legend>
						<p>First Name*<input type="text" name="fname" id="fname" size="70"
								class="forminput" autofocus required>
							<span class="errmsg id="errfname"></span></p>
						<p>Last Name*<input type="text" name="lname" "id="lname" size="70"
								class="forminput" required>
							<span id="errlname" class="errmsg"></span></p>
						<p>Phone<input type="tel" name="phone" id="phone" size="70"
								class="forminput" optional>
							<span id="errphone" class="errmsg"></span></p>
						<p>Email*<input type="email" name="email" id="email" size="70"
								class="forminput" required>
							<span id="erremail" class="errmsg"></span></p>
					</fieldset>
					<fieldset>
						<legend>Sample Edit</legend>
						<label for="request">Please edit my sample - 1000 characters max.</label>
						<br>
							<input type="checkbox" name="request" id="request" class="forminput">
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
