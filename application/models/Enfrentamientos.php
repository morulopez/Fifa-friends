<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Enfrentamientos extends CI_Model{


   

  function estado_liga(){
    ///1 seleccionamos el estado de liga y la recogemos en el controlador
    $estado=$this->db->select("estado")->get("estado_liga");
    $estado=$estado->row_array();
    return $estado;
   

  }
  function partidos($estado){
    ///2 recogemos el estado de liga y si es falso recogemos los equipos y los mezclamos con la funcion shuflle y los recogemos en el controlador
    if($estado["estado"]==false){
    $equipos=$this->db->select("nombre_equipo")->get("equiposparashufle");
    $equipos=$equipos->result_array();
    shuffle($equipos);
    return $equipos;
  

    }
  

   }
  
  function Equiposdefinitivos($equipos){
   ////los equipos recogidos y mezclados los insertamos en la nueva tabla equipos para la temporada
     $numero=count($equipos);
       for($i=0;$i<$numero;$i++){
       	$nuevosequipos=Array(
       		"nombre_equipo"=>"{$equipos[$i]['nombre_equipo']}");
       	$this->db->insert("equiposparatemporada",$nuevosequipos);
       }
       /// actualizamos el estado de la liga a true para que no se acceda a la funcion shuffle
       $this->db->set("estado",1)->update("estado_liga");
  }

 function equiposenfrentamientos(){

  ///recogemos los equipos de la tabla equipos para la temporada y creamos los enfrentamientos
  	$equiposenfrentamientos=$this->db->select("nombre_equipo")->get("equiposparatemporada");
    $equiposenfrentamientos=$equiposenfrentamientos->result_array();
    
    return $equiposenfrentamientos;
  }
  function mercadofichajes(){
    $mercado=$this->db->select("mercado")->get("mercadofichajes");
    $mercado=$mercado->result_array();
    return $mercado;
  }
  function abrirmercado(){
    $this->db->set("mercado",1)->update("mercadofichajes");
  }
  function cerrarmercado(){
    $this->db->set("mercado",0)->update("mercadofichajes");
  }
  function mensajeinicio(){
     $usuarios=$this->db->select("ID")->get("usuarios");
      $usuarios1=$usuarios->result_array();
      $lineasu=$usuarios->num_rows();
        for($idos=0;$idos<$lineasu;$idos++){
              $mensaje=Array("ID_USUARIO"=>$usuarios1[$idos]["ID"],"mensaje"=>"¡¡¡Ha comenzado la temporada!!!! El periodo de fichajes se ha cerrado hasta la jornada 20, recuerda que se ha descontado de tu presupuesto el 10% de las clausulas de tus jugadores, mucha suerte para la nueva temporada con tus nuevas incorporaciones!!");
              $this->db->insert("mensajes",$mensaje);
             }
  }

}

?>