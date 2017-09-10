<?php
include 'template/header.php';?>
<link href="https://fonts.googleapis.com/css?family=Cardo" rel="stylesheet">
<style>
	
	body{
		font-family: 'Cardo', serif;
	}
</style>
<body id="top" data-spy="scroll" data-target=".navbar" data-offset="60">
	<?php 
	include 'template/indexnav.php'; ?>
	  <div class="jumbotron text-center">
  
  <h1>BTC-by-EMI</h1> 
   <p>Registered Customers</p> 
                
   </div>
	<div class="container-fluid" >
		<div class="table-responsive">   
		    	<?php
		    	include 'template/connection.php';
				if(isset($_GET['option']) && $_GET['option'] == "view"){
				echo "<h2>BTC Rate</h2><p>Current Rate : 0.0000087/INR<p><button>Update</button>";	
					
				echo "		  <h2>Customers</h2>  ";
				$query_case = mysqli_query($connection, "SELECT * FROM customer");
				$count = mysqli_num_rows($query_case);
				if($count > 0){
					?>
					<table class="table">
				    <thead>
				      <tr>
				      	<th>EMI Loan</th>
				        <th>EMI Month</th>
				         <th>Loan Start Date</th>
				        <th>Full Name</th>
				        <th>DOB</th>
				        <th>Address</th>
				         <th>PID</th>
				         <th>Mobile</th>
				         <th>Guarantor</th>
				         <th>G Number</th>
				         <th>E Reminder</th>
				         <th>Agreement</th>				         
				      </tr>
				    </thead>
				    <tbody>
					
					<?php
					while($row = mysqli_fetch_assoc($query_case)){
						$emiloan = $row['EMI_LOAN'];
						$emimonth = $row['EMI_MONTH'];
						$key = $row['KYE'];
						$date = $row['DATE'];
						$fullname = $row['FULLNAME'];
						$dob = $row['DOB'];
						$address = $row['ADDRESS'];
						$pid = $row['PID'];
						$mobile = $row['MOBILE'];
						$gname = $row['GNAME'];		
						$gnumber = $row['GNUMBER'];																	
					 	echo "<tr>
					        <td>$emiloan</td>
					        <td>$emimonth</td>
					        <td>$date</td>
					        <td>$fullname</td>
					        <td>$dob</td>
					        <td>$address</td>
					        <td>$pid</td>
					        <td>$mobile</td>
					        <td>$gname</td>
					        <td>$gnumber</td>
					        <td><button>Send</button></td>
					        <td><a href='myaccount.php?option=agree&key=$key'>View</button></td>
					      </tr>";
					}
				}else{
					echo "<h3>No case found</h3>";
				}
				}else if(isset($_GET['key']) && $_GET['option'] == "agree" ){
					include 'template/viewsummary.php';
				}
		      ?>
		    </tbody>
		  </table>
		  </div>
</div>
</body>
</html>