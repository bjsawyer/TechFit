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
	function login() {
		$loginEmail = $_REQUEST['loginEmail'];
		$loginPassword = $_REQUEST['loginPassword'];
		
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
				$route = "userHome.php";
				$routeId = "UserId";
				
				while ($row = $accountData) {
					$_SESSION["account_record"] = $row;
					if ($loginPassword == $row['Password']) {
						header('Location: ' . $route);
					}else {
			            print("<center><h2>Wrong email or password!</h2></center>");
			        }
				}
			}
			elseif (count($providerArray) > 0 && count($userArray) <= 0) {
				$accountData = $providerArray;
				$route = "providerHome.php";
				$routeId = "ProviderId";
				
				while ($row = $accountData) {
					$_SESSION["account_record"] = $row;
					if ($loginPassword == $row['Password']) {
						header('Location: ' . $route);
					}else {
			            print("<center><h2>Wrong email or password!</h2></center>");
			        }
				}
			}
			else {
				print("<center><h2>Wrong email or password!</h2></center>");
			}
			
			//while ($row = mysqli_fetch_array($rsUser)) {
			//	$_SESSION["account_record"] = $row;
			//	if ($loginPassword == $row['Password']) {
			//		header('Location: userHome.php');
			//	}else {
		    //        print("<center><h2>Wrong email or password!</h2></center>");
		    //    }
			//}
			
			mysqli_close($db);
			unset($db);  
		
		}catch(Exception $e) {
			header('Location: errorPage.php?msg=' . $e->getMessage() . '&line=' . $e->getLine());
		}
	}
?>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap -->
    <link href="bootstrap-3.3.2-dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

						<?
							if (isset($_REQUEST['loginSubmit'])) {
								login();
							}else {
						?>
<body>
	<div class="site-wrapper">
        <div class="site-wrapper-inner">
            <div class="cover-container">
            <!-- <?
				include('templates/navMenu.php');
			?> -->
				<div class="inner cover">				
					<div class="panel panel-default">
						<div class="panel-heading">
							<h2 class="panel-title"><strong>Existing user?</strong></h2>
						</div>
						<div class="panel-body">
							<h4>Sign in here:</h4>
							<form class="form-inline" method="POST" action="index.php">
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
							</form>
						</div>
					</div>	
					<div class="panel panel-default">
						<div class="panel-heading">
							<h2 class="panel-title"><strong>New user?</strong></h2>
						</div>
						<div class="panel-body">
							<h4>Create account here:</h4>
							<form class="form-horizontal"  method="POST" action="index.php">
								<div class="form-group">
									<div class="row row-centered row-padding">
										<label class="sr-only" for="userFirstName">First Name</label>
										<div class="col-sm-6 col-centered">
		                                    <input type="text" class="form-control" id="userFirstName" placeholder="First name">
		                                    </div>
		                                </div>
		                                <div class="row row-centered row-padding">
										<label class="sr-only" for="userLastName">Last Name</label>
										<div class="col-sm-6 col-centered">
											<input type="text" class="form-control" id="userLastName" placeholder="Last name">
										</div>
									</div>
									<div class="row row-centered row-padding">
										<label class="sr-only" for="userNewEmail">Email</label>
										<div class="col-sm-6 col-centered">
		                                        <input type="email" class="form-control" id="userNewEmail: placeholder="Email">
		                                    </div>
									</div>
									<div class="row row-centered row-padding">
										<label class="sr-only" for="userNewPassword">Password</label>
										<div class="col-sm-6 col-centered">
											<input type="password" class="form-control" id="userNewPassword" placeholder="Password">
										</div>
									</div>
									<div class="row row-centered">
										<label class="sr-only"  for="type">Account type</label>
										<div class="col-sm-6 col-centered">
											<select class="form-control" id="accountType">
												<option value="trainer">I am a trainer or gym</option>
												<option value="user">I am looking for a trainer or gym</option>
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
								</div>
							</form>
						</div>
					</div>
					<?
						include('templates/footer.php');
					?>
				</div>
			</div>
		</div>
    </div>
</body>

						<?
							}
						?>
</html>

<script>
    $('.nav nav-pills li').click(function(){
        $('.nav nav-pills li').removeClass('active');
        $(this).addClass('active');
    });
</script>