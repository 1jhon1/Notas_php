<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$contador = "contador.txt";
//touch nos especifica si hay error o no, pero crea un archivo
if (touch($contador)){
    print "No hubo error con el touch()";
} else {
    print "Existio un error con el touch()";
}
?>
    
</body>
</html>