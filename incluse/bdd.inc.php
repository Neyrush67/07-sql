<?php 
$host = 'localhost';
$db = '07-sql';
$user= 'root';
$password = '';


$bdd = new PDO('mysql:host=' . $host . ';dbname=' . $db . ';charset=utf8', $user, $password);

?>