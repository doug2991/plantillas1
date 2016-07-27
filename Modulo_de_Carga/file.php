  <?php
  //$array;
  //$contador = $_POST['contador'];

  /*if ($contador) {
    # code...
    $array = array();
  }else {
    # code...
    $stringArray = $_POST['arregloJV'];
    $array = explode(',',$stringArray);
  }*/

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

  }
  else {

    # code...
    echo "No se pudo cargar el Archivo.\n";
  }
?>
<!DOCTYPE>
<head>
  <script src="../js/jquery-2.1.4.min.js" type="text/javascript"></script>
  <script src="../js/bootstrap.js" type="text/javascript"></script>
  <script type="text/javascript" src="../js/funciones.js" ></script>
</head>

<body>
  <div class="container">
    <h3>Este es el Archivo HTML que se inserto:</h3>
    <div class="row">

    </div>
    <div class="row">

    </div>
    <div class="row">
      <form action="escanear_archivo.php" method="post">
        <input type="text" id="nombre" placeholder="Insertar Valores"></input>
        <input type="hidden" id="cadena" value="" name="resultado"></input>
        <button type="button" id="addArray">Add</button>
      <?php echo '<input type="hidden" name = "dir" value="'.htmlspecialchars($ruta_destino_archivo).'" />'."\n";?>
      <input type="submit" value="Siguiente"></input>
      </form>

      
    </div>
  </div>
</body>
