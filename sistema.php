<?php
    session_start();

    //Verifica se existe sessão com os dados enviados
    if((!isset($_SESSION['email']) == true ) and (!isset($_SESSION['senha']) == true )){
        $_unset['email'];
        $_unset['senha'];
        header("Location: login.php");
    }

    $logado = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/sistema.css">
    <title>Sistema de Diarias</title>
</head>
<body>

<nav id="navbar">
        <div id="navbar-container">
            <h1 class="logo">Sistema de Diarias</h1>
            <ul id="navbar-items">
                <li><a href="sair.php">Sair</a></li>
            </ul>
        </div>
    </nav>

    <div class = "box">
    <?php
    echo "<h1> Bem Vindo ! <br> <u>$logado</u></h1>";
    ?>
    </div>
    
</body>
</html>