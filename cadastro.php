<?php
    //VERIFICA SE OS DADOS FORAM ENVIADOS PELO BOTÃO
    if(isset($_POST['submit'])){
        include_once('connection.php');

        //GUARDA VALORES DIGITADOS EM VARIAVES
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $senha = $_POST['senha'];
        $dataNasc = $_POST['dataNasc'];

        //QUERY PARA CADASTRO
        $cadastroQuery = mysqli_query($connection, "INSERT INTO usuarios(nome,cpf,email,telefone,senha,dataNasc) 
        VALUES ('$nome','$cpf','$email','$telefone','$senha','$dataNasc')");
    }

?>