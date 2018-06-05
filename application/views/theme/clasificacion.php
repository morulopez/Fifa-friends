<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php 
if($equi[0]['pj']==38){
	echo "<br><div class='row'><div class='col-md-3'></div><div class='col-md-5'><img src=".CDN."/imagenes/{$equi[0]['escudo']}></div><div class='col-md-4'></div></div><h1 id='campeonh1'>¡¡ CAMPEON ".strtoupper ($equi[0]['nombre'])." !!</h1><br><br>";
}
?>
<script type="text/javascript">
	function campeon(){
		var colores=Array("#4286f4","#bc42f4","#f44268","#966f77","#65c6b1","#ccfff3","#fff6cc","#967d03","#681313","#136816","#0ece14","#0ebbce","#0b6f7a","#74d5e0","#9b1be5","#42dcf4","#7ab8c1","#1b5e68","#cece16","#e2e256","#e5e5be","#a53a24","#e2bedf","#8e7d8d","#56044e","#b50027","#e2718a","#f4c6ff","#c6feff","#034d4f");	
		 
		i=0;
		 setInterval(function(){
		 h1campeon=document.getElementById("campeonh1");
		 h1campeon.style.background=colores[i];
	     h1campeon.style.color="#ffff";
	     h1campeon.style.padding="5px";
	     h1campeon.style.paddingTop="15px";
	     h1campeon.style.paddingBottom="15px";
	     h1campeon.style.borderRadius="5px";
	     i++;
	     if(i==colores.lenght){
	     	i=0;
	     }},1000);

	    
	}
	campeon();
	
	
	</script>
<h1>Clasificacion</h1>
<div class="table-responsive">
<table class="table table-condensed">
	<tr>
		<td> 
			<?php echo "<a href='".site_url("Clasificacion/ver_equipo/{$equi[0]['nombre']}/1")."'><img class='imgequipos' src=".CDN."/imagenes/{$equi[0]['escudo']}></a>";?>
		</td>
				<td>
					<?php echo "<a href='".site_url("Clasificacion/ver_equipo/{$equi[1]['nombre']}/2")."'><img class='imgequipos' src=".CDN."/imagenes/{$equi[1]['escudo']}></a>";?>
		</td>
				<td>
					<?php echo "<a href='".site_url("Clasificacion/ver_equipo/{$equi[2]['nombre']}/3")."'><img class='imgequipos' src=".CDN."/imagenes/{$equi[2]['escudo']}></a>";?>
		</td>
				<td>
					<?php echo "<a href='".site_url("Clasificacion/ver_equipo/{$equi[3]['nombre']}/4")."'><img class='imgequipos' src=".CDN."/imagenes/{$equi[3]['escudo']}></a>";?>
		</td>
				<td>
					<?php echo "<a href='".site_url("Clasificacion/ver_equipo/{$equi[4]['nombre']}/5")."'><img class='imgequipos' src=".CDN."/imagenes/{$equi[4]['escudo']}></a>";?>
		</td>
				<td>
					<?php echo "<a href='".site_url("Clasificacion/ver_equipo/{$equi[5]['nombre']}/6")."'><img class='imgequipos' src=".CDN."/imagenes/{$equi[5]['escudo']}></a>";?>
		</td>
				<td>
					<?php echo "<a href='".site_url("Clasificacion/ver_equipo/{$equi[6]['nombre']}/7")."'><img class='imgequipos' src=".CDN."/imagenes/{$equi[6]['escudo']}></a>";?>
		</td>
				<td>
					<?php echo "<a href='".site_url("Clasificacion/ver_equipo/{$equi[7]['nombre']}/8")."'><img class='imgequipos' src=".CDN."/imagenes/{$equi[7]['escudo']}></a>";?>
		</td>
				<td>
					<?php echo "<a href='".site_url("Clasificacion/ver_equipo/{$equi[8]['nombre']}/9")."'><img class='imgequipos' src=".CDN."/imagenes/{$equi[8]['escudo']}></a>";?>
		</td>
				<td>
					<?php echo "<a href='".site_url("Clasificacion/ver_equipo/{$equi[9]['nombre']}/10")."'><img class='imgequipos' src=".CDN."/imagenes/{$equi[9]['escudo']}></a>";?>
		</td>
	</tr>
	<tr>
		<td>
			<?php echo "<a href='".site_url("Clasificacion/ver_equipo/{$equi[10]['nombre']}/11")."'><img class='imgequipos' src=".CDN."/imagenes/{$equi[10]['escudo']}></a>";?>
		</td>
				<td>
					<?php echo "<a href='".site_url("Clasificacion/ver_equipo/{$equi[11]['nombre']}/12")."'><img class='imgequipos' src=".CDN."/imagenes/{$equi[11]['escudo']}></a>";?>
		</td>
				<td>
					<?php echo "<a href='".site_url("Clasificacion/ver_equipo/{$equi[12]['nombre']}/13")."'><img class='imgequipos' src=".CDN."/imagenes/{$equi[12]['escudo']}></a>";?>
		</td>
				<td>
					<?php echo "<a href='".site_url("Clasificacion/ver_equipo/{$equi[13]['nombre']}/14")."'><img class='imgequipos' src=".CDN."/imagenes/{$equi[13]['escudo']}></a>";?>
		</td>
				<td>
					<?php echo "<a href='".site_url("Clasificacion/ver_equipo/{$equi[14]['nombre']}/15")."'><img class='imgequipos' src=".CDN."/imagenes/{$equi[14]['escudo']}></a>";?>
		</td>
				<td>
					<?php echo "<a href='".site_url("Clasificacion/ver_equipo/{$equi[15]['nombre']}/16")."'><img class='imgequipos' src=".CDN."/imagenes/{$equi[15]['escudo']}></a>";?>
		</td>
				<td>
					<?php echo "<a href='".site_url("Clasificacion/ver_equipo/{$equi[16]['nombre']}/17")."'><img class='imgequipos' src=".CDN."/imagenes/{$equi[16]['escudo']}></a>";?>
		</td>
				<td>
					<?php echo "<a href='".site_url("Clasificacion/ver_equipo/{$equi[17]['nombre']}/18")."'><img class='imgequipos' src=".CDN."/imagenes/{$equi[17]['escudo']}></a>";?>
		</td>
				<td>
					<?php echo "<a href='".site_url("Clasificacion/ver_equipo/{$equi[18]['nombre']}/19")."'><img class='imgequipos' src=".CDN."/imagenes/{$equi[18]['escudo']}></a>";?>
		</td>
				<td>
					<?php echo "<a href='".site_url("Clasificacion/ver_equipo/{$equi[19]['nombre']}/20")."'><img class='imgequipos' src=".CDN."/imagenes/{$equi[19]['escudo']}></a>";?>
		</td>
	</tr>
