<?php
if(isset($_POST['loan']) 
	&& isset($_POST['emimonth'])
	&& isset($_POST['fullname']) 
	&& isset($_POST['dob']) 
	&&  isset($_POST['paddress']) 
	&&  isset($_POST['pid']) 
	&&  isset($_POST['mobnum'])
	&&  isset($_POST['gname'])
	&&  isset($_POST['date'])
	&&  isset($_POST['email'])	
	&&  isset($_POST['ipay'])		
	&&  isset($_POST['gnumber']) ){
	
	$loan = filter_var($_POST['loan'],FILTER_SANITIZE_STRING); //default
	$emimonth = filter_var($_POST['emimonth'],FILTER_SANITIZE_STRING);//default
	$fullname = filter_var($_POST['fullname'],FILTER_SANITIZE_STRING);//default
	$dob = $_POST['dob']; //default
	$paddress = filter_var($_POST['paddress'],FILTER_SANITIZE_STRING); 
	$pid = filter_var($_POST['pid'],FILTER_SANITIZE_STRING);	
	$mobnum= filter_var($_POST['mobnum'],FILTER_SANITIZE_STRING);
	$gname = filter_var($_POST['gname'],FILTER_SANITIZE_STRING);
	$gnumber = filter_var($_POST['gnumber'],FILTER_SANITIZE_STRING);
	$date = filter_var($_POST['date'],FILTER_SANITIZE_STRING);
	$email = $_POST['email'];
	$ipay = $_POST['ipay'];
		
	include 'connection.php';
	if(!empty($paddress) && !empty($mobnum) && !empty($gname) && !empty($gnumber)){
		$key = randomToken();
		$query = mysqli_query($connection, "INSERT INTO customer (KYE, IPAY, EMI_LOAN, EMI_MONTH, DATE, EMAIL, FULLNAME, DOB, ADDRESS, PID, MOBILE, GNAME, GNUMBER) 
		VALUES ('$key', '$ipay', '$loan', '$emimonth', '$date', '$email', '$fullname', '$dob', '$paddress','$pid', '$mobnum', '$gname', '$gnumber')");
		if($query){
			echo "Successfully Added";
		}else{
			echo "Database entry failed, try again";
		}	
	}else{
		echo "Please fill all the above fields";
	}
}else{
	echo "Internal Error, Contact Admin [1002]";
}

	function randomToken() {
	    $letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
	    $password = array(); 
	    $letterLength = strlen($letters) - 1; 
	    for ($i = 0; $i < 10; $i++) {
	        $n = rand(0, $letterLength);
	        $password[] = $letters[$n];
	    }
	    return implode($password); 
	}
?>