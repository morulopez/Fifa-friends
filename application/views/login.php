<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Login Fifafriends</title>
	<script type="text/javascript" src="<?php echo CDN;?>/js/obj.js"></script>
	<link rel="stylesheet" href="<?php echo CDN;?>/css/estilos.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body class="login">
	<div class="row">
		
		<div class="container generallogin">
			<div class="row">
			<div class="col-md-5">
			</div>
			<div class="col-md-2 columnados">
			<i class="material-icons" style="font-size:86px; background-color:  #ffffff; border-radius: 30px; margin-bottom: 20%;" >person</i>
			</div>
			<div class="col-md-5">
			</div>
		    </div>
			<div class="col-md-4">
			</div>
			<div class="col-md-4 conlogin">
			<h1 class="h1login">Iniciar Sesion</h1>
			<form action="" method="POST">
			  <div class="form-group">
			    <label for="exampleInputEmail1">Nombre de Usuario</label>
			    <input type="text" class="form-control" name="usuario" id="exampleInputEmail1" placeholder="Nombre de usuario">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Contraseña</label>
			    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Contraseña">
			  </div>
			  <button type="submit" name="botonlogin" class="btn btn-default">Acceder</button><br><br>
			  <?php if(isset($no_acceso)){
			  	echo "<span  style='color:#e50202;'>".$no_acceso."</span><br>"; 
			  } ?>
			  <a href="<?php echo site_url('Usuariosl/registro');?>">Registrarme</a>
			</form>
		    </div>
		    <div class="col-md-4">
			</div>
		</div>
		
			    
	</div>
	</body>