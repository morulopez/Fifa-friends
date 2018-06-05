<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Puntos_Goles extends CI_Model{
	
		function Victoria($Equipo,$golesf,$golesc){
			
			$datos_equipo=$this->db->select("ID,pj,pg,gf,gc,puntos,dg")->where("nombre","{$Equipo}")->get("equipos");
			$datos_equipo=$datos_equipo->result_array();
			$ID=$datos_equipo[0]["ID"];
            $jugados=$datos_equipo[0]["pj"]+1;
            $ganados=$datos_equipo[0]["pg"]+1;
            $golesfavor=$datos_equipo[0]["gf"]+$golesf;
            $golescontra=$datos_equipo[0]["gc"]+$golesc;
            $diferenciagoles=$golesfavor-$golescontra;
            $puntos=$datos_equipo[0]["puntos"]+3;
            $array_victoria=Array("pj" => $jugados,
                             "pg" => $ganados,
                             "gf" => $golesfavor,
                             "gc" => $golescontra,
                             "dg"=>$diferenciagoles,
                             "puntos" => $puntos);
            $ingresos_equipo=$this->db->where("ID_EQUIPO",$ID)->select("PRESUPUESTO")->get("presupuesto_equipos");
            $ingresos_equipo=$ingresos_equipo->result_array();
            $ingresos=$ingresos_equipo[0]["PRESUPUESTO"]+5500000;
            $ingre=Array("PRESUPUESTO"=>$ingresos);
            $actualizar_ingresos=$this->db->where("ID_EQUIPO",$ID)->update("presupuesto_equipos",$ingre);
            $actualizar=$this->db->where("nombre",$Equipo)->update("equipos",$array_victoria);
            


		}
		function Derrota($Equipo,$golesf,$golesc){
			
			$datos_equipo=$this->db->select("ID,pj,pp,gf,gc,puntos")->where("nombre","{$Equipo}")->get("equipos");
			$datos_equipo=$datos_equipo->result_array();
            $jugados=$datos_equipo[0]["pj"]+1;
            $ID=$datos_equipo[0]["ID"];
            $perdidos=$datos_equipo[0]["pp"]+1;
            $golesfavor=$datos_equipo[0]["gf"]+$golesf;
            $golescontra=$datos_equipo[0]["gc"]+$golesc;
            $diferenciagoles=$golesfavor-$golescontra;
            $array_derrota=Array("pj" => $jugados,
                             "pp" => $perdidos,
                             "gf" => $golesfavor,
                             "gc" => $golescontra,
                         	  "dg"=>$diferenciagoles);
            $ingresos_equipo=$this->db->where("ID_EQUIPO",$ID)->select("PRESUPUESTO")->get("presupuesto_equipos");
            $ingresos_equipo=$ingresos_equipo->result_array();
            $ingresos=$ingresos_equipo[0]["PRESUPUESTO"]+1000000;
            $ingre=Array("PRESUPUESTO"=>$ingresos);
            $actualizar_ingresos=$this->db->where("ID_EQUIPO",$ID)->update("presupuesto_equipos",$ingre);
            $actualizar=$this->db->where("nombre",$Equipo)->update("equipos",$array_derrota);
            if($this->db->affected_rows()>0){
            	return true;
            }


		}
		function Empate($equipo1,$equipo2,$goles){
			$datos_equipo1=$this->db->select("ID,pj,pe,gf,gc,puntos")->where("nombre","{$equipo1}")->get("equipos");
			$datos_equipo1=$datos_equipo1->result_array();
			$jugados=$datos_equipo1[0]["pj"]+1;
			$ID=$datos_equipo1[0]["ID"];
            $empatados=$datos_equipo1[0]["pe"]+1;
            $golesfavor=$datos_equipo1[0]["gf"]+$goles;
            $golescontra=$datos_equipo1[0]["gc"]+$goles;
            $puntos=$datos_equipo1[0]["puntos"]+1;
            $array_derrota=Array("pj" => $jugados,
                             "pe" => $empatados,
                             "gf" => $golesfavor,
                             "gc" => $golescontra,
                              "puntos"=>$puntos);
             $ingresos_equipo=$this->db->where("ID_EQUIPO",$ID)->select("PRESUPUESTO")->get("presupuesto_equipos");
            $ingresos_equipo=$ingresos_equipo->result_array();
            $ingresos=$ingresos_equipo[0]["PRESUPUESTO"]+2500000;
            $ingre=Array("PRESUPUESTO"=>$ingresos);
            $actualizar_ingresos=$this->db->where("ID_EQUIPO",$ID)->update("presupuesto_equipos",$ingre);
            $actualizar=$this->db->where("nombre","{$equipo1}")->update("equipos",$array_derrota);
            $datos_equipo2=$this->db->select("ID,pj,pe,gf,gc,puntos")->where("nombre","{$equipo2}")->get("equipos");
			$datos_equipo2=$datos_equipo2->result_array();
			$jugados2=$datos_equipo2[0]["pj"]+1;
			$ID2=$datos_equipo2[0]["ID"];
            $empatados2=$datos_equipo2[0]["pe"]+1;
            $golesfavor2=$datos_equipo2[0]["gf"]+$goles;
            $golescontra2=$datos_equipo2[0]["gc"]+$goles;
            $puntos2=$datos_equipo2[0]["puntos"]+1;
            $array_derrota2=Array("pj" => $jugados2,
                             "pe" => $empatados2,
                             "gf" => $golesfavor2,
                             "gc" => $golescontra2,
                             "puntos"=>$puntos2);
             $ingresos_equipo2=$this->db->where("ID_EQUIPO",$ID)->select("PRESUPUESTO")->get("presupuesto_equipos");
            $ingresos_equipo2=$ingresos_equipo2->result_array();
            $ingresos2=$ingresos_equipo2[0]["PRESUPUESTO"]+2500000;
            $ingre2=Array("PRESUPUESTO"=>$ingresos);
            $actualizar_ingresos2=$this->db->where("ID_EQUIPO",$ID2)->update("presupuesto_equipos",$ingre2);
            $actualizar2=$this->db->where("nombre","{$equipo2}")->update("equipos",$array_derrota2);
		}
		function resultados_jornadas($local1,$visitante1,$local2,$visitante2,$local3,$visitante3,$local4,$visitante4,$local5,$visitante5,$local6,$visitante6,$local7,$visitante7,$local8,$visitante8,$local9,$visitante9,$local10,$visitante10,$jornada){
			
				if($local1!="" AND $visitante1!=""){
			       $insert_resultados=Array("resultadocasa1"=>$local1,
			                                "resultadovisitante1"=>$visitante1,
			                                 "estado"=>1);
			       $this->db->where("jornada","{$jornada}")->update("jornadas",$insert_resultados);
			    }elseif($local1=="" AND $visitante1==""){
			    	$insert_resultados=Array("resultadocasa1"=>NULL,
			                                "resultadovisitante1"=>NULL,
			                                 "estado"=>1);
			    	$this->db->where("jornada","{$jornada}")->update("jornadas",$insert_resultados);
			    }
			    if($local2!="" AND $visitante2!=""){
			       $insert_resultados=Array("resultadocasa2"=>$local2,
			                                "resultadovisitante2"=>$visitante2,
			                                 "estado"=>1);
			       $this->db->where("jornada","{$jornada}")->update("jornadas",$insert_resultados);
			    }elseif($local2=="" AND $visitante2==""){
			    	$insert_resultados=Array("resultadocasa2"=>NULL,
			                                "resultadovisitante2"=>NULL,
			                                 "estado"=>1);
			    	$this->db->where("jornada","{$jornada}")->update("jornadas",$insert_resultados);
			    }
			    if($local3!="" AND $visitante3!=""){
			       $insert_resultados=Array("resultadocasa3"=>$local3,
			                                "resultadovisitante3"=>$visitante3,
			                                 "estado"=>1);
			       $this->db->where("jornada","{$jornada}")->update("jornadas",$insert_resultados);
			    }elseif($local3=="" AND $visitante3==""){
			    	$insert_resultados=Array("resultadocasa3"=>NULL,
			                                "resultadovisitante3"=>NULL,
			                                 "estado"=>1);
			    	$this->db->where("jornada","{$jornada}")->update("jornadas",$insert_resultados);
			    }
			    if($local4!="" AND $visitante4!=""){
			       $insert_resultados=Array("resultadocasa4"=>$local4,
			                                "resultadovisitante4"=>$visitante4,
			                                 "estado"=>1);
			       $this->db->where("jornada","{$jornada}")->update("jornadas",$insert_resultados);
			    }elseif($local4=="" AND $visitante4==""){
			    	$insert_resultados=Array("resultadocasa4"=>NULL,
			                                "resultadovisitante4"=>NULL,
			                                 "estado"=>1);
			    	$this->db->where("jornada","{$jornada}")->update("jornadas",$insert_resultados);
			    }
			    if($local5!="" AND $visitante5!=""){
			       $insert_resultados=Array("resultadocasa5"=>$local5,
			                                "resultadovisitante5"=>$visitante5,
			                                 "estado"=>1);
			       $this->db->where("jornada","{$jornada}")->update("jornadas",$insert_resultados);
			    }elseif($local5=="" AND $visitante5==""){
			    	$insert_resultados=Array("resultadocasa5"=>NULL,
			                                "resultadovisitante5"=>NULL,
			                                 "estado"=>1);
			    	$this->db->where("jornada","{$jornada}")->update("jornadas",$insert_resultados);
			    }
			    if($local6!="" AND $visitante6!=""){
			       $insert_resultados=Array("resultadocasa6"=>$local6,
			                                "resultadovisitante6"=>$visitante6,
			                                 "estado"=>1);
			       $this->db->where("jornada","{$jornada}")->update("jornadas",$insert_resultados);
			    }elseif($local6=="" AND $visitante6==""){
			    	$insert_resultados=Array("resultadocasa6"=>NULL,
			                                "resultadovisitante6"=>NULL,
			                                 "estado"=>1);
			    	$this->db->where("jornada","{$jornada}")->update("jornadas",$insert_resultados);
			    }
			    if($local7!="" AND $visitante7!=""){
			       $insert_resultados=Array("resultadocasa7"=>$local7,
			                                "resultadovisitante7"=>$visitante7,
			                                 "estado"=>1);
			       $this->db->where("jornada","{$jornada}")->update("jornadas",$insert_resultados);
			    }elseif($local7=="" AND $visitante7==""){
			    	$insert_resultados=Array("resultadocasa7"=>NULL,
			                                "resultadovisitante7"=>NULL,
			                                 "estado"=>1);
			    	$this->db->where("jornada","{$jornada}")->update("jornadas",$insert_resultados);
			    }
			    if($local8!="" AND $visitante8!=""){
			       $insert_resultados=Array("resultadocasa8"=>$local8,
			                                "resultadovisitante8"=>$visitante8,
			                                 "estado"=>1);
			       $this->db->where("jornada","{$jornada}")->update("jornadas",$insert_resultados);
			    }elseif($local8=="" AND $visitante8==""){
			    	$insert_resultados=Array("resultadocasa8"=>NULL,
			                                "resultadovisitante8"=>NULL,
			                                 "estado"=>1);
			    	$this->db->where("jornada","{$jornada}")->update("jornadas",$insert_resultados);
			    }
			    if($local9!="" AND $visitante9!=""){
			       $insert_resultados=Array("resultadocasa9"=>$local9,
			                                "resultadovisitante9"=>$visitante9,
			                                 "estado"=>1);
			       $this->db->where("jornada","{$jornada}")->update("jornadas",$insert_resultados);
			    }elseif($local9=="" AND $visitante9==""){
			    	$insert_resultados=Array("resultadocasa9"=>NULL,
			                                "resultadovisitante9"=>NULL,
			                                 "estado"=>1);
			    	$this->db->where("jornada","{$jornada}")->update("jornadas",$insert_resultados);
			    }
			    if($local10!="" AND $visitante10!=""){
			       $insert_resultados=Array("resultadocasa10"=>$local10,
			                                "resultadovisitante10"=>$visitante10,
			                                 "estado"=>1);
			       $this->db->where("jornada","{$jornada}")->update("jornadas",$insert_resultados);
			    }elseif($local10=="" AND $visitante10==""){
			    	$insert_resultados=Array("resultadocasa10"=>NULL,
			                                "resultadovisitante10"=>NULL,
			                                 "estado"=>1);
			    	$this->db->where("jornada","{$jornada}")->update("jornadas",$insert_resultados);
			    }

                   
			    
               
		}

		function resultado_jornadas_usuarios($local1,$visitante1,$local2,$visitante2,$local3,$visitante3,$local4,$visitante4,$local5,$visitante5,$local6,$visitante6,$local7,$visitante7,$local8,$visitante8,$local9,$visitante9,$local10,$visitante10,$jornada){
			if($local1!="" AND $visitante1!=""){
			       $insert_resultados=Array("resultadocasa1"=>$local1,
			                                "resultadovisitante1"=>$visitante1,
			                                 "estado"=>1);
			       $this->db->where("jornada","{$jornada}")->update("jornadas",$insert_resultados);
			    }
			    if($local2!="" AND $visitante2!=""){
			       $insert_resultados=Array("resultadocasa2"=>$local2,
			                                "resultadovisitante2"=>$visitante2,
			                                 "estado"=>1);
			       $this->db->where("jornada","{$jornada}")->update("jornadas",$insert_resultados);
			    }if($local3!="" AND $visitante3!=""){
			       $insert_resultados=Array("resultadocasa3"=>$local3,
			                                "resultadovisitante3"=>$visitante3,
			                                 "estado"=>1);
			       $this->db->where("jornada","{$jornada}")->update("jornadas",$insert_resultados);
			    }if($local4!="" AND $visitante4!=""){
			       $insert_resultados=Array("resultadocasa4"=>$local4,
			                                "resultadovisitante4"=>$visitante4,
			                                 "estado"=>1);
			       $this->db->where("jornada","{$jornada}")->update("jornadas",$insert_resultados);
			    }if($local5!="" AND $visitante5!=""){
			       $insert_resultados=Array("resultadocasa5"=>$local5,
			                                "resultadovisitante5"=>$visitante5,
			                                 "estado"=>1);
			       $this->db->where("jornada","{$jornada}")->update("jornadas",$insert_resultados);
			    }if($local6!="" AND $visitante6!=""){
			       $insert_resultados=Array("resultadocasa6"=>$local6,
			                                "resultadovisitante6"=>$visitante6,
			                                 "estado"=>1);
			       $this->db->where("jornada","{$jornada}")->update("jornadas",$insert_resultados);
			    }if($local7!="" AND $visitante7!=""){
			       $insert_resultados=Array("resultadocasa7"=>$local7,
			                                "resultadovisitante7"=>$visitante7,
			                                 "estado"=>1);
			       $this->db->where("jornada","{$jornada}")->update("jornadas",$insert_resultados);
			    }
			    if($local8!="" AND $visitante8!=""){
			       $insert_resultados=Array("resultadocasa8"=>$local8,
			                                "resultadovisitante8"=>$visitante8,
			                                 "estado"=>1);
			       $this->db->where("jornada","{$jornada}")->update("jornadas",$insert_resultados);
			    }elseif($local9!="" AND $visitante9!=""){
			       $insert_resultados=Array("resultadocasa9"=>$local9,
			                                "resultadovisitante9"=>$visitante9,
			                                 "estado"=>1);
			       $this->db->where("jornada","{$jornada}")->update("jornadas",$insert_resultados);
			    }if($local10!="" AND $visitante10!=""){
			       $insert_resultados=Array("resultadocasa10"=>$local10,
			                                "resultadovisitante10"=>$visitante10,
			                                 "estado"=>1);
			       $this->db->where("jornada","{$jornada}")->update("jornadas",$insert_resultados);
			    }


		}
		function mostrar_resultados($jornada){
			$resultados_jornada=$this->db->where("jornada","{$jornada}")->select("resultadocasa1,resultadovisitante1,resultadocasa2,resultadovisitante2,resultadocasa3,resultadovisitante3,resultadocasa4,resultadovisitante4,resultadocasa5,resultadovisitante5,resultadocasa6,resultadovisitante6,resultadocasa7,resultadovisitante7,resultadocasa8,resultadovisitante8,resultadocasa9,resultadovisitante9,resultadocasa10,resultadovisitante10")->get("jornadas");
			$resultados_jornada=$resultados_jornada->result_array();
			return $resultados_jornada;


		}

		function estado_cobro(){
			$estado=$this->db->select("*")->get("estado_cobros");
			$estado=$estado->result_array();
			return $estado;
		}

		function cobros($numero){
            
            $id=$this->db->select("ID")->get("equipos");
            $ID=$id->result_array();
            $lineas=$id->num_rows();
            for($i=0;$i<$lineas;$i++){
            $salario=$this->db->where("ID_EQUIPO",$ID[$i]["ID"])->select_sum("salario")->get("plantilla_equipos");
			$salario=$salario->result_array();
			$salario=$salario[0]["salario"]/9;
			$salario=round($salario);
			$presupuesto=$this->db->where("ID_EQUIPO",$ID[$i]["ID"])->select("PRESUPUESTO")->get("presupuesto_equipos");
			$presupuesto=$presupuesto->result_array();
			$cobro=$presupuesto[0]["PRESUPUESTO"]-$salario;
			$this->db->where("ID_EQUIPO",$ID[$i]["ID"])->set("PRESUPUESTO",$cobro)->update("presupuesto_equipos");
             $this->db->where("cobro","{$numero}")->set("estado",1)->update("estado_cobros");
             
            }
            $usuarios=$this->db->select("ID")->get("usuarios");
             $usuarios1=$usuarios->result_array();
            $lineasu=$usuarios->num_rows();
             for($idos=0;$idos<$lineasu;$idos++){
             	if($numero=="numero1"){
             		$pago="primer";
             	}elseif($numero=="numero2"){
             		$pago="segundo";
             	}elseif($numero=="numero3"){
             		$pago="tercer";
             	}elseif($numero=="numero4"){
             		$pago="cuarto";
             	}elseif($numero=="numero5"){
             		$pago="quinto";
             	}elseif($numero=="numero6"){
             		$pago="sexto";
             	}elseif($numero=="numero7"){
             		$pago="séptimo";
             	}elseif($numero=="numero8"){
             		$pago="octavo";
             	}elseif($numero=="numero9"){
             		$pago="último";
             	}
            	$mensaje=Array("ID_USUARIO"=>$usuarios1[$idos]["ID"],"mensaje"=>"Le informamos que se ha efectuado el {$pago} pago a los jugadores de tu plantilla");
             	$this->db->insert("mensajes",$mensaje);
             }

		    }

}

?>