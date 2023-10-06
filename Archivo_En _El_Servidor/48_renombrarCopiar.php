<?php 
touch("datos.txt");


//segundo parametro es donde voy a guardar la copia
#copy es para cipiar
if (copy("datos.txt","datos1.txt")) {
    print "copia de archico correcta<br> ";
}else{
    print "Error al copiar el archivo";
}

#rename renombra el archivo
if (rename("datos1.txt","datos2.txt")) {
    print "renombre  de archico correcto";
}else{
    print "Error al renombrar el archivo";
}

?>