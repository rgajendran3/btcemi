<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>Nav Template</title>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	<link href="css/index.css" rel="stylesheet" type="text/css"/>
	<script src="js/register.js"></script>
	<script src="js/logincheck.js"></script>
</head>
<script src="js/main.js"></script>
<link href="https://fonts.googleapis.com/css?family=Cardo" rel="stylesheet">
<style>
	
	body{
		font-family: 'Cardo', serif;
	}
</style>

<body id="top" data-spy="scroll" data-target=".navbar" data-offset="60">
	<?php include 'template/indexnav.php'; ?>
	<div class="jumbotron text-center">
	
	<h1>BITCOIN</h1> 
		<p>EMI Installment Scheme</p> 
		
		<form class="form-inline" method="get" action="index.php">
			<div class="input-group">
			 	<input type="text" class="form-control" size="50" height="100" name="amount" placeholder="Enter INR amount to calculate" required>
			 		<div class ="input-group-btn">
			 			<button type="submit" name="submit" value="submit" class="btn btn-primary">Calculate</button>
			 		</div>					 			
			</div>

		</form>
		<p id="hash_status"></p>  
	</div>
	
<link href="https://fonts.googleapis.com/css?family=Cardo" rel="stylesheet">
<style>
	
	body{
		font-family: 'Cardo', serif;
	}
	table>tbody>tr>.num{
		width:6%;
		vertical-align: text-top;
	}
	table>tbody>tr>.nums{
		width:15%;
		vertical-align: text-top;
	}
	table>tbody>tr>.nums-dot{
		width:10%;
		text-align:center;
		vertical-align: text-top;
	}	
	/*---------- Evidence --------*/
	table>tbody>tr>.nums1{
		width:40%;
		vertical-align: text-top;
	}
	table>tbody>tr>.nums-dot1{
		width:20%;
		text-align:center;
		vertical-align: text-top;
	}
	table>tbody>tr>.nums-val1{
		width:40%;
		color:black;
		padding-left:20px;
		vertical-align: text-top;
	}
	/* --------- POI ------------*/
	table{
		width:100%;
	}
	table>tbody>tr>.nums2{
		vertical-align: text-top;
		width:40%;
	}
	table>tbody>tr>.nums-dot2{
		vertical-align: text-top;
		width:20%;
		text-align:center;
	}
	table>tbody>tr>.nums-val2{
		width:40%;
		text-align:justify;
		vertical-align: text-top;
	}	
