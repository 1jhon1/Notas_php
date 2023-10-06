<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constantes predefinidas</title>
</head>
<body>
<?php 
/* 

1) __LINE__ numero de lineas actuales en el archivo
2) __FILE__ ruta completa y nombre del archivo.
Si se usa dentro de un include, devolverá el
 nombre del fichero incluido
3)__DIR__ Directorio del archivo. Si se utiliza dentro de un include,
 devolverá el directorio del archivo  incluido 
4)__TRAIT__ El nombre del trait. El nombre del trait incluye el espacio
de nombres en el que fue declarado 
5)__METHOD__ Nombre del metodo de la clase
6) __NAMESPACE__ Nombre del espacio de nombres actual 
7) __FUNCTION__ Nombre de la función 
8) __CLASS__ Nombre de la clase */

function prueba(){
    print __LINE__." Desde dentro de la funcion"."<br>";
    print __FUNCTION__."<br>";
}
print __LINE__." Desde fuera de la funcion"."<br>";
print __FILE__."<br>";
print __DIR__."<br>";
prueba();
?>
</body>
</html>