<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clasificacion extends CI_Controller {

	
	public function index(){

	}
	function tabla_clasificacion(){
		$this->load->model("Enfrentamientos");
		$estado=$this->Enfrentamientos->estado_liga();
		if($estado["estado"]==false){
			header("location:".site_url('Inicio_de_liga/Inicio_liga')."");
		}
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
	 	$mercado=$this->Enfrentamientos->mercadofichajes();
		$this->load->model("Equipos_clasificacion");
		$equipos=$this->Equipos_clasificacion->equipos_clasi();
		$html=$this->load->view("theme/clasificacion.php",["equi"=>$equipos,
	                                                        "logueado"=>$logueado,
	                                                       "mercado"=>$mercado],true);
		$conte["contenido"]=$html;
		$this->load->view("panel.php",$conte);
	}
	function ver_equipo($nombre_equipo){
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
	      	if($nombre_equipo=="Bayer%20Munich"){
	      		$nombre_equipo="Bayer Munich";
	      	}
	        $this->load->model("Info_equipos");
	        $informacion=$this->Info_equipos->informacionequipos($nombre_equipo);
	        $ligas=$this->Info_equipos->ligasconseguidas($nombre_equipo);
	        $html=$this->load->view("theme/ver_equipo.php",["informacion"=>$informacion,
	    													"ligas"=>$ligas],true);
	        $this->load->view("panel.php",["contenido"=>$html,
	    									"logueado"=>$logueado,
	    									"mercado"=>$mercado]);

	        
	}
		
}
?>
    