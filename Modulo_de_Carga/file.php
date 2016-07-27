  <?php
  $archivo = (isset($_FILES['a'])) ? $_FILES['a'] : null;

  if ($archivo) {

     $extension = pathinfo($archivo['name'], PATHINFO_EXTENSION);

     $extension = strtolower($extension);

     $extension_correcta = ($extension == 'htm' or $extension=='html');

     if ($extension_correcta) {

        $ruta_destino_archivo = "../archivo/{$archivo['name']}";

        $archivo_ok = move_uploaded_file($archivo['tmp_name'], $ruta_destino_archivo);

        include($ruta_destino_archivo);


     }

  }else {

    # code...
    echo "No se pudo cargar el Archivo.\n";
  }
?>

<div class="container">
  <h3>Este es el Archivo HTML que se inserto:</h3>
  <form action="escanear_archivo.php" method="post">
    <input type="text" placeholder="Inserte el Texto que desea introducir..." name="texto_de_reemplazo"></input>
  <?php echo '<input type="hidden" name = "dir" value="'.htmlspecialchars($ruta_destino_archivo).'" />'."\n";?>
  <input type="submit" value="Siguiente"></input>
  </form>

</div>
