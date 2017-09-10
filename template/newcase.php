<div class="container-fluid">
	<?php
	include 'template/connection.php';
	$u_1 = $_SESSION['USERNAME'];
	$retrieve = mysqli_query($connection, "SELECT BATCH_ID, MOBILE from users where USERNAME='$u_1'");
	$off_batch = "NO BATCH";
	$off_con = "NO CONTACT";
	while($row = mysqli_fetch_assoc($retrieve)){
		$off_batch = $row['BATCH_ID'];
		$off_con = $row['MOBILE'];
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

	<form class="form-horizontal">
		<input type="hidden" id="username_newcse" value="<?php echo $u_1; ?>"/>
		<div class="form-group">
			<label class="control-label col-sm-3" for="casename">Case Name:</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="casename" placeholder="Enter case name">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-3" for="refno">Case Number:</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="refno" value="<?php echo randomToken();?>" disabled>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-3" for="batchid">Officer in Case:</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="batchid"  value="<?php echo $off_batch;?>" disabled>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-3" for="date">Officer contact:</label>
			<div class="col-sm-5">
				<input type="number" class="form-control" id="number" value="<?php echo $off_con;?>" disabled>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-3" for="type">Type of Crime:</label>
			<div class="col-sm-5">
				<select class="form-control" id="typecase">
					<option selected>Assault</option>
					<option>Battery</option>
					<option>False Imprisonment</option>
					<option>Kidnapping</option>
					<option>Homicide</option>
					<option>Rape and Satutory Rape</option>
					<option>Larceny</option>
					<option>Robbery</option>
					<option>Burglary</option>
					<option>Arson</option>
					<option>Embezzlement</option>
					<option>Forgery</option>
					<option>Solicitation</option>
					<option>Conspiracy</option>
					<option>DUI</option>
					<option>Attempt</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-3" for="date">Date Scene Examined:</label>
			<div class="col-sm-5">
				<input type="date" class="form-control" id="date">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-3" for="time">Time on Arrival:</label>
			<div class="col-sm-5">
				<input type="time" class="form-control" id="time" value="00:00">
			</div>
		</div>
		<div class="form-group">
			<div Class="locationField">
				<label class="control-label col-sm-3" for="find">Location of crime:</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="autocomplete" onFocus="geolocate()" placeholder="Find the Address">
				</div>
			</div>
		</div>
	</form>

</div>
<div class="table-responsive">
<table id="address" align="center">
	<tr>
		<td class="label">Street address</td>
		<td class="slimField">
		<input class="field" id="street_number"
		disabled="true">
		</input></td>
		<td class="wideField" colspan="2">
		<input class="field" id="route"
		disabled="true">
		</input></td>
	</tr>
	<tr>
		<td class="label">City</td>

		<td class="wideField" colspan="3">
		<input class="field" id="locality"
		disabled="true">
		</input></td>
	</tr>
	<tr>
		<td class="label">State</td>
		<td class="slimField">
		<input class="field" id="administrative_area_level_1" disabled="true"/></td>
		<td class="label">Zip code</td>
		<td class="wideField">
		<input class="field" id="postal_code"
		disabled="true">
		</input></td>
	</tr>
	<tr>
		<td class="label">Country</td>
		<td class="wideField" colspan="3">
		<input class="field"
		id="country" disabled="true">
		</input></td>
	</tr>
</table>
</div>
<br>

<script src="./js/map.js"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDJzWXcTmHdCyS5GTvjoEyeaGdt5PtrJqE&libraries=places&callback=initAutocomplete"
async defer></script>

<div class ="container">
	<h5 id="newcase_status"></h5>
	<a class="btn btn-info btn-block" id="newcase_submit">Start Data Logging</a>
	<a href="myaccount.php" class="btn btn-default btn-block">cancel</a>
</div>
<script src="js/newcase.js"></script>