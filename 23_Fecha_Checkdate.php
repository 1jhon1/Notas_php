<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php 
    if(isset($_GET['fecha'])){
        $fecha = $_GET['fecha'];
        $fecha = trim($fecha);
        if ($fecha==" ") {
            print "la fecha es requerida";
        } else {
            //explode nos divide por /
            $fecha_array = explode("/",$fecha);
            if (checkdate($fecha_array[1],$fecha_array[0],$fecha_array[2])) {
                
                print "fecha correcta: ".$fecha;
            } else {
                print "error en la fecha: ". $fecha;
            }
            
        }
        

    }
    ?>
</head>
<body>
<form action="23_Fecha_Checkdate.php" method="GET">
<input type="text" name="fecha" id="fecha" placeholder="DD/MM/YYYY">
<input type="submit" value="Enviar">
</form>
    
</body>
</html>