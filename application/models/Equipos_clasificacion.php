<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Equipos_clasificacion extends CI_Model{

	function equipos_clasi(){
		$equipos=$this->db->select("*")->order_by("puntos","desc")->order_by("dg","desc")->get("equipos");
		$equipos=$equipos->result_array();
		return $equipos;
	}
	function equipousuario($id){
		 $equipousuario=$this->db->select("ID_EQUIPO")->where("ID",$id)->get("usuarios");
		 $equipousuario=$equipousuario->result_array();
		 return $equipousuario;
	}


}
?>