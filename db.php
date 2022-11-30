<?php
session_start();
$host = 'localhost';
$user = 'root'; 
$password = ''; 
$dbname = 'insa'; 
$dsn = '';

try{
    $dsn = 'mysql:host='.$host. ';dbname='.$dbname;

    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo 'connection failed: '.$e->getMessage();
}
?>