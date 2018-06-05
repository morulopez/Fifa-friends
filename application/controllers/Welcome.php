<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
    
	{     //$this->load->model('Usuarios');
		$this->load->model("Valor_equipos");
		////ESTADO DE LA LIGA PARA EMPEZAR UNA NUEVA TEMPORADA DONDE SE HACEN LOS CUADRANTE Y ENFRENTAMIENTOS
	    //$estado=$this->Enfrentamientos->estado_liga();
		///pasamos el estado de liga a partidos
	    //$equipos=$this->Enfrentamientos->partidos($estado);
		/// recogemos los equimos mezclados y los insertamos en la funcion equiposdefinitivos
	    //$this->Enfrentamientos->Equiposdefinitivos($equipos);
	     //$partidos=$this->Enfrentamientos->equiposenfrentamientos();

		////USUARIOS
	    //$nuevo_usuario=$this->Usuarios->registro_usuario("jesus","lopez",30,"jesus17121987");
	    //$usuario=$this->Usuarios->login(4,"jesus17121987");

	    
		
	
	
		
		

		
	    

	
		
		
		

	}

	
	    

         

			
			

}
