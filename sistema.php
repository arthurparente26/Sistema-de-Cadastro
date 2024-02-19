<?php
    session_start();
    include_once('connection.php');

    //Verifica se existe sessão com os dados enviados
    if((!isset($_SESSION['email']) == true ) and (!isset($_SESSION['senha']) == true )){
        $_unset['email'];
        $_unset['senha'];
        header("Location: login.php");
    }

    //GUARDA EMAIL EM VARIAVEL PARA MENSAGEM DE BOAS VINDAS
    $logado = $_SESSION['email'];
    
    //VERIFICA SE HÁ PESQUISA DE DADOS CASO NÃO EXISTA APRESENTA TODOS OS CADASTROS
    if (!empty($_GET['search'])) {
        $data = $_GET['search'];
        $sql = "SELECT * FROM usuarios WHERE cpf LIKE '%$data%' or nome LIKE '%$data%' or 
        email LIKE '%$data%' ORDER BY cpf DESC";
    }else{
        $sql = "SELECT * FROM usuarios ORDER BY nome DESC";
    }

    $result = $connection->query($sql);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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

    <br><br><br><br>

    <?php
        echo "<h1 style='color:white;text-align: center;'>Bem Vindo <u>$logado</u></h1>";
    ?>

    <div class="box-search" style= "display: flex;
    justify-content: center;
    gap: .1%;">
        <input type="search" class="form-control w-25" placeholder="Pesquisar" id = "pesquisar">
        <button onclick = "searchData()" class = "btn btn-primary">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
        </svg>
        </button>
    </div>

    <div class="m-5">
        <table class="table text-white table-bg">
            <thead>
                <tr>
                    <th scope="col">CPF</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Data de Nascimento</th>
                    <th scope="col">Senha</th>
                    <th scope="col">...</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($user_data = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>".$user_data['cpf']."</td>";
                        echo "<td>".$user_data['nome']."</td>";
                        echo "<td>".$user_data['email']."</td>";
                        echo "<td>".$user_data['telefone']."</td>";
                        echo "<td>".$user_data['dataNasc']."</td>";
                        echo "<td>".$user_data['senha']."</td>";
                        echo "<td>
                        <a class='btn btn-sm btn-primary' href='editar.php?id=$user_data[cpf]' title='Editar'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                                <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                            </svg>
                            </a> 
                            <a class='btn btn-sm btn-danger' href='deleta.php?id=$user_data[cpf]' title='Deletar'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                                    <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                                </svg>
                            </a>
                            </td>";
                        echo "</tr>";
                    }
                    ?>
            </tbody>
        </table>
    </div>

    <!-- ARQUIVO JS PARA FAZER PESQUISA -->
    <script src="js/script.js"></script>

</body>