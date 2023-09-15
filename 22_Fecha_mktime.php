<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
echo "Ayer en formato Unix es: " . mktime(0, 0, 0, date("m")  , date("d")-1, date("Y"));
echo "Mañana en formato Unix es: " . mktime(0, 0, 0, date("m")  , date("d")+1, date("Y"));
echo "El mes que viene en formato Unix es: " . mktime(0, 0, 0, date("m")+1, date("d"),   date("Y"));
?>
</body>
</html>