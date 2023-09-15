<?php 
$valor = 400000;
$iva = 0.19;
$calcular = ($valor * $iva) + $valor;
print "el valor a pagar es de ".$calcular."<br>"; 
//le agrega la separacion de mil
print number_format($calcular,0)."<br>";
print "cambiandole la coma ".number_format($calcular,2,",",".");
//
?>