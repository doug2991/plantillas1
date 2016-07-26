<div class="container">
  <div class="col-md-10">
    <div class="row" id="section1">
      <div>
        <h1>Load a Template (format HTML):</h1>
      </div>
    </div>
  </div>
  <div class="col-md-10">
    <div class="row" id="section2">
          <form action= "Modulo_de_Carga/file.php" method="post" enctype="multipart/form-data">
              <fildset class="form-group">
                      <label class="btn btn-default btn-file">File Input
                      <input type = "hidden" name="MAX_FILE_SIZE" value= "30000">
                      <input type='file' name='a'></input></label>
                    </fieldset>
                    <input type="submit"></input>
          </form>
          <!--<fildset class="form-group">
                  <label class="btn btn-default btn-file">File Input
                  <input type = "hidden" name="MAX_FILE_SIZE" value= "30000">
                  <input type='file' name='a' id="ar"></input></label>
                  <div class="row">
                      <input type="button" id="loadFile" value="Load File"></input>
                  </div>

          </fieldset>-->
    </div>
  </div>
</div>
