<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}

$logado = $_SESSION["loggedin"];

?>
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 15px sans-serif; text-align: center; background: rgba(0, 0, 0, 0.4);}
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Olá, <b><?php echo htmlspecialchars($_SESSION["username"]); ?>
        <br>
        </b>Bem vindo ao site para cadastrar suas músicas.</h1>
    </div>
    <p>
        
        <a href="cadastro.php" class="btn btn-primary">Cadastrar Músicas</a>
        <br><br>

        <a href="teste.php" class="btn btn-primary">Consultar Músicas Cadastradas</a>
        <br><br>
        
        <a href="logout.php" class="btn btn-danger">Sair da conta</a>
    </p>
</body>
</html>