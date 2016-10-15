<!DOCTYPE html>
<html>
<head>
	<title>contact_index.php</title>
</head>
<body>
	<section>
		<h2>Contact Sic Semper Typos</h2>
		<form method="POST" action="user_contact.php" id="contactform" name="contactinput">
			<fieldset>
				<legend>Contact Information</legend>
				<table>
				<tr><td>First Name*</td><td><input type="text" id="fname" size="70"
						class="forminput" autofocus required></td>
					<td><span class="errmsg id="errfname"></span></td></tr>
				<tr><td>Last Name*</td><td><input type="text" id="lname" size="70"
						class="forminput" required></td>
					<td><span id="errlname" class="errmsg"></span></td></tr>
				<tr><td>Phone</td><td><input type="tel" id="phone" size="70"
						class="forminput" optional></td>
					<td><span id="errphone" class="errmsg"></span></td></tr>
				<tr><td>Email*</td><td><input type="email" id="email" size="70"
						class="forminput" required></td>
					<td></td><span id="erremail" class="errmsg"></span></td></tr>
				</table>
			</fieldset>
			<fieldset>
				<legend>Sample Edit</legend>
				<label for="request">Please edit my sample - 1000 characters max.</label>
					<input type="checkbox" id="request" class="forminput">
					<br>
				<textarea id="sample" class="forminput" maxlength="1000" wrap="soft"
					cols="70" rows="6" ></textarea>
			</fieldset>
			<fieldset>
				<Legend>Service Interests</Legend>
				<input type="checkbox" id="proof" 
						class="forminput"><label for="proof">Proofreading</label>
				<input type="checkbox" id="copy" 
						class="forminput"><label for="copy">Copy Editing</label>
				<input type="checkbox" id="publish" 
						class="forminput"><label for="publish">ePublish</label>
				<input type="checkbox" id="format" 
						class="forminput"><label for="format">Formatting</label>
				<input type="checkbox" id="other" 
						class="forminput"><label for="other">Other (Explain)</label>
			</fieldset>
			<fieldset>
				<legend>Comments</legend>
				<textarea id="comments" class="forminput" cols="70" rows="4" value=""></textarea>
			</fieldset>
				<p><input type="submit" value="Submit"><input type="reset" value="Clear Form">
					<input type="button" value="email John">
				</p>
		</form>

	</section>
</body>
</html>
