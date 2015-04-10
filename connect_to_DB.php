<? 
	function connectDB() {
		global $db;
		$db = @mysqli_connect('localhost', 'admin', 'password', 'techfitdb_') or die ("I cannot connect to the database because: ".mysqli_connect_error());
	}
?>
