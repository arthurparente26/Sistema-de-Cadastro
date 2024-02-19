<?php
    session_start();
    include_once('connection.php');

    //Verifica se existe sessão com os dados enviados
    if((!isset($_SESSION['email']) == true ) and (!isset($_SESSION['senha']) == true )){
        $_unset['email'];
        $_unset['senha'];
        header("Location: login.php");
    }

    $logado = $_SESSION['email'];

    $sql = "SELECT * FROM usuarios ORDER BY nome DESC";

    $result = $connection->query($sql);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
    crossorigin="anonymous">
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
    
    <br><br><br>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">CPF</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Telefone</th>
                <th scope="col">Data de Nascimento</th>
                <th scope="col">...</th>
             </tr>
        </thead>
        <tbody>
            <?php
                while ($user_data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$user_data['cpf']."</td>";
                    echo "<td>".$user_data['nome']."</td>";
                    echo "<td>".$user_data['email']."</td>";
                    echo "<td>".$user_data['telefone']."</td>";
                    echo "<td>".$user_data['dataNasc']."</td>";
                    echo "<td> acoes </td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
    </div>

</body>
</html>