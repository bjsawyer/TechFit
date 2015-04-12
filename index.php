<?
	// connects to database
	require_once("connect_to_DB.php");
	connectDB();
?>

<?
	// session variable setup
	session_start();
	ob_start();
?>

<?
	// declaration of session variables
	$_SESSION["user_record"] = "";
	$_SESSION["provider_record"] = "";
?>

<?
	function loginToUserOrProviderAccount() {
		$loginEmail = $_REQUEST['loginEmail'];
		
		try {
		    $db = $GLOBALS['db'];
		    
		    $loginUserSql = "select * from User where Email = '{$loginEmail}'";
		    $loginProviderSql = "select * from Provider where Email = '{$loginEmail}'";
		    
			$rsUser = mysqli_query($db, $loginUserSql);
			$rsProvider = mysqli_query($db, $loginProviderSql);
			
			// checks if query worked
			if (!$rsUser && !$rsProvider) {
				throw new Exception(mysqli_error($db));
			}
			
		    // resets the record set
		    mysqli_data_seek($rsUser, 0);
		    mysqli_data_seek($rsProvider, 0);
			
			$userArray = mysqli_fetch_array($rsUser);
			$providerArray = mysqli_fetch_array($rsProvider);
			
			// checks if login is a user or provider account
			if (count($userArray) > 0 && count($providerArray) <= 0) {
				$accountData = $userArray;
				$route = "userHome.php?id=";
				$routeId = 'UserId';
				
				checkPasswordAndRouteToPage($accountData, $route, $routeId);
			}
			elseif (count($providerArray) > 0 && count($userArray) <= 0) {
				$accountData = $providerArray;
				$route = "providerHome.php?id=";
				$routeId = 'ProviderId';
				
				checkPasswordAndRouteToPage($accountData, $route, $routeId);
			}
			else {
				print("<center><h2>Wrong email or password!</h2></center>");
			}
			
			mysqli_close($db);
			unset($db);  
		
		}catch(Exception $e) {
			header('Location: errorPage.php?msg=' . $e->getMessage() . '&line=' . $e->getLine());
		}
	}
	
	function checkPasswordAndRouteToPage($accountData, $route, $routeId) {
		$loginPassword = $_REQUEST['loginPassword'];
		$_SESSION["account_record"] = $accountData[0];
		
		if ($loginPassword == $accountData['Password']) {
			header('Location: ' . $route . $accountData[$routeId]);
		}else {
            print("<center><h2>Wrong email or password!</h2></center>");
        }
	}
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
	
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<?
	if (isset($_REQUEST['loginSubmit'])) {
		loginToUserOrProviderAccount();
	}else {
?>
<body>
	<div class="site-wrapper">
        <div class="site-wrapper-inner">
            <div class="cover-container">
	            <?
					include('templates/navMenu.php');
				?>
				<div class="inner cover">	
					<div role="tabpanel">	
						<ul class="nav nav-pills nav-justified">
							<li role="presentation" id="loginTabs" class="active"><a href="#login" role="tab"><b>Login!</b></a></li>
							<li role="presentation" id="loginTabs"><a href="#createAccount" role="tab"><b>Join!</b></a></li>
						</ul>
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane in active" id="login">
								<div class="panel panel-default">
									<div class="panel-body">
										<h4>Sign in here:</h4>
										<form class="form-inline" method="POST" action="index.php">
											<fieldset>
												<div class="row row-padding">
													<div class="form-group">
														<label class="sr-only" for="userExistingEmail">Email</label>
														<input type="email" class="form-control" id="userExistingEmail" name="loginEmail" placeholder="Email">
													</div>
													<div class="form-group">
														<label class="sr-only" for="userExistingPassword">Password:</label>
														<input type="password" class="form-control" id="userExistingPassword" name="loginPassword" placeholder="Password">
													</div>
												</div>
												<div class="row row-padding">
													<!--<div class="checkbox">
														<label>
															<input type="checkbox"> Keep me logged in
														</label>
													</div>-->
												</div>
												<div class="row">
													<button type="submit" name="loginSubmit" class="btn btn-default">Log in</button>
												</div>
											</fieldset>
										</form>
									</div>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane" id="createAccount">
								<div class="panel panel-default">
									<div class="panel-body">
										<h4>Create account here:</h4>
										<form class="form-horizontal"  method="POST" action="index.php">
											<fieldset>
												<div class="form-group">
													<div class="row row-centered row-padding">
														<label class="sr-only" for="userFirstName">First Name</label>
														<div class="col-sm-6 col-centered">
						                                    <input type="text" class="form-control" id="userFirstName" name="newFirstName" placeholder="First name">
						                                    </div>
						                                </div>
						                                <div class="row row-centered row-padding">
														<label class="sr-only" for="userLastName">Last Name</label>
														<div class="col-sm-6 col-centered">
															<input type="text" class="form-control" id="userLastName" name="newLastName" placeholder="Last name">
														</div>
													</div>
													<div class="row row-centered row-padding">
														<label class="sr-only" for="userNewEmail">Email</label>
														<div class="col-sm-6 col-centered">
						                                        <input type="email" class="form-control" id="userNewEmail" name="newEmail" placeholder="Email">
						                                    </div>
													</div>
													<div class="row row-centered row-padding">
														<label class="sr-only" for="userNewPassword">Password</label>
														<div class="col-sm-6 col-centered">
															<input type="password" class="form-control" id="userNewPassword" name="newPassword" placeholder="Password">
														</div>
													</div>
													<div class="row row-centered">
														<label class="sr-only"  for="type">Account type</label>
														<div class="col-sm-6 col-centered">
															<select class="form-control" id="accountType" name="newAccountType">
																<option value="" selected disabled>Select your account type</option>
																<option value="trainer">I am a trainer</option>
																<option value="trainer">I am with a gym</option>
																<option value="user">I am searching for a trainer or gym</option>
															</select>
														</div>
													</div>
													<div class="row row-padding">
														<div class="checkbox">
															<label>
																<input type="checkbox"> I agree to the Terms & Conditions
															</label>
														</div>
													</div>
													<div class="row">
														<button type="submit" class="btn btn-default">Create</button>
													</div>
												</div>
											</fieldset>
										</form>
									</div>
								</div>
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
<?
	}
?>
</html>

<script>
	$(document).ready(function(){    
	    $('#loginTabs a').click(function (e) {
			e.preventDefault()
			$(this).tab('show')
		});
		
		$('#myTab a[href="#login"]').tab('show');
		
		$('#myTab a[href="#createAccount"]').tab('show');
	});
</script>