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
        <div class="site-wrapper-inner-listings">
            <div class="cover-container">
            <?
				include('templates/navMenu.php');
			?>
				<div class="inner cover">
					<div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h2 class="panel-title"><strong>Available Gyms & Trainers</strong></h2>
							</div>
							<div class="panel-body">
								<div class="well">
									<span class="well-listings-icons">
										<span><img src="bootstrap-3.3.2-dist/glyphicons_free/glyphicons/png/glyphicons-357-dumbbell.png"></img></span>
									</span>
									<span class="well-listings-text">
										<h4>Gym Sample Listing 1</h4>
										<address>
											  795 Folsom Ave, Suite 600<br>
											  San Francisco, CA 94107<br>
											  Phone: (123) 456-7890
										</address>
									</span>
								</div>
								<div class="well">
									<span class="well-listings-icons">
										<span><img src="bootstrap-3.3.2-dist/glyphicons_free/glyphicons/png/glyphicons-4-user.png"></img></span>
									</span>
									<span class="well-listings-text">
										<h4>Trainer Sample Listing 2</h4>
										<address>
											  795 Folsom Ave, Suite 600<br>
											  San Francisco, CA 94107<br>
											  Phone: (123) 456-7890
										</address>
									</span>
								</div>
								<div class="well">
									<span class="well-listings-icons">
										<span><img src="bootstrap-3.3.2-dist/glyphicons_free/glyphicons/png/glyphicons-4-user.png"></img></span>
									</span>
									<span class="well-listings-text">
										<h4>Trainer Sample Listing 2</h4>
										<address>
											  795 Folsom Ave, Suite 600<br>
											  San Francisco, CA 94107<br>
											  Phone: (123) 456-7890
										</address>
									</span>
								</div>
								<div class="well">
									<span class="well-listings-icons">
										<span><img src="bootstrap-3.3.2-dist/glyphicons_free/glyphicons/png/glyphicons-4-user.png"></img></span>
									</span>
									<span class="well-listings-text">
										<h4>Trainer Sample Listing 2</h4>
										<address>
											  795 Folsom Ave, Suite 600<br>
											  San Francisco, CA 94107<br>
											  Phone: (123) 456-7890
										</address>
									</span>
								</div>
								<div class="well">
									<span class="well-listings-icons">
										<span><img src="bootstrap-3.3.2-dist/glyphicons_free/glyphicons/png/glyphicons-4-user.png"></img></span>
									</span>
									<span class="well-listings-text">
										<h4>Trainer Sample Listing 2</h4>
										<address>
											  795 Folsom Ave, Suite 600<br>
											  San Francisco, CA 94107<br>
											  Phone: (123) 456-7890
										</address>
									</span>
								</div>
								<nav>
								    <ul class="pagination">
								        <li class="disabled">
								            <a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a>
								        </li>
								        <li class="active">
								            <a href="#">1 <span class="sr-only">(current)</span></a>
										</li>
										<li class="disabled">
								            <a href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a>
								        </li>
								    </ul>
								</nav>
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