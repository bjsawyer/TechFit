<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" 
 "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <link rel="stylesheet"  href="style.css"  type="text/css"/>
</head>

<body>
	<div>
		<? 	
		print "Error message: " . $_GET["msg"];
		if(isset($_GET["line"])){
			print " - line number: " . $_GET["line"]; 
		}
		?>
		
		<br/>
		<br/>
		
	</div>
</body>
</html>