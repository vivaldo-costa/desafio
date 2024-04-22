<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "desafio";
$port = 3306;

try{
    $conn = new PDO('mysql:host=' . $host . ';port=' . $port. ';dbname=' . $dbname, $user, $pass);
    //echo "Conexão com banco de dados realizada com sucesso!";
}catch(PDOException $err){
    echo "Erro: Conexão com banco de dados não realizada com sucesso!";
}