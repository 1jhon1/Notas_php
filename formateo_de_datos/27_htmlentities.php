<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
$cadena ="Agua \"pasa\" por <b>mi casa</b>, cate <i>por mi</i>corazon";

/*
htmlentities: convierte todos los caracteres aplicables a 
entidades HTML*/
$a = htmlentities($cadena);

/*html_entity_decode: convierte todas las entidades HTML a sus
caracteres correspondientes*/
$b = html_entity_decode($a);

print $a;
print "<br>";
print $b;


?>
    
</body>
</html>