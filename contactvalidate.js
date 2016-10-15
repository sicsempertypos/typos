$(function() {
	$("#errfname").hide();
	$("#errlname").hide();
	$("#errphone").hide();
	$("#erremail").hide();
	
	var errfname=false;
	var errlname=false;
	var errphone=false;
	var erremail=false;
	
	$("#fname").focusout(function() {
		check_fname();
	});
	
	$("#lname").focusout(function(){
		check_lname();
	});
	
	$("#phone").focusout(function(){
		check_phone();
	})
	
	$("#email").focusout(function(){
		check_email();
	})
	
	function check_fname() {
		var fname_len = $("#fname").val().length;
		if (fname_len < 2 || fname_len > 30) {
			$("#errfname").html("Should be 2 to 30 characters");
			$("#errfname").show
			errfname = true;
		} else {
			$("#errfname").hide();
		}
		
	function check_lname() {
		var lname_len = $("#lname").val().length;
		if (lname_len < 2 || lname_len > 50) {
			$("#errlname").html("Should be 2 to 50 characters");
			$("#errlname").show
			errlname = true;
		} else {
			$("#errlname").hide();
		}
		
	function check_phone() {
		var phonepattern = new regexp(/^[\\(]{0,1}([0-9]){3}[\\)]{0,1}[ ]?([^0-1]){1}([0-9]){2}[ ]?[-]?[ ]?([0-9]){4}[ ]*((x){0,1}([0-9]){1,5}){0,1}$/i);
		if phonepattern.test($("#email").val())) {
			$("errphone").hide();
		} else {
			$("errphone").html("Invalid phone");
			$("errphone").show();
			errphone = true;
		}
		
	function check_email() {
		var emailpattern = new regexp(/^(?i:(?<local_part>[a-z0-9!#$%^&*{}'`+=-_|\/?]+(?:\.[a-z0-9!#$%^&*{}'`+=-_|\/?]+)*)@(?<labels>[a-z0-9]+\z?.*[a-z0-9-_]+)*(?<tld>\.[a-z0-9]{2,}))$/i);
		if emailpattern.test($("#email").val())) {
			$("erremail").hide();
		} else {
			$("#erremail").html("Invalid email");
			$("erremail").show();
			erremail = true;
		}
		
	}
	
	$("#contactform").submit(function() {
		errfname = false;
		errlname = false;
		errphone = false;
		erremail = false;
		
		check_fname();
		chack_lname();
		check_phone();
		check_email();
		
		if (errfname == false && errlname == false && errphone == false && erremail == false) {
			return true;
		} else {
			return false;
		}
	}
});