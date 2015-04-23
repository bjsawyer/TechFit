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
		<?
			// checks if "edit" button has been pressed
			if (isset($_REQUEST["editProfile"])) {
				header('Location: providerProfileEdit.php?id=' . $_SESSION["account_record"]['ProviderId']);
			}else {
		?>
		<body>
			<div class="site-wrapper">
		        <div class="site-wrapper-inner">
		            <div class="cover-container">
		            <?
						include('templates/navMenuProvider.php');
					?>
						<div class="inner cover">
							<div class="panel panel-default text-left">
								<div>
									<div class="page-header text-center">
										<h1>Profile <small>View & edit your profile </small></h1>
									</div>
									<?
									// fields shared by trainers and gyms
									$address = $_SESSION["account_record"]['Address'];
									$city = $_SESSION["account_record"]['City'];
									$state = $_SESSION["account_record"]['State'];
									$zipCode = $_SESSION["account_record"]['ZipCode'];
									$phone = $_SESSION["account_record"]['Phone'];
									$email = $_SESSION["account_record"]['Email'];
									$membershipLevel = $_SESSION["account_record"]['MembershipLevel'];
									$classesOffered = $_SESSION["account_record"]['ClassesOffered'];
									$profilePictureUrl = $_SESSION["account_record"]['ProfilePictureUrl'];
									$profileDescription = $_SESSION["account_record"]['ProfileDescription'];
									$rate = $_SESSION["account_record"]['Rate'];
										
									// unique trainer fields
									if ($_SESSION["account_type"] == "Trainer") {
										$name = $_SESSION["account_record"]['FirstName'] . " " . $_SESSION["account_record"]['LastName'];
										$specialities = $_SESSION["account_record"]['Specialities'];
										$daysAvailability = $_SESSION["account_record"]['DaysAvailability'];
										$hoursAvailability = $_SESSION["account_record"]['HoursAvailability'];
									?>
									<div class="well">
										<span class="well-listings-icons">
											<form>
												<button type="submit" name="editProfile" class="btn btn-primary btn-edit">
													<span class="glyphicon glyphicon-pencil"></span>
												</button>
											</form>
										</span>
										<span class="well-listings-text">
											<h4><b><? print $name ?></b> <small><? print $email ?></small></h4>
											<ul class="list-unstyled">
												<li class="profile-spacing"><b>Profile Description: </b><small><?  ?></small></li>
												<br>
												<li class="profile-spacing"><b>Address: </b><small><? print $address ?></small><br></li>
												<li class="profile-spacing"><b>City: </b><small><? print $city ?></small><br></li>
												<li class="profile-spacing"><b>State: </b><small><? print $state ?></small><br></li>
												<li class="profile-spacing"><b>Zip Code: </b><small><? print $zipCode?></small><br></li>
												<li class="profile-spacing"><b>Phone: </b><small><? print $phone ?></small></li>
												<li class="profile-spacing"><b>Rate (per hour): </b><small><? print $rate ?></small></li>
												<li class="profile-spacing"><b>Specialities: </b><small><? print $specialities ?></small></li>
												<li class="profile-spacing"><b>Classes Offered: </b><small><? print $classesOffered ?></small></li>
												<li class="profile-spacing"><b>Days of Availability: </b><small><? print $daysAvailability ?></small></li>
												<li class="profile-spacing"><b>Hour of Availability: </b><small><? print $hoursAvailability ?></small></li>
												<li class="profile-spacing"><b>Membership Level: </b><small><? print $membershipLevel ?></small></li>
											</ul>
										</span>
									</div>
									<?										
									// unique gym fields
									}elseif ($_SESSION["account_type"] == "Gym") {
										$name = $_SESSION["account_record"]['Name'];
										$contactFirstName = $_SESSION["account_record"]['ContactFirstName'];
										$contactLastName = $_SESSION["account_record"]['ContactLastName'];
										$daysOperation = $_SESSION["account_record"]['DaysOperation'];
										$hoursOperation = $_SESSION["account_record"]['HoursOperation'];										
										$amenities = $_SESSION["account_record"]['Amenities'];
									?>
									<div class="well">
										<span class="well-listings-icons">
											<form>
												<button type="submit" name="editProfile" class="btn btn-primary btn-edit">
													<span class="glyphicon glyphicon-pencil"></span>
												</button>
											</form>
										</span>
										<span class="well-listings-text">
											<h4><b><? print $name ?></b> <small><? print $email ?></small></h4>
											<ul class="list-unstyled">
												<li class="profile-spacing"><b>Profile Description: </b><small><?  ?></small></li>
												<br>
												<li class="profile-spacing"><b>Contact Name: </b><small><? print $contactFirstName . " " . $contactLastName ?></small><br></li>
												<li class="profile-spacing"><b>Address: </b><small><? print $address ?></small><br></li>
												<li class="profile-spacing"><b>City: </b><small><? print $city ?></small><br></li>
												<li class="profile-spacing"><b>State: </b><small><? print $state ?></small><br></li>
												<li class="profile-spacing"><b>Zip Code: </b><small><? print $zipCode?></small><br></li>
												<li class="profile-spacing"><b>Phone: </b><small><? print $phone ?></small></li>
												<li class="profile-spacing"><b>Rate (per month): </b><small><? print $rate ?></small></li>
												<li class="profile-spacing"><b>Amenities: </b><small><? print $amenities ?></small></li>
												<li class="profile-spacing"><b>Classes Offered: </b><small><? print $classesOffered ?></small></li>
												<li class="profile-spacing"><b>Days of Operation: </b><small><? print $daysOperation ?></small></li>
												<li class="profile-spacing"><b>Hours of Operation: </b><small><? print $hoursOperation ?></small></li>
												<li class="profile-spacing"><b>Membership Level: </b><small><? print $membershipLevel ?></small></li>
											</ul>
										</span>
									</div>
								<?			
									}
								?>
								</div>
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
<?
	}
?>