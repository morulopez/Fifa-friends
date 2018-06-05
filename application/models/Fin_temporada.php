<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fin_temporada extends CI_Model{
//// al finalizar la temporada volvemos a poner todo a cero para empezar una nueva temporada
 // tambien creamos al campeon
	function acabar(){
     $campeon=$this->db->select("*")->order_by("puntos","desc")->order_by("dg","desc")->get("equipos");
     $campeon=$campeon->row_array();
     $array=array("ID_EQUIPO"=>$campeon["ID"],
                   "nombre"=>$campeon["nombre"],
                   "puntos"=>$campeon["puntos"]);
     $this->db->insert("campeon",$array);
     ///// ingresamos al campon 100 millones de euros por ganar la liga
     $presupuesto=$this->db->select("PRESUPUESTO")->where("ID_EQUIPO",$campeon["ID"])->get("presupuesto_equipos");
     $presupuesto=$presupuesto->row_array();
     $cienmillones=$presupuesto["PRESUPUESTO"]+100000000;
     $this->db->set("PRESUPUESTO",$cienmillones)->where("ID_EQUIPO",$campeon["ID"])->update("presupuesto_equipos");
     for($i=1;$i<=10;$i++){
     $acjornada=array("estado"=>0,
                       "resultadocasa".$i=>NULL,
                       "resultadovisitante".$i=>NULL,
                        );
      $this->db->set($acjornada)->update("jornadas");
       }
      $actualizar_equipos=array("pj"=>0,
                                "pg"=>0,
                                "pe"=>0,
                                "pp"=>0,
                                "gf"=>0,
                                "gc"=>0,
                                "dg"=>0,
                                "puntos"=>0);
     $this->db->set($actualizar_equipos)->update("equipos");
     $this->db->set("estado",0)->update("estado_liga");
     $this->db->set("estado",0)->update("estado_cobros");
     $this->db->where(1,1)->delete("equiposparatemporada");
     $this->db->where(1,1)->delete("equipocambiado");
     $this->db->set("mercado",1)->update("mercadofichajes");
      $usuarios=$this->db->select("ID")->get("usuarios");
      $usuarios1=$usuarios->result_array();
      $lineasu=$usuarios->num_rows();
        for($idos=0;$idos<$lineasu;$idos++){
              $mensaje=Array("ID_USUARIO"=>$usuarios1[$idos]["ID"],"mensaje"=>"¡¡¡Ha finalizado la temporada!!!! El equipo campeon ha sido el <strong>{$campeon['nombre']}</strong> con <strong>{$campeon['puntos']}</strong> puntos y se ha llevado <strong>100 millones de euroooss!!!!</strong>
                Te recordamos que el periodo de fichajes permanece activo hasta que comience de nuevo la liga,se ha ingresado 100 millones en tu presupuesto para hacer frente a los gastos. <strong> Vigila los sueldos y clausulas de tus jugadores mas valiosos para que no te los quite nadie</strong>");
              $this->db->insert("mensajes",$mensaje);
             }
            $id=$this->db->select("ID")->get("equipos");
            $ID=$id->result_array();
            $linease=$id->num_rows();
            for($i=0;$i<$linease;$i++){
              $presupuesto2=$this->db->select("PRESUPUESTO")->where("ID_EQUIPO",$ID[$i]["ID"])->get("presupuesto_equipos");
              $presupuesto2=$presupuesto2->row_array();
              $actualizarpresupuesto=$presupuesto2["PRESUPUESTO"]+100000000;
              $this->db->set("PRESUPUESTO",$actualizarpresupuesto)->where("ID_EQUIPO",$ID[$i]["ID"])->update("presupuesto_equipos");

            }
    $this->db->where(1,1)->delete("despidodeequipo");
    $this->db->where(1,1)->delete("jugadoresfichados");
    $usuariosdespido=$this->db->select("*")->where("ID_EQUIPO >",0)->get("usuarios");
    $usuariosdespido2=$usuariosdespido->result_array();
    for($ides=0;$ides<$usuariosdespido->num_rows();$ides++){
      $compararpresupuesto=$this->db->select("*")->where("ID_EQUIPO",$usuariosdespido2[$ides]["ID_EQUIPO"])->get("presupuesto_equipos");
      $compararpresupuesto2=$compararpresupuesto->result_array();
      if($compararpresupuesto2[0]["PRESUPUESTO"] < $compararpresupuesto2[0]["gastos"]){
         $equipovetado=$this->db->select("nombre")->where("ID",$usuariosdespido2[$ides]["ID_EQUIPO"])->get("equipos");
         $equipovetado=$equipovetado->result_array();
        $despidoprocedente=Array("ID_USUARIO"=>$usuariosdespido2[$ides]["ID"],
                                 "NOMBRE_EQUIPO"=>$equipovetado[0]["nombre"]);
        $this->db->insert("despidodeequipo",$despidoprocedente);
         $this->db->set("escogido",0)->where("ID",$usuariosdespido2[$ides]["ID_EQUIPO"])->update("equipos");
          $this->db->set("ID_EQUIPO",0)->where("ID",$usuariosdespido2[$ides]["ID"])->update("usuarios");
          $array_items=array("sesionid","equipo_asig");    
          $this->session->unset_userdata( $array_items );
      }
    }

	}




}
?>