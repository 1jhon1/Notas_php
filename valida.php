<?php
// $nombre = $_GET['nombre'];
// print "<p>Bienvenido ".$nombre." a nuestra página</p>";

/************************
 * Recibimos los datos
 ************************/
$nombre = $_POST['nombre'];
$idioma = $_POST['idioma'];
$clave  = $_POST['clave'];
$estado = $_POST['estado'];
$comentarios = $_POST['comentarios'];
//recibimos como arreglo
$pasatiempos = $_POST['pasatiempos'];
$pasteles = $_POST['pasteles'];
/************************
 * Validamos los datos
 ************************/
$error = array();
if( $nombre == ""){
    array_push($error, "Error: el nombre de usuario no puede estar vacio");

}
if($clave == ""){
        array_push($error, "Error: la clave de acceso no puede estar vacia");

}
if($comentarios == ""){
        array_push($error, "Error: El comentario no puede estar vacio");

}
if($estado == ""){
        array_push($error, "Error: El estado no puede estar vacio");

}
if($idioma == ""){
        array_push($error, "Error: El idioma no puede estar vacio");

}

if(count($error)>0){
    print "<ul";
    foreach ($error as $key => $value){
        print "<li>".$value."</li>";
    }
    print "</ul>"; 
}else {



/************************
 * Procesamos los datos
 ************************/
print "<p>Bienvenido ".$nombre." a nuestra pagina </p>";
print "<p>idioma: ".$idioma." </p>";
print "<p>clave: ".$clave." </p>";
print "<p>estado: ".$estado." </p>";
print "<p>comentario: ".$comentarios." </p>";

print "<p>Num. pasatiempos: ".count($pasatiempos)."</p>";
print "<ol>";
foreach ($pasatiempos as $key => $value){
    print "<li>".$value."</li>";
}

print "</ol>";

print "<p> Sabor de pasteles: ".count($pasteles)."</p>";
print "<ol>";
foreach ($pasteles as $llave => $valor){
    print "<li>".$valor."</li>";
}

print "</ol>";
}
?>