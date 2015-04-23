<?
	// session variable setup
	if (!isset($_SESSION)) {
		session_start();
	}
	ob_start();
?>
<?
	// connects to database
	require_once("connect_to_DB.php");
	connectDB();
?>
	<html>
		<head>
			<meta charset="utf-8">
		    <meta http-equiv="X-UA-Compatible" content="IE=edge">
		    <meta name="viewport" content="width=device-width, initial-scale=1">
		    
		    <script src="jquery-ui-1.11.3.custom/external/jquery/jquery.js"></script>
		
		    <!-- Bootstrap -->
		    <link href="bootstrap-3.3.2-dist/css/bootstrap.min.css" rel="stylesheet">
			<script src="bootstrap-3.3.2-dist/js/bootstrap.min.js"></script>
			
			<link rel="stylesheet" type="text/css" href="css/style.css">
		</head>
		<body>
			<div class="site-wrapper">
		        <div class="site-wrapper-inner">
		            <div class="cover-container">
		            <?
						include('templates/navMenuUser.php');
					?>
						<div class="inner cover">
							<div class="panel panel-default">
								<div class="page-header ">
									<h1>Edit Profile <small>Make changes to your profile </small></h1>
								</div>
								<?
									if (isset($_REQUEST["newTrainerSubmit"])) {
									
										$id = $_SESSION["account_record"]['ProviderId'];
										
										if ($_REQUEST["newFirstName"] != "") {
											$firstName = $_REQUEST["newFirstName"];
											$_SESSION["account_record"]['FirstName'] = $firstName;
										}else {
											$firstName = $_SESSION["account_record"]['FirstName'];
										}
										
										if ($_REQUEST["newLastName"] != "") {
											$lastName = $_REQUEST["newLastName"];
											$_SESSION["account_record"]['LastName'] = $lastName;
										}else {
											$lastName = $_SESSION["account_record"]['LastName'];
										}
										
										if ($_REQUEST["newEmail"] != "") {
											$email = $_REQUEST["newEmail"];
											$_SESSION["account_record"]['Email'] = $email;
										}else {
											$email = $_SESSION["account_record"]['Email'];
										}
										
										if ($_REQUEST["newPassword"] != "") {
											$password = $_REQUEST["newPassword"];
											$_SESSION["account_record"]['Password'] = $password;
										}else {
											$password = $_SESSION["account_record"]['Password'];
										}
										
										if ($_REQUEST["newGender"] != "") {
											$gender = $_REQUEST["newGender"];
											$_SESSION["account_record"]['Gender'] = $gender;
										}else {
											$gender = $_SESSION["account_record"]['Gender'];
										}
										
										if ($_REQUEST["newAddress"] != "") {
											$address = $_REQUEST["newAddress"];
											$_SESSION["account_record"]['Address'] = $address;
										}else {
											$address = $_SESSION["account_record"]['Address'];
										}
										
										if ($_REQUEST["newCity"] != "") {
											$city = $_REQUEST["newCity"];
											$_SESSION["account_record"]['City'] = $city;
										}else {
											$city = $_SESSION["account_record"]['City'];
										}
										
										if ($_REQUEST["newState"] != "") {
											$state = $_REQUEST["newState"];
											$_SESSION["account_record"]['State'] = $state;
										}else {
											$state = $_SESSION["account_record"]['State'];
										}
										
										if ($_REQUEST["newZip"] != "") {
											$zip = $_REQUEST["newZip"];
											$_SESSION["account_record"]['ZipCode'] = $zip;
										}else {
											$zip = $_SESSION["account_record"]['ZipCode'];
										}
										
										if ($_REQUEST["newPhone"] != "") {
											$phone = $_REQUEST["newPhone"];
											$_SESSION["account_record"]['Phone'] = $phone;
										}else {
											$phone = $_SESSION["account_record"]['Phone'];
										}
										
										if ($_REQUEST["newRate"] != "") {
											$rate = $_REQUEST["newRate"];
											$_SESSION["account_record"]['Rate'] = $rate;
										}else {
											$rate = $_SESSION["account_record"]['Rate'];
										}
										
										if ($_REQUEST["newSpecialities"] != "") {
											$specialities = "";
										      foreach ($_REQUEST["newSpecialities"] as $speciality) {
												$specialities .= "$speciality,";
										      }
										}else {
											$specialities = $_SESSION["account_record"]['Specialities'];
										}
										
										if ($_REQUEST["newClassesOffered"] != "") {
											$classesOffered = $_REQUEST["newClassesOffered"];
											$_SESSION["account_record"]['ClassesOffered'] = $classesOffered;
										}else {
											$classesOffered = $_SESSION["account_record"]['ClassesOffered'];
										}
										
										if ($_REQUEST["newDaysAvailability"] != "") {
											$daysAvailability = "";
										      foreach($_REQUEST['newDaysAvailability'] as $day) {
										            $daysAvailability .= "$day,";
										      }
										}else {
											$daysAvailability = $_SESSION["account_record"]['DaysAvailability'];
										}
										
										if ($_REQUEST["newAvailabilityFrom"] != "" && $_REQUEST["newAvailabilityTo"] != "") {
											$availabilityFrom = $_REQUEST["newAvailabilityFrom"];
							                        $availabilityTo = $_REQUEST["newAvailabilityTo"];			
											$hoursAvailability = $availabilityFrom . "AM-" . $availabilityTo . "PM";
											$_SESSION["account_record"]['HoursAvailability'] = $hoursAvailability;
										}else {
											$hoursAvailability = $_SESSION["account_record"]['HoursAvailability'];
										}
										
										try {
											// updates existing record with new information
											$updateTrainerSql1 = 
											"update Provider
											set Email='{$email}',Password='{$password}',Address='{$address}',City='{$city}',State='{$state}',ZipCode='{$zip}',Phone='{$phone}'
											where ProviderId='{$id}'";										
																					
											$rsUpdateTrainer1 = mysqli_query($db, $updateTrainerSql1);
											
											if (!$rsUpdateTrainer1) {
												throw new Exception(mysqli_error($db));
											}
											
											$updateTrainerSql2 = 
											"update Trainer
											set FirstName='{$firstName}',LastName='{$lastName}',Gender='{$gender}',Rate='{$rate}',Specialities='" . trim($specialities, ',') . "',ClassesOffered='{$classesOffered}',DaysAvailability='" . trim($daysAvailability, ',') . "',HoursAvailability='{$hoursAvailability}'
											where ProviderId='{$id}'";	
											
											$rsUpdateTrainer2 = mysqli_query($db, $updateTrainerSql2);
											
											if (!$rsUpdateTrainer2) {
												throw new Exception(mysqli_error($db));
											}
											
										}catch (Exception $e) {
											header('Location: errorPage.php?msg=' . $e->getMessage() . '&line=' . $e->getLine());
										}
										
										header('Location: index.php');
										
									}else {
								?>
								<div class="well form-well">
									<? 
										if ($_SESSION["account_type"] == "Trainer") {
											include('helpers/newTrainerInformation.php');
										}else if ($_SESSION["account_type"] == "Gym") {
											include('helpers/newGymInformation.php');
										}
									?>
								</div>
								<?
									}
								?>
							</div>
						</div>
						<?
							include('templates/footer.php');
						?>
					</div>
				</div>
		    </div>
		</body>
	</html>
	<script>
		$(document).ready(function() {
			$('#trainerForm').addClass("show").removeClass("hidden");
			$('#gymForm').addClass("show").removeClass("hidden");
		})
	
		var $select = $('#newState');
 
	    //request the JSON data and parse into the select element
	    $.getJSON('us_states.json', function(data){
	 
		    //clear the current content of the select
		    $select.html('');
		 
		    $select.find('option').remove();
		    $('<option selected disabled>').val("").text("State").appendTo($select);                          
			$.each(data, function(key, value) {              
			    $('<option>').val(key).text(value).appendTo($select);
			});
			console.log($select.html());
	    });
	</script>