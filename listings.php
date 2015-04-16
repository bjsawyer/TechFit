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
				include('templates/navMenu.php');
			?>
				<div class="inner cover">
					<div>
						<div class="panel panel-default">
							<div class="page-header text-left">
								<h1>Listings <small>View available trainers & gyms </small></h1>
							</div>
							<?
								try {
									// pulls all trainers from database
									$trainersSql1 = "select * from Provider inner join Trainer on Provider.ProviderId = Trainer.ProviderId where MembershipLevel='Platinum'";
									$trainersSql2 = "select * from Provider inner join Trainer on Provider.ProviderId = Trainer.ProviderId where MembershipLevel='Gold'";
									$trainersSql3 = "select * from Provider inner join Trainer on Provider.ProviderId = Trainer.ProviderId where MembershipLevel='Silver'";
									
									$_SESSION['$rsTrainers1'] = mysqli_query($db, $trainersSql1);
									$_SESSION['$rsTrainers2'] = mysqli_query($db, $trainersSql2);
									$_SESSION['$rsTrainers3'] = mysqli_query($db, $trainersSql3);
									
									if (!$_SESSION['$rsTrainers1'] && !$_SESSION['$rsTrainers2'] && $_SESSION['$rsTrainers3']) {
										throw new Exception(mysqli_error($db));
									}
									mysqli_data_seek($_SESSION['$rsTrainers1'], 0);
									mysqli_data_seek($_SESSION['$rsTrainers2'], 0);
									mysqli_data_seek($_SESSION['$rsTrainers3'], 0);
									
									// pulls all gyms from database
									$gymsSql1 = "select * from Provider inner join Gym on Provider.ProviderId = Gym.ProviderId where MembershipLevel='Platinum'";
									$gymsSql2 = "select * from Provider inner join Gym on Provider.ProviderId = Gym.ProviderId where MembershipLevel='Gold'";
									$gymsSql3 = "select * from Provider inner join Gym on Provider.ProviderId = Gym.ProviderId where MembershipLevel='Silver'";
									
									$_SESSION['$rsGyms1'] = mysqli_query($db, $gymsSql1);
									$_SESSION['$rsGyms2'] = mysqli_query($db, $gymsSql2);
									$_SESSION['$rsGyms3'] = mysqli_query($db, $gymsSql3);
									
									if (!$_SESSION['$rsGyms1'] && !$_SESSION['$rsGyms2'] && $_SESSION['$rsGyms3']) {
										throw new Exception(mysqli_error($db));
									}
									mysqli_data_seek($_SESSION['$rsGyms1'], 0);
									mysqli_data_seek($_SESSION['$rsGyms2'], 0);
									mysqli_data_seek($_SESSION['$rsGyms3'], 0);
									
									$listings = array();
									
									// platinum trainers
									while($row = mysqli_fetch_array($_SESSION['$rsTrainers1'], MYSQLI_BOTH)) {
										$listings[] = $row;
									}
									
									// platinum gyms
									while($row = mysqli_fetch_array($_SESSION['$rsGyms1'], MYSQLI_BOTH)) {
										$listings[] = $row;
									}
									
									// gold trainers
									while($row = mysqli_fetch_array($_SESSION['$rsTrainers2'], MYSQLI_BOTH)) {
										$listings[] = $row;
									}
									
									// gold gyms
									while($row = mysqli_fetch_array($_SESSION['$rsGyms2'], MYSQLI_BOTH)) {
										$listings[] = $row;
									}
									
									// silver trainers
									while($row = mysqli_fetch_array($_SESSION['$rsTrainers3'], MYSQLI_BOTH)) {
										$listings[] = $row;
									}
									 
									// silver gyms
									while($row = mysqli_fetch_array($_SESSION['$rsGyms3'], MYSQLI_BOTH)) {
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
									$trainerName = $row['FirstName'] . " " . $row['LastName'];
									$trainerAddress = $row['Address'];
									$trainerCity = $row['City'];
									$trainerState = $row['State'];
									$trainerZipCode = $row['ZipCode'];
									$trainerPhone = $row['Phone'];
							?>
									<div class="well">
										<span class="well-listings-icons">
											<span><img src="bootstrap-3.3.2-dist/glyphicons_free/glyphicons/png/glyphicons-4-user.png"></img></span>
										</span>
										<span class="well-listings-text">
											<h4><? print $trainerName ?></h4>
											<address>
												  <? print $trainerAddress ?><br>
												  <? print $trainerCity ?>, <? print $trainerState ?> <? print $trainerZipCode?><br>
												  Phone: <? print $trainerPhone ?>
											</address>
										</span>
									</div>
							<?
								}
								
								// sets up data for gym listing
								function renderGymListing($row) {
									$gymName = $row['Name'];
									$gymAddress = $row['Address'];
									$gymCity = $row['City'];
									$gymState = $row['State'];
									$gymZipCode = $row['ZipCode'];
									$gymPhone = $row['Phone'];
							?>
									<div class="well">
										<span class="well-listings-icons">
											<span><img src="bootstrap-3.3.2-dist/glyphicons_free/glyphicons/png/glyphicons-357-dumbbell.png"></img></span>
										</span>
										<span class="well-listings-text">
											<h4><? print $gymName ?></h4>
											<address>
												  <? print $gymAddress ?><br>
												  <? print $gymCity ?>, <? print $gymState ?> <? print $gymZipCode?><br>
												  Phone: <? print $gymPhone ?>
											</address>
										</span>
									</div>
							<?
								}
							?>
							
							<div class="panel-body">	
								<div class="panel panel-info" id="filter-panel">
									<div class="panel-heading">
										<h3 class="panel-title">Filter</h3>
									</div>
									<div class="panel-body">
									    <div class="checkbox">
											<label>
												<input type="checkbox" class="filter-checkboxes" id="showTrainers">
												Trainers
											</label>
										</div>
										<div class="checkbox">
											<label>
												<input type="checkbox" class="filter-checkboxes" id="showGyms">
												Gyms
											</label>
										</div>
									</div>
								</div>
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
								<div class="listings-results" id="listings-trainers">
									<?
										// filters to show only trainers
										$trainersOnlyArray = [];
										foreach($listings as $row => $value) {
											foreach($value as $col => $value2) {
												if ($col == "ProviderType" && $value2 == "Trainer") {
													renderTrainerListing($listings[$row]);
												}
											}
										}
									?>
								</div>
								<div class="listings-results" id="listings-gyms">
									<?
										// filters to show only gyms
										$gymsOnlyArray = [];
										foreach($listings as $row => $value) {
											foreach($value as $col => $value2) {
												if ($col == "ProviderType" && $value2 == "Gym") {
													renderGymListing($listings[$row]);
												}
											}
										}
									?>
								</div>
								<nav>
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
								</nav>
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

<script>
	var numChecked = $('.filter-checkboxes:checked').length;
	var numTotal = $('.filter-checkboxes').length;
	$(document).ready(function() {
		$('.listings-results').addClass("hidden").removeClass("show");
		$('#listings-all').removeClass("hidden");
		$('#listings-all').addClass("show");
	});
	
	$("input[type='checkbox'].filter-checkboxes").change(function(){
		numChecked = $('.filter-checkboxes:checked').length;
		numTotal = $('.filter-checkboxes').length;
        if (numChecked == numTotal || numChecked == 0) {
            $('.listings-results').addClass("hidden").removeClass("show");
			$('#listings-all').removeClass("hidden");
			$('#listings-all').addClass("show");
        }else {
            $('.listings-results').addClass("hidden").removeClass("show");
            if ($('#showTrainers').is(':checked')) {
                $('.listings-results').addClass("hidden").removeClass("show");
				$('#listings-trainers').addClass("show").removeClass("hidden");
            }else if ($('#showGyms').is(':checked')) {
                $('.listings-results').addClass("hidden").removeClass("show");
				$('#listings-gyms').addClass("show").removeClass("hidden");
            }
        }
	});
</script>