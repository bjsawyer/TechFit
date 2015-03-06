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
        <div class="site-wrapper-inner-top">
            <div class="cover-container">
            <?
				include('templates/navMenu.php');
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