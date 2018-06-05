<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mis_fichajes extends CI_Model{

   function jugadoresfiltro($equipo,$posicion){
   	if($posicion!="todo"){
   		$jugadores=$this->db->select("plantilla_equipos.ID_EQUIPO,nombre_jugador,puesto,clausula,salario, equipos.ID,nombre,escudo")->where("ID_EQUIPO",$equipo)->where("puesto",$posicion)->join("equipos","plantilla_equipos.ID_EQUIPO=equipos.ID","left")->get("plantilla_equipos");
   		$jugadores=$jugadores->result_array();
   		return $jugadores;
   	}else{
   		$jugadores=$this->db->select("plantilla_equipos.ID_EQUIPO,nombre_jugador,puesto,clausula,salario, equipos.ID,nombre,escudo")->where("ID_EQUIPO",$equipo)->join("equipos","plantilla_equipos.ID_EQUIPO=equipos.ID","left")->get("plantilla_equipos");
   		$jugadores=$jugadores->result_array();
   		return $jugadores;
   	}
   }
   function ficharjugadorliga($idusuario,$nuevosalario,$jugador,$nuevaclausula,$idequipo){
    $jugadoresequipoficha=$this->db->select("nombre_jugador")->where("ID_EQUIPO",$idequipo)->get("plantilla_equipos");
    if($jugadoresequipoficha->num_rows()>=25){
      return "Tienes 25 jugadores en tu plantilla, no puedes ampliarla más,vende algun jugador si quieres fichar";
    }
   	$jugadorlibre=$this->db->select("*")->where("nombre",$jugador)->get("jugadoresfichados");
   	if($jugadorlibre->num_rows()>0){
   		return "Este jugador ha sido recientemente fichado por un equipo esta temporada,no tienes posivilidad de ficharlo hasta la temporada que viene";
   	}
   	$sacarsalario=$this->db->select("salario")->where("nombre_jugador",$jugador)->where("ID_EQUIPO",$idequipo)->get("plantilla_equipos");
   	$sacarsalario=$sacarsalario->result_array();
   	$salario=$sacarsalario[0]["salario"]+1500000;
   	if($nuevosalario < $salario){
   		return "Tienes que pagar mas de un millon y medio para que se vaya el jugador a tu equipo";
   	}else{
   		///sacamos el equipo del usuario par ver su presupuesto
   		$jugador2=$jugador;
   		$equipousuario=$this->db->select("*")->where("ID",$idusuario)->get("usuarios");
   		$equipousuario=$equipousuario->result_array();
   		$equipo=$this->db->select("*")->where("ID",$equipousuario[0]["ID_EQUIPO"])->get("equipos");
   		$equipo=$equipo->result_array();
   		$equipo2=$this->db->select("*")->where("ID",$idequipo)->get("equipos");
   		$equipo2=$equipo2->result_array();
   		$presupuesto=$this->db->select("*")->where("ID_EQUIPO",$equipousuario[0]["ID_EQUIPO"])->get("presupuesto_equipos");
   		$presupuesto=$presupuesto->result_array();
   		if($presupuesto[0]["PRESUPUESTO"] < $presupuesto[0]["gastos"]){
   			return "NO TIENES SUFICIENTE PRESUPUESTO PARA FICHAR A ESTE JUGADOR";
   		}else{

   			////ACTUALIZAMOS DATOS DEL EQUIPO

		   	$equipodestino=$this->db->select("*")->where("ID",$equipousuario[0]["ID_EQUIPO"])->get("equipos");
		    $equipodestino=$equipodestino->result_array();
		    ///pasamos al jugador al equipo
		    $datosjugador=Array("ID_EQUIPO"=>$equipousuario[0]["ID_EQUIPO"],
		                        "clausula"=>$nuevaclausula,
		                         "salario"=>$nuevosalario);
		    $jugador=$this->db->where("nombre_jugador",$jugador)->where("ID_EQUIPO",$idequipo)->set($datosjugador)->update("plantilla_equipos");
		    ////sacamos los gastos
		    $gastos=$this->db->select_sum("salario")->where("ID_EQUIPO",$equipousuario[0]["ID_EQUIPO"])->get("plantilla_equipos");
		    $gastos=$gastos->result_array();
		    ///sacamos las clausulas de los jugadores que luego cobraremos el 10% de cada una al presupuesto del equipo
		            $gastos_clausulas=$this->db->select_sum("clausula")->where("ID_EQUIPO",$equipousuario[0]["ID_EQUIPO"])->get("plantilla_equipos");
		            $gastos_clausulas=$gastos_clausulas->result_array();
		            $salario=$gastos[0]["salario"];
		            $clausulas=$gastos_clausulas[0]["clausula"]/10;
		            ///sumamos el total de los gastos
		            $totales=$salario+$clausulas;
		      $this->db->where("ID_EQUIPO",$equipousuario[0]["ID_EQUIPO"])->set("gastos",$totales)->update("presupuesto_equipos");


		      ///////gastos equipo vendedor

		       $gastosvendedor=$this->db->select_sum("salario")->where("ID_EQUIPO",$idequipo)->get("plantilla_equipos");
		    $gastosvendedor=$gastosvendedor->result_array();
		    ///sacamos las clausulas de los jugadores que luego cobraremos el 10% de cada una al presupuesto del equipo
		            $gastos_clausulasvendedor=$this->db->select_sum("clausula")->where("ID_EQUIPO",$idequipo)->get("plantilla_equipos");
		            $gastos_clausulasvendedor=$gastos_clausulasvendedor->result_array();
		            $salariovendedor=$gastosvendedor[0]["salario"];
		            $clausulasvendedor=$gastos_clausulasvendedor[0]["clausula"]/10;
		            ///sumamos el total de los gastos
		            $totalesvendedor=$salariovendedor+$clausulasvendedor;
		      $this->db->where("ID_EQUIPO",$idequipo)->set("gastos",$totalesvendedor)->update("presupuesto_equipos");


		    ///sacamos el presupuesto del equipo comprador
		      $presupuestocomprador=$this->db->select("PRESUPUESTO")->where("ID_EQUIPO",$equipousuario[0]["ID_EQUIPO"])->get("presupuesto_equipos");
		      $presupuesto=$presupuestocomprador->result_array();
		       $nuevopresupuesto=$presupuesto[0]["PRESUPUESTO"]-$nuevaclausula;
		      $this->db->where("ID_EQUIPO",$equipousuario[0]["ID_EQUIPO"])->set("PRESUPUESTO",$nuevopresupuesto)->update("presupuesto_equipos");

		      ////sacamos el presupuesto del equipo vendedor

		      $presupuestovendedor=$this->db->select("PRESUPUESTO")->where("ID_EQUIPO",$idequipo)->get("presupuesto_equipos");
		      $presupuestovendedor=$presupuestovendedor->result_array();
		       $nuevopresupuestovendedor=$presupuestovendedor[0]["PRESUPUESTO"]+$nuevaclausula;
		      $this->db->where("ID_EQUIPO",$idequipo)->set("PRESUPUESTO",$nuevopresupuestovendedor)->update("presupuesto_equipos");
		      $usuarios=$this->db->select("ID")->get("usuarios");
		      $usuarios1=$usuarios->result_array();
		      $lineasu=$usuarios->num_rows();
		        for($idos=0;$idos<$lineasu;$idos++){
		              $mensaje=Array("ID_USUARIO"=>$usuarios1[$idos]["ID"],"mensaje"=>"¡¡¡SE HA PRODUCIDO UN NUEVO FICHAJE!!
		                El jugador <strong> {$jugador2} </strong> procedente del equipo <strong>{$equipo2[0]['nombre']}</strong> ha sido traspasado al equipo <strong>{$equipo[0]['nombre']}</strong> por favor no olvide cambiarlo en su consola para que la liga pueda fluir correctamente GRACIAS");
		              if($idusuario!=$usuarios1[$idos]["ID"]){
		              $this->db->insert("mensajes",$mensaje);
		   		}
		   		
   	}
   	 $jugadorfichado=Array("nombre"=>$jugador2);
     $this->db->insert("jugadoresfichados",$jugadorfichado);
                 return "correcto";
             }
         }
     }
     function insertarfichaje($idusuario,$jugador,$equipoprocedente,$cantidad){
     	$jugador=ucwords($jugador);
     	$equipoprocedente=ucwords($equipoprocedente);
     	////sacamos el idequipo para sacar el nombre del equipo del usuario
     	$usuarioidequipo=$this->db->select("ID_EQUIPO")->where("ID",$idusuario)->get("usuarios");
     	$usuarioidequipo=$usuarioidequipo->result_array();
     	///7sacamos el equipo con el idequipo
     	$equipo=$this->db->select("nombre")->where("ID",$usuarioidequipo[0]["ID_EQUIPO"])->get("equipos");
     	$equipo=$equipo->result_array();
     	////insertamos la compra del jugador
     	$fichajejugador=Array("idusuario"=>$idusuario,
                          "idequipo"=>$usuarioidequipo[0]["ID_EQUIPO"],
                          "nombre_jugador"=>$jugador,
                          "precio"=>$cantidad,
                          "destinoequipo"=>$equipo[0]["nombre"],
                          "equipoprocedencia"=>$equipoprocedente
                           );
     	$this->db->insert("fichajejugadorfueraliga",$fichajejugador);

      $idventa=$this->db->select("*")->order_by("ID","desc")->get("fichajejugadorfueraliga");
      $idventa=$idventa->result_array();
      $idusuarios=$this->db->select("ID")->get("usuarios");
      $idusuarios2=$idusuarios->result_array();
      $respuestas=-1;
      for($i=0;$i<$idusuarios->num_rows();$i++){
        if($idusuarios2[$i]["ID"]!=$idusuario){
        $okventa=Array("idventa"=>$idventa[0]["ID"],
                       "idequipo"=>$usuarioidequipo[0]["ID_EQUIPO"],
                       "idusuario"=>$idusuarios2[$i]["ID"],
                       "idusuarioprocedente"=>$idusuario,
                       "destinoequipo"=>$equipo[0]["nombre"],
                       "precio"=>$cantidad,
                       "nombre_jugador"=>$jugador,
                       "equipoprocedencia"=>$equipoprocedente
                        );
        $this->db->insert("okfichajejugadorfueraliga",$okventa);
        }
         $respuestas++;
      }
      $this->db->set("respuestas",$respuestas)->where("ID",$idventa[0]["ID"])->update("fichajejugadorfueraliga");
      return true;
    
  }

  function mensajefichajedejugador($id){
  	$mensajefichaje=$this->db->select("*")->where("idusuario",$id)->get("okfichajejugadorfueraliga");
  	$mensajefichaje=$mensajefichaje->result_array();
  	return $mensajefichaje;
  }
 function okfichajejugador($id,$idventa,$idequipo,$nombrejugador,$precio,$equipoprocedencia,$equipo,$idprocedente){
     $okventa=Array("idventa"=>$idventa,
                       "idequipo"=>$idequipo,
                       "idusuarioprocedente"=>$idprocedente,
                       "idusuario"=>$id,
                       "destinoequipo"=>$equipo,
                       "precio"=>$precio,
                       "nombre_jugador"=>$nombrejugador,
                       "equipoprocedencia"=>$equipoprocedencia
                        );
    $this->db->insert("insertarokfichajejugadorfueraliga",$okventa);
    $this->db->where("idusuario",$id)->where("idventa",$idventa)->delete("okfichajejugadorfueraliga");
    return true;
  }
  function finalfichajejugador($id){
    $respuesta=$this->db->select("*")->where("idusuarioprocedente",$id)->order_by("idventa","asc")->get("insertarokfichajejugadorfueraliga");
    $respuesta=$respuesta->result_array();
    if(isset($respuesta[0]["idventa"])){
    $cantidadrespuestas=$this->db->select("respuestas")->where("ID",$respuesta[0]["idventa"])->get("fichajejugadorfueraliga");
    $cantidadrespuestas=$cantidadrespuestas->result_array();
    }
    $idventa="";
    $numero=1;
    foreach ($respuesta as $respuesta) {
      if($respuesta["idventa"]!=$idventa){
        $idventa=$respuesta["idventa"];
       $numero=1;
      }elseif($idventa==$respuesta["idventa"]){
      $numero;
               
      }if($numero==$cantidadrespuestas[0]["respuestas"]){
        $numeroderespuestas=$this->db->select("*")->where("idventa",$idventa)->get("insertarokfichajejugadorfueraliga");
        $numerorespuestas=$numeroderespuestas->num_rows();
       $respuesta2=$this->db->select("SUM(precio)")->where("idventa",$idventa)->get("insertarokfichajejugadorfueraliga");
       $respuesta2=$respuesta2->result_array();
       $respuesta3=$respuesta2[0]["SUM(precio)"]/$numerorespuestas;
       $cerrarventa=Array("idusuario"=>$id,
                          "idequipo"=>$respuesta["idequipo"],
                           "nombre_jugador"=>$respuesta["nombre_jugador"],
                           "precio"=>$respuesta3,
                          "destinoequipo"=>$respuesta["destinoequipo"],
                           "equipoprocedencia"=>$respuesta["equipoprocedencia"]);
       $this->db->insert("cerrarfichajejugador",$cerrarventa);
       $this->db->where("ID",$idventa)->delete("fichajejugadorfueraliga");
       $this->db->where("idventa",$idventa)->delete("insertarokfichajejugadorfueraliga");  
      }
       $numero++;
        
    }

  }
   function cerrarfichaje($id){
      $cerrar=$this->db->select("*")->where("idusuario",$id)->get("cerrarfichajejugador");
      $cerrar=$cerrar->result_array();
      return $cerrar;
  } 
  function borrarfichaje($id,$idventa){
    $borrar=$this->db->where("idusuario",$id)->where("ID",$idventa)->delete("cerrarfichajejugador");
    return true;
  }
  function actualizardatosfichaje($id,$jugador,$precio,$nombredestinoequipo,$nombreequipoprocedente,$idequipofichaje,$idmensaje,$clausulanueva,$salarionuevo,$puesto){
    $jugador2=$jugador;
    $nuevojugador=Array("ID_EQUIPO"=>$idequipofichaje,
                         "nombre_jugador"=>$jugador,
                         "puesto"=>$puesto,
                         "clausula"=>$clausulanueva,
                          "salario"=>$salarionuevo);
    $this->db->insert("plantilla_equipos",$nuevojugador);
    ////sacamos los gastos
    $gastos=$this->db->select_sum("salario")->where("ID_EQUIPO",$idequipofichaje)->get("plantilla_equipos");
    $gastos=$gastos->result_array();
    ///sacamos las clausulas de los jugadores que luego cobraremos el 10% de cada una al presupuesto del equipo
            $gastos_clausulas=$this->db->select_sum("clausula")->where("ID_EQUIPO",$idequipofichaje)->get("plantilla_equipos");
            $gastos_clausulas=$gastos_clausulas->result_array();
            $salario=$gastos[0]["salario"];
            $clausulas=$gastos_clausulas[0]["clausula"]/10;
            ///sumamos el total de los gastos
            $totales=$salario+$clausulas;
      $this->db->where("ID_EQUIPO",$idequipofichaje)->set("gastos",$totales)->update("presupuesto_equipos");


     
           


    ///sacamos el presupuesto del equipo que ficha
      $presupuestocomprador=$this->db->select("PRESUPUESTO")->where("ID_EQUIPO",$idequipofichaje)->get("presupuesto_equipos");
      $presupuesto=$presupuestocomprador->result_array();
       $nuevopresupuesto=$presupuesto[0]["PRESUPUESTO"]-$precio;
      $this->db->where("ID_EQUIPO",$idequipofichaje)->set("PRESUPUESTO",$nuevopresupuesto)->update("presupuesto_equipos");

      ////mandamos un mensaje a todos los usuario 
      $usuarios=$this->db->select("ID")->get("usuarios");
      $usuarios1=$usuarios->result_array();
      $lineasu=$usuarios->num_rows();
        for($idos=0;$idos<$lineasu;$idos++){
              $mensaje=Array("ID_USUARIO"=>$usuarios1[$idos]["ID"],"mensaje"=>"¡¡¡SE HA PRODUCIDO UN NUEVO FICHAJE!!
                El jugador <strong>{$jugador2}</strong> procedente del equipo <strong>{$nombreequipoprocedente}</strong> ha sido traspasado por la cantidad de <strong>{$precio}</strong> al equipo <strong>{$nombredestinoequipo}</strong> por favor no olvide cambiarlo en su consola para que la liga pueda fluir correctamente GRACIAS");
              if($id!=$usuarios1[$idos]["ID"]){
              $this->db->insert("mensajes",$mensaje);
            }
             }
        $this->db->where("ID",$idmensaje)->delete("cerrarfichajejugador");
            return true;
  }
   

}

?>