<?php
$archivo = (isset($_FILES['a'])) ? $_FILES['a'] : null;

if ($archivo) {
   $extension = pathinfo($archivo['name'], PATHINFO_EXTENSION);
   $extension = strtolower($extension);
   $extension_correcta = ($extension == 'htm' or $extension=='html');
   if ($extension_correcta) {
      $ruta_destino_archivo = "../archivo/{$archivo['name']}";
      $archivo_ok = move_uploaded_file($archivo['tmp_name'], $ruta_destino_archivo);
   }
}else {
  # code...
  echo "No se pudo cargar el Archivo.\n";
}
?>

<?php if (isset($archivo)): ?>
     <?php if (!$extension_correcta): ?>
       <span style="color: #f00;"> La extensión es incorrecta, el archivo debe ser jpg, jpeg, gif o png. </span>
     <?php elseif (!$archivo_ok): ?>
       <span style="color: #f00;"> Error al intentar subir el archivo. </span>
    <?php else: ?>
       <strong> El archivo ha sido subido correctamente. </strong>
       <br />

    <?php endif ?>
 <?php endif; ?>
