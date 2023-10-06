<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archivo | fopen() y fclose()</title>
</head>
<body>
<?php 

/*
"r" Apertura solo lectura
"r+" apertura para lectura y escritura
"w" Apertura para solo escritura, si el archivo no existe se intenta crear
"w+" Apertura para lectura y escritura y trunca el archivo de longitud cero
"a" Apertura para solo escritura, coloco el puntero al final del archivo 

*/
$archivo = "datos.txt";
if (touch($archivo)){
    //abrimos con "a" append
    $id = fopen($archivo,"a");
    var_dump($id);
    //cerramos 
    fclose($id);
} else {
    print "Error en el touch";

}

?> 
</body>
</html>