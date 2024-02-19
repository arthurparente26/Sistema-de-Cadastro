<?php
    if(!empty($_GET['cpf'])){
        include_once('connection.php');

        $id = $_GET['cpf'];

        $sqlSelect = "SELECT * FROM usuarios where cpf=$id";
        $result = $connection->query($sqlSelect);

        if($result->num_rows > 0){
            $sqlDelete = "DELETE FROM usuarios WHERE cpf =$id";
            $resultDelete = $connection->query($sqlDelete);
            }
        }
    header('Location: sistema.php');
?>