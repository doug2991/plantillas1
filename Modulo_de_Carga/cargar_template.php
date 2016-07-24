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
              <div class="container">
                <fildset class="form-group">
                  <label class="btn btn-default btn-file">File Input
                  <input type = "hidden" name="MAX_FILE_SIZE" value= "30000">
                  <input type="file" accept="text/html" name="archivo" id="archivo"></input></label>
                </fieldset>
              </div>
              <div class="row" style="padding:30px">
              </div>
              <div class="row">

                <input type="submit" class="btn btn-primary" value="File Scan"></input>
              </div>
          </form>
    </div>
  </div>
</div>
