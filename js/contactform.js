<script>
	<script src="js/jquery.min.js"></script>
	<script src="js/"
	<script src="js/bootstrap.min.js"></script>
	<!--<script src="•http://cdn.jsdelivr.net/jquery.validation/1.14.0/jquery.validate.min.js"> </script>-->
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script src="js/ie10-viewport-bug-workaround.js"></script>
	<script src="js/preserveAliases.js"></script>
	<script src="js/jquery.tablesorter.js"></script>
	<script src="js/jquery.validate.min.js"></script>
</script>
<script>
	function validate(contactform_fs) {
		fail = validateName(contactform_fs.username.value)
		fail += validateEmail(contactform_fs.email.value)
		
		if (fail == '') return true
		else {alert(fail); return false}
	}
</script>