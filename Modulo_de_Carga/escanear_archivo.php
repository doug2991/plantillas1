<?php
$ruta_de_archivo = $_POST['dir'];
$lista_de_variables = $_POST['resultado'];

$arreglo_valores = explode(",",$lista_de_variables);

//$expresion_regular = "/(<_(2)).(%(4)).(_2)>/";
//$expresion_regular = "__%%%%__";
$expresion_regular = '/__%%[A-Za-z0-9]+%%__/';
$arreglo_variables = array();
$arreglo_variables[0] = $expresion_regular;
$arreglo_variables[1] = $expresion_regular;
$arreglo_variables[2] = $expresion_regular;
$arreglo_variables[3] = $expresion_regular;
$arreglo_variables[4] = $expresion_regular;
$arreglo_variables[5] = $expresion_regular;
$arreglo_variables[6] = $expresion_regular;
$arreglo_variables[7] = $expresion_regular;
$arreglo_variables[8] = $expresion_regular;
$arreglo_variables[9] = $expresion_regular;

 //= "plantilla.html";
$nombre_de_archivo_copia = "archivo_final.html";

copy($ruta_de_archivo, $nombre_de_archivo_copia);

$File_content = file_get_contents($nombre_de_archivo_copia);
$File_content = preg_replace($arreglo_variables,$arreglo_valores,$File_content,1);
//$File_content = str_replace($arreglo_variables,$arreglo_valores,$File_content);
//$File_content = preg_replace($expresion_regular,"Exito",$File_content);

//if(preg_replace($expresion_regular,"Exito","dfadf%%__")){
  //echo "Encontrado";
//}
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
