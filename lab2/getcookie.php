<?php 
	$userName = $_COOKIE['firstname'];
	$countryName = $_COOKIE['where'];
?>
<html>
<head> <title>Get Cookie Data</title> </head>
<body>
	<p>Hello <?php echo $userName; ?>, 
	    from <?php echo " ".$countryName; ?>! </p>
</form>
</body>
</html>