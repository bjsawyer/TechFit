<?
	// session variable setup
	if (!isset($_SESSION)) {
		session_start();
	}
	ob_start();
	
	include('autoLogin.php');
	echo  loginToUserOrProviderAccount();
	
	//print_r($_SESSION["account_record"]);
	
	if ($_SESSION["new_account_type"] == "User") {
		header('location: ../index.php');
	}else if ($_SESSION["new_account_type"] == "Trainer" || $_SESSION["new_account_type"] == "Gym") {
		header('location: ../createAccountSuccess.php');
	}
?>