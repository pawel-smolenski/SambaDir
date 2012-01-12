$(function() {
	$('#login-box').center(true).find("form").validate({
		rules: {
			username: "required",
			password: "required"
		},
		messages: {
			username: "podaj login",
			password: "podaj hasło"
		}
	});
});