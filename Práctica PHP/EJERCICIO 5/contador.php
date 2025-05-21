<?php
// Archivo para acumular el numero de visitas  
$archivo = "contador.dat";  
// Abrir el archivo para lectura  
$abrir = fopen($archivo, 'r');  // Cambiado de 'w' a 'r' para lectura
// Leer el contenido del archivo  
$cont = fread($abrir, filesize($archivo));  
// Cerrar el archivo  
fclose($abrir);  
// Abrir nuevamente el archivo para escritura  
$abrir = fopen($archivo, 'w');  
// Agregar 1 visita  
$cont = $cont + 1;  
// Guardar la modificación  
$guardar = fwrite($abrir, $cont);  // Corregido el nombre de variable
// Cerrar el archivo  
fclose($abrir);  
// Mostrar el total de visitas  
echo "<font face='arial' size='3'>Cantidad de visitas: ".$cont."</font>";  // Corregida concatenación
?>