<?php
  session_start();

  if (($_SESSION['iniciar'])!="") {
    
?>

<!DOCTYPE html> 
<html lang="es">
<head>
<meta charset="utf-8">
<title>Formulario de Registro</title>
<link href="css/estilopro.css" rel="stylesheet" type="text/css">
</head>

<script type="text/javascript">
  function goBack() {
  window.history.back();
}
</script>

<body>

<img onclick="goBack()" src="../imgs/atras.png" align="left" width=80 height=80>

<div class="group">
  <form action="registro.php" method="POST">
  <h2><em>Registro de nuevo artículo</em></h2>
  
     
        
      
      <label for="apellido">ID <span><em>(requerido)</em></span></label>
      <input type="text" name="apellido" class="form-input" />             
      
      <label for="email">Nombre <span><em>(requerido)</em></span></label>
      <input type="text" name="email" class="form-input" />

      <label for="apellido">img <span><em>(requerido)</em></span></label>
      <input placeholder="imagen.jpg" type="text" name="img" class="form-input" required/>             
      
      <label for="email">precio <span><em>(requerido)</em></span></label>
      <input type="text" name="precio" class="form-input" />

     <center> <input class="form-btn" name="submit" type="submit" value="Guardar información" /></center>
    </p>
  </form>
</div>
</body>
</html>


<?php

}else{

  echo '<script>
                            alert("Inicia sesion");
                            location.href = "../php/form_inicio.php";
                          </script>';
                    exit;
}

?>


<style type="text/css">
  

  body {

/* Ubicación de la imagen */

background-image: url(imgs/fondo%20de%20in.jpg);

/* Para dejar la imagen de fondo centrada, vertical y

horizontalmente */

background-position: center center;

/* Para que la imagen de fondo no se repita */

background-repeat: no-repeat;

/* La imagen se fija en la ventana de visualización para que la altura de la imagen no supere a la del contenido */

background-attachment: fixed;

/* La imagen de fondo se reescala automáticamente con el cambio del ancho de ventana del navegador */

background-size: cover;

/* Se muestra un color de fondo mientras se está cargando la imagen

de fondo o si hay problemas para cargarla */

background-color: #66999;

}


</style>