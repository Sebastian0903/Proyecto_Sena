<?php
   session_start();
   require("php/conexion.php");

?>


<!DOCTYPE html>
<html lang="es">

<head>
	<title></title>
	<meta charset="utf-8"/>
	
  <link rel="stylesheet" href="css/estilodreg.css" type="text/css" media="all">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="validar_form.js" ></script>
</head>
	
	
	<script type="text/javascript">
// Solo permite ingresar numeros.
function soloNumeros(e){
  var key = window.Event ? e.which : e.keyCode
  return (key >= 48 && key <= 57)
}

 function goBack() {
  window.history.back();
}
</script>
	


<body>






<center><h2>REGISTRARSE</h2></center>

<center><button onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><img src="imgs/img_avatar2.png"/> </button>
</center>
<div id="id01" class="modal">
  
 
    












<form class="modal-content animate" action="php/registrar.php" method="POST" class="fomulario_reg" onsubmit="return validarData();">
	<div id="body">
        
        
        
        
	    <div id="subir">
		
		
  <div class="container">
      

                <div class="imgcontainer">
                   <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                   <img src="imgs/new_log.png" alt="Avatar" class="avatar">
                </div>


    <center><h1 class="mejor"><font face="godofwar">REGISTRARSE</font></h1></center>
    
    <hr>

    <label for="name"><b>Nombre</b></label>
    <input type="text" placeholder="Digite su nombre" id="Nombre" name="Nombre" >

	<label for="name"><b>Apellido</b></label>
    <input type="text" placeholder="Digite su apellido" id="apellido" name="apellido" >

  

   <b>Tipo de usuario</b>
   <br>

   <select id="tipo_usr" name="tipo_usr">
    <option value="#" selected>Seleccione usuario</option> 
     <option value="Contador">Contador</option> 
     <option value="D.E">Director ejecutivo</option>
     <option value="almacenista">Almacenista</option>
     <option value="empleado">Empleado</option>
     <option value="cliente">Cliente</option>
     <option value="proveedor">Proveedor</option>
   </select>
<br>
<br>







    <label for="psw"><b>Correo</b></label>
    <input type="email" placeholder="Digite su correo" id="correo" name="correo" >
<br>
    <label for="psw"><b>Usuario</b></label>
    <input type="text" placeholder="Digite su usuario" id="usuario" name="usuario" >
<br>
    <label for="psw"><b>Contraseña</b></label>
    <input type="password" placeholder="Digite su contraseña" id="contrasena" name="contrasena" >

<br><br>

<b>Tipo de documento</b><br>
    <select id="tipo_id" name="tipo_id">
    <option value="#" selected>Seleccione tipo de documento</option> 
     <option value="C.C">Cédula de ciudadanía</option> 
     <option value="C.E">Cédula de extranjería</option>
</select>
<br><br>
    <label for="ingreso3"><b>Documento de Identidad</b></label>
    <input type="text" placeholder="Documento De Identidad" id="CC_usuario" name="identidad" class="ingreso3" onKeyPress="return soloNumeros(event)" maxlength="10" minlength="8" >
	
    	
    <br><br>

    <center><input type="submit" name ="enviar" value="Registrate!!!"><font face="godofwar"></center>
  </div>
 
  <div class="container signin">
    <center><p><img onclick="goBack()" src="imgs/atras.png" width=80 height=80></p></center>
  </div>
            </div>
        </div>
    </div>

</form>
      
        </div>
		</div>
		<br>

    
	</body>
</html>

