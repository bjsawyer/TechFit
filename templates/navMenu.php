<div class="masthead clearfix">
	<div class="inner">
		<a class="masthead-brand" href="#">
			<img alt="TechFit" src="techfit_icon.png">
		</a>
        <nav>
            <ul class="nav nav-pills" id="nav-pills-format">
                <li <?=echoActiveClassIfRequestMatches("login")?>><a href="login.php" name="Home"><span class="glyphicon glyphicon-home"></span></a></li>
		        <li><a href="#"><span name="Listings" class="glyphicon glyphicon-th-list"></span></a></li>
		        <li <?=echoActiveClassIfRequestMatches("search")?>><a href="search.php"><span name="Search" class="glyphicon glyphicon-search"></span></a></li>
            </ul>
        </nav>
  </div>
</div>
<?
	function echoActiveClassIfRequestMatches($requestUri)
	{
	    $current_file_name = basename($_SERVER['REQUEST_URI'], ".php");
	
	    if ($current_file_name == $requestUri) {
	        echo 'class="active"';
		}
	}
?>
