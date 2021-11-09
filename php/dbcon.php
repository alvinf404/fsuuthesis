<?php
	// $dsn = "mysql:host=localhost;dbname=fsuu";
	// $user = "root";
	// $password = "";

	// $con = mysqli_connect('localhost','root','','fsuu');

	// $pdo = new PDO($dsn, $user, $password);
	

	// if(!$pdo){
	// 	echo "Failed to connect to our mySQL database";
	// 	exit();
	// }else if(!$con){
	// 	die('Please check your connection'.mysqli_error());
	// }

	$dsn = "mysql:host=localhost;dbname=fsuu";
	$user = "root";
	$password = "";

	$servername = "localhost";
	$username = "root";
	$password = "";

	try {
		$con = mysqli_connect('localhost','root','','fsuu');
		$pdo = new PDO($dsn, $user, $password);

		$conn = new PDO("mysql:host=$servername;dbname=fsuu", $username, $password);
		// set the PDO error mode to exception
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		// echo "Connected successfully"; 
		}
	catch(PDOException $e)
		{
		 echo "Connection failed: " . $e->get/Message();
		}
?>