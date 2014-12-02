<?php
	require_once(__DIR__ . "/database.php");
//whenever we use variable $path, the below path is inserted.
	session_start();
	$path = "/blog/";
	//making variables equal to strings
 	$host = "localhost";
 	$username = "root";
 	$password = "root";
 	$database = "blog_db";

 	if(!isset($_SESSION["connection"])) {
	 	$connection = new Database($host, $username, $password, $database);
	 	$_SESSION["connection"] = $connection;
 	}