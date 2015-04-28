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
			<div class="inner cover text-left">
				<div class="panel panel-default">
					<div class="panel-heading"><h3><b>Upload Error</b></h3></div>
					<div class="panel-body text-left" style="padding:50px 15px; font-size: 16px">
						<p>
							An error occurred while uploading your new profile picture.
							<br>
							Reason(s): <? print $errorUpload; ?>
							<br>
							Please <a href="javascript:history.back()"  style="color:blue">go back</a> and resubmit your plan registration.
						</p>
					</div>
				</div>
			</div>
		<?
			include('templates/footer.php');
		?>
		</div>
	</body>
</html>
<script>
