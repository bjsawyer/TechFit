<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap -->
    <link href="bootstrap-3.3.2-dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

	<div class="site-wrapper">
        <div class="site-wrapper-inner">
            <div class="cover-container">
            <!-- <?
				include('templates/navMenu.php');
			?> -->
				<div class="inner cover">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h2 class="panel-title"><strong>Existing user?</strong></h2>
						</div>
						<div class="panel-body">
							<h4>Sign in here:</h4>
							<form class="form-inline">
								<div class="row row-padding">
									<div class="form-group">
										<label class="sr-only" for="userExistingEmail">Email</label>
										<input type="email" class="form-control" id="userExistingEmail" placeholder="Email">
									</div>
									<div class="form-group">
										<label class="sr-only" for="userExistingPassword">Password:</label>
										<input type="password" class="form-control" id="userExistingPassword" placeholder="Password">
									</div>
								</div>
								<div class="row row-padding">
									<div class="checkbox">
										<label>
											<input type="checkbox"> Keep me logged in
										</label>
									</div>
								</div>
								<div class="row">
									<button type="submit" class="btn btn-default">Log in</button>
								</div>
							</form>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h2 class="panel-title"><strong>New user?</strong></h2>
						</div>
						<div class="panel-body">
							<h4>Create account here:</h4>
							<form class="form-horizontal">
								<div class="form-group">
									<div class="row row-centered row-padding">
										<label class="sr-only" for="userFirstName">First Name</label>
										<div class="col-sm-6 col-centered">
		                                    <input type="text" class="form-control" id="userFirstName" placeholder="First name">
		                                    </div>
		                                </div>
		                                <div class="row row-centered row-padding">
										<label class="sr-only" for="userLastName">Last Name</label>
										<div class="col-sm-6 col-centered">
											<input type="text" class="form-control" id="userLastName" placeholder="Last name">
										</div>
									</div>
									<div class="row row-centered row-padding">
										<label class="sr-only" for="userNewEmail">Email</label>
										<div class="col-sm-6 col-centered">
		                                        <input type="email" class="form-control" id="userNewEmail" placeholder="Email">
		                                    </div>
									</div>
									<div class="row row-centered row-padding">
										<label class="sr-only" for="userNewPassword">Password</label>
										<div class="col-sm-6 col-centered">
											<input type="password" class="form-control" id="userNewPassword" placeholder="Password">
										</div>
									</div>
									<div class="row row-centered">
										<label class="sr-only"  for="type">Account type</label>
										<div class="col-sm-6 col-centered">
											<select class="form-control" id="accountType">
												<option value="trainer">I am a trainer or gym</option>
												<option value="user">I am looking for a trainer or gym</option>
											</select>
										</div>
									</div>
									<div class="row row-padding">
										<div class="checkbox">
											<label>
												<input type="checkbox"> I agree to the Terms & Conditions
											</label>
										</div>
									</div>
									<div class="row">
										<button type="submit" class="btn btn-default">Create</button>
									</div>
									</div>
								</div>
							</form>
						</div>
					</div>
					<?
						include('templates/footer.php');
					?>
				</div>
			</div>
		</div>
    </div>
    <script>
        $('.nav nav-pills li').click(function(){
            $('.nav nav-pills li').removeClass('active');
            $(this).addClass('active');
        });
    </script>
</body>
</html>