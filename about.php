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
						<div class="jumbotron" id="login-jumbotron" style="padding-bottom:1px">
							<h1>What is <b>TechFit</b>?</h1>
							<div class="well" style="margin: 55 0 55; background-color:#fff">
								<ul id="tabs" class="nav nav-tabs nav-tabs-about" data-tabs="tabs">
							            <li class="nav-li-tab active"><a href="#users" data-toggle="tab">Fitness Seekers</a></li>
							            <li class="nav-li-tab"><a href="#providers" data-toggle="tab">Trainers and Gyms</a></li>
							            <li class="nav-li-tab "><a href="#advertisers" data-toggle="tab">Advertisers</a></li>
							    </ul>
							    <div id="my-tab-content" class="tab-content text-left" style="padding-top:30px;">
							            <div class="tab-pane fade in active" id="users">
							                   <h4 style="padding-bottom:5px"><b>Discover local fitness</b></h4>
							                  <p style="font-size: 14px">
							                        TechFit brings together local trainer and gym listings, allowing you to to decide which suit you best. Filter by a variety
							                        of different fields (including unique trainer specialities and gym amenities), and sign up at the click of a button. Join TechFit today!
										</p>
							            </div>
							            <div class="tab-pane fade" id="providers">
							                   <h4 style="padding-bottom:5px"><b>Attract new clients</b></h4>
							                  <p style="font-size: 14px">
							                        TechFit can help you bring in new customers and clients with little-to-no costs. Create a unique profile today and discover the
							                        benefits of marketing within the TechFit marketplace. Join Techfit today!
										</p>
							            </div>
							            <div class="tab-pane fade" id="advertisers">
							                  <h4 style="padding-bottom:5px"><b>Advertise with us</b></h4>
							                  <p style="font-size: 14px">
							                        To advertise with TechFit, please email <b>techfitVT@gmail.com</b>.
							                        Current opportunities include company spotlights in each page sidebar (see left or right for examples).
							                        <br>
							                        <br>
							                        *Automated advertising registration will be implemented in a future release.
										</p>
							            </div>
								</div>
							</div>
							
							<a class="btn btn-primary btn-lg" href="index.php" role="button"><span class="glyphicon glyphicon-home"></span>   Home</a>
							
							<p class="text-left" style="font-size:12px;margin-top:20px">
								<small>*Please note that this site was created for use as a college course project. TechFit is not a real company and the data seen throughout the site is not valid or official by any means.</small>
							</p>
						
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
            $('.nav-tabs > li > a').hover( function(){
                 $('#tabs').tab();
            });
      });
</script>
