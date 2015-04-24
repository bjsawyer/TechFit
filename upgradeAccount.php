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
	<div class="cover-container">
       <?
		include('templates/navMenuProvider.php');
		include('templates/sidebarLeft.php');
		include('templates/sidebarRight.php');
	?>
		<div class="inner cover">
			<div class="jumbotron" id="login-jumbotron" style="padding-bottom:1px">
				<h1>Upgrade today!</h1>
				<p class="text-left">Select your preferred subscription type below:</p>
				<div class="list-group">
					<a href="#" class="list-group-item text-left">
						<h3 class="list-group-item-heading"><span class="glyphicon glyphicon-ok-circle"></span><b> PLATINUM</b></h4>
						<p class="list-group-item-text" style="font-size:16px">Our top-of-the-line subscription, you will be placed at the top of the rankings pages and generate the most client traffic!</p>
					</a>
					<a href="#" class="list-group-item text-left">
						<h3 class="list-group-item-heading"><span class="glyphicon glyphicon-ok-circle"></span><b> GOLD</b></h4>
						<p class="list-group-item-text" style="font-size:16px">Our mid-level subscription, you will be placed at the top of the rankings pages and generate the most client traffic!</p>
					</a>
					<a href="#" class="list-group-item text-left">
						<h3 class="list-group-item-heading"><span class="glyphicon glyphicon-ok-circle"></span><b> SILVER</b></h4>
						<p class="list-group-item-text" style="font-size:16px">Our top-of-the-line subscription, you will be placed at the top of the rankings pages and generate the most client traffic!</p>
					</a>
				</div>
				<p style="padding-bottom:2px"><a class="btn btn-primary btn-lg" href="upgradeAccount.php" role="button"><span class="glyphicon glyphicon-flash"></span>   Upgrade</a></p>
				<p style="font-size:12px;"><small><i>*Rankings based on three premium subscription types (Platinum, Gold, Silver)</i></small></p>
			</div>
		</div>
	<?
		include('templates/footer.php');
	?>
	</div>
</body>
</html>