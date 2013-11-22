<?php

include_once('dbconnect.php'); 

session_start();

#NEED TO ADD:
  # Error Handling
  # Redirecting to Proper Pages

 if (isset($_POST)) {
 	$image = $_POST['image'];
	$user = $_POST['user'];
	$xposition = $_POST['xposition'];
	$yposition = $_POST['yposition'];
	$description = $_POST['description'];
	$tags = $_POST['tags'];
	 
 	$sql = "INSERT INTO `annotations` (image_id, user, xcoordinate, ycoordinate, description, tags) VALUES ('$image', '$user', '$xcoordinate', '$ycoordinate', '$description', '$tags')";
	echo $sql;
	$results = mysql_query($sql) or die(mysql_query());
	echo $results;
	echo "<br>";
	echo "Head back to the <a href='http://www.corytrimm.com/world/image.php?id=$image'>image</a> to see your annotation";
 }
 else {
 	echo "You seem to be in the wrong place, please go back <a href='http://www.corytrimm.com/world/'>Home</a>";
 }

?>