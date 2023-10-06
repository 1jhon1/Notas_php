<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    $archivo = "perro.jpg";
    $carpeta = "../img/";
//para ver si existe el archivo
    if (file_exists($carpeta .$archivo)) {
        if (is_file($carpeta.$archivo)) {
            print "<p>Si existe el archivo ". $archivo. " en la carpeta ".$carpeta."</p>";
        } else if (is_dir($carpeta.$archivo)){
            print "<p>Si existe la carpeta ". $archivo. " en la carpeta ".$carpeta."</p>";
        }
        
    } else {
        print "<p>No existe el archivo ". $archivo. " en la carpeta ".$carpeta."</p>";
    }
    //averiguar opendir, readir
?>

</body>
</html>