<?php
$filename = "teste.txt";
if(!file_exists("teste.txt")){
    $handle = fopen("teste.txt", "w");
} else {
    $handle = fopen("teste.txt", "a");
}

fwrite($handle, ($_POST['musica'])."\n");
fwrite($handle, ($_POST['artista'])."\n");
fwrite($handle, ($_POST['genero'])."\n");
fflush($handle);
fclose($handle);

$handle = fopen("teste.txt", "r");
while (!feof($handle)) {
        $line = fgets($handle);
        echo $line ."<br>";
    }
fclose($handle);
header("location: cadastro.php");
?>