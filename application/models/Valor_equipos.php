<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Valor_equipos extends CI_Model{

		function valor_Milan(){
			$Milan=$this->db->select("resul1,resul0,resul2,resul3,resul4,resul5,resul6,resul7,resul8,resul9")->where("equipo","A.C.Milan")->get("valor_equipos");
			$Milan=$Milan->result_array();
			return $Milan;
		}
		function valor_Valencia(){
			$Valencia=$this->db->select("resul1,resul0,resul2,resul3,resul4,resul5,resul6,resul7,resul8,resul9")->where("equipo","Valencia")->get("valor_equipos");
			$Valencia=$Valencia->result_array();
			return $Valencia;
		}
		function valor_PSG(){
			$PSG=$this->db->select("resul1,resul0,resul2,resul3,resul4,resul5,resul6,resul7,resul8,resul9")->where("equipo","PSG")->get("valor_equipos");
			$PSG=$PSG->result_array();
			return $PSG;
		}
		function valor_Bayer_Munich(){
			$Bayer_Munich=$this->db->select("resul1,resul0,resul2,resul3,resul4,resul5,resul6,resul7,resul8,resul9")->where("equipo","Bayer Munich")->get("valor_equipos");
			$Bayer_Munich=$Bayer_Munich->result_array();
			return $Bayer_Munich;
		}
		function valor_Barcelona(){
			$Barcelona=$this->db->select("resul1,resul0,resul2,resul3,resul4,resul5,resul6,resul7,resul8,resul9")->where("equipo","F.C.Barcelona")->get("valor_equipos");
			$Barcelona=$Barcelona->result_array();
			return $Barcelona;
		}
		function valor_Ajax(){
			$Ajax=$this->db->select("resul1,resul0,resul2,resul3,resul4,resul5,resul6,resul7,resul8,resul9")->where("equipo","Ajax")->get("valor_equipos");
			$Ajax=$Ajax->result_array();
			return $Ajax;
		}
		function valor_B_Dormunt(){
			$B_Dormunt=$this->db->select("resul1,resul0,resul2,resul3,resul4,resul5,resul6,resul7,resul8,resul9")->where("equipo","B.Dormunt")->get("valor_equipos");
			$B_Dormunt=$B_Dormunt->result_array();
			return $B_Dormunt;
		}
		function valor_M_United(){
			$M_United=$this->db->select("resul1,resul0,resul2,resul3,resul4,resul5,resul6,resul7,resul8,resul9")->where("equipo","M.United")->get("valor_equipos");
			$M_United=$M_United->result_array();
			return $M_United;
		}
		function valor_M_City(){
			$M_City=$this->db->select("resul1,resul0,resul2,resul3,resul4,resul5,resul6,resul7,resul8,resul9")->where("equipo","M.City")->get("valor_equipos");
			$M_City=$M_City->result_array();
			return $M_City;
		}
		function valor_Arsenal(){
			$Arsenal=$this->db->select("resul1,resul0,resul2,resul3,resul4,resul5,resul6,resul7,resul8,resul9")->where("equipo","Arsenal")->get("valor_equipos");
			$Arsenal=$Arsenal->result_array();
			return $Arsenal;
		}
		function valor_Oporto(){
			$Oporto=$this->db->select("resul1,resul0,resul2,resul3,resul4,resul5,resul6,resul7,resul8,resul9")->where("equipo","Oporto")->get("valor_equipos");
			$Oporto=$Oporto->result_array();
			return $Oporto;
		}
		function valor_At_Madrid(){
			$At_Madrid=$this->db->select("resul1,resul0,resul2,resul3,resul4,resul5,resul6,resul7,resul8,resul9")->where("equipo","At.Madrid")->get("valor_equipos");
			$At_Madrid=$At_Madrid->result_array();
			return $At_Madrid;
		}
		function valor_I_Milan(){
			$I_Milan=$this->db->select("resul1,resul0,resul2,resul3,resul4,resul5,resul6,resul7,resul8,resul9")->where("equipo","I.Milan")->get("valor_equipos");
			$I_Milan=$I_Milan->result_array();
			return $I_Milan;
		}
		function valor_Tottenham(){
			$Tottenham=$this->db->select("resul1,resul0,resul2,resul3,resul4,resul5,resul6,resul7,resul8,resul9")->where("equipo","Tottenham")->get("valor_equipos");
			$Tottenham=$Tottenham->result_array();
			return $Tottenham;
		}
		function valor_Liverpool(){
			$Liverpool=$this->db->select("resul1,resul0,resul2,resul3,resul4,resul5,resul6,resul7,resul8,resul9")->where("equipo","Liverpool")->get("valor_equipos");
			$Liverpool=$Liverpool->result_array();
			return $Liverpool;
		}
		function valor_Juventus(){
			$Juventus=$this->db->select("resul1,resul0,resul2,resul3,resul4,resul5,resul6,resul7,resul8,resul9")->where("equipo","Juventus")->get("valor_equipos");
			$Juventus=$Juventus->result_array();
			return $Juventus;
		}
		function valor_Sevilla(){
			$Sevilla=$this->db->select("resul1,resul0,resul2,resul3,resul4,resul5,resul6,resul7,resul8,resul9")->where("equipo","Sevilla")->get("valor_equipos");
			$Sevilla=$Sevilla->result_array();
			return $Sevilla;
		}
		function valor_R_Madrid(){
			$R_Madrid=$this->db->select("resul1,resul0,resul2,resul3,resul4,resul5,resul6,resul7,resul8,resul9")->where("equipo","R.Madrid")->get("valor_equipos");
			$R_Madrid=$R_Madrid->result_array();
			return $R_Madrid;
		}
		function valor_Chelsea(){
			$Chelsea=$this->db->select("resul1,resul0,resul2,resul3,resul4,resul5,resul6,resul7,resul8,resul9")->where("equipo","Chelsea")->get("valor_equipos");
			$Chelsea=$Chelsea->result_array();
			return $Chelsea;
		}
		function valor_O_Lyon(){
			$O_Lyon=$this->db->select("resul1,resul0,resul2,resul3,resul4,resul5,resul6,resul7,resul8,resul9")->where("equipo","O.Lyon")->get("valor_equipos");
			$O_Lyon=$O_Lyon->result_array();
			return $O_Lyon;
		}






}

?>
