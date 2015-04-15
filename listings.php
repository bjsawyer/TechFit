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
							<div class="panel-heading">
								<h2 class="panel-title"><strong>Available Gyms & Trainers</strong></h2>
							</div>
							<?
								try {
									// pulls all trainers from database
									$trainersSql = "select * from Provider inner join Trainer on Provider.ProviderId = Trainer.ProviderId order by MembershipLevel";
									$rsTrainers = mysqli_query($db, $trainersSql);
									if (!$rsTrainers) {
										throw new Exception(mysqli_error($db));
									}
									mysqli_data_seek($rsTrainers, 0);
									
									// pulls all gyms from database
									$gymsSql = "select * from Provider inner join Gym on Provider.ProviderId = Gym.ProviderId order by MembershipLevel";
									$rsGyms = mysqli_query($db, $gymsSql);
									if (!$rsGyms) {
										throw new Exception(mysqli_error($db));
									}
									mysqli_data_seek($rsGyms, 0);
									
									mysqli_close($db);
									unset($db);  
									
								}catch(Exception $e) {
									header('Location: errorPage.php?msg=' . $e->getMessage() . '&line=' . $e->getLine());
									exit;
								}
							?>						
							<?
								// sets up and displays data for trainer listing
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
							?>
							<?
								// sets up and displays data for gym listing
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
								<?
									 while($row = mysqli_fetch_array($rsTrainers, MYSQLI_ASSOC)) {
									    renderTrainerListing($row);
									 }
									 
									 while($row = mysqli_fetch_array($rsGyms, MYSQLI_ASSOC)) {
									    renderGymListing($row);
									 }
								?>
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