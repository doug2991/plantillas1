$(document).ready(function(){
  $("#btnLoad_Template").click(function (event) {
    event.preventDefault();
    $("#principal_container").load("Modulo_de_Carga/cargar_template.php");
    $("#btnLoad_Template").attr("class","btn btn-default active");
    $("#btnGenerate").removeAttr('class');
    $("#btnGenerate").attr("class","btn btn-default");
  });
  $("#btnGenerate").click(function (event){
    event.preventDefault();
    $("#principal_container").load("Modulo_de_Generacion_de_Archivos/Generador.php");
    $("#btnGenerate").attr("class","btn btn-default active");
    $("#btnLoad_Template").removeAttr('class');
    $("#btnLoad_Template").attr("class","btn btn-default");
  });
  $("#addArray").click(function(event){
    event.preventDefault();
    var a = document.getElementById("nombre").value;
    if(document.getElementById("cadena").value == ""){

      document.getElementById("cadena").value = document.getElementById("cadena").value + a;

    }else {
        document.getElementById("cadena").value = document.getElementById("cadena").value+","+a;
    }

    alert(document.getElementById("cadena").value);
    document.getElementById("nombre").value = "";
  });
});
