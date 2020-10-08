 <?php

session_start();
  require("../BD/conexion.php");


	$codigo=$_REQUEST['id'];


	$sql="DELETE FROM tbproduct WHERE id='$codigo'";

	$result_guardar=mysqli_query($conectar,$sql);



	
	echo '<script>
                            alert("Dato Eliminado");
                            location.href = "../actualizar_art.html";
                          </script>';




?>