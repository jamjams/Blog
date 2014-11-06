
<?php
  	# operator
	print "<h2>Php blog</h2><br/>";  

 //allows us to connect to the controller folder. 
	//want to require footer.php and header.php
	require_once(__DIR__ . "/view/header.php");
	//requireing the navigation.php
	require_once(__DIR__ . "/view/navigation.php");
	require_once(__DIR__ . "/controller/create-db.php");
	require_once(__DIR__ . "/view/footer.php");
	//has taken header.php file and inserted code into this blog.php file
?>