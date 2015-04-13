<?
	// connects to database
	require_once("connect_to_DB.php");
	connectDB();
?>
<?
	// session variable setup
	if (!isset($_SESSION)) {
		session_start();
	}
	ob_start();
?>
<?
	// verifies login information
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
				$_SESSION['account_record'] = $userArray;
				$route = "userHome.php?id=";
				$routeId = $_SESSION['account_record']['UserId'];
				$_SESSION['account_route'] = $route . $routeId;
				
				checkPasswordAndRouteToPage($_SESSION['account_record'], $_SESSION['account_route']);
			}
			elseif (count($providerArray) > 0 && count($userArray) <= 0) {
				$_SESSION["account_record"] = $providerArray;
				$route = "providerHome.php?id=";
				$routeId = $_SESSION['account_record']['ProviderId'];
				$_SESSION['account_route'] = $route . $routeId;
				
				checkPasswordAndRouteToPage($_SESSION['account_record'], $_SESSION['account_route']);
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
	
	// checks password and routes to home page if correct
	function checkPasswordAndRouteToPage($accountData, $accountRoute) {
		$loginPassword = $_REQUEST['loginPassword'];
		
		if ($loginPassword == $accountData['Password']) {
			header('Location: ' . $accountRoute);
		}else {
            print("<center><h2>Wrong email or password!</h2></center>");
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
			        <a class="navbar-brand" href="#">TechFit</a>
			    </div>
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-left" id="nav-pills-format">
		                <li <?=echoActiveClassIfRequestMatches("home")?>><a href="userHome.php" name="Home"><span class="glyphicon glyphicon-home"></span></a></li>
				        <li <?=echoActiveClassIfRequestMatches("listings")?>><a href="listings.php"><span name="Listings" class="glyphicon glyphicon-th-list"></span></a></li>
				        <li <?=echoActiveClassIfRequestMatches("search")?>><a href="search.php"><span name="Search" class="glyphicon glyphicon-search"></span></a></li>
                    </ul>
                    <?
						// checks if "login" button has been pressed
						if (isset($_REQUEST['loginSubmit'])) {
							loginToUserOrProviderAccount();
						}else {
	                        if(empty($_SESSION['account_record'])) {
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
			                $accountFirstName = $_SESSION['account_record']["FirstName"];			                
			                $accountLastName = $_SESSION['account_record']["LastName"];
			        ?>  
			            <p class="navbar-text navbar-right">Signed in as: <a href='<? print $_SESSION['account_route'] ?>' class="navbar-link" id="accountNameNav"><? print $accountFirstName . " " . $accountLastName ?></a></p>
			        <?
			            };
			        ?>
                </div>
            </div>
        </nav>
    </div>
</div>
<?
	};
?>

<?
	// determines active nav button
	function echoActiveClassIfRequestMatches($requestUri)
	{
	    $current_file_name = basename($_SERVER['REQUEST_URI'], ".php");
	
	    if ($current_file_name == $requestUri) {
	        echo 'class="active"';
		}
	}
?>
