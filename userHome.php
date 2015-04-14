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
						<div class="panel-heading">
							<h1>Welcome to TechFit, <user's name></h1>
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