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
						include('templates/navMenuIndex.php');
						include('templates/sidebarLeft.php');
						include('templates/sidebarRight.php');
						
						if (isset($_REQUEST["newUserSubmit"])) {
							try {
							      $db = $GLOBALS["db"];
							    
							      $firstName = $_REQUEST["newFirstName"];
							      $lastName = $_REQUEST["newLastName"];
							      $gender = $_REQUEST["newGender"];
							      
							      $email = $_REQUEST["newEmail"];
								$_SESSION["newEmailLogin"] = $email;
								
							      $password = $_REQUEST["newPassword"];
								$_SESSION["newPasswordLogin"] = $password;
							      
							      $address = $_REQUEST["newAddress"];
							      $city = $_REQUEST["newCity"];
							      $state = $_REQUEST["newState"];
							      $zip = $_REQUEST["newZip"];
							      $phone = $_REQUEST["newPhone"];
							      $searchingFor = $_REQUEST["newSearchingFor"];
							      
							      $userType = "User";
								$_SESSION["new_account_type"] = $userType;
							      
							      $newUserSql = "insert into User (FirstName, LastName, Email, Password, Gender, Address, City, State, ZipCode, Phone, SearchingFor)
							                   values ('{$firstName}', '{$lastName}', '{$email}', '{$password}', '{$gender}', '{$address}', '{$city}', '{$state}', '{$zip}', '{$phone}', '{$searchingFor}')";
							    
								$rsNewUser = mysqli_query($db, $newUserSql);
								
								// checks if query worked
								if (!$rsNewUser) {
									throw new Exception(mysqli_error($db));
								}
								
								mysqli_close($db);
								 unset($db);
							
							}catch(Exception $e) {
								header('Location: errorPage.php?msg=' . $e->getMessage() . '&line=' . $e->getLine());
							}
							
							header('location: helpers/loginRedirect.php?' . $_SESSION["new_account_type"]);
							
						}else if (isset($_REQUEST["newTrainerSubmit"])) {
							try {
								$db = $GLOBALS["db"];
							    
							      $firstName = $_REQUEST["newFirstName"];
							      $lastName = $_REQUEST["newLastName"];
							      $gender = $_REQUEST["newGender"];
							      
							      $email = $_REQUEST["newEmail"];								
								$_SESSION["newEmailLogin"] = $email;
								
							      $password = $_REQUEST["newPassword"];
								$_SESSION["newPasswordLogin"] = $password;
								
							      $address = $_REQUEST["newAddress"];
							      $city = $_REQUEST["newCity"];
							      $state = $_REQUEST["newState"];
							      $zip = $_REQUEST["newZip"];
							      $phone = $_REQUEST["newPhone"];
							      $rate = $_REQUEST["newRate"];
							      
							      $providerType = "Trainer";
								$_SESSION["new_account_type"] = $providerType;
							      
							      $specialities = "";
							      foreach ($_REQUEST["newSpecialities"] as $speciality) {
									$specialities .= "$speciality,";
							      };
							      
							      $classesOffered = $_REQUEST["newClassesOffered"];
							      
							      $daysAvailability = "";
							      foreach($_REQUEST['newDaysAvailability'] as $day) {
							            $daysAvailability .= "$day,";
							      };
							      
							      $availabilityFrom = $_REQUEST["newAvailabilityFrom"];
							      $availabilityTo = $_REQUEST["newAvailabilityTo"];
							      
							      $hoursAvailability = $availabilityFrom . "AM-" . $availabilityTo . "PM";
							      
							      $newTrainerSql1 =
							      "insert into Provider (Email, Password, Phone, Address, City, State, ZipCode, ProviderType)
							      values ('{$email}','{$password}','{$phone}','{$address}','{$city}','{$state}','{$zip}','{$providerType}')";
							      
							      $rsNewTrainer1 = mysqli_query($db, $newTrainerSql1);
								
								// checks if query worked
								if (!$rsNewTrainer1) {
									throw new Exception(mysqli_error($db));
								}
							      
							      $providerIdSql = "select ProviderId from Provider where email = '{$email}'";
							      
							      $rsProviderId = mysqli_query($db, $providerIdSql);
								
								// checks if query worked
								if (!$rsProviderId) {
									throw new Exception(mysqli_error($db));
								}
								
								mysqli_data_seek($rsProviderId, 0);
								
								$providerIdArray = mysqli_fetch_array($rsProviderId);
								$providerId = $providerIdArray['ProviderId'];
							      
							      $newTrainerSql2 = 
							      "insert into Trainer (ProviderId, FirstName, LastName, Gender, Rate, Specialities, ClassesOffered, DaysAvailability, HoursAvailability)
								values ('{$providerId}','{$firstName}','{$lastName}','{$gender}','{$rate}','" . trim($specialities, ',') . "','{$classesOffered}','" . trim($daysAvailability, ',') . "','{$hoursAvailability}')";
							                                    
								$rsNewTrainer2 = mysqli_query($db, $newTrainerSql2);
								
								// checks if query worked
								if (!$rsNewTrainer2) {
									throw new Exception(mysqli_error($db));
								}
								
								mysqli_close($db);
								unset($db);
							
							}catch(Exception $e) {
								header('Location: errorPage.php?msg=' . $e->getMessage() . '&line=' . $e->getLine());
							}
							
							header('location: helpers/loginRedirect.php?' . $_SESSION["new_account_type"]);
						
						}else if (isset($_REQUEST["newGymSubmit"])) {
							try {
								$db = $GLOBALS["db"];
							    
							      $gymName = $_REQUEST["newGymName"];
							      
							      $email = $_REQUEST["newEmail"];
								$_SESSION["newEmailLogin"] = $email;
								
							      $password = $_REQUEST["newPassword"];
								$_SESSION["newPasswordLogin"] = $password;
							      
							      $address = $_REQUEST["newAddress"];
							      $city = $_REQUEST["newCity"];
							      $state = $_REQUEST["newState"];
							      $zip = $_REQUEST["newZip"];
							      $phone = $_REQUEST["newPhone"];
							      $contactFirstName = $_REQUEST["newContactFirstName"];
							      $contactLastName = $_REQUEST["newContactLastName"];
							      $rate = $_REQUEST["newRate"];
							      
							      $providerType = "Gym";
								$_SESSION["new_account_type"] = $providerType;
							      
							      $amenities = "";
							      foreach ($_REQUEST["newAmenities"] as $amenity) {
									$amenities .= "$amenity,";
							      };
							      
							      $classesOffered = $_REQUEST["newClassesOffered"];
							      
							      $daysOperation = "";
							      foreach($_REQUEST['newDaysOperation'] as $day) {
							            $daysOperation .= "$day,";
							      };
							      
							     $operationOpen = $_REQUEST["newOperationOpen"];
							     $operationClose = $_REQUEST["newOperationClose"];
							     $hoursOperation = $operationOpen . "AM-" . $operationClose . "PM";
							      
							      $newGymSql1 =
							      "insert into Provider (Email, Password, Phone, Address, City, State, ZipCode, ProviderType)
							      values ('{$email}','{$password}','{$phone}','{$address}','{$city}','{$state}','{$zip}','{$providerType}')";
							      
							      $rsNewGym1 = mysqli_query($db, $newGymSql1);
								
								// checks if query worked
								if (!$rsNewGym1) {
									throw new Exception(mysqli_error($db));
								}
							      
							      $providerIdSql = "select ProviderId from Provider where email = '{$email}'";
							      
							      $rsProviderId = mysqli_query($db, $providerIdSql);
								
								// checks if query worked
								if (!$rsProviderId) {
									throw new Exception(mysqli_error($db));
								}
								
								mysqli_data_seek($rsProviderId, 0);
								
								$providerIdArray = mysqli_fetch_array($rsProviderId);
								$providerId = $providerIdArray['ProviderId'];
							      
							      $newGymSql2 = 
							      "insert into Gym (ProviderId, Name, ContactFirstName, ContactLastName, Rate, Amenities, ClassesOffered, DaysOperation, HoursOperation)
								values ('{$providerId}','{$gymName}','{$contactFirstName}','{$contactLastName}','{$rate}','" . trim($amenities, ',') . "','{$classesOffered}','" . trim($daysOperation, ',') . "','{$hoursOperation}')";
							                                    
								$rsNewGym2 = mysqli_query($db, $newGymSql2);
								
								// checks if query worked
								if (!$rsNewGym2) {
									throw new Exception(mysqli_error($db));
								}
								
								mysqli_close($db);
								unset($db);
							
							}catch(Exception $e) {
								header('Location: errorPage.php?msg=' . $e->getMessage() . '&line=' . $e->getLine());
							}
							
							header('location: helpers/loginRedirect.php?' . $_SESSION["new_account_type"]);
							
						}else {
					?>
					<div class="inner cover">
						<div class="panel panel-default">
							<div class="page-header text-center">
									<h1>Create account <small>Sign up for TechFit </small></h1>
								</div>
							<div class="panel-body">
								<div class="well form-well">
									<div class="row row-centered">
										<p class="text-left" style="font-size:11px">Select the account type you'd like to create:</p>
										<div class="btn-group btn-group-justified" role="group" aria-label="accountType" style="padding:0 25 14">
										      <div class="btn-group" role="group">
										            <button type="button" class="btn btn-primary" id="buttonTrainer">Trainer</button>
										      </div>
										      <div class="btn-group" role="group">
										            <button type="button" class="btn btn-primary" id="buttonGym">Gym</button>
										      </div>
										      <div class="btn-group" role="group">
										            <button type="button" class="btn btn-primary" id="buttonSeeker">Seeker</button>
										      </div>
										</div>										
									</div>
									<div class="row row-padding">
									</div>
									<?
										include('helpers/newTrainerInformation.php');
										
										include('helpers/newGymInformation.php');
										
										include('helpers/newUserInformation.php');
									?>
								</div>
							</div>
						</div>
					</div>
					<?
						}
						
						include('templates/footer.php');
					?>
				</div>
			</div>
	    </div>
	</body>
