<?php
$nombre = $_POST['copia'];

$ruta =  'Documentos/'.$nombre;

if (is_file($nombre))
{
 header('Content-Type: application/force-download');
 header('Content-Disposition: attachment; filename='.$nombre);
 header('Content-Transfer-Encoding: binary');
 header('Content-Length: '.filesize($nombre));

 readfile($ruta);
}

?>
