<?php 


$serverName = 'localhost';
$username = 'root';
$password = '';
$dbName = 'mental_health' ;


$con = mysqli_connect($serverName, $username, $password, $dbName);


if (!$con) {
	die("connection failed : ". mysqli_connect_error());
}


?>