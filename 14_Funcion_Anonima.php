<?php
//$GLOBAL vs global 
// tratar de evitar esta practica

$num = 10; // esta es la varible GLOBAL
function doble(){
    //Con esta declaración pedimos permiso para utilizar num que está fuera de la funcion
    global $num;
    $total= $num + $num;
    print $total;
}
doble();

?>