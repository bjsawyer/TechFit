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
	<title>Inquiries</title>
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
        <div class="site-wrapper-inner-listings">
            <div class="cover-container">
            <?
				include('templates/navMenuProvider.php');
			?>
				<div class="inner cover">
					<div>
						<div class="panel panel-default">
							<div class="page-header text-center">
								<h1>Inquiries <small>View & email interested customers </small></h1>
							</div>
							<?
								try {
									$providerId = $_SESSION["account_record"]['ProviderId'];
									
									// pulls all users from database
									if ($_SESSION["account_type"] == "Trainer") {
										$usersSql = "select * from AE_TrainingRegistration inner join User on AE_TrainingRegistration.UserId = User.UserId where AE_TrainingRegistration.ProviderId = '{$providerId}' order by RequestDate desc";
									}elseif ($_SESSION["account_type"] == "Gym") {
										$usersSql = "select * from AE_GymMembership inner join User on AE_GymMembership.UserId = User.UserId where AE_GymMembership.ProviderId = '{$providerId}' order by RequestDate desc";
									}
									
									$_SESSION['$rsUsers'] = mysqli_query($db, $usersSql);
									
									if (!$_SESSION['$rsUsers']) {
										throw new Exception(mysqli_error($db));
									}
									mysqli_data_seek($_SESSION['$rsUsers'], 0);
									
									$listings = array();
									
									// displays users
									while($row = mysqli_fetch_array($_SESSION['$rsUsers'], MYSQLI_BOTH)) {
										$listings[] = $row;
									}
									
									mysqli_close($db);
									unset($db);
									
								}catch(Exception $e) {
									header('Location: errorPage.php?msg=' . $e->getMessage() . '&line=' . $e->getLine());
									exit;
								}
								
								// sets up data for gym listing
								function renderUserListing($row) {
									$userEmail = $row['Email'];
									$userName = $row['FirstName'] . " " . $row['LastName'];
									$userAddress = $row['Address'];
									$userCity = $row['City'];
									$userState = $row['State'];
									$userZip = $row['ZipCode'];
									$userPhone = $row['Phone'];
									$userRequestDate = $row['RequestDate']
							?>
									<div class="well">
										<span class="well-listings-icons">
											<form>
												<a type="button" name="emailUser" class="btn btn-primary btn-edit" href="mailto:<? print $userEmail ?>">
													<span class="glyphicon glyphicon-envelope"></span>
												</a>
											</form>
										</span>
										<span class="well-listings-text">
											<h4 style="margin-top:0px"><b><? print $userName ?></b> <small><? print $userEmail ?></small></h4>
											<ul class="list-unstyled">
												<li class="listing-spacing"><b>Address: </b><small><? print $userAddress ?></small><br></li>
												<li class="listing-spacing"><b>City: </b><small><? print $userCity ?></small><br></li>
												<li class="listing-spacing"><b>State: </b><small><? print $userState ?></small><br></li>
												<li class="listing-spacing"><b>Zip Code: </b><small><? print $userZip?></small><br></li>
												<li class="listing-spacing"><b>Phone: </b><small><? print $userPhone ?></small></li>
												<br>
												<li class="listing-spacing"><b>Request Date: </b><small><? print $userRequestDate ?></small></li>
											</ul>
										</span>
									</div>
							<?
								}
							?>
							
							<div class="panel-body">
								<div class="listings-results" id="listings-all">
									<?
										foreach($listings as $row => $value) {
											renderUserListing($listings[$row]);
										}
									?>
								</div>
								<!--<nav>
								    <ul class="pagination">
								        <li class="disabled">
								            <a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a>
								        </li>
								        <li class="active">
								            <a href="#">1 <span class="sr-only">(current)</span></a>
										</li>
										<li class="disabled">
								            <a href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a>
								        </li>
								    </ul>
								</nav>-->
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