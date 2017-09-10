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
$caseid = $_GET['key'];
include 'template/connection.php';
$qs = mysqli_query($connection, "SELECT * FROM customer WHERE KYE='$caseid'");
$brate = 0.0000087; //One INR 
while($row = mysqli_fetch_assoc($qs)){
	$loan = $row['EMI_LOAN'];
	$emimonth = $row['EMI_MONTH'];
	$ipay = $row['IPAY'];
	$date = $row['DATE'];
	$email = $row['EMAIL'];
	$fname = $row['FULLNAME'];
	$dob = $row['DOB'];
	$addr = $row['ADDRESS'];
	$pid = $row['PID'];
	$mob = $row['MOBILE'];
	$gname = $row['GNAME'];
	$gnum = $row['GNUMBER'];
?>
<div class="row" style="color:black;" >
    <div class="col-md-4 col-md-offset-4" id="printpage">
    	
    	<hr>
    	<h3 align="center"><b>BITCOIN EMI LOAN AGREEMENT</b></h3>
    	<hr><br>
    	<h5 align="right">Date : <b><?php echo $date?></b></h5><br>
    <h4 align="center"><b>Declaration Document</b></h4>	
	   <table>
	    <tbody>
	      <tr>
	        <td class="num">1.</td>
	        <td>I bought jewellery for <b>INR <?php echo $loan ?></b> which is equal to <b><?php echo $loan*$brate ?> BTC</b> and I paid initial payment of <b>
	        	<?php echo $brate*$ipay;?></b> BTC (<b>INR <?php echo $ipay;?></b>) and the remaining amount will be as EMI installment for <b><?php echo $emimonth; ?> Months</b> along with interest of 2% per month.<br></td>
	      </tr>
	      <tr>
	        <td class="num">2.</td>
	        <td>If the customer is failed to pay the amount, legal action will be taken to recover the debts. <br></td>
	      </tr>
	      <tr>
	        <td class="num">3.</td>
	        <td><?php $loanD=$loan-$ipay;echo "Payment : <b>INR $loanD</b> = <b>BTC ".$loanD*$brate; ?></b> + Interest( <?php echo $emimonth;?> Months ) : <b>
	        	<?php $ipm = (2/100)*$loanD; echo "INR ".$ipm*$emimonth." = BTC "; $bc = (($ipm*$emimonth) * $brate); echo $bc; ?> </b> = Total Amount (<b>BTC <?php echo $bc+($loanD*$brate);?></b>)</td>
	      </tr>
	      <tr>
	        <td class="num">4.</td>
	        <td> Payment can be made with following options <br>Public Address: <b>1Kpf8st1VV6H9NTExhxBoLqFeKKagNKut4</b>  (or)  <img src="image/barcode.jpeg" width="140" height="140"/> </td>
	      </tr>	 
	      <tr>
	        <td class="num">5.</td>
	        <td><br><br></td>
	      </tr>	      
	      <tr>
	        <td class="num">6.</td>
	        <td>I state that the facts in this statement are true.</td>
	      </tr>		           	      
	    </tbody>
	  </table>
	  <br>
	      <h4 align="center"><b>Customer Details</b></h4>	
	  <br>
	 <table>
	    <tbody>
	      <tr>
	        <td class="nums2">Payee Name</td>
	        <td class="nums-dot2">:</td>
	        <td><b><?php echo $row['FULLNAME'];?></b></td>
	      </tr>	    	
	      <tr>
	        <td class="nums2">Date of Birth</td>
	        <td class="nums-dot2">:</td>
	        <td><b><?php echo $row['DOB'];?></b></td>
	      </tr>
	      <tr>
	        <td class="nums2">Address</td>
	        <td class="nums-dot2">:</td>
	        <td><b><?php echo $row['ADDRESS'];?></b></td>
	      </tr>		      	            	
	      <tr>
	        <td class="nums2">Email</td>
	        <td class="nums-dot2">:</td>
	        <td><b><?php echo $row['EMAIL'];?></b></td>
	      </tr>
	      <tr>
	        <td class="nums2">Mobile</td>
	        <td class="nums-dot2">:</td>
	        <td><b><?php echo $row['MOBILE'];?></b></td>
	      </tr>
	      <tr>
	        <td class="nums2">Signed</td>
	        <td class="nums-dot2">:</td>
	        <td><br><br></td>
	      </tr>	      
	      <tr>
	        <td class="nums2">Dated</td>
	        <td class="nums-dot2">:</td>
	        <td><b><?php echo $row['DATE'];?></b></td>
	      </tr>		           	      
	    </tbody>
	  </table>
	  <br>
	  <hr>
    </div>
</div>
<div  align="center">
	    <button type="button" class="btn btn-warning" onclick="PrintMe('printpage')">Print</button>
</div>
<script language="javascript">
function PrintMe(DivID) {
var disp_setting="toolbar=yes,location=no,";
disp_setting+="directories=yes,menubar=yes,";
disp_setting+="scrollbars=yes,width=650, height=600, left=100, top=25";
   var content_vlue = document.getElementById(DivID).innerHTML;
   var docprint=window.open("","",disp_setting);
   docprint.document.open();
   docprint.document.write('<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"');
   docprint.document.write('"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">');
   docprint.document.write('<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"><link href="https://fonts.googleapis.com/css?family=Cardo" rel="stylesheet">');
   docprint.document.write('<head><title></title>');
   docprint.document.write('<style type="text/css">table>tbody>tr>.num{width:6%;vertical-align: text-top;}table>tbody>tr>.nums{width:15%;vertical-align: text-top;}table>tbody>tr>.nums-dot{width:10%;text-align:center;vertical-align: text-top;}table>tbody>tr>.nums1{width:40%;vertical-align: text-top;}table>tbody>tr>.nums-dot1{width:20%;text-align:center;vertical-align: text-top;}table>tbody>tr>.nums-val1{width:40%;color:black;padding-left:20px;vertical-align: text-top;}table{width:100%;}table>tbody>tr>.nums2{vertical-align: text-top;width:40%;}table>tbody>tr>.nums-dot2{vertical-align: text-top;width:20%;text-align:center;}table>tbody>tr>.nums-val2{width:40%;text-align:justify;vertical-align: text-top;}	');
   docprint.document.write("body{font-family: 'Cardo', serif;} @page {size: auto;margin: 10mm;}");
   docprint.document.write('</style>');
   docprint.document.write('</head><body onLoad="self.print()"><center>');
   docprint.document.write(content_vlue);
   docprint.document.write('</center></body></html>');
   docprint.document.close();
   docprint.focus();
}
</script>
<?php 
}
?>