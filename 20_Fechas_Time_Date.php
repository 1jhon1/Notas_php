<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 
//tiempo en segundo desde el 1970
$t = time();
print "<p>".$t."</p>";
//fecha actual
$fecha = date("d/m/Y",$t);
print "<p>Fecha: ".$fecha."</p>";
//hora
$hora = date("h:i:s",$t);
print "<p> Hora: ".$hora."</p>";

$diaSemana = date("l",$t);
print "<p> Dia de la semana: ".$diaSemana."</p>";
$diaMes = date("j",$t);
print "<p> Dia del Mes: ".$diaMes."</p>";
$mes = date("F",$t);
print "<p> Mes: ".$mes."</p>";
$anio = date("Y",$t);
print "<p> Año: ".$anio."</p>";
$hora = date ("H",$t);
print "<p> Hora: ".$hora."</p>";
$ampm = date("A",$t);
print "<p> am o pm: ".$ampm."</p>";
$min = date("i",$t);
print "<p> minutos: ".$min."</p>";
?>
</body>
</html>