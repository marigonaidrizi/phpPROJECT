<?php 

$user="root";
$pass="";
$host="localhost";
$db="gym_db";


try {
	$conn=new PDO("mysql:host=$host;dbname=$db",$user,$pass);
} catch (Exception $e) {
	echo "work";
}


 ?>