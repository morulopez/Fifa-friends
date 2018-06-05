<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<body>
<br>
<div class="row">
	<div class="col-md-8">
		<button type="submit" name="prueba" id="busquedaavanzada" class="btn btn-success" onclick="fichajes.busqueda_avanzada();">Busqueda avanzada</button><br>
		<?php if(isset($seleccionar)){
			echo "<span class='seleccionar'>".$seleccionar."</span>";
		}   ?>

	</div>
	<div class="col-md-2 derecha">
		<button type="button" class="btn btn-primary" onclick="fichajes.botonfueradeliga();">FICHAR JUGADOR FUERA DE LA LIGA</button>
	</div>
</div><br>
<div class="row" id="check">
	<div class="col-md-8">
	<form action="" method="POST">
		<div class="col-md-4">
			  	 <?php   
			    for($i=0;$i<=9;$i++){
			    	if($equipousuario[0]["ID_EQUIPO"]!=$equipos[$i]['ID']){
					  echo "<div class='radio'>
					  <label>
					   <input type='radio' name='equipos' id='radio'{$i} value='{$equipos[$i]['ID']}'>
					   {$equipos[$i]["nombre"]}
					   
					   </label> </div>";
			   		}
			    	
			    }
			     ?>
		</div>
		<div class="col-md-4">
			  	 <?php   
			    for($i2=10;$i2<=19;$i2++){
			  echo "<div class='radio'>
			  <label>
			   <input type='radio' name='equipos' id='radio'{$i2} value='{$equipos[$i2]['ID']}'>
			   {$equipos[$i2]['nombre']}
			   
			   </label>
			   </div>";
			    	
			    }
			     ?>
		</div>
		<div class="col-md-4">
			  	 <?php   
			  	 $puestos=Array("portero","defensa","medio","delantero","todo");
			    for($i3=0;$i3<=4;$i3++){
			  echo "<div class='radio'>
			  <label>
			   <input type='radio' name='puestos' id='radiopuestos'{$i2} value='{$puestos[$i3]}'>
			   {$puestos[$i3]}s
			   
			   </label>
			   </div>";
			    	
			    }
			     ?>
		</div>
		<div class="row">
			<div class="col-md-3">
		<button type="submit" name="irabuscar" id="botonirabuscar" class="btn btn-info">BUSCAR</button>
	</form>
			</div>
		</div>
	</div>
</div>
<div class="row" id="jugadorespordefecto">
	<div class="col-md-12">
		<form action="" method="POST">
			<table class="table">
				<?php if(isset($jugadoresporequipo)){ ?>
				<Thead class="tablabuscador">
					<th>
					EQUIPO
					</th>
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
				</Thead>
				<?php 
				$numero=0;
			foreach ($jugadoresporequipo as $jugadores){
				
              echo"<tr><td><img class='escudofichajes' src=".CDN."/imagenes/{$jugadores['escudo']}></td>
                       <td><input type='text' class='salarioclausula3' value='{$jugadores['nombre_jugador']}' name='jugador{$numero}' readonly></td>
                       <td><input type='text' class='salarioclausula' value='{$jugadores['puesto']}' name='puesto{$numero}' readonly></td>
                       <td><input type='text' class='salarioclausula2'  value='{$jugadores['salario']}' name='salario{$numero}' readonly></td>
                       <td><input type='text' class='salarioclausula'  value='{$jugadores['clausula']}' name='clausula{$numero}' readonly></td>
                       <td><button type='submit' class='salarioclausula botonfichar'  value='{$jugadores['ID_EQUIPO']}' name='botonfichar2{$numero}'>FICHAR</button></td></tr>
                       <td><input type='hidden' class='salarioclausula'  value='{$numero}' name='numero' readonly></td>";
                 $numero++;
			}
			
			}  ?>
		</table>
		</form>
	</div>
	<div class="row">
		<div class="col-md-1">
		</div>
		<div class="col-md-8">
			<?php 
				if(isset($_POST['numero'])){
					
				for($i=0;$i<=$_POST['numero'];$i++){
				if(isset($_POST['botonfichar2'.$i])){
					echo "<form action='' method='POST'>
					<input type='hidden' class='salarioclausula3' value='".$_POST['jugador'.$i]."' name='jugador'>
					<input type='hidden' name='idequipo' value='".$_POST['botonfichar2'.$i]."'>
					<h4>ESTAS A UN PASO DE FICHAR A <br><br> <span class='jugadorafichar'>¡ ".strtoupper($_POST['jugador'.$i])." !</span></h4><br>
					<span>Inserta el sueldo y clausula que le vas a poner a este jugador.Tienes que pagarle un millon y medio más por lo menos para que se vaya a tu equipo</span><br><br>
					<span>CLAUSULA</span><br>
					<input type='number' class='salarioclausula2'  value='".$_POST['clausula'.$i]."' name='clausula2' ><br><br>
					<span>SUELDO</span><br>
					<input type='number' class='salarioclausula'  value='".$_POST['salario'.$i]."' name='nuevosalario' ><br><br>
					<button type='submit' class='salarioclausula botonfichar' name='fichar'>INTRODUCIR DATOS Y FICHAR</button></form>";
				}}
					
				} ?>
		</div>
		<div class="col-md-2">
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12" id="divfueradeliga">
	</div>
	</div>

</body>