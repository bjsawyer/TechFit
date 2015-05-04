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
<?
	if (!empty($_SESSION['account_record'])) {
		header('Location: ' . $_SESSION['account_route']);
	}else {
?>
<html>
	<head>
		<title>TechFit</title>
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
					?>
					<div class="inner cover">
						<div class="jumbotron" id="login-jumbotron">
							<h1 style="padding-bottom: 15px;">Welcome to <text id="h1-slimjoe"><b>Tech</text><text id="h1-bigjohn">Fit</text></h1>
							<p>Discover the quickest and easiest way to get active with TechFit, the future of fitness!</p>
							<p><a class="btn btn-primary btn-lg" href="createAccount.php" role="button"><span class="glyphicon glyphicon-circle-arrow-up"></span>   Sign up</a></p>
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
	};
?>