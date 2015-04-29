<?
	// session variable setup
	if (!isset($_SESSION)) {
		session_start();
	}
	ob_start();
?>
<?
	// connects to database
	require_once("../connect_to_DB.php");
	connectDB();
?>
<?
	if (isset($_POST["applyButtonTrainer"])) {
		try {
			$db = $GLOBALS["db"];
			
			$userId = $_SESSION["account_record"]['UserId'];
			$providerId = $_REQUEST["providerData"];
			$requestDate = date("Y-m-d");
			
			$addSql = 
			"insert into AE_TrainingRegistration(UserId, ProviderId, RequestDate)
			values('{$userId}', '{$providerId}', '{$requestDate}')";
			
			$rsAdd = mysqli_query($db, $addSql);
			
			if (!$rsAdd) {
				throw new Exception(mysqli_error($db));
			}
			
			header('location: ../inquirySuccess.php');
			
		}catch (Exception $e) {
			header('Location: errorPage.php?msg=' . $e->getMessage() . '&line=' . $e->getLine());
			exit;
		}
	}elseif (isset($_POST["applyButtonGym"])) {
		try {
			$db = $GLOBALS["db"];
			
			$userId = $_SESSION["account_record"]['UserId'];
			$providerId = $_REQUEST["providerData"];
			$requestDate = date("Y-m-d");
			
			$addSql = 
			"insert into AE_GymMembership(UserId, ProviderId, RequestDate)
			values('{$userId}', '{$providerId}', '{$requestDate}')";
			
			$rsAdd = mysqli_query($db, $addSql);
			
			if (!$rsAdd) {
				throw new Exception(mysqli_error($db));
			}
			
			header('location: ../inquirySuccess.php');
			
		}catch (Exception $e) {
			header('Location: errorPage.php?msg=' . $e->getMessage() . '&line=' . $e->getLine());
			exit;
		}
	}
?>