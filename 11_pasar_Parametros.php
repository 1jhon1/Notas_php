<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasar por parametros</title>
</head>
<body>
<?php
//pasar por  valor 

function saludo($nombre){
    $nombre .= "Buenos días";
}
$nombre = "Jhon Hernandez";
saludo($nombre);
print $nombre;
print "<br>";


//pasar por referencia 
function saludo2(&$nombre){
    $nombre .= "Buenos días";
}
$nombre = "Jhon Hernandez ";
saludo2($nombre);
print $nombre;
print "<br>";

$fruta = array("manzana","pera");
function frutas(&$fruta){
    array_push($fruta,"uvas");
}
frutas($fruta);
var_dump($fruta);
?>
</body>
</html>