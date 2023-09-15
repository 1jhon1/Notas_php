<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plantilla animales</title>
    <?php 
    if(isset($_GET['animal'])){
        $animal = $_GET['animal'];
        if($animal ==1){
            $titulo = 'Perro';
            $imagen = 'perro.jpg';
        }
        if($animal ==2){
            $titulo = 'Gato';
            $imagen = 'gato.Avif';
        }
        if($animal ==3){
            $titulo = 'Leon';
            $imagen = 'leon.jfif';
        }
        if($animal ==4){
            $titulo = 'Ballena';
            $imagen = 'ballena.jfif';
        }
    }
    ?>


</head>
<body>
    <h1>Soy un <?php print $titulo; ?></h1>
    <img src="<?php print 'img/'.$imagen ?>" alt="imagen" width="500">
    
</body>
</html>