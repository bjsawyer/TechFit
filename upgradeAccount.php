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
			
			include('helpers/profileDescriptionAndPicture.php');
			echo profilePictureAndDescriptionModal();
		?>
			<form id="register" method="POST" action="">
				<div class="inner cover">
					<div class="jumbotron" id="login-jumbotron" style="padding-bottom:1px">
						<h1>Upgrade today!</h1>
						<p class="text-left">Select your preferred subscription type below:</p>
						<div class="list-group" style="padding-bottom:50px">
							<? $icon = "glyphicon glyphicon-plus" ?>
							<button class="list-group-item text-left" style="margin-bottom: 0px;" id="optionPlatinum" name="optionPlatinum" type="button">
								<h3 class="list-group-item-heading"><span class="<? print $icon ?>" style="color:#337ab7"></span><b> PLATINUM</b><small style="padding-left:7px">$25</small></h3>
								<p class="list-group-item-text" style="font-size:16px">Our top-of-the-line subscription, you will be placed at the top of the rankings pages and generate the most client traffic!</p>
							</button>
							<button class="list-group-item text-left" style="margin-bottom: 0px;" id="optionGold" name="optionGold" type="button">
								<h3 class="list-group-item-heading"><span class="<? print $icon ?>"style="color:#337ab7"></span><b> GOLD</b><small style="padding-left:8px">$15</small></h3>
								<p class="list-group-item-text" style="font-size:16px">Our mid-level subscription, you will be placed ahead of silver subscribers as well as non-subscribers!</p>
							</button>
							<button class="list-group-item text-left" style="margin-bottom: 0px;" id="optionSilver" name="optionSilver" type="button">
								<h3 class="list-group-item-heading"><span class="<? print $icon ?>" style="color:#337ab7"></span><b> SILVER</b><small style="padding-left:8px">$5</small></h3>
								<p class="list-group-item-text" style="font-size:16px">Our third-level plan, you will be placed ahead of and receive more traffic than non-subscribers!</p>
							</button>
						</div>
						<p style="font-size:12px;" class="text-left"><small><i>*Rankings based on three premium subscription types (Platinum, Gold, Silver)</i></small></p>
					</div>
				</div>
			</form>
		<?
			include('templates/footer.php');
		?>
		</div>
	</body>
</html>
<script>
	$(document).ready(function() {
		$('.list-group').on('click', 'button', function() {		
			var type;
			if (this.id == "optionPlatinum") {
				type = "Platinum";
			}else if (this.id == "optionGold") {
				type = "Gold";
			}else if (this.id == "optionSilver") {
				type = "Silver";
			}
			$('#selectedPlan').val(type);
			$('#profileModal').modal('show');
		});
	});
</script>