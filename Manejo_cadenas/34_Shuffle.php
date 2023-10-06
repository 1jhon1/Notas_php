<?php
$cadena = "123456789 iutedf<_+@";
//me da string aleatorios y lo hacemos que sea de 12 caracteres
$clave = substr(str_shuffle($cadena),0,12);

print "<p>Tu nueva la clave de usuario es: ".$clave."</p>"
?>