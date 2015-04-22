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
						include('templates/navMenuIndex.php');
						include('templates/sidebarLeft.php');
						include('templates/sidebarRight.php');
					?>
					<?
						if (isset($_REQUEST["newUserSubmit"])) {
							try {
							    $db = $GLOBALS["db"];
							    
							    $firstName = $_REQUEST["newFirstName"];
							    $lastName = $_REQUEST["newLastName"];
							    $email = $_REQUEST["newEmail"];
							    $password = $_REQUEST["newPassword"];
							    $gender = $_REQUEST["newGender"];
							    $address = $_REQUEST["newAddress"];
							    $city = $_REQUEST["newCity"];
							    $state = $_REQUEST["newState"];
							    $zip = $_REQUEST["newZip"];
							    $phone = $_REQUEST["newPhone"];
							    $searchingFor = $_REQUEST["newSearchingFor"];
							   
							    $newUserSql = "insert into User (FirstName, LastName, Email, Password, Gender, Address, City, State, ZipCode, Phone, SearchingFor)
							                   values ('{$firstName}', '{$lastName}', '{$email}', '{$password}', '{$gender}', '{$address}', '{$city}', '{$state}', '{$zip}', '{$phone}', '{$searchingFor}')";
							    
								$rsNewUser = mysqli_query($db, $newUserSql);
								
								// checks if query worked
								if (!$rsNewUser) {
									throw new Exception(mysqli_error($db));
								}
								
								mysqli_close($db);
								unset($db);  
							
							}catch(Exception $e) {
								header('Location: errorPage.php?msg=' . $e->getMessage() . '&line=' . $e->getLine());
							}
						}else if (isset($_REQUEST["newTrainerSubmit"])) {
						
						}else if (isset($_REQUEST["newGymSubmit"])) {
						
						}else {
					?>
					<div class="inner cover">
						<div class="panel panel-default">
							<div class="page-header text-center">
									<h1>Create account <small>Sign up for TechFit </small></h1>
								</div>
							<div class="panel-body">
								<div class="well form-well">
									<div class="row row-centered">
										<div class="col-sm-6 col-centered">
											<select class="form-control" id="newAccountType" name="newAccountType">
												<option value="" selected disabled>Type of account</option>
												<option value="Trainer">Trainer</option>
												<option value="Gym">Gym</option>
												<option value="User">Trainer or gym seeker</option>
											</select>
										</div>
									</div>
									<div class="row row-padding">
									</div>
									<?
										include('helpers/createNewTrainer.php');
										
										include('helpers/createNewUser.php');
										
										//include('helpers/createNewGym.php');
									?>
								</div>
							</div>
						</div>
					</div>
					<?
						}
						
						include('templates/footer.php');
					?>
				</div>
			</div>
	    </div>
	</body>
</html>
<script>

	function clearPage() {
		$('#trainerForm').addClass("hidden").removeClass("show");
		$('#gymForm').addClass("hidden").removeClass("show");
		$('#userForm').addClass("hidden").removeClass("show");
	};
	
	$(document).ready(function() {     
	    
	    $('#login-tabs-justified-ul a').click(function (e) {
			e.preventDefault();
			$(this).tab('show');
		});
		
		clearPage();
	
	});
	
	$('#newAccountType').on('change', function() {
	
		// determines which form to display
            var accountType = ( this.value );
            
            if (accountType == "Trainer") {
                  clearPage();
			$('#trainerForm').addClass("show").removeClass("hidden");
		} else if (accountType == "Gym") {
			clearPage();
			//$('#gymForm').addClass("show").removeClass("hidden");
		} else if (accountType == "User") {
			clearPage();
			$('#userForm').addClass("show").removeClass("hidden");
		} else {
			clearPage();
		}
		
	});
	
	// populates state selects
      var $select = $('.newState');
 
	// request the JSON data and parse into the select element
	$.getJSON('us_states.json', function(data){
		 
		 //clear the current content of the select
		$select.html('');
		$select.find('option').remove();
		$('<option selected disabled>').val("").text("State").appendTo($select);                          
		
		$.each(data, function(key, value) {              
	            $('<option>').val(key).text(value).appendTo($select);
		});
		
		console.log($select.html());
       });
	
</script>