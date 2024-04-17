
<?php 

	$db['db_host'] 		= 	"localhost";
	$db['db_user'] 		= 	"root";
	$db['db_password']  = 	"";
	$db['db_name'] 		= 	"user";

	foreach ($db as $key => $value) {
		define(strtoupper($key), $value);
	}

	$connection = mysqli_connect($db['db_host'],$db['db_user'] , $db['db_password'], $db['db_name'] );
	
	if (!$connection) {
		die("Connection cannot be established");
	}
	
?>