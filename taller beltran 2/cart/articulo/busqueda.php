<?php
  session_start();
  require("../BD/conexion.php");
?>  

<!DOCTYPE html>
<html>
<head>

  <title>BUSQUEDA</title>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximun-scale=1, minium-scale=1">
  <link rel="stylesheet" type="text/css" href="../CSS/input.css">
  <link rel="stylesheet" type="text/css" href="../CSS/boton.css">

</head>
<script type="text/javascript">
  function goBack() {
  window.history.back();
}
</script>
<body>
<img onclick="goBack()" src="../../imgs/atras.png"  width=80 height=80>

  <div class="datagrid"><table border="8" style=" margin: 0 auto;">
  <thead>
    
    <th colspan="7"><img src="../imgs/new_log.png" width="40%" height="auto"></th>
  </thead>
  <tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Imagen</th>
    <th>Precio</th>
    
    <th colspan="2">Opciones</th>
  </tr>
  <tbody>

    <?php
      if (isset($_POST['boton']) && $_POST ['codigo']!="") {
      $codigo=$_POST['codigo'];
      $sql="SELECT * FROM tbproduct WHERE id='$codigo'";
      $result=mysqli_query($conectar,$sql);
      $compara_usr=mysqli_num_rows($result);
      if($compara_usr != 1){
          echo '<script type="text/javascript">
                            alert("no esta registrado");
                            window.history.go(-1);
                          </script>';
                    exit;
        }else{

      while ($mostrar=mysqli_fetch_array($result)) {
     ?>
  <tr>
    <td><center><?php echo $mostrar['id'] ?></center></td>
    <td><center><?php echo $mostrar['name'] ?></center></td>
    <td><center><?php echo $mostrar['img'] ?></center></td>
    <td><center><?php echo $mostrar['precio'] ?></center></td>
    
    <td><a href="modificar_art.php?id=<?php echo $mostrar['id']; ?>">Actualizar información</a></td>
    <td><a href="eliminar_art.php?id=<?php echo $mostrar['id']; ?>">Borrar</a></td>
  </tr>
    <?php  
        }
      }
    }  
    
    ?>
  <tr>
    <td colspan="7"><center><a href="../gestion.php">Gestión </a></center></td>
  </tr>
  </tbody>
</table></div>


</body>
</html>
<style type="text/css">
  body {


font-family: DejaVu Sans Mono;
/* Ubicación de la imagen */

background-image: url(../imgs/fondo%20de%20in.jpg);

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

a:link, a:visited {
  background-color: blue;
  color: white;
  padding: 15px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

td,th{background-color: #E8E8E8;}
</style>