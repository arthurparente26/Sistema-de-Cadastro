<?php
    if(isset($_POST['submit'])){
        include_once('connection.php');

        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $senha = $_POST['senha'];
        $dataNasc = $_POST['dataNasc'];

        $cadastroQuery = mysqli_query($connection, "INSERT INTO usuarios(nome,cpf,email,telefone,senha,dataNasc) 
        VALUES ('$nome','$cpf','$email','$telefone','$senha','$dataNasc')");
    }

?>