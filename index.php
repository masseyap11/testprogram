<?php


//$host="192.168.0.5"; 
$host="localhost";
$user="root";
$pass="root";
$db="testprogram";
try {
	$PDO=new PDO("mysql:host=$host;dbname=$db", $user, $pass);
}
catch(Exception $e) {
	echo $e->getMessage();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Hello, Angela!</title>
</head>
<body>
This page will access the database "test program"
<h1>TEST PROGRAM</h1>
</body>
</html>