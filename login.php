<?php
    //ABRE UMA SESSAO 
    session_start();
    //Verifica se os dados preeenchidos foram enviados vazios
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){
        include_once('connection.php');

        $email = $_POST['email'];
        $senha = $_POST['senha'];

        //Query para buscar no bando de dados os dados enviados
        $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha =  '$senha'";

        //Executa query no db
        $result = $connection->query($sql);

        //Verifica se existe os dados no db
        if(mysqli_num_rows($result)< 1){
            $_unset['email'];
            $_unset['senha'];
            header("Location: login.php");
        }else{
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header("Location: sistema.php");
        }

    }else{
        header("Location: login.php");
    }
?>