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
</body>
</html>
