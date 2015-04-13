<div class="masthead clearfix">
	<div class="inner">
        <nav class="navbar navbar-default navbar-fixed-top navbar-background-color">
            <div class="container-fluid custom-page-width">
			    <div class="navbar-header">
				    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					    <span class="sr-only">Toggle navigation</span>
					    <span class="icon-bar"></span>
					    <span class="icon-bar"></span>
					    <span class="icon-bar"></span>
				    </button>
			        <a class="navbar-brand" href="#">TechFit</a>
			    </div>
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-left" id="nav-pills-format">
		                <li <?=echoActiveClassIfRequestMatches("home")?>><a href="home.php" name="Home"><span class="glyphicon glyphicon-home"></span></a></li>
				        <li <?=echoActiveClassIfRequestMatches("listings")?>><a href="listings.php"><span name="Listings" class="glyphicon glyphicon-th-list"></span></a></li>
				        <li <?=echoActiveClassIfRequestMatches("search")?>><a href="search.php"><span name="Search" class="glyphicon glyphicon-search"></span></a></li>
                    </ul>
                    <form class="navbar-form navbar-right" role="login">
				        <div class="form-group">
				          <input type="email" class="form-control" id="userExistingEmail" name="loginEmail" placeholder="Email">
				          <input type="password" class="form-control" id="userExistingPassword" name="loginPassword" placeholder="Password">
				        </div>
				        <button type="submit" name="loginSubmit" class="btn btn-default">Log in</button>
			        </form>
                </div>
            </div>
        </nav>
    </div>
</div>
            <!--<ul class="nav nav-pills" id="nav-pills-format">
                <li <?=echoActiveClassIfRequestMatches("home")?>><a href="home.php" name="Home"><span class="glyphicon glyphicon-home"></span></a></li>
		        <li <?=echoActiveClassIfRequestMatches("listings")?>><a href="listings.php"><span name="Listings" class="glyphicon glyphicon-th-list"></span></a></li>
		        <li <?=echoActiveClassIfRequestMatches("search")?>><a href="search.php"><span name="Search" class="glyphicon glyphicon-search"></span></a></li>
            </ul>-->
<?
	function echoActiveClassIfRequestMatches($requestUri)
	{
	    $current_file_name = basename($_SERVER['REQUEST_URI'], ".php");
	
	    if ($current_file_name == $requestUri) {
	        echo 'class="active"';
		}
	}
?>
