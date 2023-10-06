<?php
$archivo = fopen("Libro1.csv","r");
$inicio = true;

while (!feof($archivo)){
    #leemos el registro en formato csv
    $data =fgetcsv($archivo);
    if($inicio){
        $inicio =false;
        continue;
    }
    print $data[0].")".$data[0]."<br>";
    print $data[2].")"."<br>";
    
}
fclose($archivo);
?>