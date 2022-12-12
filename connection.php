<?php

$dbHost = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "usuarios"; 

$connection = new mysqli ($dbHost,$dbUsername,$dbPassword,$dbName);

/*if($connection -> connect_errno)
{
    echo "Erro de Conexão";
}
else
{
    echo "conexão efetuada com sucesso";
}*/

?>