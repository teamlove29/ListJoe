<?php
$user = "root";
$pass = "";
$host = "";
$tb = "joe"; 

    $pdo = new PDO('mysql:host=localhost;dbname='.$tb, $user, $pass);
    $pdo->exec("set names utf8");
    
?>