<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info_equipos extends CI_Model{
   
        function informacionequipos($nombre){
        	$equipo=$this->db->select("equipos.nombre,escudo,pg,pe,pp,gf,gc,puntos, presupuesto_equipos.PRESUPUESTO,gastos, plantilla_equipos.nombre_jugador,puesto,clausula,salario")->join("presupuesto_equipos","equipos.ID=presupuesto_equipos.ID_EQUIPO","lef")->join("plantilla_equipos","equipos.ID=plantilla_equipos.ID_EQUIPO","left")->where("nombre","{$nombre}")->get("equipos");
        	$equipo=$equipo->result_array();
        	return $equipo;
        	
        }
        function ligasconseguidas($nombre){
           $ligas=$this->db->select("nombre")->where("nombre",$nombre)->get("campeon");
           $ligas=$ligas->num_rows();
           return $ligas;
        }
        function gastos(){
        	//sacamos el id de los equipos para hacer la gestion de los gastos
        	$id=$this->db->select("ID")->get("equipos");
        	$id2=$id->result_array();
        	for($i=0;$i<$id->num_rows();$i++){
        		//sumamos el salario de los jugadores con el id de cada equipo
        		$gastos=$this->db->select_sum("salario")->where("ID_EQUIPO",$id2[$i]["ID"])->get("plantilla_equipos");
        		$gastos=$gastos->result_array();
        		///sacamos las clausulas de los jugadores que luego cobraremos el 10% de cada una al presupuesto del equipo
        		$gastos_clausulas=$this->db->select_sum("clausula")->where("ID_EQUIPO",$id2[$i]["ID"])->get("plantilla_equipos");
        		$gastos_clausulas=$gastos_clausulas->result_array();
        		$salario=$gastos[0]["salario"];
        		$clausulas=$gastos_clausulas[0]["clausula"]/10;
        		///sumamos el total de los gastos
        		$totales=$salario+$clausulas;
        		//actualizamos los gastos de cada equipo
        		$this->db->where("ID_EQUIPO",$id2[$i]["ID"])->set("gastos",$totales)->update("presupuesto_equipos");
        		//actualizamos el presupuesto de cada equipo descontandole las clausulas de los jugadores
        		//sacamos el presupuesto
        		$presupuesto=$this->db->select("PRESUPUESTO")->where("ID_EQUIPO",$id2[$i]["ID"])->get("presupuesto_equipos");
        		$presupuesto=$presupuesto->result_array();
        		$nuevopresupuesto=$presupuesto[0]["PRESUPUESTO"]-$clausulas;
        		$this->db->where("ID_EQUIPO",$id2[$i]["ID"])->set("PRESUPUESTO",$nuevopresupuesto)->update("presupuesto_equipos");
        	}

        }
        
        function informacionequiposusuario($id){
        	$usuario=$this->db->select("ID_EQUIPO")->where("ID",$id)->get("usuarios");
        	$usuario=$usuario->result_array();
        	$nombre=$this->db->select("nombre")->where("ID",$usuario[0]['ID_EQUIPO'])->get("equipos");
        	$nombre=$nombre->result_array();
        	$equipo=$this->db->select("equipos.nombre,escudo")->select("presupuesto_equipos.PRESUPUESTO,gastos")->select("plantilla_equipos.nombre_jugador,puesto,clausula,salario")->join("presupuesto_equipos","equipos.ID=presupuesto_equipos.ID_EQUIPO","lef")->join("plantilla_equipos","equipos.ID=plantilla_equipos.ID_EQUIPO","left")->where("nombre",$nombre[0]['nombre'])->get("equipos");
        	$equipo=$equipo->result_array();
        	$equipo=Array($usuario[0]["ID_EQUIPO"],$equipo);
        	return $equipo;
        	
        }
        function gastoslogin(){
        	//sacamos el id de los equipos para hacer la gestion de los gastos
        	$id=$this->db->select("ID")->get("equipos");
        	$id2=$id->result_array();
        	for($i=0;$i<$id->num_rows();$i++){
        		//sumamos el salario de los jugadores con el id de cada equipo
        		$gastos=$this->db->select_sum("salario")->where("ID_EQUIPO",$id2[$i]["ID"])->get("plantilla_equipos");
        		$gastos=$gastos->result_array();
        		///sacamos las clausulas de los jugadores que luego cobraremos el 10% de cada una al presupuesto del equipo
        		$gastos_clausulas=$this->db->select_sum("clausula")->where("ID_EQUIPO",$id2[$i]["ID"])->get("plantilla_equipos");
        		$gastos_clausulas=$gastos_clausulas->result_array();
        		$salario=$gastos[0]["salario"];
        		$clausulas=$gastos_clausulas[0]["clausula"]/10;
        		///sumamos el total de los gastos
        		$totales=$salario+$clausulas;
        		//actualizamos los gastos de cada equipo
        		$this->db->where("ID_EQUIPO",$id2[$i]["ID"])->set("gastos",$totales)->update("presupuesto_equipos");
        	}
        }
        function actualizarsalaclau($nombrejugador,$idequipo,$nuevaclausula,$nuevosalario){
        	//CADA USUARIO GESTINARA EL SUELDO Y LAS CLAUSULAS DE SU EQUIPO
        	/// seleccionamos los gastos del jugador para poder insertar los actulaes
        	$gastosjugador=$this->db->where("nombre_jugador",$nombrejugador)->where("ID_EQUIPO",$idequipo)->select("clausula,salario")->get("plantilla_equipos");
        	$gastosjugador=$gastosjugador->result_array();
        	$gastosplantilla=$this->db->where("ID_EQUIPO",$idequipo)->select("PRESUPUESTO,gastos")->get("presupuesto_equipos");
        	$gastosplantilla=$gastosplantilla->result_array();
        	//// los gastos del jugador los sumamos y los restamos a los actuales de la plantilla para poder comparar los nuevos gastos y asi dar el OK si tiene suficientes fondos
        	$clausula=$gastosjugador[0]["clausula"]/10;
        	$salario=$gastosjugador[0]["salario"];
        	$gastototal=$clausula+$salario;
        	$gastos=$gastosplantilla[0]["gastos"]-$gastototal;
        	$gastos=$gastos+$nuevaclausula/10;
        	$gastos=$gastos+$nuevosalario;
        	if($nuevaclausula<$gastosjugador[0]["clausula"]  AND $nuevosalario<$salario){
        		$this->db->where("ID_EQUIPO",$idequipo)->set("gastos",$gastos)->update("presupuesto_equipos");
        		$nuevosdatos=Array("clausula"=>$nuevaclausula,
        							"salario"=>$nuevosalario);
        		$this->db->where("nombre_jugador",$nombrejugador)->where("ID_EQUIPO",$idequipo)->update("plantilla_equipos",$nuevosdatos);
        		return true;
        	}elseif($nuevosalario<$salario){
        		$this->db->where("ID_EQUIPO",$idequipo)->set("gastos",$gastos)->update("presupuesto_equipos");
        		$nuevosdatos=Array("clausula"=>$nuevaclausula,
        							"salario"=>$nuevosalario);
        		$this->db->where("nombre_jugador",$nombrejugador)->where("ID_EQUIPO",$idequipo)->update("plantilla_equipos",$nuevosdatos);
        		return true;
        	}elseif($nuevaclausula<$gastosjugador[0]["clausula"]){
        		$this->db->where("ID_EQUIPO",$idequipo)->set("gastos",$gastos)->update("presupuesto_equipos");
        		$nuevosdatos=Array("clausula"=>$nuevaclausula,
        							"salario"=>$nuevosalario);
        		$this->db->where("nombre_jugador",$nombrejugador)->where("ID_EQUIPO",$idequipo)->update("plantilla_equipos",$nuevosdatos);
        		return true;
        	}elseif($gastos<=$gastosplantilla[0]["PRESUPUESTO"]){
        		$this->db->where("ID_EQUIPO",$idequipo)->set("gastos",$gastos)->update("presupuesto_equipos");
        		$nuevosdatos=Array("clausula"=>$nuevaclausula,
        							"salario"=>$nuevosalario);
        		$this->db->where("nombre_jugador",$nombrejugador)->where("ID_EQUIPO",$idequipo)->update("plantilla_equipos",$nuevosdatos);
        		return true;
        	}else{
        		return false;
        	}

        }
}

?>