<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jornadas_m extends CI_Model{
   
        function select_jornadas(){
        	$jornadas=$this->db->select("jornada,estado")->get("jornadas");
        	$jornadas=$jornadas->result_array();
        	return $jornadas;
        }
        function abrirmercado(){
        	$this->db->set("mercado",1)->update("mercadofichajes");
        	$usuarios=$this->db->select("ID")->get("usuarios");
      		$usuarios1=$usuarios->result_array();
      		$lineasu=$usuarios->num_rows();
        for($idos=0;$idos<$lineasu;$idos++){
              $mensaje=Array("ID_USUARIO"=>$usuarios1[$idos]["ID"],"mensaje"=>"El <strong>mercado de invierno</strong> desde la jornada 20 permanece abierto hasta la jornada 24 ambas inclusiven.Puedes fichar y editar clausulas y sueldos de tus jugadores.¡¡Bunea suerte!!");
              $this->db->insert("mensajes",$mensaje);
             }
        }
        function cerrarmercado(){
        	$this->db->set("mercado",0)->update("mercadofichajes");
        	$usuarios=$this->db->select("ID")->get("usuarios");
      		$usuarios1=$usuarios->result_array();
      		$lineasu=$usuarios->num_rows();
        for($idos=0;$idos<$lineasu;$idos++){
              $mensaje=Array("ID_USUARIO"=>$usuarios1[$idos]["ID"],"mensaje"=>"El <strong>mercado de invierno</strong> se ha cerrado y permanecerá cerrado hasta la próxima temporada.¡¡Buena suerte con tus nuevas incoporaciones!!");
              $this->db->insert("mensajes",$mensaje);
             }
        }
        
}

?>