</table>
<div class="table-responsive">
<table class="table table-condensed">
	<tr>
			
			<th>Equipo</th>
			
		
			<th>PJ</th>
		
		
			<th>PG</th>
			
			
			<th>PE</th>
			
			
			<th>PP</th>


			<th>GF</th>

			<th>GC</th>
			<th>DG</th>
			
			
			<th>Puntos</th>
		</tr>
			
	<?php 
	$puesto=1;
	foreach ($equi as $equipo) {
        if($equipo["escogido"]){
			echo "
			<tr><td><span class='puesto'><strong>".$puesto++."</strong></span>{$equipo['nombre']}<span class='imgmando'><i class='fa fa-gamepad'></i></span></td>
			<td>{$equipo['pj']}</td>
			<td>{$equipo['pg']}</td>
			<td>{$equipo['pe']}</td>
			<td>{$equipo['pp']}</td>
			<td>{$equipo['gf']}</td>
			<td>{$equipo['gc']}</td>
			<td>{$equipo['dg']}</td>
			<td class='puntos'><strong>{$equipo['puntos']}</strong></td></tr>";
		}else{
			echo "
			<tr><td><span class='puesto'><strong>".$puesto++."</strong></span>{$equipo['nombre']}</td>
			<td>{$equipo['pj']}</td>
			<td>{$equipo['pg']}</td>
			<td>{$equipo['pe']}</td>
			<td>{$equipo['pp']}</td>
			<td>{$equipo['gf']}</td>
			<td>{$equipo['gc']}</td>
			<td>{$equipo['dg']}</td>
			<td class='puntos'><strong>{$equipo['puntos']}</strong></td></tr>";
		}
		
	}
		
	?>
	</table>
</div>