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
    <title>Cadastrar Músicas</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 20px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; background: rgba(220, 220, 220, 220); }
    </style>
</head>
<body>
    <center>
    <div class="wrapper">
        <h2>Cadastrar Músicas</h2>
        <p>Favor inserir nome da música, nome do artista e gênero.</p>
        <form action="arquivos.php" method="post">
            <div class="form-group">
                <label>Música</label>
                <input type="text" name="musica" class="form-control" value="">
                <span class="help-block"></span>
            </div>    
            <div class="form-group">
                <label>Artista</label>
                <input type="text" name="artista" class="form-control" value="">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label>Gênero</label>
                <input type="text" name="genero" class="form-control" value="">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Acessar">
            </div>

            <a href="teste.php" class="btn btn-primary">Consultar Músicas Cadastradas</a>
            <br><br>

            <a href="welcome.php" class="btn btn-danger">Voltar</a>

        </form>
    </div>
    </center>    
</body>
</html>