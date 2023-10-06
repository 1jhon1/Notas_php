<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
$archivo = "datos.txt";
if (touch($archivo)){
    $id = fopen($archivo,"r");
    //ciclo de lectura del archivo
    while (!feof($id)){
        //leemos un registro a la vez "newline" /n /r
        $linea = fgets($id,1024);
        print $linea;

    }
    fclose($id);
}else{
    print "Error al acceder al archivo";
    
}
?>
</body>
</html>