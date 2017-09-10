$(document).ready(function() {
	$('#finalsubmit').click(function() {
		var loan = $('#loan').val();
		var emimonth = $('#emimonth').val();
		var fullname = $('#fullname').val();
		var dob = $('#dob').val();
		var paddress = $('#paddress').val();
		var pid = $('#pid').val();
		var mobnum = $('#mobnum').val();
		var gname = $('#gname').val();
		var date = $('#dated').val();
		var email = $('#emaild').val();
		var gnumber = $('#gnumber').val();
		var ipay = $('#ipay').val();
		$.ajax({
			method : "POST",
			url : "template/dbnewcase.php",
			async: false,
			data : {
				loan:loan,
				emimonth : emimonth,
				fullname : fullname,
				dob:dob,
				paddress:paddress,
				pid:pid,
				mobnum:mobnum,
				gname:gname,
				gnumber:gnumber,
				date:date,
				email:email,
				ipay:ipay
			},
			success : function(status) {
				$('#status').html(status);
			}
		});
	});
});