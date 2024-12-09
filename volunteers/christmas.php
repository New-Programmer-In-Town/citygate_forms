<?php
session_start();
require_once("../connection.php");
if(isset($_POST["names"]) && !empty(trim($_POST["names"])) && isset($_POST["phone"]) && !empty($_POST["phone"]) && is_numeric($_POST["phone"])){
    $name = trim($_POST["names"]);
    $phone = $_POST["phone"];
    $sql = "INSERT INTO `christmas_event` ( `FullName`, `Phone`) VALUES ( :fullName, :phoneNumber);";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":fullName",$name);
    $stmt->bindParam(":phoneNumber",$phone);
    $stmt->execute();
    $volunteers = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    header("location: ../thanks.html");
}
else{
die("error");
}


?>