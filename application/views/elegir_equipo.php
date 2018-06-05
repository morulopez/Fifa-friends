<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Elegir equipo Fifafriends</title>
	<script type="text/javascript" src="<?php echo CDN;?>/js/obj.js"></script>
	<link rel="stylesheet" href="<?php echo CDN;?>/css/estilos.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="eligiendoequipo">
	<div class="row">
		
		<div class="container-fluid generallogin">
			<div class="row">
			<div class="col-md-5">
			</div>
			<div class="col-md-2 columnados">
			<i class="fa fa-futbol-o balon" style="font-size:128px;color:#25913e"></i>
			</div>
			<div class="col-md-5">
			</div>
		    </div>
			<div class="col-md-12 conlogin">
				<?php if(isset($despido)){
					echo "<h3 class='h1elegir despedido'>Te han despedido de tu equipo POR MALO, escoge otro equipo MOJON, no sabes jugar al FIFA</h3><br>";
				}else{
					echo '<h1 class="h1elegir">ELIGE UN EQUIPO PARA PODER EMPEZAR</h1>';
				}
				if(isset($mensaje)){
					echo "<h4 class='h1elegir despedido'>{$mensaje}</h4><br>";
				}?>
			<form class="formuescoger" action="" method="POST">
			  <div class="form-group">
			  	<table  class="table">
			  		<tr>
				<?php
				
				for($i=0;$i<=9;$i++){
					if(isset($equipos[$i]['nombre'])){
					echo "<td>
					<input type='hidden' name='idequipo{$i}' value='{$equipos[$i]['ID']}'><button type='submit' value='{$equipos[$i]['nombre']}' name='botonelegirequipo'><img  class='imgelegir' src=".CDN."/imagenes/{$equipos[$i]['escudo']}></button></td>";
				    }
						                                 
						
					}
					?>
				</tr>
				<tr>
					<?php
					for($i=10;$i<=19;$i++){
						if(isset($equipos[$i]['nombre'])){
					echo "<td><input type='hidden' name='idequipo{$i}' value='{$equipos[$i]['ID']}'><button class='botonescudos'
					type='submit' value='{$equipos[$i]['nombre']}' name='botonelegirequipo'><img class='imgelegir' src=".CDN."/imagenes/{$equipos[$i]['escudo']}></button></td>";
						}
						                                 
						
					}
					

				 ?>
				</tr>
				
			   </table>
			   <?php
			   if(isset($_POST["botonelegirequipo"])){
			 	
			 	echo "¿Estas seguro de querer escoger al equipo <strong>{$_POST['botonelegirequipo']}</strong>?<br><form action='' method='POST'>
			 	<button type='submit' name='si' value='{$_POST['botonelegirequipo']}'>SI</button>
			 	<button type='submit'>NO</button></form>";
			 }
			   ?>
			  </div>
			</form>
		    </div>
		</div>	    
	</div>

	</body>