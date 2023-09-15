<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valor Predeterminado</title>
</head>
<body>
<?php
/*
Si la funcion tiene un valor predeterminado
y no se le pasa valor a la funcion, toma el 
valor predeterminado, de lo contrario el nuevo
valor asignado.
*/
function pastel($sabor = "Limon"){
    return "<p>Esto es un pastel sabor ".$sabor."</p>";
}
print pastel("chocolate");
print pastel();
?>
</body>
</html>