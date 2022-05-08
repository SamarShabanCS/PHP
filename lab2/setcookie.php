<?php 
	if(isset($_POST['submit_button'])) {
		$user = $_POST['user'];
		$country = $_POST['country'];

		if( $user && $country ) {
			setcookie("firstname", $user, time()+3600);
			setcookie("where", $country, time()+3600);
			header( "Location:getcookie.php");
			exit();
		}
	}
?>
<html>
<head> <title>Setting Cookie</title> </head>
<body>
<form method="post" 
	action="<?php echo $_SERVER['PHP_SELF']; ?>"  >
	Enter your first name:
	<input type="text" name="user"> <br />
	Enter your country: <br />
	<input type="radio" name="country" value="India">India <br />
	<input type="radio" name="country" value="Thailand">Thailand <br />
	<input type="radio" name="country" value="Korea">South Korea <br />
       	<input type="radio" name="country" value="USA">USA <br />
	<input type="radio" name="country" value="Netherlands">Netherlands <br />
	<br /> <br />
	<input type="submit" name="submit_button" value="Submit">
</form>
</body>
</html>