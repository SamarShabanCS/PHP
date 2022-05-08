<?php
  $con = mysqli_connect("localhost","root","12345678", "bookshop");
  if (!$con) { die('Could Not Connect: ' . mysqli_error($con) . mysqli_errno($con)); }
    // Do Database Stuff Here
	
	
	// escape variables for security
$b_author = mysqli_real_escape_string($con, $_POST['author']);
$b_title = mysqli_real_escape_string($con, $_POST['title']);
$b_price = mysqli_real_escape_string($con, $_POST['price']);
$b_year = mysqli_real_escape_string($con, $_POST['year']);


	$sql="INSERT INTO book (author, title, price,year)
VALUES ('$b_author', '$b_title', '$b_price','$b_year')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
echo "1 record added";

  mysqli_close($con);
?>



  

  

  

  