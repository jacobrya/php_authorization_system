<?php

$host = 'localhost';
$dbname = 'myfirstdatabase';
$dbusername = 'root';
$dbpassword = 'IP8TcqDg6@Xll4Sa';

try{

    $pdo = new PDO("mysql:host=$host;dbname=$dbname",$dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e){
    die("CONNECTION FAILED: " . $e->getMessage());


}