<style>
	.modal-header, h5, .close {
    background-color: #f4511e;
    color: #fff !important;
    text-align: center;
    font-size: 30px;
}
</style>
<!---------------------------------------------------------------------------------------------------------------------->

	<div id="about" class="container-fluid">
		<div class="row">
			<div class="col-sm-8">
  		<h2>About</h2>
  			<h4>
  			Bitcoin is a cryptocurrency and a digital payment system invented by an unknown programmer, or a group of programmers, under the name Satoshi Nakamoto. It was released as open-source software in 2009 
The system is peer-to-peer, and transactions take place between users directly, without an intermediary. These transactions are verified by network nodes and recorded in a public distributed ledger called the blockchain. Since the system works without a central repository or single administrator, bitcoin is called the first decentralized digital currency. 
Besides being obtained by "mining", bitcoins can be exchanged for other currencies, products, and services (legal or illegal ones). 
As of February 2015, over 100,000 merchants and vendors accept bitcoin as payment.According to a research produced by Cambridge University in 2017, there are 2.9 to 5.8 million unique users actively using a cryptocurrency wallet, most of them using bitcoin	
  			</h4> 
 				 <blockquote>
    				<footer>Wikipedia</footer>
 			 	</blockquote>
  		</div>
  		 <div class="col-sm-4">
      		<span  class="glyphicon glyphicon-book logo slideanim"></span>
   		 </div>
  		</div>
	</div>

<!-------------------------------------------------------------------------------------------------------------------->

<!-------------------------------------------------------------------------------------------------------------------->

<div id="contact" class="container-fluid bg-grey">
  
  <h2 class="text-center">Email Subscription</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>  Alagar Kovil Main Rd, K.Pudur, Madurai, Tamil Nadu 625007, India</p>
      <p><span class="glyphicon glyphicon-phone"></span>  0452 2539917</p>
      <p><span class="glyphicon glyphicon-envelope"></span>  pudhurjewellers@gmail.com</p> 
    </div>
    
    <div class="col-sm-7">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="namess" name="name" placeholder="Name" type="text" required>
        </div>
        
        <div class="col-sm-6 form-group">
          <input class="form-control" id="emailss" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      
      <textarea class="form-control" id="commentss" name="comments" placeholder="Comment" rows="5"></textarea><br>  
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit" id="subscribe">Send</button>
        </div>
      </div> 
      <p id="sub_status"></p>  
    </div>
  </div>

</div>


<!-------------------------------------------------------------------------------------------------------------------->

<div id="googleMap" style="height:400px;width:100%;"></div>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
<script>
	function myMap() {
	var myCenter = new google.maps.LatLng(9.919166, 78.120763);
	var mapProp = {center:myCenter, zoom:16, scrollwheel:false, draggable:false, mapTypeId:google.maps.MapTypeId.ROADMAP};
	var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
	var marker = new google.maps.Marker({position:myCenter});
marker.setMap(map);
	  var infowindow = new google.maps.InfoWindow({
   	 	content: "Madurai Jewel Shop Street"
  	});
  	infowindow.open(map,marker);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCFI_8jc-coH5vqu_LrM62yknP2OJ8YQbI&callback=myMap"></script>

<!-------------------------------------------------------------------------------------------------------------------->

<footer class="container-fluid text-center">
  <a href="#top" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p></p> 
</footer>

<!-------------------------------------------------------------------------------------------------------------------->

<!-- Modal for Sign In -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h5><span class="glyphicon glyphicon-lock"></span> Sign In</h5>
      </div>
      
      <div class="modal-body">
        <form role="form">
          <div class="form-group">
            <label for="username"><span class="glyphicon glyphicon-user"></span> Username</label>
            <input type="text" class="form-control" id="usrname" placeholder="Enter Username">
          </div>
          
          <div class="form-group">
            <label for="password"><span class="glyphicon glyphicon-lock"></span> Password</label>
            <input type="password" class="form-control" id="psw" placeholder="Enter Your Password">
          </div>
        <p id="status"></p>
        <a class="btn btn-block" id="login_submit">Sumbit
            <span class="glyphicon glyphicon-ok"></span>
          </a>
        </form>
      </div>
      
      <div class="modal-footer">
        <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
          <span class="glyphicon glyphicon-remove"></span> Cancel
        </button>
        <p>Need <a href="#">help?</a></p>
      </div>
    
    </div>
  </div>

</div>

<!-------------------------------------------------------------------------------------------------------------------->

