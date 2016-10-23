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