</html>
<script>

	function clearPage() {
		$('#trainerForm').addClass("hidden").removeClass("show");
		$('#gymForm').addClass("hidden").removeClass("show");
		$('#userForm').addClass("hidden").removeClass("show");
		
		$('#buttonTrainer').removeClass("active");
		$('#buttonGym').removeClass("active");
		$('#buttonSeeker').removeClass("active");
	};
	
	$(document).ready(function() {     
	    
	    $('#login-tabs-justified-ul a').click(function (e) {
			e.preventDefault();
			$(this).tab('show');
		});
	
	});
	
	// renders proper form based on pressed button
	$('#buttonTrainer').on('click', function() {
            clearPage();
		$('#trainerForm').addClass("show").removeClass("hidden");
		$('#buttonTrainer').addClass("active");
	});
	$('#buttonGym').on('click', function() {
		clearPage();
		$('#gymForm').addClass("show").removeClass("hidden");
		$('#buttonGym').addClass("active");
	});
	$('#buttonSeeker').on('click', function() {
		clearPage();
		$('#userForm').addClass("show").removeClass("hidden");	
		$('#buttonSeeker').addClass("active");	
	});
	
	// populates state selects
      var $select = $('.newState');
 
	// request the JSON data and parse into the select element
	$.getJSON('us_states.json', function(data){
		 
		 //clear the current content of the select
		$select.html('');
		$select.find('option').remove();
		$('<option selected disabled>').val("").text("State").appendTo($select);                          
		
		$.each(data, function(key, value) {              
	            $('<option>').val(key).text(value).appendTo($select);
		});
       });
	
</script>