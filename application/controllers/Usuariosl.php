<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuariosl extends CI_Controller {

	
	public function index(){
	
	}
	function login(){
		$this->load->model("Info_equipos");
		$this->Info_equipos->gastoslogin();
		$logueado=$this->session->userdata("sesionid");
	      	if(isset($logueado)){
	      		header("location:".site_url('Usuariosl/Miequipo/'.$logueado)."");
	      	}
		  
		   if(isset($_POST["botonlogin"])){
		   	$this->load->model("Usuarios");
		   	$login=$this->Usuarios->login($_POST["usuario"],$_POST["password"]);
		   	if($login==false){
		   		$denegado="Usuario o contraseña invalido,por favor vuelva a introducirlos";
		   	}else{
		   $session=array("sesionid"=>$login[0]["ID"],
		                   "equipo_asig"=>$login[0]["ID_EQUIPO"]);
	       $this->session->set_userdata($session);
	       if($login[0]["ID_EQUIPO"]==false){
	       	$logueado=$this->session->userdata("sesionid");
	       	header("location:".site_url('Usuariosl/elegir_equipo/'.$logueado)."");
	       }else{
	       	$logueado=$this->session->userdata("sesionid");
	       	header("location:".site_url('Usuariosl/Miequipo/'.$logueado)."");
	       }
	       	
	       
		   	}
		   }
		   if(isset($denegado)){
		    $this->load->view("login.php",["no_acceso"=>$denegado]);
		    }else{
		    	 $this->load->view("login.php");
		    }
		    
	       
			 
	     
	}

  
	function cerrar_sesion(){
	       $array_items=array("sesionid");
	       $this->session->unset_userdata( $array_items );
	       $logueado=$this->session->userdata("sesionid");
	      	if(!isset($logueado)){
	      		header("location:".site_url('Usuariosl/login')."");
	      	}
	}
	function Mi_equipo(){

		$logueado=$this->session->userdata("sesionid");
	      	if(!isset($logueado)){
	      		header("location:".site_url('Usuariosl/login')."");
	      	}
	      	 $sin_asignar=$this->session->userdata("equipo_asig");
	    if(isset($sin_asignar)){ 
	    	if($sin_asignar==false){
		     		header("location:".site_url('Usuariosl/elegir_equipo/'.$logueado)."");
		     }
	 	}

	 	$usuario=$_POST["idusuario"];
		$this->load->model("Info_equipos");
		$equipo=$this->Info_equipos->informacionequiposusuario($usuario);
		echo json_encode($equipo);
		
	}
	function Miequipo($usuario){
		$logueado=$this->session->userdata("sesionid");
	      	if(!isset($logueado)){
	      		header("location:".site_url('Usuariosl/login')."");
	      	}
	      	if($this->uri->segment(3)!=$logueado){
	 		header("location:".site_url('Usuariosl/Miequipo/'.$logueado)."");
	 		}
	      	 $sin_asignar=$this->session->userdata("equipo_asig");
	    if(isset($sin_asignar)){ 
	    	if($sin_asignar==false){
		     		header("location:".site_url('Usuariosl/elegir_equipo/'.$logueado)."");
		     }
		$this->load->model("Usuarios");
		$ventajugador=$this->Usuarios->mensajeventajugador($usuario);
		$this->Usuarios->finalventajugador($usuario);
		$finalventa=$this->Usuarios->cerrarventa($usuario);
		$mensajes=$this->Usuarios->mensajesusuarios($usuario);
		$estadoliga=$this->Usuarios->estadoligaparacambiardeequipo();
		$controlcambioequipo=$this->Usuarios->controlcambio($usuario);
		$this->load->model("Enfrentamientos");
     	$mercado=$this->Enfrentamientos->mercadofichajes();
     	$this->load->model("Mis_fichajes");
     	$fichajes=$this->Mis_fichajes->mensajefichajedejugador($logueado);
     	$this->Mis_fichajes->finalfichajejugador($usuario);
     	$finalfichaje=$this->Mis_fichajes->cerrarfichaje($usuario);
		$this->load->view("theme\Mi_equipo.php",["logueado"=>$logueado,
												 "mercado"=>$mercado,
												 "mensajes"=>$mensajes,
												 "ventajugador"=>$ventajugador,
												 "finalventajugador"=>$finalventa,
												 "fichajes"=>$fichajes,
												  "finalfichajejugador"=>$finalfichaje,
												  "estadoliga"=>$estadoliga,
												  "controlcambioequipo"=>$controlcambioequipo]);

		}
		/////venta de jugador a otro equipo
		if(isset($_POST["siventa"])){
			$traspaso=$this->Usuarios->actualizardatosventa($usuario,$_POST["jugador"],$_POST["precio"],$_POST["equipodestino"],$_POST["equipoprocedente"],$_POST["idequipo"],$_POST["idcerrarventa"]);
			header("Refresh:1; url=");
			if($traspaso){
				echo "<script type='text/javascript'>
				alert('su venta se ha ejecutado con exito se ha reembolsado {$_POST["precio"]}€ no olvide hacer los cambios de jugador en cu consola GRACIAS')</script>";
			}
		}
		if(isset($_POST["noalaventa"])){
			$borrar=$this->Usuarios->borrarventa($usuario,$_POST["idcerrarventa"]);
			if($borrar){
				header("Refresh:1; url=");
			}
		}
		if(isset($_POST["okventa"])){
			$this->Usuarios->okventajugador($usuario,$_POST["idventa"],$_POST["idequipo"],$_POST["nombrejugador"],$_POST["precio"],$_POST["equipoprocedencia"],$_POST["destinoequipo"],$_POST["idusuarioprocedencia"]);
			header("Refresh:1; url=");
			
		}
		if(isset($_POST["aceptar"])){
			$this->Usuarios->okventajugador($usuario,$_POST["idventa"],$_POST["idequipo"],$_POST["nombrejugador"],$_POST["precio"],$_POST["equipoprocedencia"],$_POST["destinoequipo"],$_POST["idusuarioprocedente"]);
			header("Refresh:1; url=");
		}
		if(isset($_POST["borrarmensaje"])){
			$this->Usuarios->borrarmensajesusuario($_POST["borrarmensaje"]);
			header("Refresh:0; url=");
		}

		///////////
		if(isset($_POST["okfichaje"])){
			print_r($_POST);
			$this->Mis_fichajes->okfichajejugador($usuario,$_POST["idfichaje"],$_POST["idequipo"],$_POST["nombrejugador"],$_POST["precio"],$_POST["equipoprocedencia"],$_POST["destinoequipo"],$_POST["idusuarioprocedencia"]);
			header("Refresh:1; url=");
			
		}
		if(isset($_POST["aceptarfichaje"])){
			$this->Mis_fichajes->okfichajejugador($usuario,$_POST["idfichaje"],$_POST["idequipo"],$_POST["nombrejugador"],$_POST["precio"],$_POST["equipoprocedencia"],$_POST["destinoequipo"],$_POST["idusuarioprocedente"]);
			header("Refresh:1; url=");
		}

		if(isset($_POST["noalfichaje"])){
			$borrar=$this->Mis_fichajes->borrarfichaje($usuario,$_POST["idcerrarventa"]);
			if($borrar){
				header("Refresh:1; url=");
		}}
		if(isset($_POST["sialfichaje"])){
			
			$traspaso=$this->Mis_fichajes->actualizardatosfichaje($usuario,$_POST["jugador"],$_POST["precio"],$_POST["equipodestino"],$_POST["equipoprocedente"],$_POST["idequipo"],$_POST["idcerrarventa"],$_POST["nuevaclausula"],$_POST["nuevosalario"],$_POST["posicion"]);
			header("Refresh:1; url=");
			if($traspaso){
				echo "<script type='text/javascript'>
				alert('Su fichaje se ha ejecutado con exito ¡ENHORABUENA! no olvide hacer los cambios de jugador en cu consola GRACIAS')</script>";
			}
		}
		if(isset($_POST["sicambiarequipo"])){
			    $insertarquesecambiaequipo=$this->Usuarios->controlcambioequipo($usuario);
				$cambiar=$this->Usuarios->cambiarequipo($usuario);
				if($cambiar){
	                 $session=array( 
		                   "equipo_asig"=>0);
	                     $this->session->set_userdata($session);
	                     $sin_asignar=$this->session->userdata("equipo_asig");
					    if(isset($sin_asignar)){ 
					    	if($sin_asignar==false){
						     		header("location:".site_url('Usuariosl/elegir_equipo/'.$logueado)."");
						     }
				}
		}
	}}
	function registro(){
		 
		 if(isset($_POST["botonregistro"])){
             if($_POST["password"]!=$_POST["password2"]){
             	$diferent_password="Las contraseñas no coinciden,insertelas de nuevo";
             }else{
             	$this->load->model("Usuarios");
             	$register=$this->Usuarios->registro_usuario($_POST["usuario"],$_POST["password"]);
             	if($register){
             		$exito="¡Te has registrado con exito!";
             		header("Refresh:1;".site_url('Usuariosl/login')."");
             	}
             }
		 }
		 if(isset($diferent_password)){
		  $this->load->view("registro.php",["diferent_password"=>$diferent_password]);
		}elseif(isset($exito)){
			$this->load->view("registro.php",["exito"=>$exito]);
		}else{
          $this->load->view("registro.php");
		}
	}
	function elegir_equipo($id){
		 $logueado=$this->session->userdata("sesionid");
	      	if(!isset($logueado)){
	      		header("location:".site_url('Usuariosl/login')."");
	      	}
		   $sin_asignar=$this->session->userdata("equipo_asig");
		   if($sin_asignar==true){
		   	header("location:".site_url('Clasificacion/tabla_clasificacion')."");
		   }
			$this->load->model("Usuarios");
			$despido=$this->Usuarios->verdespidoequipo($id);
			$equipo=$this->Usuarios->elegir_equipo();
			if(isset($_POST["si"])){
				$vetado=$this->Usuarios->vetarequipo($id,$_POST["si"]);
				if($vetado){
					$mensaje="El presidente del {$_POST["si"]} no quiere verte ni en pintura,has destrozado el equipo dejandolo en numeros rojos,asi que elige otro equipo";
				}else{
					$asignado=$this->Usuarios->asignar_equipo($id,$_POST["si"]);
			 	$login=$this->Usuarios->elegiridequipo($id);
			 	$session=array( 
		                   "equipo_asig"=>$login[0]["ID_EQUIPO"]);
	            $this->session->set_userdata($session);
			 	header("Refresh:2;".site_url('Clasificacion/tabla_clasificacion')."");
				}
			 		
			 }
			
				if($despido>0){
					if(isset($mensaje)){
					$this->load->view("elegir_equipo.php",["equipos"=>$equipo,
				                                           "despido"=>$despido,
				                                            "mensaje"=>$mensaje]);
				}else{
					$this->load->view("elegir_equipo.php",["equipos"=>$equipo,
				                                           "despido"=>$despido]);
				}
				}elseif(isset($mensaje)){
					 $this->load->view("elegir_equipo.php",["equipos"=>$equipo,
					                                        "mensaje"=>$mensaje]);
				}else{
					$this->load->view("elegir_equipo.php",["equipos"=>$equipo]);
				}
			

			   
			 
	}
	function ediclausulasalario(){
		$this->load->model("Info_equipos");
		$actualizar=$this->Info_equipos->actualizarsalaclau($_POST["nombrejugador"],$_POST["idequipo"],$_POST["nuevaclausula"],$_POST["nuevosalario"]);
		echo $actualizar;
	}
	function venderjugador(){
		$this->load->model("Usuarios");
		
			$jugadores=$this->Usuarios->ventajugador($_POST["idequipoventa"],$_POST["idequipo"],$_POST["jugador"],$_POST["idusuario"],$_POST["precio"]);
		echo $jugadores;
	   
		
		
		
	}  
}


