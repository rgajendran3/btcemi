$(document).ready(function() {
	$('#sschecks').click(function() {
		var usr = $('#uuname').val();
		var psw = $('#ppwd').val();
		var psw1 = $('#ppwd1').val();
		var id = $('#bbtchid').val();
		$.ajax({
			method : "POST",
			url : "template/register.php",
			async: false,
			data : {
				usr : usr,
				psw : psw,
				psw1:psw1,
				id:id
			},
			success : function(status) {
				$('#ssup').text(status);
				console.log(status);
				//$('#hash_status').text(status);
				$('#uuname').val(usr);
				$('#ppwd').val('');
				$('#ppwd1').val('');
				$('#bbtchid').val('');
			}
		});
	});
});
