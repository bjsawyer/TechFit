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
	// verifies login information
	function loginToUserOrProviderAccount() {
		$loginEmail = $_REQUEST["loginEmail"];
		
		try {
		    $db = $GLOBALS["db"];
		    
		    $loginUserSql = "select * from User where Email = '{$loginEmail}'";
		    $loginProviderSql = "select * from Provider where Email = '{$loginEmail}'";
		    
			$rsUser = mysqli_query($db, $loginUserSql);
			$rsProviderLogin = mysqli_query($db, $loginProviderSql);
			
			// checks if query worked
			if (!$rsUser && !$rsProviderLogin) {
				throw new Exception(mysqli_error($db));
			}
			
		    // resets the record set
		    mysqli_data_seek($rsUser, 0);
		    mysqli_data_seek($rsProviderLogin, 0);
			
			$userArray = mysqli_fetch_array($rsUser);
			$providerLoginArray = mysqli_fetch_array($rsProviderLogin);
			
			// checks if login is a user or provider account
			if (count($userArray) > 0 && count($providerLoginArray) <= 0) {
				$_SESSION["account_record"] = $userArray;
				$_SESSION["account_type"] = "User";
				$route = "userProfile.php?id=";
				$routeId = $_SESSION["account_record"]['UserId'];
				$_SESSION["account_route"] = $route . $routeId;
				
				checkPasswordAndRouteToPage($_SESSION["account_record"], $_SESSION["account_route"]);
				
			}elseif (count($providerLoginArray) > 0 && count($userArray) <= 0) {
				// checks if trainer, gym, or advertiser
				$providerType = $providerLoginArray['ProviderType'];
				$providerTypeSql = "select * from Provider inner join {$providerType} on Provider.ProviderId = {$providerType}.ProviderId where Provider.Email = '{$loginEmail}'";
				$rsProvider = mysqli_query($db, $providerTypeSql);
				if (!$rsProvider) {
					throw new Exception(mysqli_error($db));
				}
				mysqli_data_seek($rsProvider, 0);
				$providerArray = mysqli_fetch_array($rsProvider);
				
				$_SESSION["account_record"] = $providerArray;
				$_SESSION["account_type"] = $_SESSION["account_record"]['ProviderType'];
				$route = "providerProfile.php?id=";
				$routeId = $_SESSION["account_record"]['ProviderId'];
				$_SESSION["account_route"] = $route . $routeId;
				
				checkPasswordAndRouteToPage($_SESSION["account_record"], $_SESSION["account_route"]);
				
			}else {
				$_SESSION["account_record"] = [];
				header('Location: index.php?loginFailed');
				exit;
			?>
				<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<strong>Error:</strong> Incorrect email or password, please try  signing in again.
				</div>
			<?
			}
			
			mysqli_close($db);
			unset($db);  
		
		}catch(Exception $e) {
			header('Location: errorPage.php?msg=' . $e->getMessage() . '&line=' . $e->getLine());
		}
	}
	
	// checks password and routes to home page if correct
	function checkPasswordAndRouteToPage($accountData, $accountRoute) {
		$loginPassword = $_REQUEST["loginPassword"];
		
		if ($loginPassword == $accountData["Password"]) {
			header('Location: ' . $accountRoute);
			exit;
		}else {
			$_SESSION["account_record"] = [];
			header('Location: index.php?loginFailed');
			exit;
		?>
			<div class="alert alert-danger alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<strong>Error:</strong> Incorrect email or password, please try  signing in again.
			</div>
		<?
			}
	}
?>
<div class="masthead clearfix">
	<div class="inner">
        <nav class="navbar navbar-default navbar-fixed-top navbar-background-color">
            <div class="container-fluid custom-page-width">
			    <div class="navbar-header">
				    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					    <span class="sr-only">Toggle navigation</span>
					    <span class="icon-bar"></span>
					    <span class="icon-bar"></span>
					    <span class="icon-bar"></span>
				    </button>
			        <a href="index.php"><img class="navbar-brand" style="margin-left: 0px; padding: 0px;" src="images/techfit_full_header.png"></a>
			    </div>
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-left" id="nav-pills-format">
                        <?
                            if (!empty($_SESSION["account_route"])) {
                        ?>
		                        <li <?=echoActiveClassIfRequestMatches($_SESSION["account_route"])?>><a href="<? print $_SESSION["account_route"] ?>" name="profile"><span class="glyphicon glyphicon-home"></span></a></li>
				        <?
				            }else {
				        ?>
				                <li <?=echoActiveClassIfRequestMatches("index")?>><a href="index.php" name="index"><span class="glyphicon glyphicon-home"></span></a></li>
				        <?
				            }
				        ?>
						        <li <?=echoActiveClassIfRequestMatches("listings")?>><a href="listings.php"><span name="Listings" class="glyphicon glyphicon-th-list"></span></a></li>
						        <li <?=echoActiveClassIfRequestMatches("search")?>><a href="search.php"><span name="Search" class="glyphicon glyphicon-search"></span></a></li>
                    </ul>
                    <?
						// checks if "login" button has been pressed
						if (isset($_REQUEST["loginSubmit"])) {
							loginToUserOrProviderAccount();
						}else {
	                        if (empty($_SESSION["account_record"])) {
                    ?>
			                    <form class="navbar-form navbar-right" role="login">
							        <div class="form-group">
							          <input type="email" class="form-control" id="userExistingEmail" name="loginEmail" placeholder="Email">
							          <input type="password" class="form-control" id="userExistingPassword" name="loginPassword" placeholder="Password">
							        </div>
							        <button type="submit" name="loginSubmit" class="btn btn-default">Log in</button>
						        </form>
			        <?
				            }else {
				                if ($_SESSION["account_type"] == "User" OR $_SESSION["account_type"] == "Trainer") {
					                $accountFirstName = $_SESSION["account_record"]["FirstName"];             
					                $accountLastName = $_SESSION["account_record"]["LastName"];
								}elseif ($_SESSION["account_type"] == "Gym" OR $_SESSION["account_type"] == "Advertiser") {
					                $accountFirstName = $_SESSION["account_record"]['ContactFirstName'];			                
					                $accountLastName = $_SESSION["account_record"]['ContactLastName'];
					            }
			        ?>
					            <a class="btn btn-default navbar-btn navbar-right" id="logoutButtonNav" role="button">Log out</a>
					            <p class="navbar-text navbar-right">Signed in as: <a href="<? print $_SESSION["account_route"] ?>" class="navbar-link" id="accountNameNav"><? print $accountFirstName . " " . $accountLastName ?></a></p>
			        <?
			                }
			            }
			        ?>
                </div>
            </div>
        </nav>
    </div>
</div>
<?
	// determines active nav button
	function echoActiveClassIfRequestMatches($requestUri)
	{
	    $current_file_name = basename($_SERVER["REQUEST_URI"], ".php");
		$requestUriLength = strlen($requestUri);
	    if ($current_file_name == $requestUri) {
	        echo 'class="active"';
		}
		else if (substr($current_file_name, 0, $requestUriLength) == $requestUri) {
			echo 'class="active"';
		}
	}
?>
<script>
    $("#logoutButtonNav").click(function() {
        $.ajax({
            url: 'templates/logout.php'
        });
        window.location.href = "index.php";
    });
</script>