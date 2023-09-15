<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>
    <form method="post" action="valida.php">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre">
        <br>
        <label for="clave">Clave de acceso:</label>
        <input type="password" name="clave" id="clave"><br>

        <label for="estado">Estado:</label><br>
        <input type="radio" name="estado" id="soltero" value="soltero">
        <label for="soltero">Soltero</label><br>
        <input type="radio" name="estado" id="casado" value="casado">
        <label for="soltero">Casado</label><br>
        <input type="radio" name="estado" id="viudo" value="viudo">
        <label for="soltero">Viudo</label>
        <br>
        <br>
        

        <label for="idioma">Idioma:</label><br>
        <select id="idioma" name="idioma">
            <option value="Español">Español</option>
            <option value="Ingles">Ingles</option>
            <option value="Frances">Frances</option>
        </select><br>
        
        <label for="comentarios">Comentarios:</label><br>
        <textarea name="comentarios" id="comentarios"></textarea><br>

        <!-- Enviar mas de un valor, cuado usamos arreglos le dejamos el mismo nombre a la propiedad name-->
        <label>Pasatiempos:</label><br>
        <label><input type="checkbox" name="pasatiempos[]" value="Leer" id="Leer">Leer</label><br>
        <label><input type="checkbox" name="pasatiempos[]" value="Dormir" id="Dormir">Dormir</label><br>
        <label><input type="checkbox" name="pasatiempos[]" value="Ajedrez" id="Ajedrez">Ajedrez</label><br><br>

        <label>Sabor de pasteles preferidos:</label><br>

        <select multiple = "multiple" name="pasteles[]" id="pasteles">
            <option value="chocolate">Chocolate</option>
            <option value="fresa">Fresa</option>
            <option value="vainilla">Vainilla</option>
            <option value="coco">Coco</option>
            <option value="napolitano">Napolitano</option>
        </select>

        <input type="submit" value="Mandar datos">

    </form>

</body>

</html>