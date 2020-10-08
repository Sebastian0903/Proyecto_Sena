<?php
  session_start();
  require("../BD/conexion.php");
?>

<!DOCTYPE html>

<html>

<head>

	<title>MODIFICACION</title>
	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximun-scale=1, minium-scale=1">
  	<link rel="stylesheet" type="text/css" href="../CSS/input.css">
  	<link rel="stylesheet" type="text/css" href="../CSS/boton.css">

</head>

<body>

	

		<?php 

			$codigo=$_REQUEST['id'];
			$sql="SELECT * FROM tbproduct WHERE id='$codigo'";
			$result=mysqli_query($conectar,$sql);
			$mostrar=$result->fetch_assoc();

		 ?>
		
		 <table border="6" style=" margin: 0 auto;">
		 <form action="actualizar_art.php?id=<?php echo $mostrar['id']; ?>" method="POST">
		 	<thead>
		    
		    <th colspan="7"><img src="../imgs/new_log.png" width="40%" height="auto"></th>
		  </thead>
		  <tr>	
		    <th>ID</th>
		    <th>Nombre</th>
		    <th>Imagen</th>
		    <th>Precio</th>
		    
		  </tr>
		  <tr>
		  	<td><input type="text" name="id" value="<?php echo $mostrar['id']; ?>" disabled="disabled"></td>
		  	<td><input type="text" name="name" value="<?php echo $mostrar['name']; ?>" ></td>
		  	<td><input type="text" name="img" value="<?php echo $mostrar['img']; ?>" ></td>
		  	<td><input type="text" name="precio" value="<?php echo $mostrar['precio']; ?>" ></td>
		  	
		  </tr>
		  <tr>
		  	<td colspan="5"><center><input type="submit" value="Modificar" name="boton" class="boton"></center></td>
		  </tr>
		  </form>
		 </table>

 

	

</body>

</html>
<style type="text/css">
  

  body {

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


.boton{
    background-color: blue;
    color: white;
    padding: 15px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;

}
td,th{background-color: #E8E8E8;}
</style>