</style>
	<?php 
	if(isset($_GET['amount'])){
		$amount = $_GET['amount'];
		$bit = 114744;
		$inrBit = 0.0000087; //One INR 
		
		?>
<div class="row" style="color:black;" >
    <div class="col-md-4 col-md-offset-4" id="printpage">
    	
    	<hr>
    	<h3 align="center"><b>Calculation for EMI Amount in INR <?php echo $amount;?></b></h3>
    	<hr><br>
    	<h5 align="right">Date : <b><?php echo date("d-m-Y");?></b></h5><br>
    <h4 align="center"><b>Quote</b></h4>	
	  <table align="center">
	    <tbody>
	      <tr>
	        <td class="nums1">Purchase Amount INR </td>
	        <td class="nums-dot1">:</td>
	        <td class="nums-val1">&#x20b9; <?php echo $amount;?></td>
	      </tr>
	      <tr>
	        <td class="nums1">Purchase Amount BTC</td>
	        <td class="nums-dot1">:</td>
	        <td class="nums-val1">&#579; <?php echo $amount*$inrBit;?></td>
	      </tr>	      
	      <tr>
	        <td class="nums1">3 Months</td>
	        <td class="nums-dot1">:</td>
	        <td class="nums-val1">&#579; <?php $pm = $amount/3; echo round($pm*$inrBit,5);?></td>
	      </tr>		
	      <tr>
	        <td class="nums1">6 Months</td>
	        <td class="nums-dot1">:</td>
	        <td class="nums-val1">&#579; <?php $pm = $amount/6; echo round($pm*$inrBit,5);?></td>
	      </tr>  
	      <tr>
	        <td class="nums1">9 Months</td>
	        <td class="nums-dot1">:</td>
	        <td class="nums-val1">&#579; <?php $pm = $amount/9; echo round($pm*$inrBit,5);?></td>
	      </tr>  
	      <tr>
	        <td class="nums1">12 Months</td>
	        <td class="nums-dot1">:</td>
	        <td class="nums-val1">&#579; <?php $pm = $amount/12;echo round($pm*$inrBit,5);?></td>
	      </tr> 
	      <tr>
	        <td class="nums1">24 Months</td>
	        <td class="nums-dot1">:</td>
	        <td class="nums-val1">&#579; <?php $pm = $amount/24; echo round($pm*$inrBit,5);?></td>
	      </tr> 	      	             	      
	    </tbody>
	  </table><br>
		   <form class="form-horizontal" method="get" action="index.php">
			<div class="form-group">
				<label class="control-label col-sm-3" for="type">EMI Month:</label>
				<input type="hidden" name="loan" value="<?php echo $_GET['amount'];?>"
				<div class="col-sm-5">
					<select class="form-control" name="emi">
						<option selected>3</option>
						<option>6</option>
						<option>9</option>
						<option>12</option>
						<option>24</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-5">
					<input type="submit" class="form-control" id="date">
				</div>
			</div>
		</form>
		</div>
	  </div>
	    <?php
	}else if(isset($_GET['loan']) && isset($_GET['emi'])){
		?>
		<div class="form-horizontal">
		<div class="form-group">
			<label class="control-label col-sm-3" for="casename">EMI Loan Amount</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="loan" value="<?php echo $_GET['loan'];?>" disabled/>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-3" for="casename">EMI Months</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="emimonth" value="<?php echo $_GET['emi'];?>" disabled/>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-3" for="date">Date</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="dated" value="<?php echo date("d-m-Y");?>" disabled/>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-3" for="fullname">Initial Pay</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="ipay" placeholder="Enter your initial payment amount"/>
			</div>
		</div>									
		<div class="form-group">
			<label class="control-label col-sm-3" for="fullname">Fullname</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="fullname" placeholder="Enter your fullname"/>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-3" for="time">Date of Birth:</label>
			<div class="col-sm-5">
				<input type="date" class="form-control" id="dob">
			</div>
		</div>		
		<div class="form-group">
			<label class="control-label col-sm-3" for="refno">Permanent Address:</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="paddress" placeholder="Enter your address">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-3" for="batchid">Personal ID (Aadhar, DL, PAN)</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="pid"  placeholder="Personal Identification" >
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-3" for="date">Mobile Number</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="mobnum" placeholder="Enter your mobile number">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-3" for="date">Email</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="emaild" placeholder="Enter your email">
			</div>
		</div>					
		<div class="form-group">
			<label class="control-label col-sm-3" for="date">Guarantor Name</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="gname" placeholder="Guarantor name">
			</div>
		</div>

		<div class="form-group">
			<div Class="locationField">
				<label class="control-label col-sm-3" for="find">Guarantor Number</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="gnumber" placeholder="Guarantor mobile number">
				</div>
			</div>
		</div>
		<div class="form-group">
			<div Class="locationField">
				<label class="control-label col-sm-3" for="find"></label>
				<div class="col-sm-5">
					<h5 id="status"></h5>	
				</div>
			</div>
		</div>			
		<div class="form-group">
			<div Class="locationField">
				<label class="control-label col-sm-3" for="find"></label>
				<div class="col-sm-5">
					<input type="submit" class="form-control" id="finalsubmit" value="Submit">
				</div>
			</div>
		</div>			
		<script src="js/newcase.js"></script>
	</div>
		<?php
	}else{
		include 'template/index_remain.php'; 
	}
	
	 ?>
  </div>
</div>
</body>
</html>