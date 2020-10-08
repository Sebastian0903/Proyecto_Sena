<?php

session_start();
  require("BD/conexion.php");

  if (isset($_POST['submit']) && $_POST ['apellido']!="" && $_POST ['email']!="" && $_POST ['img']!="" && $_POST ['precio']!="") {

				  $codigo=$_POST['apellido'];
				  $nombreart=$_POST['email'];
				  $imgart=$_POST['img'];
				  $precioart=$_POST['precio'];


				$consulta_art="SELECT * FROM tbproduct WHERE id='$codigo'";


                $result_art=mysqli_query($conectar, $consulta_art);
                $compara_art=mysqli_num_rows($result_art);




				if($compara_art > 0){
					echo '<script>
                            alert("Este ID ya está en uso, por favor digita otro");
                            window.history.go(-1);
                          </script>';"Este correo electronico ya está en uso, por favor digita otro";                
                    
                    exit;



				}else{
					$consulta_guardar="INSERT INTO  tbproduct (id, name, img, precio) VALUES ('$codigo','$nombreart','$imgart','$precioart') ";
					
					$result_guardar=mysqli_query($conectar,$consulta_guardar);

					header("location: gestion.php");
				
			
			}
			

			}else{
				echo "Digite todos los campos para continuar...";
                
			}

			?>