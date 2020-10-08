<?php
   session_start();
   require("php/conexion.php");

?>


<!DOCTYPE html>
<html lang="es">

<head>
	<title></title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="css/registrarse.css" type="text/css" media="all">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="validar_form.js" ></script>
</head>
	
	
	
	
<body>
<form action="php/registrar.php" method="POST" class="fomulario_reg" onsubmit="return validarData();">
	<div id="body">
        
        
        
        
	    <div id="subir">
		
		
  <div class="container">
      
      <center><p><img class="ima" src="imgs/new_log.png"  width=260 height=240></p></center>
    <center><h1 class="mejor"><font face="godofwar">REGISTRARSE</font></h1></center>
    
    <hr>

    <label for="name"><b>Nombre</b></label>
    <input type="text" placeholder="Digite su nombre" id="Nombre" name="Nombre" >

	<label for="name"><b>Apellido</b></label>
    <input type="text" placeholder="Digite su apellido" id="apellido" name="apellido" >

  

   <b>Tipo de usuario</b>
   <br>

   <select id="tipo_usr" name="tipo_usr">
     <option value="value1">Contador</option> 
     <option value="value2" selected>Director ejecutivo</option>
     <option value="value3">Almacenista</option>
     <option value="value4">Empleado</option>
     <option value="value5">Cliente</option>
     <option value="value6">Proveedor</option>
   </select>
<br>
<br>
    <label for="psw"><b>Correo</b></label>
    <input type="email" placeholder="Digite su correo" id="correo" name="correo" >
<br>
    <label for="psw"><b>usuario</b></label>
    <input type="text" placeholder="Digite su usuario" id="usuario" name="usuario" >

    <label for="psw"><b>Contraseña</b></label>
    <input type="password" placeholder="Digite su contraseña" id="contrasena" name="contrasena" >

    <label for="ingreso3"><b>Documento de Identidad</b></label>
    <input type="number" placeholder="Documento De Identidad" id="CC_usuario" name="identidad" class="ingreso3" min="1000000000" max="9999999999" >
	
    	
    <hr>

    <input type="submit"  name ="enviar" value="Registrate!!!"><font face="godofwar">
  </div>
 
  <div class="container signin">
    <center><p><a href="Principal.html" ><img src="imgs/boton.png" width=80 height=80></a></p></center>
  </div>
            </div>
        </div>
    </div>
</form>
      
        </div>
		</div>
		<br>

    </form>
	</body>
</html>

