$(document).ready(function() {
	$('#psw').keypress(function(event) {
		var key = (event.keyCode ? event.keyCode : event.which);
		if (key == 13) {
			loginCheck();
		};
	});
	$('#login_submit').click(function() {
		loginCheck();
	});
});

var loginCheck = function() {
	var usr = $('#usrname').val();
	var psw = $('#psw').val();
	$.ajax({
		method : "POST",
		url : "template/logincheck.php",
		data : {
			usrname : usr,
			psw : psw
		},
		success : function(status) {
			$('#status').html(status);
			$('#usrname').val(usr);
			$('#psw').val('');
			var slogstat = $('#status').text();
			if (slogstat == "Login Success") {
				$(location).attr("href", "./myaccount.php");
			} else if (slogstat == "Admin Login") {
				$(location).attr("href", "./admin.php");
			}
		}
	});
};

