<?php

$dbHost = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "projetoweb"; 

$connection = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

if($connection -> connect_errno){
    echo "Erro de Conexão";
}else{
    echo "Connected !";
}
?>