<?php

    include_once('connection.php');

    if(isset($_POST['update'])){
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $senha = $_POST['senha'];
        $dataNasc = $_POST['dataNasc'];

        $sqlUpdate = "UPDATE usuarios set nome='$nome',email='$email',telefone='$telefone',
        senha='$senha',dataNasc='$dataNasc' WHERE cpf='$cpf'";

        $result = $connection->query($sqlUpdate);
    }

    header('Location: sistema.php');
?>