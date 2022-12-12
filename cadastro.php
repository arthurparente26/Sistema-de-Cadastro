<?php

include_once "connection.php";

$nome       = $_POST['nome'];
$email      = $_POST['email'];
$endereco   = $_POST['endereco'];
$senha      = $_POST['senha'];

$query = "INSERT INTO usuarios(nome,email,endereco,senha) VALUES 
        ('$nome','$email','$endereco','$senha')";
        $result = mysqli_query($connection,$query);
        
        echo "Usuario cadastrado com sucesso !";

?>