<?php
$cadena = "La nueva vida en Cristo";

//esto se afecta con las tildes
$mayuscula = strtoupper($cadena);
$minuscula = strtolower($cadena);

//cuando tiene tilde 
$mb_mayuscula = mb_strtoupper($cadena,"UTF-8");
$mb_minuscula = mb_strtolower($cadena,"UTF-8");

print "<p> Cadena ".$cadena."</p>";
print "<p> Mayuscula: ".$mayuscula."</p>";
print "<p> Miniscula: ".$minuscula."</p>";
print "<p> Mayuscula: ".$mb_mayuscula."</p>";
print "<p> Miniscula: ".$mb_minuscula."</p>";
?>