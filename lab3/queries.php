<?php
  $con = mysqli_connect("localhost","root","12345678", "bookshop");
  if (!$con) { die('Could Not Connect: ' . mysqli_error($con) . mysqli_errno($con)); }
    // Do Database Stuff Here
	else
		echo 'welcome root of bookshop';	
	
	$insert = mysqli_query($con, "INSERT INTO book (year, author,title) VALUES('2017', 'ahmed ali', 'logic programming' );");
	if (!$insert) { die (mysqli_error($con));}
	else
		echo '</br>successful insert';

	$select = mysqli_query($con, "SELECT * FROM book;");
  if (!$select) { die (mysqli_error($con)); }
  else
		echo '</br>successful selset';

  $update = mysqli_query($con, "UPDATE book SET year = '2017' WHERE author LIKE 'mal';");
  if (!$update) { die (mysqli_error($con)); }
  else
		echo '</br>successful update';

  $delete = mysqli_query($con, "DELETE FROM book WHERE year LIKE '1992';");
  if (!$delete) { die (mysqli_error($con)); }
  else
		echo '</br>successful delete';
	
  mysqli_close($con);
?>



  

  

  

  