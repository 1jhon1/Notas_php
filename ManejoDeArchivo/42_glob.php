<?php 
$archivos_array = glob("*.jpg");
foreach ($archivos_array as $key => $value) {
    print "<tr>";
    print "<td>".$value."</td>";
    
    print "</tr>";
}
?>