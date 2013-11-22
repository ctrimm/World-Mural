<?php
include_once('dbconnect.php');
			$allowedExts = array("gif", "jpeg", "jpg", "png");
			$extension = end(explode(".", $_FILES["file"]["name"]));
			if ((($_FILES["file"]["type"] == "image/gif")
			|| ($_FILES["file"]["type"] == "image/jpeg")
			|| ($_FILES["file"]["type"] == "image/jpg")
			|| ($_FILES["file"]["type"] == "image/pjpeg")
			|| ($_FILES["file"]["type"] == "image/x-png")
			|| ($_FILES["file"]["type"] == "image/png"))
			&& ($_FILES["file"]["size"] < 2000000)
			&& in_array($extension, $allowedExts))
			  {
			  if ($_FILES["file"]["error"] > 0)
			    {
			    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
			    }
			  else
			    {
			    echo "Upload: " . $_FILES["file"]["name"] . "<br>";
			    echo "Type: " . $_FILES["file"]["type"] . "<br>";
			    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
			    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";
			
			    if (file_exists("world/img/upload/" . $_FILES["file"]["name"]))
			      {
			      	  echo $_FILES["file"]["name"] . " already exists. ";
			      }
			    else
			      {
			      	$user = mysql_real_escape_string($_POST['user']);
			      	$description = mysql_real_escape_string($_POST['description']);
			      	$tags = mysql_real_escape_string($_POST['tags']);
				      $target_path = $_SERVER['DOCUMENT_ROOT'] . "/world/img/upload/";
				      move_uploaded_file($_FILES["file"]["tmp_name"],
				      $target_path . $_FILES["file"]["name"]);
				      echo "Stored in: " . "world/img/upload/" . $_FILES["file"]["name"];
				      $filename = $_FILES["file"]["name"];
				      #SQL STATEMENT
					  $sql = "INSERT INTO `images` (user, quick_desc, tags, imgpath) VALUES ('$user', '$description', '$tags', '$filename')";
					  echo $sql;
					  $results = mysql_query($sql) or die(mysql_query());
					  echo $results;
					 # print_r($_POST);
			      }
			    }
			  }
			else
			  {
			  echo "Invalid file";
			  }
?>