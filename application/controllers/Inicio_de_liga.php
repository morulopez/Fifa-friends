<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio_de_liga extends CI_Controller {

	
	public function index(){

	}

	function Inicio_liga(){
		$logueado=$this->session->userdata("sesionid");
	      	if(!isset($logueado)){
	      		header("location:".site_url('Usuariosl/login')."");
	      	}
	      	 $this->load->model("Enfrentamientos");
	      	 $estado=$this->Enfrentamientos->estado_liga();
	      	 if($estado["estado"]==true){
	      	 	$logueado=$this->session->userdata("sesionid");
	      	 	header("location:".site_url('Clasificacion/tabla_clasificacion')."");
	      	 }
        if(isset($_POST["iniciar-tem"])){
        $estado=$this->Enfrentamientos->estado_liga();
		///pasamos el estado de liga a partidos
	    $equipos=$this->Enfrentamientos->partidos($estado);
		/// recogemos los equimos mezclados y los insertamos en la funcion equiposdefinitivos
	    $this->Enfrentamientos->Equiposdefinitivos($equipos);
	    $this->Enfrentamientos->equiposenfrentamientos();
	    $this->Enfrentamientos->cerrarmercado();
	    $this->Enfrentamientos->mensajeinicio();
	    //cobramos las clausulas de los jugadores y añadimos el dinero
	    $this->load->model("Info_equipos");
	    $this->Info_equipos->gastos();
	    header("location:".site_url('Clasificacion/tabla_clasificacion')."");
        }
        $this->load->model("Enfrentamientos");
        $mercado=$this->Enfrentamientos->mercadofichajes();
        $inicio=$this->uri->segment(2);
        $html=$this->load->view("theme/inicio_liga.php",["logueado"=>$logueado,
    														"mercado"=>$mercado,
    														"inicio"=>$inicio],true);
        
        $this->load->view("panel.php",["contenido"=>$html,
    						"logueado"=>$logueado]);


	}
}

?>