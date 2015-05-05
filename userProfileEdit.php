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
			<title>Edit Profile</title>      
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
						include('templates/navMenuUser.php');
					?>
						<div class="inner cover">
							<div class="panel panel-default">
								<div class="page-header ">
									<h1>Edit Profile <small>Make changes to your profile </small></h1>
								</div>
								<?
									if (isset($_REQUEST["newUserSubmit"])) {
									
										$id = $_SESSION["account_record"]['UserId'];
										
										if ($_REQUEST["newFirstName"] != "") {
											$firstName = $_REQUEST["newFirstName"];
											$_SESSION["account_record"]['FirstName'] = $firstName;
											$_SESSION["account_record"][1] = $firstName;
										}else {
											$firstName = $_SESSION["account_record"]['FirstName'];
										}
										
										if ($_REQUEST["newLastName"] != "") {
											$lastName = $_REQUEST["newLastName"];
											$_SESSION["account_record"]['LastName'] = $lastName;
											$_SESSION["account_record"][2] = $lastName;
										}else {
											$lastName = $_SESSION["account_record"]['LastName'];
										}
										
										if ($_REQUEST["newEmail"] != "") {
											$email = $_REQUEST["newEmail"];
											$_SESSION["account_record"]['Email'] = $email;
											$_SESSION["account_record"][3] = $email;
										}else {
											$email = $_SESSION["account_record"]['Email'];
										}
										
										if ($_REQUEST["newPassword"] != "") {
											$password = $_REQUEST["newPassword"];
											$_SESSION["account_record"]['Password'] = $password;
											$_SESSION["account_record"][4] = $password;
										}else {
											$password = $_SESSION["account_record"]['Password'];
										}
										
										if ($_REQUEST["newGender"] != "") {
											$gender = $_REQUEST["newGender"];
											$_SESSION["account_record"]['Gender'] = $gender;
											$_SESSION["account_record"][5] = $gender;
										}else {
											$gender = $_SESSION["account_record"]['Gender'];
										}
										
										if ($_REQUEST["newAddress"] != "") {
											$address = $_REQUEST["newAddress"];
											$_SESSION["account_record"]['Address'] = $address;
											$_SESSION["account_record"][6] = $address;
										}else {
											$address = $_SESSION["account_record"]['Address'];
										}
										
										if ($_REQUEST["newCity"] != "") {
											$city = $_REQUEST["newCity"];
											$_SESSION["account_record"]['City'] = $city;
											$_SESSION["account_record"][7] = $city;
										}else {
											$city = $_SESSION["account_record"]['City'];
										}
										
										if ($_REQUEST["newState"] != "") {
											$state = $_REQUEST["newState"];
											$_SESSION["account_record"]['State'] = $state;
											$_SESSION["account_record"][8] = $state;
										}else {
											$state = $_SESSION["account_record"]['State'];
										}
										
										if ($_REQUEST["newZip"] != "") {
											$zip = $_REQUEST["newZip"];
											$_SESSION["account_record"]['ZipCode'] = $zip;
											$_SESSION["account_record"][9] = $zip;
										}else {
											$zip = $_SESSION["account_record"]['ZipCode'];
										}
										
										if ($_REQUEST["newPhone"] != "") {
											$phone = $_REQUEST["newPhone"];
											$_SESSION["account_record"]['Phone'] = $phone;
											$_SESSION["account_record"][10] = $phone;
										}else {
											$phone = $_SESSION["account_record"]['Phone'];
										}
										
										if ($_REQUEST["newSearchingFor"] != "") {
											$searchingFor = $_REQUEST["newSearchingFor"];
											$_SESSION["account_record"]['SearchingFor'] = $searchingFor;
											$_SESSION["account_record"][11] = $searchingFor;
										}else {
											$searchingFor = $_SESSION["account_record"]['SearchingFor'];
										}
										
										try {
											// updates existing record with new information
											$updateSql = 
											"update User
											set FirstName='{$firstName}',LastName='{$lastName}',Email='{$email}',Password='{$password}',Gender='{$gender}',Address='{$address}',City='{$city}',State='{$state}',ZipCode='{$zip}',Phone='{$phone}',SearchingFor='{$searchingFor}'
											where UserId='{$id}'";											
											$rsUpdate = mysqli_query($db, $updateSql);
											
											if (!$rsUpdate) {
												throw new Exception(mysqli_error($db));
											}
											
										}catch (Exception $e) {
											header('Location: errorPage.php?msg=' . $e->getMessage() . '&line=' . $e->getLine());
											exit;
										}
										
										header('Location: index.php');
										
									}else {
								?>
								<div class="well form-well">
									<? include('helpers/newUserInformation.php'); ?>
								</div>
								<?
									}
								?>
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
	<script>
		$(document).ready(function() {
			$('#userForm').addClass("show").removeClass("hidden");
		})
	</script>