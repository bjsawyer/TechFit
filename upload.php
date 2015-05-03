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
	$_SESSION["errorUpload"] = "";

	$target_dir = "uploads/";
	$target_file = $target_dir . basename($_FILES["profilePictureUpload"]["name"]);
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	
	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
	    $check = getimagesize($_FILES["profilePictureUpload"]["tmp_name"]);
	    if($check !== false) {
	            $uploadOk = 1;
	      } else {
	            $_SESSION["errorUpload"] .= "File is not an image. ";
	            $uploadOk = 0;
	      }
	      
		try {
			$db = $GLOBALS["db"];
			
			$id = $_SESSION["account_record"]['ProviderId'];
			
		      $planType =  $_REQUEST["selectedPlan"];
		      $profileDesc = $_REQUEST["profileDescription"];
		      $profilePicUrl = basename( $_FILES["profilePictureUpload"]["name"]);
			
			$updateSql =
			"update {$_SESSION["new_account_type"]}
			set MembershipLevel='{$planType}', ProfileDescription='{$profileDesc}', ProfilePictureUrl='{$profilePicUrl}'
			where ProviderId='{$id}'";
			
			$rsUpdate = mysqli_query($db, $updateSql);
			
			if (!$rsUpdate) {
				throw new Exception(mysqli_error($db));
			}
			
		}catch (Exception $e) {
			header('Location: errorPage.php?msg=' . $e->getMessage() . '&line=' . $e->getLine());
			exit;
		}
	}
	
	// Check file size
	if ($_FILES["profilePictureUpload"]["size"] > 2000000) {
	      $_SESSION["errorUpload"] .= "Sorry, your file is too large. ";
	      $uploadOk = 0;
	}
	
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
	      $_SESSION["errorUpload"] .= "Sorry, only JPG, JPEG, PNG & GIF files are allowed. ";
	      $uploadOk = 0;
	}
	
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
	      $_SESSION["errorUpload"] .= "Sorry, your file was not uploaded. ";
	      header('location: uploadError.php?' . $_SESSION["errorUpload"]);
	// if everything is ok, try to upload file
	} else {
	      if (move_uploaded_file($_FILES["profilePictureUpload"]["tmp_name"], $target_file)) {
	            header('location: payment.php');
	      } else {
	            $_SESSION["errorUpload"] .= "Sorry, there was an error uploading your file. ";
	            header('location: uploadError.php?' . $_SESSION["errorUpload"]);
	      }
	}
?>