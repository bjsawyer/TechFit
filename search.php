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
        <div class="site-wrapper-inner-top">
            <div class="cover-container">
                  <?
				include('templates/navMenuUser.php');
				include('templates/sidebarLeft.php');
				include('templates/sidebarRight.php');
				
				if (isset($_REQUEST["searchSubmit"])) {
					header('location: searchResults.php');
				} else {
			?>
				<form method="POST" action="searchResults.php" name="searchForm" id="searchForm">
					<div class="inner cover">
						<div class="row" style="margin-top: 18%;">
						      <div class="col-sm-6 col-sm-offset-3">
						            <div class="input-group input-group-lg" data-toggle="tooltip" data-placement="top" role="tooltip" title="Search by trainer, gym, specialities, or amenities">
						                  <input type="text" class="form-control" placeholder="Search listings" name="searchKeyword" id="searchKeyword">
						                  <span class="input-group-btn">
						                        <button type="submit"name="searchSubmit" id="searchSubmit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
						                  </span>
						            </div><!-- /input-group -->
						      </div><!-- /.col-lg-6 -->
						</div>
					</div>
				</form>
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
	$(function () {
            $('[data-toggle="tooltip"]').tooltip(function() {
                  container: 'body'
            });
	})
</script>