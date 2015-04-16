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
						include('templates/navMenu.php');
					?>
						<div class="inner cover">
							<div class="panel panel-default text-left">
								<div>
									<div class="page-header">
										<h1>Profile <small>View & edit your profile </small></h1>
									</div>
									<?
									$name = $_SESSION["account_record"]['FirstName'] . " " . $_SESSION["account_record"]['LastName'];
									$address = $_SESSION["account_record"]['Address'];
									$city = $_SESSION["account_record"]['City'];
									$state = $_SESSION["account_record"]['State'];
									$zipCode = $_SESSION["account_record"]['ZipCode'];
									$phone = $_SESSION["account_record"]['Phone'];
									$email = $_SESSION["account_record"]['Email'];
									$gender = $_SESSION["account_record"]['Gender'];
									$searchingFor = $_SESSION["account_record"]['SearchingFor'];
									?>
									<div class="well">
										<span class="well-listings-icons">
											<button type="button" name="editProfile" class="btn btn-default btn-edit">
												<span><img src="bootstrap-3.3.2-dist/glyphicons_free/glyphicons/png/glyphicons-31-pencil.png"></img></span>
											</button>
										</span>
										<span class="well-listings-text">
											<h4><b><? print $name ?></b> <small><? print $email ?></small></h4>
											<ul class="list-unstyled">
												<li class="profile-spacing"><b>Address: </b><small><? print $address ?></small><br></li>
												<li class="profile-spacing"><b>City: </b><small><? print $city ?></small><br></li>
												<li class="profile-spacing"><b>State: </b><small><? print $state ?></small><br></li>
												<li class="profile-spacing"><b>Zip Code: </b><small><? print $zipCode?></small><br></li>
												<li class="profile-spacing"><b>Phone: </b><small><? print $phone ?></small></li>
												<li class="profile-spacing"><b>Gender: </b><small><? print $gender ?></small><br></li>
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