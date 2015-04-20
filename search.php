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
			?>
				<div class="inner cover">
					<div>
						<form class="navbar-form" id="search-bar" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control input-lg" placeholder="Search">
                            </div>
                            <button type="submit" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-search"></span></button>
                        </form>
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