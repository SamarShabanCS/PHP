<?php
  $con = mysqli_connect("localhost","root","12345678", "bookshop");
  if (!$con) { die('Could Not Connect: ' . mysqli_error($con) . mysqli_errno($con)); }
    // Do Database Stuff Here
	
	
 $select = mysqli_query($con, "SELECT * FROM book;");
  echo mysqli_num_rows($select) . ' rows were selected.</br>';

  $update = mysqli_query($con, "UPDATE book SET year = '2016' WHERE year LIKE '2017';");
  echo mysqli_affected_rows($con) . ' rows were updated.';
	
  mysqli_close($con);
?>



  

  

  

  