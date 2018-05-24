<?php
$server = 'baseserv.mysql.database.azure.com';
$username = 'myapp@baseserv';
$password = '2092Acer';
$database = 'auth';

try{
	$conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch(PDOException $e){
	die( "Connection failed: " . $e->getMessage());
}
