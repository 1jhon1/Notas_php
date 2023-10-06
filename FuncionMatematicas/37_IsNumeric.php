<?php
print is_numeric("cinco")?"verdadero":"falso";
print "<br>";
print is_numeric(5)?"verdadero":"falso";
print "<hr>";
print is_nan(acos(8))?"No es un numero (NaN)":"Si es un numero";
print "<br>";
print is_nan(acos(2))?"No es un numero (NaN)":"Si es un numero";
print "<br>";
print is_finite(log(0))?"Es un numero finito":"No es un numero finito";
print "<br>";
print is_finite(log(1))?"Es un numero finito":"No es un numero finito";
print "<br>";
print is_infinite(10/1)?"Es un numero finito":"No es un numero finito";
print "<br>";

?>