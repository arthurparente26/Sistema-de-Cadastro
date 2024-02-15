<?php
    //Verifica se os dados foram submitados
    if(isset($_POST['submit'])){
        include_once("connection.php");

        //Armazena dados do formulario em variaveis
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $senha = $_POST['senha'];
        $dataNasc = $_POST['dataNasc'];

        //Query de cadastro
        $cadastro = mysqli_query($connection, "INSERT INTO usuarios(nome,cpf,email,telefone,senha,dataNasc) VALUES
        ('$nome','$cpf','$email','$telefone','$senha','$dataNasc')");

    }else{
        
    }

?>