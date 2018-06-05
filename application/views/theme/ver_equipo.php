<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<div class="row">
	<div class="col-md-6 pirmerascolumnas">
		<?php echo "<img class='escudoequi' src=".CDN."/imagenes/{$informacion[0]['escudo']}.>";?>
	</div>
</div>
<div class="row">
	<div class="col-md-6 nombre_equipover">
		<?php echo "<br><strong><span>".strtoupper($informacion[0]['nombre'])."</span></strong>";?>
	</div>
</div><br>
<div class="row">
	<div class="col-md-12">
		<strong>LIGAS:</strong>  <?php echo $ligas;?><br>
		<strong>PRESUPUESTO:</strong>  <?php echo $informacion[0]["PRESUPUESTO"]." €";?><br>
		<strong>GASTOS DE TEMPORADA</strong>: <?php echo $informacion[0]["gastos"]." €";?>
	</div>
</div><br>
<div class="row">
	<div class="col-md-12">
		<h3>ESTADISTICAS DE LA TEMPORADA</h3>
		<table class="table table-striped">
			<th>
			GF
			</th>
			<th>
			GC
			</th>
			<th>
			PG
			</th>
			<th>
			PE
			</th>
			<th>
			PP
			</th>
			<th>
			POSICION
			</th>
			<th class="puntosver">
			PUNTOS
			</th>
			<tr>
				<td>
					<?php echo $informacion[0]["gf"]?>
				</td>
				<td>
					<?php echo $informacion[0]["gc"]?>
				</td>
				<td>
					<?php echo $informacion[0]["pg"]?>
				</td>
				<td>
					<?php echo $informacion[0]["pe"]?>
				</td>
				<td>
					<?php echo $informacion[0]["pp"]?>
				</td>
				<td>
					<?php $puesto=$this->uri->segment(4);
					if($puesto==1){
						$palabra="PRIMERO";
					}elseif($puesto==2){
						$palabra="SEGUNDO";
					}elseif($puesto==3){
						$palabra="TERCERO";
					}elseif($puesto==4){
						$palabra="CUARTO";
					}elseif($puesto==5){
						$palabra="QUINTO";
					}elseif($puesto==6){
						$palabra="SEXTO";
					}elseif($puesto==7){
						$palabra="SEPTIMO";
					}elseif($puesto==8){
						$palabra="OCTAVO";
					}elseif($puesto==9){
						$palabra="NOVENO";
					}elseif($puesto==10){
						$palabra="DECIMO";
					}elseif($puesto==11){
						$palabra="DECIMOPRIMERO";
					}elseif($puesto==12){
						$palabra="DUODECIMO";
					}elseif($puesto==13){
						$palabra="DECIMOTERCERO";
					}elseif($puesto==14){
						$palabra="DECIMOCUARTO";
					}elseif($puesto==15){
						$palabra="DECIMOQUINTO";
					}elseif($puesto==16){
						$palabra="DECIMOSEXTO";
					}elseif($puesto==17){
						$palabra="DECIMOSEPTIMO";
					}elseif($puesto==18){
						$palabra="DECIMOOCTAVO";
					}elseif($puesto==19){
						$palabra="DECIMONOVEN0";
					}elseif($puesto==20){
						$palabra="VIGESIMO";
					}
					echo $puesto."  ".$palabra;?>
				</td>
				<td class="puntosver">
					<?php  
					echo $informacion[0]["puntos"];
					;?>
				</td>
			</tr>
		</table><br>
	</div>
		<div class="row">
			<div class="col-md-4 botonverde">
		<button type="button" id="botonver" class="btn btn-success botonverde" onclick="Miequipo.abrir()">VER PLANTILLA</button>
		<button type="button" id="botonver2" class="btn btn-danger" onclick="Miequipo.cerrar()">CERRAR PLANTILLA</button>
			</div>
		</div>
		<h3 class="tablamiequipo">PLANTILLA</h3>
		<table class="table tablamiequipo" id="insertarusuarios">
  			<thead class="thead-dark">
  				<th scope="col">NOMBRE</th>
			    <th scope="col">POSICION</th>
			    <th scope="col">CLAUSULA</th>
			    <th scope="col">SALARIO</th>
	  		</thead>
	  		<?php 
	  		$total=0;
	  		$equipo=$informacion[0]["nombre"];
	  		foreach ($informacion as $informacion) {
	  			if($equipo==$equipo){
	  				$total++;
	  			}elseif($equipo!=$equipo){
	  				$total=1;
	  			}
	  			echo "<tr><td>{$informacion['nombre_jugador']}</td>
	  				  <td>{$informacion['puesto']}</td>
	  				  <td>{$informacion['clausula']}</td>
	  				  <td>{$informacion['salario']}</td></tr>";
	  		} ?>
	  	</table>
	  	<div class="row">
	  		<div class="col-md-12">
	  			<table class="table tablamiequipo" id="insertarusuarios3">
		  			<tr>
				  		<td class="total"> <strong>TOTAL PLANTILLA</strong> </td>
				  		<td> <?php echo"<strong>". $total."</strong>" ;?> </td>
				  	</tr>
	  			</table>
	  		</div>
	  	</div>
	</div>
</div>