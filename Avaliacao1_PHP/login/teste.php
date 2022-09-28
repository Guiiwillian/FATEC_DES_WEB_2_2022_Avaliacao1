<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}

$logado = $_SESSION["loggedin"];

?>

<?php

$myfile = fopen("teste.txt", "r") or die("Unable to open file!");

echo fread($myfile,filesize("teste.txt"));

fclose($myfile);

?>


<!DOCTYPE html>
<html lang="en">
<body>


</body>
</html>