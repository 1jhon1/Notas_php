<?php
$html = "<a href= 'https://www.google.com'>mi pagina</a>";
print $html."<br>";
//evitamos que el usuario nos inyecte codigo usando htmlspecialchars
print htmlspecialchars($html)."<br>";
?>