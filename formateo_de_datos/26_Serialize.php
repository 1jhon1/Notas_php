<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formato serialize()</title>
</head>
<body>
<?php
    $arreglo = array(
        "fruta" => "manzana",
        "equipo" => "MacPro",
        "animales" => array(
            "perro",
            "gato",
            "raton"
        ));
    //serializamos
    $cadena = serialize($arreglo);
    print $cadena."<br>";

    //Deserializamos
    $arreglo2 = unserialize($cadena);
    print var_dump($arreglo2)."<br>";
    //llamamos individual
    print $arreglo2["animales"][1];
    

    
?>
    
</body>
</html>