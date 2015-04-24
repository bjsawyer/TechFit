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
					include('templates/navMenuProvider.php');
					include('templates/sidebarLeft.php');
					include('templates/sidebarRight.php');
				?>
					<div class="inner cover">
						<div class="jumbotron" id="login-jumbotron" style="padding-bottom:1px">
							<h1>You are now signed up for <b>TechFit!</b></h1>
							<p class="text-left">Register as a premium member today and see your client interest <b>soar!</b> Premium accounts include:</p>
							<ul class="list-group text-left" style="font-size:18px">
								<li class="list-group-item"><span class="glyphicon glyphicon-chevron-right"></span> Higher ranking on Listings page*</li>
								<li class="list-group-item"><span class="glyphicon glyphicon-chevron-right"></span> Profile picture uploads</li>
								<li class="list-group-item"><span class="glyphicon glyphicon-chevron-right"></span> Space in profile for custom descriptions</li>
							</ul>
							<p style="padding-bottom:2px"><a class="btn btn-primary btn-lg" href="upgradeAccount.php" role="button"><span class="glyphicon glyphicon-flash"></span>   Upgrade</a></p>
							<p style="font-size:12px;"><small><i>*Rankings based on three premium subscription types (Platinum, Gold, Silver)</i></small></p>
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