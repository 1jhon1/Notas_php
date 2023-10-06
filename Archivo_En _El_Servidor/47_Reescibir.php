<?php
$archivo = "datos.txt";
if (touch($archivo)) {
    $linea1 = "Lindo Pescadito,<br>";
    $linea2 = "No quiero salir";
    $linea3 = "Linea nueva";

    //abrimos con solo escritura
    //$id =fopen($archivo,"w");
    $id =fopen($archivo,"a");
    //reescribe
    fwrite($id,$linea1);
    fwrite($id,$linea2);
    fwrite($id,$linea3);

//cerramos el archivo
    fclose($id);

//leemos el archivo con solo lectura
 $id = fopen($archivo, "r");


while (!feof($id)){
    $linea = fgets($id,1024);
    print $linea;
}
fclose($id);

}
else {
    print "Error";

}
?>