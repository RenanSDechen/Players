<?php 
    $host="localhost";
    $user="root";
    $pass = "";
    $dbname ="playersservico";
    $port = "3306";

    try{
        $conn = new PDO("mysql:host=$host;port=$port;dbname=" . $dbname, $user,$pass);
    
    }catch(PDOException $err){
        echo " Erro: " . $err->getMessage();
    }
?>