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
				header('Location: userProfileEdit.php?id=' . $_SESSION["account_record"]['UserId']);
			}else {
		?>
		<body>
			<div class="site-wrapper">
		        <div class="site-wrapper-inner">
		            <div class="cover-container">
		            <?
						include('templates/navMenu.php');
					?>
						<div class="inner cover">
							<div class="panel panel-default text-left">
								<div>
									<div class="page-header text-center">
										<h1>Profile <small>View & edit your profile </small></h1>
									</div>
									<?
									
									$_SESSION['temp_email'] = $_SESSION["account_record"]['Email'];
									$_SESSION["account_record"] = "";
									include('helpers/renderProfileData.php');
									echo renderData();
									
									$name = $_SESSION["account_record"]['FirstName'] . " " . $_SESSION["account_record"]['LastName'];
									$address = $_SESSION["account_record"]['Address'];
									$city = $_SESSION["account_record"]['City'];
									$state = $_SESSION["account_record"]['State'];
									$zipCode = $_SESSION["account_record"]['ZipCode'];
									$phone = $_SESSION["account_record"]['Phone'];
									$email = $_SESSION["account_record"]['Email'];
									$searchingFor = $_SESSION["account_record"]['SearchingFor'];
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
											<h2><b><? print $name ?></b> <small><? print $email ?></small></h2>
											<ul class="list-unstyled">
												<li class="profile-spacing"><b>Address: </b><small><? print $address ?></small><br></li>
												<li class="profile-spacing"><b>City: </b><small><? print $city ?></small><br></li>
												<li class="profile-spacing"><b>State: </b><small><? print $state ?></small><br></li>
												<li class="profile-spacing"><b>Zip Code: </b><small><? print $zipCode?></small><br></li>
												<li class="profile-spacing"><b>Phone: </b><small><? print $phone ?></small></li>
												<li class="profile-spacing"><b>Searching For: </b><small><? print $searchingFor ?></small></li>
											</ul>
										</span>
									</div>
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