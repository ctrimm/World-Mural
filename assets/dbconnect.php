<?php

	//STARTS THE SESSION
	session_start();
	
	//CONNECTS TO DATABASE (MODIFY TO YOUR SETTINGS)
	$dbhost = "mysql.corytrimm.com"; // this will ususally be 'localhost', but can sometimes differ  
	$dbname = "artsytourdatabase"; // the name of the database that you are going to use for this project  
	$dbuser = "cdt5058"; // the username that you created, or were given, to access your database  
	$dbpass = "040219907IV2m22i"; // the password that you created, or were given, to access your database  
	  
	mysql_connect($dbhost, $dbuser, $dbpass) or die("MySQL Error: " . mysql_error());  
	mysql_select_db($dbname) or die("MySQL Error: " . mysql_error());  
?>