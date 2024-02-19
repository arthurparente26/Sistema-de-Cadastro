<?php
    if(!empty($_GET['cpf'])){
        include_once('connection.php');

        $id = $_GET['cpf'];

        $sqlSelect = "SELECT * FROM usuarios where cpf=$id";
        $result = $connection->query($sqlSelect);

        if($result->num_rows > 0){
            while ($user_data = mysqli_fetch_assoc($result)) {
                $nome = $user_data['nome'];
                $cpf = $user_data['cpf'];
                $email = $user_data['email'];
                $telefone = $user_data['telefone'];
                $senha = $user_data['senha'];
                $dataNasc = $user_data['dataNasc'];
            }
        }else{
            header('Location: sistema.php');
        }
    }else{
        header('Location: sistema.php');
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/editar.css">
    <title>Cadastro</title>
</head>
<body>

    <nav id="navbar">
        <div id="navbar-container">
            <h1 class="logo">Sistema de Cadastro</h1>
            <ul id="navbar-items">
                <li><a href="login.html">Login</a></li>
                <li><a href="cadastro.html">Cadastro</a></li>
                <li><a href="sistema.php">Voltar</a></li>
            </ul>
        </div>
    </nav>

    <div class="cad-box">
        <h2>Cadastre-se</h2>
        <form method="post" action="saveEdit.php">
            <div class="user-box">
                <input type="text" name="nome" id="nome" class="input-user" value="<?php echo $nome ?>" required >
                <label for="nome" class="label-input">Nome</label>
            </div>
            <br><br>
            <div class="user-box">
                <input type="text" name="cpf" id="cpf" class="input-user" value="<?php echo $cpf ?>" required >
                <label for="cpf" class="label-input">CPF</label>
            </div>
            <br><br>
            <div class="user-box">
                <input type="text" name="email" id="email" class="input-user" value="<?php echo $email ?>" required >
                <label for="email" class="label-input">Email</label>
            </div>
            <br><br>
            <div class="user-box">
                <input type="text" name="telefone" id="telefone" class="input-user" value="<?php echo $telefone ?>" required >
                <label for="telefone " class="label-input">Telefone</label>
            </div>
            <br><br>
            <div class="user-box">
                <input type="password" name="senha" id="senha" class="input-user" value="<?php echo $senha ?>" required >
                <label for="senha" class="label-input">Senha</label>
            </div>
            <br>
             <label for="dataNasc">Data de Nascimento:</label>
            <input type="date" name="dataNasc" id="dataNasc" value="<?php echo $dataNasc ?>" required >
            <br><br>
                <input type="submit" value="Atualizar" name="update" id="update">
        </form>
    </div>
</body>
</html>