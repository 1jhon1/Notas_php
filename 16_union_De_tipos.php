<?php 
// puedo esperar un entero o un decimal con "|"
function suma($a, $b) :int | float {
return $a + $b;
}
print suma(10, 5.5);

?>