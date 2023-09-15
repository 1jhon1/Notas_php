<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
 $fechaactual = getdate();
 print_r($fechaactual);
 echo "Hoy es: $fechaactual[weekday], $fechaactual[mday] de $fechaactual[month] de $fechaactual[year]";
    ?>
</body>
</html>