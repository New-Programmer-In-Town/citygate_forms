<?php
$server = "localhost";
$username = "root";
$password  = "";
$db = "citygate";

try{
    $pdo = new PDO("mysql:host=$server;dbname=$db",$username,$password);

}catch(PDOException $e){
    echo "Connection to database Failed! Error: " . $e->getMessage();
    die();
}
