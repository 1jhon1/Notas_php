<?php 
/* dirname() Devuelve la ruta de un directorio padre.
   basename() Devuelve el ultimo componente de nombre de una ruta
   pathinfo() Devuelve información acerca de la ruta de un fichero
   realpath() Devuelve el nombre de la ruta absoluta canonizado
   */
  print "La constante es  __FILE__"."<br>";
  print __FILE__;
  print "<br><br>";

  print "real_path(__FILE__)"."<br>";
  print realpath(__FILE__);
  print "<br><br>";
  
  print "dirname()"."<br>";
  print dirname(__FILE__);
  print "<br><br>";

?>