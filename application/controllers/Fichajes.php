<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fichajes extends CI_Controller {

	
	public function index(){

	}
	function abierto(){
		$this->load->model("Equipos_clasificacion");
		$equipos=$this->Equipos_clasificacion->equipos_clasi();
		$this->load->model("Enfrentamientos");
		$mercado=$this->Enfrentamientos->mercadofichajes();
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
	 	$equipousuario=$this->Equipos_clasificacion->equipousuario($logueado);
	 	if(isset($_POST["fichar"])){
			$this->load->model("Mis_fichajes");
				$salario=$this->Mis_fichajes->ficharjugadorliga($logueado,$_POST["nuevosalario"],$_POST["jugador"],$_POST["clausula2"],$_POST["idequipo"]);
				if($salario=="correcto"){
					echo "<script type='text/javascript'>alert('HAS FICHADO A {$_POST['jugador']} ¡Enhorabuena! no olvides de cambiarlo en tu consola')</script>";
				}elseif($salario=="Tienes que pagar mas de un millon y medio para que se vaya el jugador a tu equipo"){
					echo  "<script type='text/javascript'>alert('RECUERDA QUE TIENES QUE PAGAR MAS DE UN MILLON Y MEDIO DE DIFERENCIA PARA QUE EL JUGADOR SE VAYA A TU EQUIPO')</script>";
				}
				elseif($salario=="NO TIENES SUFICIENTE PRESUPUESTO PARA FICHAR A ESTE JUGADOR"){
						echo  "<script type='text/javascript'>alert('NO TIENES SUFICIENTE PRESUPUESTO PARA FICHAR A ESTE JUGADOR')</script>";
				}elseif($salario=="Este jugador ha sido recientemente fichado por un equipo esta temporada,no tienes posivilidad de ficharlo hasta la temporada que viene"){
						echo  "<script type='text/javascript'>alert('{$salario}')</script>";
				}elseif($salario=="Tienes 25 jugadores en tu plantilla, no puedes ampliarla más,vende algun jugador si quieres fichar"){
					echo  "<script type='text/javascript'>alert('{$salario}')</script>";
				}
		}
	 	if(isset($_POST["irabuscar"])){
	 		if(!isset($_POST["equipos"]) || !isset($_POST["puestos"])){
	 			 $seleccionar="Tienes que seleccionar el equipo y la posicion";

	 		}else{
	 			$this->load->model("Mis_fichajes");
	 			$jugadoresporequipo=$this->Mis_fichajes->jugadoresfiltro($_POST["equipos"],$_POST["puestos"]);
	 		}
	 	}
	 	   if(isset($seleccionar)){
			$html=$this->load->view("theme/fichajes.php",["logueado"=>$logueado,
		                                                   "mercado"=>$mercado,
		                                                   "equipos"=>$equipos,
		                                                   "seleccionar"=>$seleccionar,
		                                                   "equipousuario"=>$equipousuario],true);
		}elseif(isset($jugadoresporequipo)){
			$html=$this->load->view("theme/fichajes.php",["logueado"=>$logueado,
		                                                   "mercado"=>$mercado,
		                                                   "equipos"=>$equipos,
		                                                   "jugadoresporequipo"=>$jugadoresporequipo,
		                                                     "equipousuario"=>$equipousuario],true);
		}
		else{
			$html=$this->load->view("theme/fichajes.php",["logueado"=>$logueado,
		                                                   "mercado"=>$mercado,
		                                                   "equipos"=>$equipos,
		                                                     "equipousuario"=>$equipousuario],true);
		}


		///////////////  fichajes de jugadores fuera de la liga
		if(isset($_POST["botonficharotrojugador"])){
			$this->load->model("Mis_fichajes");
			$fichajefuerliga=$this->Mis_fichajes->insertarfichaje($logueado,$_POST["jugador"],$_POST["equipoprocedente"],$_POST["cantidad"]);
			if($fichajefuerliga){
				echo  "<script type='text/javascript'>alert('Tu propuesta de fichaje del jugador {$_POST["jugador"]} del equipo {$_POST["equipoprocedente"]} ha sido realizada con exito,permanece a la espera de que contesten todos tus compañeros')</script>";
			}
		}


			$this->load->view("panel.php",["contenido"=>$html]);

	}
	
}

?>