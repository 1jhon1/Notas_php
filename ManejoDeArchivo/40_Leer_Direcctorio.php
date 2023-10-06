<?php 
$dir = "../img/";
$archivos1 = scandir($dir);
$archivos2 = scandir($dir,1);

foreach ($archivos1 as $key => $value) {
    print "[".$key."]=>".$value."<br>";
}
print "<br><br>";
foreach ($archivos2 as $key => $value) {
    print "[".$key."]=>".$value."<br>";
}
?>