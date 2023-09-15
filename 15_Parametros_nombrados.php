<?php 
//La idea es nombrar los parametros con ":"

function ciclo(int $inicio, int $final, int $paso){
    for($i = $inicio; $i < $final; $i += $paso){
        print $i."<br>";
    }
    
}

ciclo(inicio:5, final:56, paso:5);


?>