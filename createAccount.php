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
					<div class="inner cover">
						<div class="panel panel-default">
							<div class="page-header text-center">
									<h1>Create account <small>Sign up for TechFit </small></h1>
								</div>
							<div class="panel-body">
								<div class="well form-well">
									<form class="form-horizontal"  method="POST" action="index.php">
										<fieldset>
											<div class="form-group">
												<div class="row row-centered row-padding">
													<div class="col-sm-6 col-centered">
					                                    <input type="text" class="form-control" id="newFirstName" name="newFirstName" placeholder="First name">
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
														<input type="text" class="form-control" id="newZip" name="newZip" placeholder="Zip">
													</div>
												</div>
												<div class="row row-centered row-padding">
													<div class="col-sm-6 col-centered">
														<input type="text" class="form-control" id="newPhoneNumber" name="newPhoneNumber" placeholder="Phone">
													</div>
												</div>
												<div class="row row-centered">
													<div class="col-sm-6 col-centered">
														<select class="form-control" id="newAccountType" name="newAccountType">
															<option value="" selected disabled>Type of account</option>
															<option value="trainer">I am a trainer</option>
															<option value="gym">I am with a gym</option>
															<option value="user">I am searching for a trainer or gym</option>
														</select>
													</div>
												</div>
												<div class="row row-padding">
												</div>
												<div class="row row-button">
													<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span>   Create</button>
												</div>
											</div>
										</fieldset>
									</form>
								</div>
							</div>
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
	$(document).ready(function(){    
	    $('#login-tabs-justified-ul a').click(function (e) {
			e.preventDefault()
			$(this).tab('show')
		});
	});
	
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