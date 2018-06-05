<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Model{

   function registro_usuario($nombre_usuario,$password){
       $pass_cifrado=password_hash($password, PASSWORD_DEFAULT, array("cost"=>10));
       $usuario_info=Array("nombre_usuario"=>"{$nombre_usuario}",
                            "password"=>"{$pass_cifrado}");
       $this->db->insert("usuarios",$usuario_info);
       if($this->db->affected_rows()>0){
       return true;
       }else{
       	return false;
       }

   }
   function login($nombre,$password){
     $usuario_login=$this->db->select("*")->where("nombre_usuario",$nombre)->get("usuarios");
     $usuario_login2=$usuario_login->result_array();
     if($usuario_login->num_rows()>0){
     	if(password_verify($password,$usuario_login2[0]["password"])){
     		return $usuario_login2;
      }
     }else{
        return false;
      }
  }
  function vetarequipo($id,$equipo){
    $equipovetado=$this->db->select("*")->where("ID_USUARIO",$id)->where("NOMBRE_EQUIPO",$equipo)->get("despidodeequipo");
    if($equipovetado->num_rows()>0){
      return true;
    }else{
      return false;
    }
  }
  function verdespidoequipo($id){
    $despido=$this->db->select("*")->where("ID_USUARIO",$id)->get("despidodeequipo");
    $despido=$despido->num_rows();
    return $despido;
  }
  function elegir_equipo(){
    $equipo=$this->db->select("ID,nombre,escudo")->where("escogido",0)->get("equipos");
    $equipo=$equipo->result_array();
    return $equipo;
  }
  function asignar_equipo($idusuario,$nombre_equipo){
    $asignado=$this->db->set("escogido",1)->where("nombre",$nombre_equipo)->update("equipos");
    $sacar_id_equipo=$this->db->select("ID")->where("nombre",$nombre_equipo)->get("equipos");
    $sacar_id_equipo=$sacar_id_equipo->result_array();
    $actualizaru=$this->db->set("ID_EQUIPO",$sacar_id_equipo[0]["ID"])->where("ID",$idusuario)->update("usuarios");
  }

  function elegiridequipo($id){
    $usuario_login=$this->db->select("*")->where("ID",$id)->get("usuarios");
    $usuario_login2=$usuario_login->result_array();
    return $usuario_login2;
  }
  function mensajesusuarios($id){
    $mensajes=$this->db->where("ID_USUARIO",$id)->select("*")->get("mensajes");
    $mensajes=$mensajes->result_array();
    return $mensajes;
  }
  function borrarmensajesusuario($id){
      $borrarmensaje=$this->db->where("ID",$id)->delete("mensajes");
      
  }
  function ventajugador($idequipoventa,$idequipo,$jugador,$idusuario,$precio){
    // seleccionamos los jugadores del equipo al que se va a vender el jugador
    //si hay mas de 25 jugadores no se puede vender a ese equipo
    //seleccionamos los jugadores del equipo que va a vender si tiene 18 jugadores no puede vender
    $jugadoresequipoventa=$this->db->select("nombre_jugador")->where("ID_EQUIPO",$idequipo)->get("plantilla_equipos");
    $jugadores=$this->db->select("nombre_jugador")->where("ID_EQUIPO",$idequipoventa)->get("plantilla_equipos");
     $jugadoresequipoquevende=$this->db->select("nombre_jugador")->where("ID_EQUIPO",$idequipoventa)->get("plantilla_equipos");
    $jugador2=$this->db->select("nombre_jugador")->where("idequipo",$idequipo)->where("nombre_jugador",$jugador)->get("ventajugador");
    $equipo=$this->db->select("ID,nombre,escogido")->where("ID",$idequipoventa)->get("equipos");
    $equipo=$equipo->result_array();
    if($equipo[0]["ID"]==$idequipo){
      return $mismo="mismo";
    }
    elseif($jugadoresequipoventa->num_rows()<=18){
      return $dieciocho="dieciocho";
    }
     elseif($jugador2->num_rows()>0){
      return $existe="existe";
     }elseif($jugadores->num_rows()>=25){
      return false;
    }elseif($equipo[0]["escogido"]==true){
      return $escogido="equipo escogido";
    }elseif($idequipo=="otros"){
       $equipoprcedencia=$this->db->select("nombre")->where("ID",$idequipo)->get("equipos");
       $equipoprcedencia=$equipoprcedencia->result_array();
      $ventajugador=Array("idusuario"=>$idusuario,
                          "idequipo"=>100,
                          "nombre_jugador"=>$jugador,
                          "precio"=>$precio,
                          "destinoequipo"=>$idequipo,
                          "equipoprocedencia"=>$equipoprcedencia[0]["nombre"]
                           );
      $this->db->insert("ventajugador",$ventajugador);
      $idventa=$this->db->select("*")->order_by("ID","desc")->get("ventajugador");
      $idventa=$idventa->result_array();
      $idusuarios=$this->db->select("ID")->get("usuarios");
      $idusuarios2=$idusuarios->result_array();
      $respuestas=-1;
      for($i=0;$i<$idusuarios->num_rows();$i++){
        if($idusuarios2[$i]["ID"]!=$idusuario){
        $okventa=Array("idventa"=>$idventa[0]["ID"],
                       "idequipo"=>$idequipo,
                       "idusuario"=>$idusuarios2[$i]["ID"],
                       "destinoequipo"=>$equipo[0]["nombre"],
                       "precio"=>$precio,
                        );
        $this->db->insert("okventajugador",$okventa);
      }
      $respuestas++;
    }
    $this->db->set("respuestas",$respuestas)->where("ID",$idventa[0]["ID"])->update("ventajugador");
     return true;
    
  }else{
    $equipoprcedencia=$this->db->select("nombre")->where("ID",$idequipo)->get("equipos");
    $equipoprcedencia=$equipoprcedencia->result_array();
      $ventajugador=Array("idusuario"=>$idusuario,
                          "idequipo"=>$idequipo,
                          "nombre_jugador"=>$jugador,
                          "precio"=>$precio,
                          "destinoequipo"=>$equipo[0]["nombre"],
                          "equipoprocedencia"=>$equipoprcedencia[0]["nombre"]
                           );
      $this->db->insert("ventajugador",$ventajugador);
      $idventa=$this->db->select("*")->order_by("ID","desc")->get("ventajugador");
      $idventa=$idventa->result_array();
      $idusuarios=$this->db->select("ID")->get("usuarios");
      $idusuarios2=$idusuarios->result_array();
      $respuestas=-1;
      for($i=0;$i<$idusuarios->num_rows();$i++){
        if($idusuarios2[$i]["ID"]!=$idusuario){
        $okventa=Array("idventa"=>$idventa[0]["ID"],
                       "idequipo"=>$idequipo,
                       "idusuario"=>$idusuarios2[$i]["ID"],
                       "idusuarioprocedente"=>$idusuario,
                       "destinoequipo"=>$equipo[0]["nombre"],
                       "precio"=>$precio,
                       "nombre_jugador"=>$jugador,
                       "equipoprocedencia"=>$equipoprcedencia[0]["nombre"]
                        );
        $this->db->insert("okventajugador",$okventa);
        }
         $respuestas++;
      }
      $this->db->set("respuestas",$respuestas)->where("ID",$idventa[0]["ID"])->update("ventajugador");
      return true;
    
  }
}
  function mensajeventajugador($id){
      $mensajeventa=$this->db->select("*")->where("idusuario",$id)->get("okventajugador");
      $mensajeventa=$mensajeventa->result_array();
      return $mensajeventa;
  }
  function okventajugador($id,$idventa,$idequipo,$nombrejugador,$precio,$equipoprocedencia,$equipo,$idprocedente){
     $okventa=Array("idventa"=>$idventa,
                       "idequipo"=>$idequipo,
                       "idusuarioprocedente"=>$idprocedente,
                       "idusuario"=>$id,
                       "destinoequipo"=>$equipo,
                       "precio"=>$precio,
                       "nombre_jugador"=>$nombrejugador,
                       "equipoprocedencia"=>$equipoprocedencia
                        );
    $this->db->insert("insertarokventajugador",$okventa);
    $this->db->where("idusuario",$id)->where("idventa",$idventa)->delete("okventajugador");
    return true;
  }
  function finalventajugador($id){
    $respuesta=$this->db->select("*")->where("idusuarioprocedente",$id)->order_by("idventa","asc")->get("insertarokventajugador");
    $respuesta=$respuesta->result_array();
    if(isset($respuesta[0]["idventa"])){
    $cantidadrespuestas=$this->db->select("respuestas")->where("ID",$respuesta[0]["idventa"])->get("ventajugador");
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
        $numeroderespuestas=$this->db->select("*")->where("idventa",$idventa)->get("insertarokventajugador");
        $numerorespuestas=$numeroderespuestas->num_rows();
       $respuesta2=$this->db->select("SUM(precio)")->where("idventa",$idventa)->get("insertarokventajugador");
       $respuesta2=$respuesta2->result_array();
       $respuesta3=$respuesta2[0]["SUM(precio)"]/$numerorespuestas;
       $cerrarventa=Array("idusuario"=>$id,
                          "idequipo"=>$respuesta["idequipo"],
                           "nombre_jugador"=>$respuesta["nombre_jugador"],
                           "precio"=>$respuesta3,
                          "destinoequipo"=>$respuesta["destinoequipo"],
                           "equipoprocedencia"=>$respuesta["equipoprocedencia"]);
       $this->db->insert("cerrarventajugador",$cerrarventa);
       $this->db->where("ID",$idventa)->delete("ventajugador");
       $this->db->where("idventa",$idventa)->delete("insertarokventajugador");  
      }
       $numero++;
        
    }

  }
  function cerrarventa($id){
      $cerrar=$this->db->select("*")->where("idusuario",$id)->get("cerrarventajugador");
      $cerrar=$cerrar->result_array();
      return $cerrar;
  }
  function borrarventa($id,$idventa){
    $borrar=$this->db->where("idusuario",$id)->where("ID",$idventa)->delete("cerrarventajugador");
    return true;
  }
  function actualizardatosventa($id,$jugador,$precio,$nombredestinoequipo,$nombreequipoprocedente,$idequipovendedor,$idmensaje){
    $jugador2=$jugador;
    $equipodestino=$this->db->select("*")->where("nombre",$nombredestinoequipo)->get("equipos");
    $equipodestino=$equipodestino->result_array();
    ///pasamos al jugador al equipo
    $jugador=$this->db->where("nombre_jugador",$jugador)->where("ID_EQUIPO",$idequipovendedor)->set("ID_EQUIPO",$equipodestino[0]["ID"])->update("plantilla_equipos");
    ////sacamos los gastos
    $gastos=$this->db->select_sum("salario")->where("ID_EQUIPO",$equipodestino[0]["ID"])->get("plantilla_equipos");
    $gastos=$gastos->result_array();
    ///sacamos las clausulas de los jugadores que luego cobraremos el 10% de cada una al presupuesto del equipo
            $gastos_clausulas=$this->db->select_sum("clausula")->where("ID_EQUIPO",$equipodestino[0]["ID"])->get("plantilla_equipos");
            $gastos_clausulas=$gastos_clausulas->result_array();
            $salario=$gastos[0]["salario"];
            $clausulas=$gastos_clausulas[0]["clausula"]/10;
            ///sumamos el total de los gastos
            $totales=$salario+$clausulas;
      $this->db->where("ID_EQUIPO",$equipodestino[0]["ID"])->set("gastos",$totales)->update("presupuesto_equipos");


      ///////gastos equipo vendedor

       $gastosvendedor=$this->db->select_sum("salario")->where("ID_EQUIPO",$idequipovendedor)->get("plantilla_equipos");
    $gastosvendedor=$gastosvendedor->result_array();
    ///sacamos las clausulas de los jugadores que luego cobraremos el 10% de cada una al presupuesto del equipo
            $gastos_clausulasvendedor=$this->db->select_sum("clausula")->where("ID_EQUIPO",$idequipovendedor)->get("plantilla_equipos");
            $gastos_clausulasvendedor=$gastos_clausulasvendedor->result_array();
            $salariovendedor=$gastosvendedor[0]["salario"];
            $clausulasvendedor=$gastos_clausulasvendedor[0]["clausula"]/10;
            ///sumamos el total de los gastos
            $totalesvendedor=$salariovendedor+$clausulasvendedor;
      $this->db->where("ID_EQUIPO",$idequipovendedor)->set("gastos",$totalesvendedor)->update("presupuesto_equipos");


    ///sacamos el presupuesto del equipo comprador
      $presupuestocomprador=$this->db->select("PRESUPUESTO")->where("ID_EQUIPO",$equipodestino[0]["ID"])->get("presupuesto_equipos");
      $presupuesto=$presupuestocomprador->result_array();
       $nuevopresupuesto=$presupuesto[0]["PRESUPUESTO"]-$precio;
      $this->db->where("ID_EQUIPO",$equipodestino[0]["ID"])->set("PRESUPUESTO",$nuevopresupuesto)->update("presupuesto_equipos");

      ////sacamos el presupuesto del equipo vendedor

      $presupuestovendedor=$this->db->select("PRESUPUESTO")->where("ID_EQUIPO",$idequipovendedor)->get("presupuesto_equipos");
      $presupuestovendedor=$presupuestovendedor->result_array();
       $nuevopresupuestovendedor=$presupuestovendedor[0]["PRESUPUESTO"]+$precio;
      $this->db->where("ID_EQUIPO",$idequipovendedor)->set("PRESUPUESTO",$nuevopresupuestovendedor)->update("presupuesto_equipos");
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
        $this->db->where("ID",$idmensaje)->delete("cerrarventajugador");
            return true;
  }
  function estadoligaparacambiardeequipo(){
    $estado=$this->db->select("estado")->get("estado_liga");
    $estado=$estado->result_array();
    return $estado;
  }
  function cambiarequipo($id){
    $equipo=$this->db->select("ID_EQUIPO")->where("ID",$id)->get("usuarios");
    $equipo=$equipo->result_array();
    $this->db->set("escogido",0)->where("ID",$equipo[0]["ID_EQUIPO"])->update("equipos");
    $this->db->set("ID_EQUIPO",0)->where("ID",$id)->update("usuarios");
    return true;
  }
  function controlcambioequipo($id){
    $insertarid=Array("idusuario"=>$id);
    $this->db->insert("equipocambiado",$insertarid);
  }
  function controlcambio($id){
    $controlusuario=$this->db->select("*")->where("idusuario",$id)->get("equipocambiado");
    $controlusuario=$controlusuario->result_array();
    return $controlusuario;
  }
  



}
?>