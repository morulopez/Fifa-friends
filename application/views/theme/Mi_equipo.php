<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
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
<script type="text/javascript">
			var id="<?php echo $this->uri->segment(3);?>";
		
</script>
<?php if($mercado[0]['mercado']==true){?>
<body class="body2" onload="Miequipo.actualizar(id);">
	<?php } else{ ?>
<body class="body2" onload="Miequipo.actualizar2(id);">
	<?php }?>
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
		<div class="col-md-9">
			<div class="row">
				<?php if($mercado[0]['mercado']==true){?>
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-4">
							<?php if($estadoliga[0]["estado"]==false AND count($controlcambioequipo)==0){
								echo "<form action='' method='POST'><br><button type='submit'  name='cambiarequipo'>CAMBIAR DE EQUIPO</button></form>";
								if(isset($_POST["cambiarequipo"])){
									echo  "<form action='' method='POST'><br>¿SEGURO QUE QUIERES CAMBIAR DE EQUIPO?  <button type='submit' name='sicambiarequipo'>SI</button> 
									  <button type='submit' name='nocambiarequipo'>NO</button><br></form>";
								}
							} ?>
						</div>
						<div class="col-md-4" id="alerta">
						</div>
						<div class="col-md-4" id="escudo">
						</div>
					</div>
					<div class="row">
						<div class="col-md-4" id="presupuesto">
						</div>
						<div class="col-md-4" id="gastos">
						</div>
					</div><br>
					<button type="button" id="botonver" class="btn btn-success" onclick="Miequipo.abrir()">VER MI EQUIPO</button>
					<button type="button" id="botonver2" class="btn btn-danger" onclick="Miequipo.cerrar()">CERRAR EQUIPO</button>
					<table class="table table-bordered tablamiequipo" id="insertarusuarios">
						<th>
							JUGADOR
						</th>
						<th>
							POSICION
						</th>
						<th>
							SALARIO
						</th>
						<th>
							CLAUSULA
						</th>
					</table>
				</div>
				<?php } else{ ?>
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-4" id="alerta">
						</div>
						<div class="col-md-4">
						</div>
						<div class="col-md-4" id="escudo">
						</div>
					</div>
					<div class="row">
						<div class="col-md-4" id="presupuesto">
						</div>
						<div class="col-md-4" id="gastos">
						</div>
					</div><br>
				<button type="button" id="botonver1dos" class="btn btn-success" onclick="Miequipo.abrir2()">VER MI EQUIPO</button>
				<button type="button" id="botonver2dos" class="btn btn-danger" onclick="Miequipo.cerrar2()">CERRAR EQUIPO</button>
					<table class="table table-bordered tablamiequipo" id="insertarusuarios2">
						<th>
							JUGADOR
						</th>
						<th>
							POSICION
						</th>
						<th>
							SALARIO
						</th>
						<th>
							CLAUSULA
						</th>
					</table>
				
			</div>
				<?php }?>
			</div><br>
		<div class="row">
				<?php if(count($mensajes)>0){?>
				<div class="col-md-12 mismensajes">
					<h4 class="mensajesnormales"> MIS MENSAJES </h4>
					 <table class="table table-striped">
					 	<form action="" method="POST">
					<?php foreach($mensajes as $mensajes){
							echo "<tr><td>{$mensajes['mensaje']}<br> <button class='borrarmensaje' type='submit' name='borrarmensaje' value='{$mensajes["ID"]}'>BORRAR</button></td></tr>";
					}?>
				</div>

						</form>
			        </table>
			</div>
			<?php } ?>
		</div>
		<div class="row">
				<?php if(count($ventajugador)>0) { ?>
				<div class="col-md-12 mismensajes">
					<h4 class="mensajesnormales"> ¡¡ UN USUARIO QUIERE VENDER UN JUGADOR !!</h4>
					 <table class="table table-striped">
					 	<form action="" method="POST">
					<?php foreach($ventajugador as $ventajugador){
							echo "<tr><td>QUIEREN VENDER AL JUGADOR <strong><span class='jugador'>{$ventajugador['nombre_jugador']}</span></strong> del <strong>{$ventajugador['equipoprocedencia']}</strong> al <strong>{$ventajugador['destinoequipo']}</strong> por la cantidad de {$ventajugador['precio']} €. <strong>¿ESTAS DE ACUERDO?</strong><br> <button class='borrarmensaje' type='submit' id='botonsi' name='okventa'>SI</button> <button class='borrarmensaje' type='submit' id='botonno' name='noalaventa1'>NO</button></td></tr>
								<input type='hidden' name='idusuarioprocedencia' value='{$ventajugador['idusuarioprocedente']}'>
							    <input type='hidden' name='idokventa' value='{$ventajugador['ID']}'>
							    <input type='hidden' name='idventa' value='{$ventajugador['idventa']}'>
							    <input type='hidden' name='idequipo' value='{$ventajugador['idequipo']}'>
							    <input type='hidden' name='idusuario' value='{$ventajugador['idusuario']}'>
							    <input type='hidden' name='nombrejugador' value='{$ventajugador['nombre_jugador']}'>
							    <input type='hidden' name='precio' value='{$ventajugador['precio']}'>
							    <input type='hidden' name='destinoequipo' value='{$ventajugador['destinoequipo']}'>
							    <input type='hidden' name='equipoprocedencia' value='{$ventajugador['equipoprocedencia']}'>";
							    if(isset($_POST['noalaventa1'])){
							    	echo "<form action='' method='POST'>
											<script type='text/javascript'>
											botonsi=document.getElementById('botonsi');
											botonsi.style.display='none';
											botonno=document.getElementById('botonno');
											botonno.style.display='none';
											</script>
							    	     <tr><td><h6>INSERTA LA CANTIDAD POR LA QUE PIENSAS QUE DEBE SER VENDIDO ESTE JUGADOR <srotng>  <u>( {$ventajugador['nombre_jugador']} )</strong></u></h6>
											<input type='number'class='form-control aceptar' name='precio' value='{$ventajugador['precio']}'>
											<input type='hidden' name='idusuarioprocedente' value='{$ventajugador['idusuarioprocedente']}'>
											<input type='hidden' name='idokventa' value='{$ventajugador['ID']}'> 
										   <input type='hidden' name='idventa' value='{$ventajugador['idventa']}'>
										    <input type='hidden' name='idequipo' value='{$ventajugador['idequipo']}'>
										    <input type='hidden' name='idusuario' value='{$ventajugador['idusuario']}'>
										    <input type='hidden' name='nombrejugador' value='{$ventajugador['nombre_jugador']}'>
										    <input type='hidden' name='destinoequipo' value='{$ventajugador['destinoequipo']}'>
										    <input type='hidden' name='equipoprocedencia' value='{$ventajugador['equipoprocedencia']}'> <button class='borrarmensaje' type='submit' name='aceptar'>ACEPTAR</button>
										    	</form></td></tr>";
							    }

					} ?>
				</div>

						</form>
			        </table>
				<?php } ?>
			</div>




			<div class="row">
				<?php if(count($finalventajugador)>0) { ?>
				<div class="col-md-12 mismensajes">
					<h4 class="mensajesnormales"> ¡¡ TUS COMPAÑEROS HAN RESPONDIDO A TU PETICION DE VENTA !!</h4>
					 <table class="table table-striped">
					 	<form action="" method="POST">
					<?php foreach($finalventajugador as $finalventajugador){
							echo "<tr><td>EL PRECIO DE TU  JUGADOR <strong><span class='jugador'>{$finalventajugador['nombre_jugador']}</span> lo podrás vender por la cantidad de:<input type='number' class='form-control' name='precio' value='{$finalventajugador['precio']}' readonly><br> PROCEDENTE DEL EQUIPO <input type='text' class='form-control' name='eequipoprocedencia' value='{$finalventajugador['equipoprocedencia']}' readonly><br> EQUIPO DE DESTINO <input type='text' name='destinoequipo' class='form-control' value='{$finalventajugador['destinoequipo']}' readonly><br> <strong>¿ESTAS DE ACUERDO?</strong><br> <button class='borrarmensaje' type='submit' id='sicerrarventa' name='siventa'>SI</button> <button class='borrarmensaje' type='submit' id='nocerrarventa' name='noalaventa'>NO</button></td></tr>
							    <input type='hidden' name='idequipo' value='{$finalventajugador['idequipo']}'>
							    <input type='hidden' name='idusuario' value='{$finalventajugador['idusuario']}'>
							    <input type='hidden' name='idcerrarventa' value='{$finalventajugador['ID']}'>
							     <input type='hidden' name='jugador' value='{$finalventajugador['nombre_jugador']}'>
							      <input type='hidden' name='equipodestino' value='{$finalventajugador['destinoequipo']}'>
							       <input type='hidden' name='precio' value='{$finalventajugador['precio']}'>
							       <input type='hidden' name='equipoprocedente' value='{$finalventajugador['equipoprocedencia']}'><br><br>";
							    }

					} ?>
				</div>

						</form>
			        </table>
			




                 <div class="row">
				<?php if(count($fichajes)>0) { ?>
				<div class="col-md-12 mismensajes">
					<h4 class="mensajesnormales h4fichajes"> ¡¡ UN USUARIO QUIERE FICHAR UN JUGADOR !!</h4>
					 <table class="table table-striped">
					 	<form action="" method="POST">
					<?php foreach($fichajes as $fichajes){
							echo "<tr><td>QUIEREN FICHAR AL JUGADOR <strong><span class='jugador'>{$fichajes['nombre_jugador']}</span></strong> del <strong>{$fichajes['equipoprocedencia']}</strong> al <strong>{$fichajes['destinoequipo']}</strong> por la cantidad de {$fichajes['precio']} €. <strong>¿ESTAS DE ACUERDO?</strong><br> <button class='borrarmensaje' type='submit' id='botonsi' name='okfichaje'>SI</button> <button class='borrarmensaje' type='submit' id='botonno' name='noalfichaje1'>NO</button></td></tr>
								<input type='hidden' name='idusuarioprocedencia' value='{$fichajes['idusuarioprocedente']}'>
							    <input type='hidden' name='idokfichaje' value='{$fichajes['ID']}'>
							    <input type='hidden' name='idfichaje' value='{$fichajes['idventa']}'>
							    <input type='hidden' name='idequipo' value='{$fichajes['idequipo']}'>
							    <input type='hidden' name='idusuario' value='{$fichajes['idusuario']}'>
							    <input type='hidden' name='nombrejugador' value='{$fichajes['nombre_jugador']}'>
							    <input type='hidden' name='precio' value='{$fichajes['precio']}'>
							    <input type='hidden' name='destinoequipo' value='{$fichajes['destinoequipo']}'>
							    <input type='hidden' name='equipoprocedencia' value='{$fichajes['equipoprocedencia']}'>";
							    if(isset($_POST['noalfichaje1'])){
							    	echo "<form action='' method='POST'>
											<script type='text/javascript'>
											botonsi=document.getElementById('botonsi');
											botonsi.style.display='none';
											botonno=document.getElementById('botonno');
											botonno.style.display='none';
											</script>
							    	     <tr><td><h6>INSERTA LA CANTIDAD POR LA QUE PIENSAS QUE DEBE SER COMPRADO ESTE JUGADOR <srotng>  <u>( {$fichajes['nombre_jugador']} )</strong></u></h6>
											<input type='number'class='form-control aceptar' name='precio' value='{$fichajes['precio']}'>
											<input type='hidden' name='idusuarioprocedente' value='{$fichajes['idusuarioprocedente']}'>
											<input type='hidden' name='idokventa' value='{$fichajes['ID']}'> 
										   <input type='hidden' name='idventa' value='{$fichajes['idventa']}'>
										    <input type='hidden' name='idequipo' value='{$fichajes['idequipo']}'>
										    <input type='hidden' name='idusuario' value='{$fichajes['idusuario']}'>
										    <input type='hidden' name='nombrejugador' value='{$fichajes['nombre_jugador']}'>
										    <input type='hidden' name='destinoequipo' value='{$fichajes['destinoequipo']}'>
										    <input type='hidden' name='equipoprocedencia' value='{$fichajes['equipoprocedencia']}'> <button class='borrarmensaje' type='submit' name='aceptarfichaje'>ACEPTAR</button>
										    	</form></td></tr>";
							    }

					} ?>
				</div>

						</form>
			        </table>
				<?php } ?>
			</div>


			<div class="row">
				<?php if(count($finalfichajejugador)>0) { ?>
				<div class="col-md-12 mismensajes">
					<h4 class="mensajesnormales h4fichaje"> ¡¡ TUS COMPAÑEROS HAN RESPONDIDO A TU PETICION DE FICHAJE !!</h4>
					 <table class="table table-striped">
					 	<form action="" method="POST">
					<?php foreach($finalfichajejugador as $finalfichajejugador){
							echo "<tr><td>EL PRECIO DE TU  JUGADOR <strong><span class='jugador'>{$finalfichajejugador['nombre_jugador']}</span> lo podrás comprar por la cantidad de:<input type='number' class='form-control' name='precio' value='{$finalfichajejugador['precio']}' readonly><br> PROCEDENTE DEL EQUIPO <input type='text' class='form-control' name='eequipoprocedencia' value='{$finalfichajejugador['equipoprocedencia']}' readonly><br> EQUIPO DE DESTINO <input type='text' name='destinoequipo' class='form-control' value='{$finalfichajejugador['destinoequipo']}' readonly>
							    <tr><td class='nuevosalario'>Inserta la clausula:<input class='form-control' type='number' name='nuevaclausula'></td></tr>
							      <tr><td class='nuevosalario'>Inserta el nuevo salario:<input class='form-control' type='number' name='nuevosalario'></td></tr>
							       <tr><td class='nuevosalario'>Elige la posicion de tu jugador:<br><select class='nuevosalario' name='posicion'>
																  <option value='portero'>Portero</option>
																  <option value='defensa'>Defensa</option>
																  <option value='medio'>Medio</option>
																  <option value='delantero'>Delantero</option>
																</select></td></tr>
							      <br> <tr><td><strong>¿ESTAS DE ACUERDO?</strong><br> <button class='borrarmensaje' type='submit' id='sicerrarventa' name='sialfichaje'>SI</button> <button class='borrarmensaje' type='submit' id='nocerrarventa' name='noalfichaje'>NO</button></td></tr>
							     
							    <input type='hidden' name='idequipo' value='{$finalfichajejugador['idequipo']}'>
							    <input type='hidden' name='idusuario' value='{$finalfichajejugador['idusuario']}'>
							    <input type='hidden' name='idcerrarventa' value='{$finalfichajejugador['ID']}'>
							     <input type='hidden' name='jugador' value='{$finalfichajejugador['nombre_jugador']}'>
							      <input type='hidden' name='equipodestino' value='{$finalfichajejugador['destinoequipo']}'>
							       <input type='hidden' name='precio' value='{$finalfichajejugador['precio']}'>
							       <input type='hidden' name='equipoprocedente' value='{$finalfichajejugador['equipoprocedencia']}'><br><br>";
							    }

					}?>
				</div>

						</form>
			        </table>

    </div>


	</div>

		</div>

	</div>
	</div>
</body>
</html>
