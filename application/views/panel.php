<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 


?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>FIFA FRIENDS</title>
	<script type="text/javascript" src="<?php echo CDN;?>/js/obj.js"></script>
	<link rel="stylesheet" href="<?php echo CDN;?>/css/estilos.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <style type="text/css">
        a:link, a:visited, a:active {
            text-decoration:none;
        }
    </style>
</head>
<body class="body2">
 <div class="container fondocontenedor">
	<div class="row linea1">
		<div class="col-md-6">
			<h1 class="fifafriends">FIFA FRIENDS  <i class="fa fa-gamepad"></i></h1>
		</div>
		<div class="col-md-6">
		 <ul class="menuarriba">
		 	<a href="<?php echo site_url('Usuariosl/cerrar_sesion');?>"><li class="li"><span class="iniciarsesion"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Cerrar Sesion</span></li>
		 </ul>
		</div>
		</div>
	<div class="row">
		<div class="col-md-3 columnaderecha">
			<ul class="menuderecha">
				<a href="<?php echo site_url('Usuariosl/Miequipo/'.$logueado);?>" class="an"><li class="limenuderecha"><span class="iniciarsesion"><i class="fa fa-share"></i> Mi equipo/Mensajes</span></li></a>
				<a href="<?php echo site_url('Clasificacion/tabla_clasificacion');?>"><li class="limenuderecha"><span class="iniciarsesion"><i class="fa fa-trophy"></i>  Clasificacion</span></li></a>
				<?php if(!isset($inicio)){?>
				<a href="<?php echo site_url('Jornadas/jornada1');?>"><li class="limenuderecha"><span class="iniciarsesion"><i class="fa fa-registered"></i>  Jornadas/Resultados</span></li></a>
				<?php } ?>

				<?php if (isset($mercado[0]['mercado'])){ 
					if($mercado[0]['mercado']==true){?>

				<a href="<?php echo site_url('Fichajes/abierto');?>"><li class="limenuderecha"><span class="iniciarsesion"><i class="fa fa-handshake-o" ></i>  Fichajes/Cesiones</span></a><br><strong><span class="abierto">* Abierto</span></strong></li>
				<?php }elseif($mercado[0]['mercado']==false){?>
				<a href=""><li class="limenuderecha"><span class="iniciarsesion"><i class="fa fa-handshake-o" ></i>  Fichajes/Cesiones</span></a><br><strong><span class="cerrado">Cerrado</span></strong></li><?php }}else{ ?> <a href=""><li class="limenuderecha"><span class="iniciarsesion"><i class="fa fa-handshake-o" ></i>  Fichajes/Cesiones</span></a><br><strong><span class="cerrado">Cerrado</span></strong></li><?php }?>
			</ul>
		</div>
	</div>
	<div class="row contenido">
		<div class="col-md-3">
		</div>
		<div class="col-md-6">
			<!--aqui va el contenido-->
			<?php /* <div class="au">
<style type="text/css">
.au{
display: none;}
</style>
<audio controls autoplay>
  <source src="<?php echo CDN;?>/musica/bugle.mid" type="audio/ogg"></source>
</audio>*/echo $contenido;?>

		</div>
	</div>
	</div>
</body>
</html>