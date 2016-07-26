<?php
$ruta_de_archivo = $_POST['dir'];

$expresion_regular = "__%%%%__";
$txt = "NEW VALUE";
 //= "plantilla.html";
$nombre_de_archivo_copia = "archivo_final.html";

copy($ruta_de_archivo, $nombre_de_archivo_copia);

$File_content = file_get_contents($nombre_de_archivo_copia);
$File_content = str_replace($expresion_regular,$txt,$File_content);
file_put_contents($nombre_de_archivo_copia,$File_content);

include($nombre_de_archivo_copia);
?>

 <div class="container">
   <h3>Este es el archivo reemplazando las variables</h3>
   <form action="descargar.php" method="post">
   <?php echo '<input type="hidden" name = "copia" value="'.htmlspecialchars($nombre_de_archivo_copia).'" />'."\n";?>
   <input type="submit" value="Descargar"></input>
   </form>
 </div>
