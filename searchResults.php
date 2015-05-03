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
        <div class="site-wrapper-inner-listings">
            <div class="cover-container">
            <?
			include('templates/navMenuUser.php');
		?>
		<?
			$searchKeyword = "";
			
			if (isset($_REQUEST["searchKeyword"])) {
				$searchKeyword = $_REQUEST["searchKeyword"];
			} 
			
			$searchKeywordSql = "%" . $searchKeyword . "%";
		?>
				<div class="inner cover">
					<div>
						<div class="panel panel-default">
							<div class="page-header text-center" style="margin-bottom:10px">
								<h1>Search <small>View matching gym & trainer listings </small></h1>
							</div>
								<p class="text-left" style="padding-top:5px;margin-bottom:0; font-size:12px;color:gray">Showing results for: <i><b><? print $searchKeyword ?></b></i>. Click <a href="search.php" style="color:blue">here</a> to try a new search.</p>
							<?
								if ($searchKeyword != "") {
									try {
										// pulls all matching trainers from database
										$trainersSql =
										"select * from Provider
										inner join Trainer on Provider.ProviderId = Trainer.ProviderId
										where FirstName LIKE '{$searchKeywordSql}'
										OR LastName LIKE '{$searchKeywordSql}'
										OR Specialities LIKE '{$searchKeywordSql}'";
										
										$_SESSION['$rsTrainers'] = mysqli_query($db, $trainersSql);
										
										if (!$_SESSION['$rsTrainers']) {
											throw new Exception(mysqli_error($db));
										}
										mysqli_data_seek($_SESSION['$rsTrainers'], 0);
										
										// pulls all matching gyms from database
										$gymsSql =
										"select * from Provider
										inner join Gym on Provider.ProviderId = Gym.ProviderId
										where Name LIKE '{$searchKeywordSql}'
										OR Amenities LIKE '{$searchKeywordSql}'";
										
										$_SESSION['$rsGyms'] = mysqli_query($db, $gymsSql);
										
										if (!$_SESSION['$rsGyms']) {
											throw new Exception(mysqli_error($db));
										}
										mysqli_data_seek($_SESSION['$rsGyms'], 0);
										
										$listings = array();
										
										// platinum trainers
										while($row = mysqli_fetch_array($_SESSION['$rsTrainers'], MYSQLI_BOTH)) {
											$listings[] = $row;
										}
										
										// platinum gyms
										while($row = mysqli_fetch_array($_SESSION['$rsGyms'], MYSQLI_BOTH)) {
											$listings[] = $row;
										}
										
										mysqli_close($db);
										unset($db);
										
									}catch(Exception $e) {
										header('Location: errorPage.php?msg=' . $e->getMessage() . '&line=' . $e->getLine());
										exit;
									}
								
								// sets up data for trainer listing
								function renderTrainerListing($row) {
									$trainerProviderId = $row['ProviderId'];
									$trainerName = $row['FirstName'] . " " . $row['LastName'];
									$trainerAddress = $row['Address'];
									$trainerCity = $row['City'];
									$trainerState = $row['State'];
									$trainerZip = $row['ZipCode'];
									$trainerPhone = $row['Phone'];
									$trainerRate = $row['Rate'];
									$trainerSpecialities = $row['Specialities'];
									$trainerClassesOffered= $row['ClassesOffered'];
									if ($trainerClassesOffered == 0) {
										$trainerClassesOffered = "No";
									}else {
										$trainerClassesOffered = "Yes";
									}
									$trainerDaysAvailability = $row['DaysAvailability'];
									$trainerHoursAvailability = $row['HoursAvailability'];
									$trainerProfilePic = $row['ProfilePictureUrl'];
									$trainerEmail = $row['Email'];
							?>
									<div class="well">
										<form id="addInquiry" method="POST" action="helpers/addInquiry.php" style="margin-bottom:0px">
											<span class="well-listings-icons">
												<span><img src="bootstrap-3.3.2-dist/glyphicons_free/glyphicons/png/glyphicons-4-user.png"></img></span>
											</span>
											<span class="well-listings-text">
												<div class="media">
												
												<? if($trainerProfilePic != "") { ?>
												      <div class="media-left media-middle">
														<img class="media-object profilePicListings" src="uploads/<? print $trainerProfilePic ?>">
												<? }else { ?>
													<div class="media-middle">
												<? } ?>
												
	                                                                        </div>
											      <div class="media-body" style="vertical-align:middle">
													<h4 style="top:0px"><b><? print $trainerName ?></b> <small><? print $trainerEmail ?></small></h4>
												</div>
												<ul class="list-unstyled" style="padding-top:10px;">
													<li class="profile-spacing"><b>Profile Description: </b><small><?  ?></small></li>
													<br>
													<li class="listing-spacing"><b>Address: </b><small><? print $trainerAddress ?></small><br></li>
													<li class="listing-spacing"><b>City: </b><small><? print $trainerCity ?></small><br></li>
													<li class="listing-spacing"><b>State: </b><small><? print $trainerState ?></small><br></li>
													<li class="listing-spacing"><b>Zip Code: </b><small><? print $trainerZip?></small><br></li>
													<li class="listing-spacing"><b>Phone: </b><small><? print $trainerPhone ?></small></li>
													<li class="listing-spacing"><b>Rate (per hour): </b><small><? print $trainerRate ?></small></li>
													<li class="listing-spacing"><b>Specialities: </b><small><? print $trainerSpecialities ?></small></li>
													<li class="listing-spacing"><b>Classes Offered: </b><small><? print $trainerClassesOffered ?></small></li>
													<li class="listing-spacing"><b>Days of Availability: </b><small><? print $trainerDaysAvailability ?></small></li>
													<li class="listing-spacing"><b>Hour of Availability: </b><small><? print $trainerHoursAvailability ?></small></li>
												</div>
											</span>
											<input name="providerData" id="providerData" type="hidden" value="<? print $trainerProviderId ?>" />
											<button class="btn btn-primary btn-lg btn-block" id="applyButtonTrainer" name="applyButtonTrainer" type="submit"><span class="glyphicon glyphicon-upload"></span> Apply</button>
										</form>
									</div>
							<?
								}
								
								// sets up data for gym listing
								function renderGymListing($row) {
									$gymProviderId = $row['ProviderId'];
									$gymContactFirstName = $row['ContactFirstName'];
									$gymContactLastName = $row['ContactLastName'];
									$gymName = $row['Name'];
									$gymAddress = $row['Address'];
									$gymCity = $row['City'];
									$gymState = $row['State'];
									$gymZip = $row['ZipCode'];
									$gymPhone = $row['Phone'];
									$gymRate = $row['Rate'];
									$gymAmenities = $row['Amenities'];
									$gymClassesOffered = $row['ClassesOffered'];
									$gymDaysOperation = $row['DaysOperation'];
									$gymHoursOperation = $row['HoursOperation'];
									$gymProfilePic = $row['ProfilePictureUrl'];
									$gymEmail = $row['Email'];
							?>
									<div class="well">
										<form id="addInquiry" method="POST" action="helpers/addInquiry.php" style="margin-bottom:0px">
											<span class="well-listings-icons">
												<span><img src="bootstrap-3.3.2-dist/glyphicons_free/glyphicons/png/glyphicons-357-dumbbell.png"></img></span>
											</span>
											<span class="well-listings-text">
												<div class="media">
												
												<? if($gymProfilePic != "") { ?>
												      <div class="media-left media-middle">
														<img class="media-object profilePicListings" src="uploads/<? print $gymProfilePic ?>">
												<? }else { ?>
													<div class="media-middle">
												<? } ?>
	                                                                        
	                                                                        </div>
												      <div class="media-body" style="vertical-align:middle">
														<h4 style="margin-top:0px"><b><? print $gymName ?></b> <small><? print $gymEmail ?></small></h4>
													</div>
													<ul class="list-unstyled" style="padding-top:10px;">
														<li class="listing-spacing"><b>Profile Description: </b><small><?  ?></small></li>
														<br>
														<li class="listing-spacing"><b>Contact Name: </b><small><? print $gymContactFirstName . " " . $gymContactLastName ?></small><br></li>
														<li class="listing-spacing"><b>Address: </b><small><? print $gymAddress ?></small><br></li>
														<li class="listing-spacing"><b>City: </b><small><? print $gymCity ?></small><br></li>
														<li class="listing-spacing"><b>State: </b><small><? print $gymState ?></small><br></li>
														<li class="listing-spacing"><b>Zip Code: </b><small><? print $gymZip?></small><br></li>
														<li class="listing-spacing"><b>Phone: </b><small><? print $gymPhone ?></small></li>
														<li class="listing-spacing"><b>Rate (per month): </b><small><? print $gymRate ?></small></li>
														<li class="listing-spacing"><b>Amenities: </b><small><? print $gymAmenities ?></small></li>
														<li class="listing-spacing"><b>Classes Offered: </b><small><? print $gymClassesOffered ?></small></li>
														<li class="listing-spacing"><b>Days of Operation: </b><small><? print $gymDaysOperation ?></small></li>
														<li class="listing-spacing"><b>Hours of Operation: </b><small><? print $gymHoursOperation ?></small></li>
													</ul>
												</div>
											</span>
											<input name="providerData" id="providerData" type="hidden" value="<? print $gymProviderId ?>" />
											<button class="btn btn-primary btn-lg btn-block" id="applyButtonGym" name="applyButtonGym"type="submit"><span class="glyphicon glyphicon-upload"></span> Apply</button>
										</form>
									</div>
							<?
								}
							?>
							
							<div class="panel-body">	
								<div class="listings-results" id="listings-all">
									<?
										$allArray = [];
										foreach($listings as $row => $value) {
											foreach($value as $col => $value2) {
												if ($col == "ProviderType" && $value2 == "Trainer") {
													renderTrainerListing($listings[$row]);
												}elseif ($col == "ProviderType" && $value2 == "Gym") {
													renderGymListing($listings[$row]);
												}
											}
										}
									?>
								</div>
							</div>
						</div>
					</div>
				<? }else {?>
					<div class="row row-padding" style="padding-bottom:15px">
					</div>
				<? } ?>
				</div>				
				<?
					include('templates/footer.php');
				?>
			</div>
		</div>
    </div>
</body>
</html>