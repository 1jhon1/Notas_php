<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
// urlencode codifica como url una cadena

$string = 'PHP: Hypertext Preprocessor!';
$urlencoded_string = urlencode($string);
echo $urlencoded_string."<br>";

// urldecode decodifica una cadena cifrada como URL
$rawurlencoded_string = urldecode($urlencoded_string);
echo $rawurlencoded_string;

?>
    
</body>
</html>