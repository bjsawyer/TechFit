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
					<div class="inner cover text-left">
						<div class="jumbotron" id="login-jumbotron" style="padding-bottom:1px">
							<h1><b>Pay now!</b></h1>
							<p class="text-center" style="font-size:14px;margin:30 0;">To pay for your new premium account, select your membership level below, click "Subscribe" and follow the instructions on Paypal.</p>
							<div class="list-group" style="padding-bottom:50px">
								<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
									<input type="hidden" name="cmd" value="_s-xclick">
									<input type="hidden" name="hosted_button_id" value="4SYQCBWQWL2ZQ">
									<table style="margin-left:auto;margin-right:auto;margin-bottom:5px;">
										<tr><td><input type="hidden" name="on0" value=""></td></tr><tr><td><select name="os0">
											<option value="Platinum">Platinum : $25.00 USD - monthly</option>
											<option value="Gold">Gold : $15.00 USD - monthly</option>
											<option value="Silver">Silver : $5.00 USD - monthly</option>
										</select> </td></tr>
									</table>
									<input type="hidden" name="currency_code" value="USD">
									<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_subscribeCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
									<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
								</form>
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