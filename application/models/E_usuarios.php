<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class E_usuarios extends CI_Model{

	function Equipo_estadotrue(){
		$escogido=$this->db->select("escogido")->get("equipos");
		$escogido=$escogido->result_array();
		return $escogido;

	}
	function Asignar_equipo(){

	}





}
?>