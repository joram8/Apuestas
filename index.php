<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
      "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es-es" lang="es-es">
<head>

<?php
/* el resto de archivos php tienen un include de index.php
porque todos tienen la misma estructura */
$a=$_SERVER["DOCUMENT_ROOT"];//indica el directorio raiz de la web y evita problemas con el include 
include $a.'/head/Ehead1.php';

?>
<?php
include $a.'/head/Chead1.txt';
?>

</head>
<body>
<?php

include $a.'/body/Cbody_cabecera.php';

?>
<?php
include $a.'/body/Ebody_contenedor.php';
?>
</body>
</html>