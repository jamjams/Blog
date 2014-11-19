<?php
//whenever we use variable $path, the below path is inserted.
	$path = "/blog/";
	//making variables equal to strings
 	$host = "localhost";
 	$username = "root";
 	$password = "root";
 	$database = "blog_db";

 	$connection = new Database($host, $username, $password, $database);