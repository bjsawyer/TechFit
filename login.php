<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<?
		include('navMenu.php');
		include('sidebarLeft.php');
		include('sidebarRight.php');
	?>
    <!-- Begin Page Content -->
    <div class="bodyContainer" id="alignCenter">
		<div id="container1">
			<form>
				<label for="username">Username:</label>
				<input type="text" id="username" name="username">
				<label for="password">Password:</label>
				<input type="password" id="password" name="password">
				<div id="lower">
					<input type="checkbox"><label class="check" for="checkbox">Keep me logged in</label>
					<input type="submit" value="Login">
				</div><!--/ lower-->
			</form>
		</div>
		<div id="container2">
			<form>
				<label for="firstname">First Name:</label>
				<input type="text" id="firstname" name="firstname">
				<label for="lastname">Last Name:</label>
				<input type="text" id="lastname" name="lastname">
				<label for="email">E-mail Address:</label>
				<input type="text" id="email" name="email">
				<label for="password"> Password:</label>
				<input type="password" id="password" name="password">
				<label for="type"> I am:</label>
				<select>
					<option value="trainer">A trainer</option>
					<option value="client">Looking for a trainer</option>
				</select>
				<div id="CreateAccount">
					<input type="checkbox"><label class="check" for="checkbox">I agree to the Terms & Conditions</label>
					<input type="submit" value="Create">
				</div><!--/ lower-->
			</form>
		</div>
    </div><!--/ container-->
    <!-- End Page Content -->
	<?
		include('footer.php');
	?>
</body>
</html>