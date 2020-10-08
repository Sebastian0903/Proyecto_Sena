<?php

session_start();
  require("../BD/conexion.php");

  if (isset($_POST['boton']) && $_POST ['name']!="" && $_POST ['img']!="" && $_POST ['precio']!="") {

	$codigo=$_REQUEST['id'];
	$nombreart=$_POST['name'];
  $imgart=$_POST['img'];
  $precioart=$_POST['precio'];



	$sql="UPDATE tbproduct SET name='$nombreart' WHERE id='$codigo'";
  $sql1="UPDATE tbproduct SET img='$imgart' WHERE id='$codigo'";
  $sql2="UPDATE tbproduct SET precio='$precioart' WHERE id='$codigo'";





	$result_guardar=mysqli_query($conectar,$sql);
  $result_guardar=mysqli_query($conectar,$sql1);
  $result_guardar=mysqli_query($conectar,$sql2);

	echo '<script>
                            alert("Dato Actualizado");
                            location.href = "../actualizar_art.html";
                          </script>';

  }else{
					echo '<script>
                            alert("Llena el campo");
                            window.history.go(-1);
                          </script>';

  }





?>
