<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1 );
error_reporting(E_ALL);



require('config.php');
echo "Loaded host: " . $host;

$connection_string = "mysql:host=$host;dbname=$database;charset=utf8mb4";

try{
	$db = new PDO($connection_string, $username, $password);
	echo " Connected";
	$query = "create table if not exists `TestUsers`(
		`id` int auto_increment not null,
		`username` varchar(30) not null unique,
		`pin` int default 0,
		PRIMARY KEY (`id`)
		) CHARACTER SET utf8 COLLATE utf8_general_ci";
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
	$stmt = $db->prepare($query);
	print_r($stmt->errorINFO());
	$r = $stmt->execute();
	echo "<br>" . ($r>0?"Created table or already exists":"Failed to create table") . "<br>";
	unset($r);
	$insert_query = "INSERT INTO `TestUsers`(`username`,`pin`) VALUES (:username, :pin)";
	$stmt = $db->prepare($insert_query);
	$user = "JohnDoe";
	$pin = 1234;
	$r = $stmt->execute(array(":username"=> $user, ":pin"=>$pin));
	$select_query = "select * from `TestUsers` where username = :username";
	$stmt = $db->prepare($select_query);
	$stmt->execute(array(":username"=> $user));
	$result = $stmt->fetch(PDO::FETCH_ASSOC);
	echo "<br><pre>" . var_export($result, true) . "</pre><br>";
}
catch(Exception $e){
	echo $e->getMessage();
	echo "Something went wrong";
}

?>
