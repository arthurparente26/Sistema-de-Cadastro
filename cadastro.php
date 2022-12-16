<!DOCTYPE html>
<html lang="pt-br">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro</title>
        <link rel="stylesheet" href="/css/cadastro.css">

        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>

<nav id="navbar">
        <div id="navbar-container">
            <h1 class="logo">Sistema de Cadastro</h1>
            <ul id="navbar-items">
                <li><a href="/login.html">Login</a></li>
                <li><a href="/cadastro.html">Cadastro</a></li>
            </ul>
        </div>
    </nav>


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
        
</body>
</html>

