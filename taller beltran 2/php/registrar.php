<?php 
     session_start();
	 require("conexion.php");
	 
	 if(isset($_POST['enviar']) && $_POST ['Nombre']!="" && $_POST ['apellido']!="" && $_POST ['tipo_usr']!="" && $_POST ['correo']!="" && $_POST['usuario']!="" && $_POST['contrasena']!="" && $_POST['tipo_id']!="" && $_POST['identidad']!=""){
	 
	            $name=$_POST['Nombre'];
                $last_name=$_POST['apellido'];
	            $type=$_POST['tipo_usr'];
				$email=$_POST['correo'];
                $user=$_POST['usuario'];
                $pass=$_POST['contrasena'];
                $tip=$_POST['tipo_id'];
                $id_card=$_POST['identidad'];
				
				
				
				$consulta_mail="SELECT * FROM usuario WHERE correo='$email'";
				$consulta_id="SELECT * FROM usuario WHERE identificacion='$id_card'";




				
         
                

                $result_mail=mysqli_query($conectar, $consulta_mail);
                $compara_mail=mysqli_num_rows($result_mail);
				

                $result_id=mysqli_query($conectar, $consulta_id);
                $compara_id=mysqli_num_rows($result_id);







				

				if($compara_mail > 0){
					echo '<script>
                            alert("Este correo ya está en uso, por favor digita otro");
                            window.history.go(-1);
                          </script>';"Este correo electronico ya está en uso, por favor digita otro";                
                    
                    exit;

                }else if($compara_id > 0){
					echo '<script>
                            alert("Este documento de identidad ya está en uso, por favor digita otro");
                            window.history.go(-1);
                          </script>';              
                    
                    exit;


				}else{
					$consulta_guardar="INSERT INTO  usuario (Nombre,apellido,tipo_usr,correo,usuario,contrasena,tipo_id,identificacion) VALUES ('$name','$last_name','$type','$email','$user','$pass','$tip','$id_card') ";
					
					$result_guardar=mysqli_query($conectar,$consulta_guardar);

					header("location: form_inicio.php");
				}
			
			}else{
				echo "Digite todos los campos para continuar...";
                header("location:../formulario_registro.php");
			}
			
			?>
			
<!DOCTYPE html>
<html lang="es">
     <head>
	    <meta charset="utf-8">
		<title>Registrarse</title>
	</head>
	
<body>
</body>
</html>
