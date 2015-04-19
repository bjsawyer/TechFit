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
						include('templates/navMenu.php');
					?>
						<div class="inner cover">
							<div class="panel panel-default">
								<div class="page-header ">
									<h1>Edit Profile <small>Make changes to your profile </small></h1>
								</div>
								<?
									if (isset($_REQUEST["save"])) {
									
										$id = $_SESSION["account_record"]['UserId'];
										
										if (!isset($_REQUEST["newFirstName"])) {
											$firstName = $_REQUEST["newFirstName"];
										}else {
											$firstName = $_SESSION["account_record"]['Email'];
										}
										
										print $_REQUEST["newLastName"];
										
										if (!isset($_REQUEST["newLastName"])) {
											$lastName = $_REQUEST["newLastName"];
										}else {
											$lastName = $_SESSION["account_record"]['LastName'];
										}
										
										if (!isset($_REQUEST["newEmail"])) {
											$email = $_REQUEST["newEmail"];
										}else {
											$email = $_SESSION["account_record"]['Email'];
										}
										
										if (!isset($_REQUEST["newPassword"])) {
											$password = $_REQUEST["newPassword"];
										}else {
											$password = $_SESSION["account_record"]['Password'];
										}
										
										if (!isset($_REQUEST["newAddress"])) {
											$address = $_REQUEST["newAddress"];
										}else {
											$address = $_SESSION["account_record"]['Address'];
										}
										
										if (!isset($_REQUEST["newCity"])) {
											$city = $_REQUEST["newCity"];
										}else {
											$city = $_SESSION["account_record"]['City'];
										}
										
										if (!isset($_REQUEST["newState"])) {
											$state = $_REQUEST["newState"];
										}else {
											$state = $_SESSION["account_record"]['State'];
										}
										
										if (!isset($_REQUEST["newZip"])) {
											$zip = $_REQUEST["newZip"];
										}else {
											$zip = $_SESSION["account_record"]['ZipCode'];
										}
										
										if (!isset($_REQUEST["newPhone"])) {
											$phone = $_REQUEST["newPhone"];
										}else {
											$phone = $_SESSION["account_record"]['Phone'];
										}
										
										if (!isset($_REQUEST["newSearchingFor"])) {
											$searchingFor = $_REQUEST["newSearchingFor"];
										}else {
											$searchingFor = $_SESSION["account_record"]['SearchingFor'];
										}
										
										try {
											// updates existing record with new information
											$updateSql = "update User
														  set Email='{$firstName}',LastName='{$lastName}',Email='{$email}',Password='{$password}',Address='{$address}',City='{$city}',State='{$state}',ZipCode='{$zip}',Phone='{$phone}',SearchingFor='{$searchingFor}'
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
										exit;
										
									}else {
								?>
								<div class="well form-well">
									<form class="form-horizontal"  method="POST" action="userProfileEdit.php">
										<fieldset>
											<div class="form-group">
												<div class="row row-centered row-padding">
													<div class="col-sm-6 col-centered">
					                                    <input type="text" class="form-control" id="newEmail" name="newEmail" placeholder="First name">
					                                </div>
					                            </div>
					                            <div class="row row-centered row-padding">
													<div class="col-sm-6 col-centered">
														<input type="text" class="form-control" id="newLastName" name="newLastName" placeholder="Last name">
													</div>
												</div>
												<div class="row row-centered row-padding">
													<div class="col-sm-6 col-centered">
					                                        <input type="email" class="form-control" id="newEmail" name="newEmail" placeholder="Email">
					                                </div>
												</div>
												<div class="row row-centered row-padding">
													<div class="col-sm-6 col-centered">
														<input type="password" class="form-control" id="newPassword" name="newPassword" placeholder="Password">
													</div>
												</div>
												<div class="row row-centered row-padding">
													<div class="col-sm-6 col-centered">
														<input type="text" class="form-control" id="newAddress" name="newAddress" placeholder="Address">
													</div>
												</div>
												<div class="row row-centered row-padding">
													<div class="col-sm-6 col-centered">
														<input type="text" class="form-control" id="newCity" name="newCity" placeholder="City">
													</div>
												</div>
												<div class="row row-centered row-padding">
													<div class="col-sm-6 col-centered">
														<select class="form-control" id="newState" name="newState"></select>
													</div>
												</div>
												<div class="row row-centered row-padding">
													<div class="col-sm-6 col-centered">
														<input type="text" class="form-control" id="newZip" name="newZipCode" placeholder="Zip">
													</div>
												</div>
												<div class="row row-centered row-padding">
													<div class="col-sm-6 col-centered">
														<input type="text" class="form-control" id="newPhoneNumber" name="newPhoneNumber" placeholder="Phone">
													</div>
												</div>
												<div class="row row-centered row-padding">
													<div class="col-sm-6 col-centered">
														<select class="form-control" id="newSearchingFor" name="newSearchingFor">
															<option value="" selected disabled>Searching for</option>
															<option value="trainer">Trainer</option>
															<option value="gym">Gym</option>															
														</select>
													</div>
												</div>
												<div class="row row-padding" id="note">
													<i>* Only edit fields you wish to change</i>
												</div>
												<div class="row row-padding">
												</div>
												<div class="row row-button">
													<button type="submit" name="save" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>   Save</button>
												</div>
											</div>
										</fieldset>
									</form>
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
		var $select = $('#newState');
 
	    //request the JSON data and parse into the select element
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