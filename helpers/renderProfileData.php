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
	function renderData() {
		if (isset($_SESSION["newEmailLogin"])) {
			$loginEmail = $_SESSION["newEmailLogin"];
		}else {
			$loginEmail = $_SESSION['temp_email'];
		}
		
		$_SESSION["account_record"] = "";
		
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
			}
			
			mysqli_close($db);
			unset($db);  
		
		}catch(Exception $e) {
			header('Location: ../errorPage.php?msg=' . $e->getMessage() . '&line=' . $e->getLine());
			exit;
		}
	}
?>