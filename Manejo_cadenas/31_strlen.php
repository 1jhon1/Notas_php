<?php
//strlen me dice cuantos caracteres tiene una linea de caracteres
$cadena1 = "Mi Dios lo es todo";
print $cadena1."<br>";
print strlen($cadena1)."<br>";

//strstr buscamos en una cadena otra subcadena
$cadena2 = "Dios";
//primer valor es la cadena, segundo el valor buscado
$r =strstr($cadena1,$cadena2); 
if($r){
    print "si se encontro la subcadena ". "<b>$cadena2</b>"." en la cadena "."'".$cadena1.".";
}else{
    print "no se encontro la subcadena "."<b>$cadena2</b>"." en la cadena "."'".$cadena1."'";
}
?>