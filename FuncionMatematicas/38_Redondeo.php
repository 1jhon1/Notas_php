<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
print "<h1>Valor absoluto abs()</h1>";
//abs regresa el valor absoluto
print abs(-5)."<br>";
print abs(5)."<br>";
print "<hr>"."<br>";
print "<h1>Redondeo hacia arriba ceil()</h1>";
//ceil regresa el valor decimal hacia arriba
print ceil(-5.43)."<br>";
print ceil(5.67)."<br>";
print "<hr>";
//round redondea de 5 hacia arriba, menor a 5 trunca los decimales
print "<h1>Redondeo  round()</h1>";
print round(-5.43)."<br>";
print round(5.67)."<br>";
print "<hr>";
// floor trunca los decimales
print "<h1>Redondeo hacia abajo floor()</h1>";
print floor(-5.43)."<br>";
print floor(5.67)."<br>";
print "<hr>";
//max valor maximo de una lista 
print "<h1>valor maximo()</h1>";
print max(-5.43,8,10,100)."<br>";

print "<hr>";
// min valor minimo de una lista de valores 
print "<h1>valor minimo()</h1>";
print min(-5.43,5,4,7,28)."<br>";

print "<hr>";
?>
</body>
</html>