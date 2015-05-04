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
		<title>Inquiries | Success</title>
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
			
			include('helpers/profileDescriptionAndPicture.php');
		?>
			<div class="inner cover">
				<div class="jumbotron" id="login-jumbotron">
					<h1><b>Congratulations!</b></h1>
					<p>
						<br>
						You have successfully applied to a trainer or gym!
						<br>
						<br>
						They have been notified and will contact you shortly.
					</p>
					<a href="index.php" class="btn btn-lg btn-primary" style="margin-top:20px"><span class="glyphicon glyphicon-home"></span> Home</a>
				</div>
			</div>
		<?
			include('templates/footer.php');
		?>
		</div>
	</body>
</html>