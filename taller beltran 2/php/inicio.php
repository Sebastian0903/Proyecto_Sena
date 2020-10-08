<?php 
     session_start();
	 require("conexion.php");
	 	if (isset($_POST['inicio'])) {

	 		if ($_POST['correo']!="" && $_POST['contrasena']!="") {

	 			$correo=$_POST['correo'];
	 			$pass=$_POST['contrasena'];


	 			$consulta_acceso="SELECT tipo_usr FROM usuario WHERE correo='$correo' AND contrasena='$pass' ";

	 			$resultado_acceso=mysqli_query($conectar, $consulta_acceso);

	 			$validar_acceso=mysqli_num_rows($resultado_acceso);
	 			
	 			$usr_data=mysqli_fetch_assoc($resultado_acceso);

	 			if ($validar_acceso == 1) {
	 				
	 				if ($usr_data['tipo_usr'] == 'contador') {

	 					$_SESSION['iniciar']='ingresar';

	 					header("location: ../Principalcont.html");

	 						 				}
                    
                    
                    if($usr_data['tipo_usr'] == 'D.E'){

	 					$_SESSION['iniciar']= 'ingresar';

	 					header("location: ../Principal.html");
	 						 				}
                    
                    
                    if($usr_data['tipo_usr'] == 'almacenista'){

	 					$_SESSION['iniciar']= 'ingresar';

	 					header("location: ../Principalalma.html");
	 						 				}

                    
                    
                    if($usr_data['tipo_usr'] == 'empleado'){

	 					$_SESSION['iniciar']= 'ingresar';

	 					header("location: ../Principaltraba.html");
	 						 				}
                    
                    
                    
                    if($usr_data['tipo_usr'] == 'cliente'){

	 					$_SESSION['iniciar']= 'ingresar';

	 					header("location: ../Principalclient.html");
	 						 				}
                    
                    
                    
                    if($usr_data['tipo_usr'] == 'proveedor'){

	 					$_SESSION['iniciar']= 'ingresar';

	 					header("location: ../Principalprov.html");
	 						 				}


                    
                    

	 			}else{
				echo '<script>
                            alert("Este usuario no está registrado");
                            window.history.go(-1);
                          </script>';              
                    
                    exit;
                header("location: form_inicio.php");
			}
                
                
               
                
                
                
	 		}
	 	}
			?>