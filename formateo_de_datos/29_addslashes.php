<?php
$cadena = "'Dios' 'e's fiel";
//addslashes coloca barra invertida donde esta las comillas simples
$cadena = addslashes($cadena);
print $cadena."<br>";
//stripslashes coloca nuevamente en orden
$cadena = stripslashes($cadena);
print $cadena."<br>";
?>
 