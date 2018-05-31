<?php
$user = "screenan_admin";
$pass = "Q123werty";
$host = "";
$tb = "screenan_Joe"; 

    $pdo = new PDO('mysql:host=localhost;dbname='.$tb, $user, $pass);
    $pdo->exec("set names utf8");
    
?>