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
						include('templates/sidebarLeft.php');
						include('templates/sidebarRight.php');
					?>
					<div class="inner cover">
						<div class="jumbotron" id="login-jumbotron">
							<h1>Welcome to TechFit!</h1>
							<p>Discover the quickest and easiest way to get active with <b>TechFit</b>, the future of fitness!</p>
							<p><a class="btn btn-primary btn-lg" href="createAccount.php" role="button">Sign up</a></p>
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
	$(document).ready(function(){    
	    $('#login-tabs-justified-ul a').click(function (e) {
			e.preventDefault()
			$(this).tab('show')
		});
	});
</script>