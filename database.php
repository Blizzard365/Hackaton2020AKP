<?php 
$host = "Hakaton";
$name = "root";
$pass = "";
$db = "database";

$link = mysqli_connect($host,$name,$pass,$db);

if($link == false){
	echo "Ошибка соединения!";
}

 ?>