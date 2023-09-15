<?php 
if(isset($_GET['quien'])){
    $quien = $_GET['quien'];
    if ($quien == 'perro') {
        // Esto reedirecciona a otra pagina
        header('location:formularioPerro.php');
    } else {
        header('location:formularioGato.php');
    }
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Header</title>
</head>
<body>
    <form action="18_formulario_Header.php" method="get">
    <label for="">¿Que soy?</label>
    <input type="radio" name="quien" id="perro" value="perro">
    <label for="perro">Perro</label>
    <input type="radio" name="quien" id="gato" value="gato">
    <label for="gato">Gato</label>

    <input type="submit" value="Enviar">
    </form>
</body>
</html>