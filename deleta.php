<?php
    if(!empty($_GET['cpf'])){
        include_once('connection.php');

        $id = $_GET['cpf'];

        //BUSCA CADASTROS COM OS DADOS INFORMADOS
        $sqlSelect = "SELECT * FROM usuarios where cpf=$id";
        $result = $connection->query($sqlSelect);

        //CASO EXISTA ALGUM DADO EXCLUI
        if($result->num_rows > 0){
            $sqlDelete = "DELETE FROM usuarios WHERE cpf =$id";
            $resultDelete = $connection->query($sqlDelete);
            }
        }
    header('Location: sistema.php');
?>