$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#top']").on('click', function(event) {

   // Make sure this.hash has a value before overriding default behavior
  if (this.hash !== "") {

    // Prevent default anchor click behavior
    event.preventDefault();

    // Store hash
    var hash = this.hash;

    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 900, function(){

      // Add hash (#) to URL when done scrolling (default click behavior)
      window.location.hash = hash;
      });
    } // End if
  });
});

$(window).scroll(function() {
  $(".slideanim").each(function(){
    var pos = $(this).offset().top;

    var winTop = $(window).scrollTop();
    if (pos < winTop + 600) {
      $(this).addClass("slide");
    }
  });
});

$(document).ready(function() {
	$('#subscribe').click(function() {
		var name = $('#namess').val();
		var email = $('#emailss').val();
		var comment = $('#commentss').val();
		$.ajax({
			method : "POST",
			url : "template/dbnewcase.php",
			async: false,
			data : {
				subemail:email,
				name:name,
				comment:comment
			},
			success : function(status) {
				$('#sub_status').text(status);
			}
		});
	});
});

$(document).ready(function() {
	$('#viewhash').click(function() {
		var hash = $('#hash').val();
		$.ajax({
			method : "POST",
			url : "template/verifyhash.php",
			async: false,
			data : {
				hash:hash
			},
			success : function(status) {
				if(status == "Invalid Case"){
					$('#hash_status').text(status);	
				}else{
					console.log(status);
					var split = status.split("###");
					window.location.href = 'index.php?caseid='+split[0]+'&hash='+split[1];
				}
				
			}
		});
	});
});