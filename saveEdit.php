<?php

    //SALVA OS NOVOS DADOS PARA ATUALIZAÇÃO
    include_once('connection.php');

    //VERIFICA SE ALGUM DADO VAI SER ATUALIZADO
    if(isset($_POST['update'])){
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $senha = $_POST['senha'];
        $dataNasc = $_POST['dataNasc'];

        //EXECUTA O COMANDO PARA ATUALIZAR DADOS
        $sqlUpdate = "UPDATE usuarios set nome='$nome',email='$email',telefone='$telefone',
        senha='$senha',dataNasc='$dataNasc' WHERE cpf='$cpf'";

        $result = $connection->query($sqlUpdate);
    }

    header('Location: sistema.php');
?>