<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jornadas extends CI_Controller {

public function index(){

	}
function valorequipos(){
	$this->load->model("Puntos_Goles");
	$this->Puntos_Goles->resultados_jornadas($_POST["resultadolocal1"],$_POST["resultadovisitante1"],$_POST["resultadolocal2"],$_POST["resultadovisitante2"],$_POST["resultadolocal3"],$_POST["resultadovisitante3"],$_POST["resultadolocal4"],$_POST["resultadovisitante4"],$_POST["resultadolocal5"],$_POST["resultadovisitante5"],$_POST["resultadolocal6"],$_POST["resultadovisitante6"],$_POST["resultadolocal7"],$_POST["resultadovisitante7"],$_POST["resultadolocal8"],$_POST["resultadovisitante8"],$_POST["resultadolocal9"],$_POST["resultadovisitante9"],$_POST["resultadolocal10"],$_POST["resultadovisitante10"],$_POST["jornada"]);
	if($_POST["jornada"]=="jornada19"){
		$this->load->model("Jornadas_m");
		$this->Jornadas_m->abrirmercado();
	}
	if($_POST["jornada"]=="jornada24"){
		$this->load->model("Jornadas_m");
		$this->Jornadas_m->cerrarmercado();
	}
    for($i=1;$i<=10;$i++){
	    if($_POST["resultadolocal".$i]!="" AND $_POST["resultadovisitante".$i]!=""){
	    	if($_POST["resultadolocal".$i]>$_POST["resultadovisitante".$i]){
	    		$this->Puntos_Goles->Victoria($_POST["local".$i],$_POST["resultadolocal".$i],$_POST["resultadovisitante".$i]);
	    		$this->Puntos_Goles->Derrota($_POST["visitante".$i],$_POST["resultadovisitante".$i],$_POST["resultadolocal".$i]);
	    	}else if($_POST["resultadolocal".$i]<$_POST["resultadovisitante".$i]){
	    		$this->Puntos_Goles->Derrota($_POST["local".$i],$_POST["resultadolocal".$i],$_POST["resultadovisitante".$i]);
	    		$this->Puntos_Goles->Victoria($_POST["visitante".$i],$_POST["resultadovisitante".$i],$_POST["resultadolocal".$i]);
	    	}else if($_POST["resultadolocal".$i]==$_POST["resultadovisitante".$i]){
	    		$this->Puntos_Goles->Empate($_POST["local".$i],$_POST["visitante".$i],$_POST["resultadolocal".$i]);
	    	}
	    }
    		
    }

}

function valorequipos_usuarios(){


	$this->load->model("Puntos_Goles");
	$this->Puntos_Goles->resultado_jornadas_usuarios($_POST["resultadolocal1"],$_POST["resultadovisitante1"],$_POST["resultadolocal2"],$_POST["resultadovisitante2"],$_POST["resultadolocal3"],$_POST["resultadovisitante3"],$_POST["resultadolocal4"],$_POST["resultadovisitante4"],$_POST["resultadolocal5"],$_POST["resultadovisitante5"],$_POST["resultadolocal6"],$_POST["resultadovisitante6"],$_POST["resultadolocal7"],$_POST["resultadovisitante7"],$_POST["resultadolocal8"],$_POST["resultadovisitante8"],$_POST["resultadolocal9"],$_POST["resultadovisitante9"],$_POST["resultadolocal10"],$_POST["resultadovisitante10"],$_POST["jornada"]);
    for($i=1;$i<=10;$i++){
	    if($_POST["resultadolocal".$i]!="" AND $_POST["resultadovisitante".$i]!=""){
	    	if($_POST["resultadolocal".$i]>$_POST["resultadovisitante".$i]){
	    		$this->Puntos_Goles->Victoria($_POST["local".$i],$_POST["resultadolocal".$i],$_POST["resultadovisitante".$i]);
	    		$this->Puntos_Goles->Derrota($_POST["visitante".$i],$_POST["resultadovisitante".$i],$_POST["resultadolocal".$i]);
	    	}else if($_POST["resultadolocal".$i]<$_POST["resultadovisitante".$i]){
	    		$this->Puntos_Goles->Derrota($_POST["local".$i],$_POST["resultadolocal".$i],$_POST["resultadovisitante".$i]);
	    		$this->Puntos_Goles->Victoria($_POST["visitante".$i],$_POST["resultadovisitante".$i],$_POST["resultadolocal".$i]);
	    	}else if($_POST["resultadolocal".$i]==$_POST["resultadovisitante".$i]){
	    		$this->Puntos_Goles->Empate($_POST["local".$i],$_POST["visitante".$i],$_POST["resultadolocal".$i]);
	    	}
	    }
    		
    }

}

function jornada1(){
	////recogemos los valores de lo equipos
	 $this->load->model("Enfrentamientos");
     $mercado=$this->Enfrentamientos->mercadofichajes();
	$logueado=$this->session->userdata("sesionid");
	      	if(!isset($logueado)){
	      		header("location:".site_url('Usuariosl/login')."");
	      	}  $sin_asignar=$this->session->userdata("equipo_asig");
	     if($sin_asignar==false){
	     		header("location:".site_url('Usuariosl/elegir_equipo/'.$logueado)."");
	     	}
	     		
	     
	$this->load->model("Valor_equipos");
	// valor milan
	$Milan=$this->Valor_equipos->valor_Milan();
	$mil=array_rand($Milan[0]);
	$Milan=$Milan[0][$mil];

	///valor valencia
	$Valencia=$this->Valor_equipos->valor_Valencia();
	$val=array_rand($Valencia[0]);
	$Valencia=$Valencia[0][$val];

	//valor PSG
	$PSG=$this->Valor_equipos->valor_PSG();
	$p=array_rand($PSG[0]);
	$PSG=$PSG[0][$p];

	//valor bayer_munich
	$Bayer_Munich=$this->Valor_equipos->valor_Bayer_Munich();
	$bayer=array_rand($Bayer_Munich[0]);
	$Bayer_Munich=$Bayer_Munich[0][$bayer];

	// valor Barcelona
	$Barcelona=$this->Valor_equipos->valor_Barcelona();
	$Bar=array_rand($Barcelona[0]);
	$Barcelona=$Barcelona[0][$Bar];

	//valor Ajax
	$Ajax=$this->Valor_equipos->valor_Ajax();
	$A=array_rand($Ajax[0]);
	$Ajax=$Ajax[0][$A];

	//valor Borusia dormunt
	$B_Dormunt=$this->Valor_equipos->valor_B_Dormunt();
	$B=array_rand($B_Dormunt[0]);
	$B_Dormunt=$B_Dormunt[0][$B];

	//valor M_united
	$M_United=$this->Valor_equipos->valor_M_United();
	$M=array_rand($M_United[0]);
	$M_United=$M_United[0][$M];

	//valor M_City
	$M_City=$this->Valor_equipos->valor_M_City();
	$M_C=array_rand($M_City[0]);
	$M_City=$M_City[0][$M_C];

	//valor Arsenal
	$Arsenal=$this->Valor_equipos->valor_Arsenal();
	$Ar=array_rand($Arsenal[0]);
	$Arsenal=$Arsenal[0][$Ar];

	//valor Oporto
	$Oporto=$this->Valor_equipos->valor_Oporto();
	$Op=array_rand($Oporto[0]);
	$Oporto=$Oporto[0][$Op];

	//valor Atletico de Madrid
	$At_Madrid=$this->Valor_equipos->valor_At_Madrid();
	$AT=array_rand($At_Madrid[0]);
	$At_Madrid=$At_Madrid[0][$AT];

	//valor I_Milan
	$I_Milan=$this->Valor_equipos->valor_I_Milan();
	$I=array_rand($I_Milan[0]);
	$I_Milan=$I_Milan[0][$I];

	//valor Tottenham
	$Tottenham=$this->Valor_equipos->valor_Tottenham();
	$T=array_rand($Tottenham[0]);
	$Tottenham=$Tottenham[0][$T];

	//valor Livepool
	$Liverpool=$this->Valor_equipos->valor_Liverpool();
	$Li=array_rand($Liverpool[0]);
	$Liverpool=$Liverpool[0][$Li];

	//valor Juventus
	$Juventus=$this->Valor_equipos->valor_Juventus();
	$Ju=array_rand($Juventus[0]);
	$Juventus=$Juventus[0][$Ju];

	//valor Sevilla
	$Sevilla=$this->Valor_equipos->valor_Sevilla();
	$se=array_rand($Sevilla[0]);
	$Sevilla=$Sevilla[0][$se];

	//valor R_Madrid
	$R_Madrid=$this->Valor_equipos->valor_R_Madrid();
	$R=array_rand($R_Madrid[0]);
	$R_Madrid=$R_Madrid[0][$R];

	//valor Chelsea
	$Chelsea=$this->Valor_equipos->valor_Chelsea();
	$che=array_rand($Chelsea[0]);
	$Chelsea=$Chelsea[0][$che];

	//valor O_Lyon
	$O_Lyon=$this->Valor_equipos->valor_O_Lyon();
	$OL=array_rand($O_Lyon[0]);
	$O_Lyon=$O_Lyon[0][$OL];

	///recogemos el estado de jornada si es true o falso la pasamos a la vista para generar los resultados en caso de que la jornada este en falso,una vez se genere el resultado pasa a estado true ya que es jornada se ha jugado

	$this->load->model("Jornadas_m");
	$jornada=$this->Jornadas_m->select_jornadas();

	///cogemos los valores de la jornada para mostrarlos siempre y cuando este en true
	$this->load->model("Puntos_Goles");
	$resultados=$this->Puntos_Goles->mostrar_resultados("jornada1");

	////seleccionar el estado del equipo si lo ha escogido alguien o no para que no introduzca los goles automaticamente
	$this->load->model("E_usuarios");
	$escogido=$this->E_usuarios->Equipo_estadotrue();

    
	$this->load->model("Enfrentamientos");
	$estado=$this->Enfrentamientos->estado_liga();
		if($estado["estado"]==false){
			header("location:".site_url('Inicio_de_liga/Inicio_liga')."");
		}
	$enfrentamientos=$this->Enfrentamientos->equiposenfrentamientos();
	$html=$this->load->view("theme/jornada1.php",compact("enfrentamientos","Milan","Valencia","PSG","Bayer_Munich","Barcelona","Ajax","B_Dormunt","M_United","M_City","Arsenal","Oporto","At_Madrid","I_Milan","Tottenham","Liverpool","Juventus","Sevilla","R_Madrid","Chelsea","O_Lyon","jornada","resultados","escogido","logueado","mercado"),true);
	$conte["contenido"]=$html;
	$this->load->view("panel.php",$conte);
	}
function jornada2(){
	 $this->load->model("Enfrentamientos");
     $mercado=$this->Enfrentamientos->mercadofichajes();
	$logueado=$this->session->userdata("sesionid");
	      	if(!isset($logueado)){
	      		header("location:".site_url('Usuariosl/login')."");
	      	}  $sin_asignar=$this->session->userdata("equipo_asig");
	     if($sin_asignar==false){
	     		header("location:".site_url('Usuariosl/elegir_equipo/'.$logueado)."");
	     	}
	     
	
	////recogemos los valores de lo equipos
	$this->load->model("Valor_equipos");
	// valor milan
	$Milan=$this->Valor_equipos->valor_Milan();
	$mil=array_rand($Milan[0]);
	$Milan=$Milan[0][$mil];

	///valor valencia
	$Valencia=$this->Valor_equipos->valor_Valencia();
	$val=array_rand($Valencia[0]);
	$Valencia=$Valencia[0][$val];

	//valor PSG
	$PSG=$this->Valor_equipos->valor_PSG();
	$p=array_rand($PSG[0]);
	$PSG=$PSG[0][$p];

	//valor bayer_munich
	$Bayer_Munich=$this->Valor_equipos->valor_Bayer_Munich();
	$bayer=array_rand($Bayer_Munich[0]);
	$Bayer_Munich=$Bayer_Munich[0][$bayer];

	// valor Barcelona
	$Barcelona=$this->Valor_equipos->valor_Barcelona();
	$Bar=array_rand($Barcelona[0]);
	$Barcelona=$Barcelona[0][$Bar];

	//valor Ajax
	$Ajax=$this->Valor_equipos->valor_Ajax();
	$A=array_rand($Ajax[0]);
	$Ajax=$Ajax[0][$A];

	//valor Borusia dormunt
	$B_Dormunt=$this->Valor_equipos->valor_B_Dormunt();
	$B=array_rand($B_Dormunt[0]);
	$B_Dormunt=$B_Dormunt[0][$B];

	//valor M_united
	$M_United=$this->Valor_equipos->valor_M_United();
	$M=array_rand($M_United[0]);
	$M_United=$M_United[0][$M];

	//valor M_City
	$M_City=$this->Valor_equipos->valor_M_City();
	$M_C=array_rand($M_City[0]);
	$M_City=$M_City[0][$M_C];

	//valor Arsenal
	$Arsenal=$this->Valor_equipos->valor_Arsenal();
	$Ar=array_rand($Arsenal[0]);
	$Arsenal=$Arsenal[0][$Ar];

	//valor Oporto
	$Oporto=$this->Valor_equipos->valor_Oporto();
	$Op=array_rand($Oporto[0]);
	$Oporto=$Oporto[0][$Op];

	//valor Atletico de Madrid
	$At_Madrid=$this->Valor_equipos->valor_At_Madrid();
	$AT=array_rand($At_Madrid[0]);
	$At_Madrid=$At_Madrid[0][$AT];

	//valor I_Milan
	$I_Milan=$this->Valor_equipos->valor_I_Milan();
	$I=array_rand($I_Milan[0]);
	$I_Milan=$I_Milan[0][$I];

	//valor Tottenham
	$Tottenham=$this->Valor_equipos->valor_Tottenham();
	$T=array_rand($Tottenham[0]);
	$Tottenham=$Tottenham[0][$T];

	//valor Livepool
	$Liverpool=$this->Valor_equipos->valor_Liverpool();
	$Li=array_rand($Liverpool[0]);
	$Liverpool=$Liverpool[0][$Li];

	//valor Juventus
	$Juventus=$this->Valor_equipos->valor_Juventus();
	$Ju=array_rand($Juventus[0]);
	$Juventus=$Juventus[0][$Ju];

	//valor Sevilla
	$Sevilla=$this->Valor_equipos->valor_Sevilla();
	$se=array_rand($Sevilla[0]);
	$Sevilla=$Sevilla[0][$se];

	//valor R_Madrid
	$R_Madrid=$this->Valor_equipos->valor_R_Madrid();
	$R=array_rand($R_Madrid[0]);
	$R_Madrid=$R_Madrid[0][$R];

	//valor Chelsea
	$Chelsea=$this->Valor_equipos->valor_Chelsea();
	$che=array_rand($Chelsea[0]);
	$Chelsea=$Chelsea[0][$che];

	//valor O_Lyon
	$O_Lyon=$this->Valor_equipos->valor_O_Lyon();
	$OL=array_rand($O_Lyon[0]);
	$O_Lyon=$O_Lyon[0][$OL];

	///recogemos el estado de jornada si es true o falso la pasamos a la vista para generar los resultados en caso de que la jornada este en falso,una vez se genere el resultado pasa a estado true ya que es jornada se ha jugado

	$this->load->model("Jornadas_m");
	$jornada=$this->Jornadas_m->select_jornadas();

	///cogemos los valores de la jornada para mostrarlos siempre y cuando este en true
	$this->load->model("Puntos_Goles");
	$resultados=$this->Puntos_Goles->mostrar_resultados("jornada2");

	////seleccionar el estado del equipo si lo ha escogido alguien o no para que no introduzca los goles automaticamente
	$this->load->model("E_usuarios");
	$escogido=$this->E_usuarios->Equipo_estadotrue();

    
	$this->load->model("Enfrentamientos");
	$estado=$this->Enfrentamientos->estado_liga();
		if($estado["estado"]==false){
			header("location:".site_url('Inicio_de_liga/Inicio_liga')."");
		}
	$enfrentamientos=$this->Enfrentamientos->equiposenfrentamientos();
	$html=$this->load->view("theme/jornada2.php",compact("enfrentamientos","Milan","Valencia","PSG","Bayer_Munich","Barcelona","Ajax","B_Dormunt","M_United","M_City","Arsenal","Oporto","At_Madrid","I_Milan","Tottenham","Liverpool","Juventus","Sevilla","R_Madrid","Chelsea","O_Lyon","jornada","resultados","escogido","logueado","mercado"),true);
	$conte["contenido"]=$html;
	$this->load->view("panel.php",$conte);
}
function jornada3(){
	 $this->load->model("Enfrentamientos");
     $mercado=$this->Enfrentamientos->mercadofichajes();
	$logueado=$this->session->userdata("sesionid");
	      	if(!isset($logueado)){
	      		header("location:".site_url('Usuariosl/login')."");
	      	}  $sin_asignar=$this->session->userdata("equipo_asig");
	     if($sin_asignar==false){
	     		header("location:".site_url('Usuariosl/elegir_equipo/'.$logueado)."");
	     	}
	     
	
	////recogemos los valores de lo equipos
	$this->load->model("Valor_equipos");
	// valor milan
	$Milan=$this->Valor_equipos->valor_Milan();
	$mil=array_rand($Milan[0]);
	$Milan=$Milan[0][$mil];

	///valor valencia
	$Valencia=$this->Valor_equipos->valor_Valencia();
	$val=array_rand($Valencia[0]);
	$Valencia=$Valencia[0][$val];

	//valor PSG
	$PSG=$this->Valor_equipos->valor_PSG();
	$p=array_rand($PSG[0]);
	$PSG=$PSG[0][$p];

	//valor bayer_munich
	$Bayer_Munich=$this->Valor_equipos->valor_Bayer_Munich();
	$bayer=array_rand($Bayer_Munich[0]);
	$Bayer_Munich=$Bayer_Munich[0][$bayer];

	// valor Barcelona
	$Barcelona=$this->Valor_equipos->valor_Barcelona();
	$Bar=array_rand($Barcelona[0]);
	$Barcelona=$Barcelona[0][$Bar];

	//valor Ajax
	$Ajax=$this->Valor_equipos->valor_Ajax();
	$A=array_rand($Ajax[0]);
	$Ajax=$Ajax[0][$A];

	//valor Borusia dormunt
	$B_Dormunt=$this->Valor_equipos->valor_B_Dormunt();
	$B=array_rand($B_Dormunt[0]);
	$B_Dormunt=$B_Dormunt[0][$B];

	//valor M_united
	$M_United=$this->Valor_equipos->valor_M_United();
	$M=array_rand($M_United[0]);
	$M_United=$M_United[0][$M];

	//valor M_City
	$M_City=$this->Valor_equipos->valor_M_City();
	$M_C=array_rand($M_City[0]);
	$M_City=$M_City[0][$M_C];

	//valor Arsenal
	$Arsenal=$this->Valor_equipos->valor_Arsenal();
	$Ar=array_rand($Arsenal[0]);
	$Arsenal=$Arsenal[0][$Ar];

	//valor Oporto
	$Oporto=$this->Valor_equipos->valor_Oporto();
	$Op=array_rand($Oporto[0]);
	$Oporto=$Oporto[0][$Op];

	//valor Atletico de Madrid
	$At_Madrid=$this->Valor_equipos->valor_At_Madrid();
	$AT=array_rand($At_Madrid[0]);
	$At_Madrid=$At_Madrid[0][$AT];

	//valor I_Milan
	$I_Milan=$this->Valor_equipos->valor_I_Milan();
	$I=array_rand($I_Milan[0]);
	$I_Milan=$I_Milan[0][$I];

	//valor Tottenham
	$Tottenham=$this->Valor_equipos->valor_Tottenham();
	$T=array_rand($Tottenham[0]);
	$Tottenham=$Tottenham[0][$T];

	//valor Livepool
	$Liverpool=$this->Valor_equipos->valor_Liverpool();
	$Li=array_rand($Liverpool[0]);
	$Liverpool=$Liverpool[0][$Li];

	//valor Juventus
	$Juventus=$this->Valor_equipos->valor_Juventus();
	$Ju=array_rand($Juventus[0]);
	$Juventus=$Juventus[0][$Ju];

	//valor Sevilla
	$Sevilla=$this->Valor_equipos->valor_Sevilla();
	$se=array_rand($Sevilla[0]);
	$Sevilla=$Sevilla[0][$se];

	//valor R_Madrid
	$R_Madrid=$this->Valor_equipos->valor_R_Madrid();
	$R=array_rand($R_Madrid[0]);
	$R_Madrid=$R_Madrid[0][$R];

	//valor Chelsea
	$Chelsea=$this->Valor_equipos->valor_Chelsea();
	$che=array_rand($Chelsea[0]);
	$Chelsea=$Chelsea[0][$che];

	//valor O_Lyon
	$O_Lyon=$this->Valor_equipos->valor_O_Lyon();
	$OL=array_rand($O_Lyon[0]);
	$O_Lyon=$O_Lyon[0][$OL];

	///recogemos el estado de jornada si es true o falso la pasamos a la vista para generar los resultados en caso de que la jornada este en falso,una vez se genere el resultado pasa a estado true ya que es jornada se ha jugado

	$this->load->model("Jornadas_m");
	$jornada=$this->Jornadas_m->select_jornadas();

	///cogemos los valores de la jornada para mostrarlos siempre y cuando este en true
	$this->load->model("Puntos_Goles");
	$resultados=$this->Puntos_Goles->mostrar_resultados("jornada3");

	////seleccionar el estado del equipo si lo ha escogido alguien o no para que no introduzca los goles automaticamente
	$this->load->model("E_usuarios");
	$escogido=$this->E_usuarios->Equipo_estadotrue();

    
	$this->load->model("Enfrentamientos");
	$estado=$this->Enfrentamientos->estado_liga();
		if($estado["estado"]==false){
			header("location:".site_url('Inicio_de_liga/Inicio_liga')."");
		}
	$enfrentamientos=$this->Enfrentamientos->equiposenfrentamientos();
	$html=$this->load->view("theme/jornada3.php",compact("enfrentamientos","Milan","Valencia","PSG","Bayer_Munich","Barcelona","Ajax","B_Dormunt","M_United","M_City","Arsenal","Oporto","At_Madrid","I_Milan","Tottenham","Liverpool","Juventus","Sevilla","R_Madrid","Chelsea","O_Lyon","jornada","resultados","escogido","logueado","mercado"),true);
	$conte["contenido"]=$html;
	$this->load->view("panel.php",$conte);
}
function jornada4(){
      $this->load->model("Enfrentamientos");
     $mercado=$this->Enfrentamientos->mercadofichajes();
	$logueado=$this->session->userdata("sesionid");
	      	if(!isset($logueado)){
	      		header("location:".site_url('Usuariosl/login')."");
	      	}  $sin_asignar=$this->session->userdata("equipo_asig");
	     if($sin_asignar==false){
	     		header("location:".site_url('Usuariosl/elegir_equipo/'.$logueado)."");
	     	}
	     
	////recogemos los valores de lo equipos
	$this->load->model("Valor_equipos");
	// valor milan
	$Milan=$this->Valor_equipos->valor_Milan();
	$mil=array_rand($Milan[0]);
	$Milan=$Milan[0][$mil];

	///valor valencia
	$Valencia=$this->Valor_equipos->valor_Valencia();
	$val=array_rand($Valencia[0]);
	$Valencia=$Valencia[0][$val];

	//valor PSG
	$PSG=$this->Valor_equipos->valor_PSG();
	$p=array_rand($PSG[0]);
	$PSG=$PSG[0][$p];

	//valor bayer_munich
	$Bayer_Munich=$this->Valor_equipos->valor_Bayer_Munich();
	$bayer=array_rand($Bayer_Munich[0]);
	$Bayer_Munich=$Bayer_Munich[0][$bayer];

	// valor Barcelona
	$Barcelona=$this->Valor_equipos->valor_Barcelona();
	$Bar=array_rand($Barcelona[0]);
	$Barcelona=$Barcelona[0][$Bar];

	//valor Ajax
	$Ajax=$this->Valor_equipos->valor_Ajax();
	$A=array_rand($Ajax[0]);
	$Ajax=$Ajax[0][$A];

	//valor Borusia dormunt
	$B_Dormunt=$this->Valor_equipos->valor_B_Dormunt();
	$B=array_rand($B_Dormunt[0]);
	$B_Dormunt=$B_Dormunt[0][$B];

	//valor M_united
	$M_United=$this->Valor_equipos->valor_M_United();
	$M=array_rand($M_United[0]);
	$M_United=$M_United[0][$M];

	//valor M_City
	$M_City=$this->Valor_equipos->valor_M_City();
	$M_C=array_rand($M_City[0]);
	$M_City=$M_City[0][$M_C];

	//valor Arsenal
	$Arsenal=$this->Valor_equipos->valor_Arsenal();
	$Ar=array_rand($Arsenal[0]);
	$Arsenal=$Arsenal[0][$Ar];

	//valor Oporto
	$Oporto=$this->Valor_equipos->valor_Oporto();
	$Op=array_rand($Oporto[0]);
	$Oporto=$Oporto[0][$Op];

	//valor Atletico de Madrid
	$At_Madrid=$this->Valor_equipos->valor_At_Madrid();
	$AT=array_rand($At_Madrid[0]);
	$At_Madrid=$At_Madrid[0][$AT];

	//valor I_Milan
	$I_Milan=$this->Valor_equipos->valor_I_Milan();
	$I=array_rand($I_Milan[0]);
	$I_Milan=$I_Milan[0][$I];

	//valor Tottenham
	$Tottenham=$this->Valor_equipos->valor_Tottenham();
	$T=array_rand($Tottenham[0]);
	$Tottenham=$Tottenham[0][$T];

	//valor Livepool
	$Liverpool=$this->Valor_equipos->valor_Liverpool();
	$Li=array_rand($Liverpool[0]);
	$Liverpool=$Liverpool[0][$Li];

	//valor Juventus
	$Juventus=$this->Valor_equipos->valor_Juventus();
	$Ju=array_rand($Juventus[0]);
	$Juventus=$Juventus[0][$Ju];

	//valor Sevilla
	$Sevilla=$this->Valor_equipos->valor_Sevilla();
	$se=array_rand($Sevilla[0]);
	$Sevilla=$Sevilla[0][$se];

	//valor R_Madrid
	$R_Madrid=$this->Valor_equipos->valor_R_Madrid();
	$R=array_rand($R_Madrid[0]);
	$R_Madrid=$R_Madrid[0][$R];

	//valor Chelsea
	$Chelsea=$this->Valor_equipos->valor_Chelsea();
	$che=array_rand($Chelsea[0]);
	$Chelsea=$Chelsea[0][$che];

	//valor O_Lyon
	$O_Lyon=$this->Valor_equipos->valor_O_Lyon();
	$OL=array_rand($O_Lyon[0]);
	$O_Lyon=$O_Lyon[0][$OL];

	///recogemos el estado de jornada si es true o falso la pasamos a la vista para generar los resultados en caso de que la jornada este en falso,una vez se genere el resultado pasa a estado true ya que es jornada se ha jugado

	$this->load->model("Jornadas_m");
	$jornada=$this->Jornadas_m->select_jornadas();

	///cogemos los valores de la jornada para mostrarlos siempre y cuando este en true
	$this->load->model("Puntos_Goles");
	$resultados=$this->Puntos_Goles->mostrar_resultados("jornada4");

	///seleccionamos el estado de los cobros

	$estado_cobros=$this->Puntos_Goles->estado_cobro();

	////seleccionar el estado del equipo si lo ha escogido alguien o no para que no introduzca los goles automaticamente
	$this->load->model("E_usuarios");
	$escogido=$this->E_usuarios->Equipo_estadotrue();

    
	$this->load->model("Enfrentamientos");
	$estado=$this->Enfrentamientos->estado_liga();
		if($estado["estado"]==false){
			header("location:".site_url('Inicio_de_liga/Inicio_liga')."");
		}
	$enfrentamientos=$this->Enfrentamientos->equiposenfrentamientos();
	$html=$this->load->view("theme/jornada4.php",compact("enfrentamientos","Milan","Valencia","PSG","Bayer_Munich","Barcelona","Ajax","B_Dormunt","M_United","M_City","Arsenal","Oporto","At_Madrid","I_Milan","Tottenham","Liverpool","Juventus","Sevilla","R_Madrid","Chelsea","O_Lyon","jornada","resultados","escogido","estado_cobros","logueado","mercado"),true);
	$conte["contenido"]=$html;
	$this->load->view("panel.php",$conte);
}
function jornada5(){
	 $this->load->model("Enfrentamientos");
     $mercado=$this->Enfrentamientos->mercadofichajes();
	$logueado=$this->session->userdata("sesionid");
	      	if(!isset($logueado)){
	      		header("location:".site_url('Usuariosl/login')."");
	      	}  $sin_asignar=$this->session->userdata("equipo_asig");
	     if($sin_asignar==false){
	     		header("location:".site_url('Usuariosl/elegir_equipo/'.$logueado)."");
	     	}
	     
	////recogemos los valores de lo equipos
	$this->load->model("Valor_equipos");
	// valor milan
	$Milan=$this->Valor_equipos->valor_Milan();
	$mil=array_rand($Milan[0]);
	$Milan=$Milan[0][$mil];

	///valor valencia
	$Valencia=$this->Valor_equipos->valor_Valencia();
	$val=array_rand($Valencia[0]);
	$Valencia=$Valencia[0][$val];

	//valor PSG
	$PSG=$this->Valor_equipos->valor_PSG();
	$p=array_rand($PSG[0]);
	$PSG=$PSG[0][$p];

	//valor bayer_munich
	$Bayer_Munich=$this->Valor_equipos->valor_Bayer_Munich();
	$bayer=array_rand($Bayer_Munich[0]);
	$Bayer_Munich=$Bayer_Munich[0][$bayer];

	// valor Barcelona
	$Barcelona=$this->Valor_equipos->valor_Barcelona();
	$Bar=array_rand($Barcelona[0]);
	$Barcelona=$Barcelona[0][$Bar];

	//valor Ajax
	$Ajax=$this->Valor_equipos->valor_Ajax();
	$A=array_rand($Ajax[0]);
	$Ajax=$Ajax[0][$A];

	//valor Borusia dormunt
	$B_Dormunt=$this->Valor_equipos->valor_B_Dormunt();
	$B=array_rand($B_Dormunt[0]);
	$B_Dormunt=$B_Dormunt[0][$B];

	//valor M_united
	$M_United=$this->Valor_equipos->valor_M_United();
	$M=array_rand($M_United[0]);
	$M_United=$M_United[0][$M];

	//valor M_City
	$M_City=$this->Valor_equipos->valor_M_City();
	$M_C=array_rand($M_City[0]);
	$M_City=$M_City[0][$M_C];

	//valor Arsenal
	$Arsenal=$this->Valor_equipos->valor_Arsenal();
	$Ar=array_rand($Arsenal[0]);
	$Arsenal=$Arsenal[0][$Ar];

	//valor Oporto
	$Oporto=$this->Valor_equipos->valor_Oporto();
	$Op=array_rand($Oporto[0]);
	$Oporto=$Oporto[0][$Op];

	//valor Atletico de Madrid
	$At_Madrid=$this->Valor_equipos->valor_At_Madrid();
	$AT=array_rand($At_Madrid[0]);
	$At_Madrid=$At_Madrid[0][$AT];

	//valor I_Milan
	$I_Milan=$this->Valor_equipos->valor_I_Milan();
	$I=array_rand($I_Milan[0]);
	$I_Milan=$I_Milan[0][$I];

	//valor Tottenham
	$Tottenham=$this->Valor_equipos->valor_Tottenham();
	$T=array_rand($Tottenham[0]);
	$Tottenham=$Tottenham[0][$T];

	//valor Livepool
	$Liverpool=$this->Valor_equipos->valor_Liverpool();
	$Li=array_rand($Liverpool[0]);
	$Liverpool=$Liverpool[0][$Li];

	//valor Juventus
	$Juventus=$this->Valor_equipos->valor_Juventus();
	$Ju=array_rand($Juventus[0]);
	$Juventus=$Juventus[0][$Ju];

	//valor Sevilla
	$Sevilla=$this->Valor_equipos->valor_Sevilla();
	$se=array_rand($Sevilla[0]);
	$Sevilla=$Sevilla[0][$se];

	//valor R_Madrid
	$R_Madrid=$this->Valor_equipos->valor_R_Madrid();
	$R=array_rand($R_Madrid[0]);
	$R_Madrid=$R_Madrid[0][$R];

	//valor Chelsea
	$Chelsea=$this->Valor_equipos->valor_Chelsea();
	$che=array_rand($Chelsea[0]);
	$Chelsea=$Chelsea[0][$che];

	//valor O_Lyon
	$O_Lyon=$this->Valor_equipos->valor_O_Lyon();
	$OL=array_rand($O_Lyon[0]);
	$O_Lyon=$O_Lyon[0][$OL];

	///recogemos el estado de jornada si es true o falso la pasamos a la vista para generar los resultados en caso de que la jornada este en falso,una vez se genere el resultado pasa a estado true ya que es jornada se ha jugado

	$this->load->model("Jornadas_m");
	$jornada=$this->Jornadas_m->select_jornadas();

	///cogemos los valores de la jornada para mostrarlos siempre y cuando este en true
	$this->load->model("Puntos_Goles");
	$resultados=$this->Puntos_Goles->mostrar_resultados("jornada5");

	////seleccionar el estado del equipo si lo ha escogido alguien o no para que no introduzca los goles automaticamente
	$this->load->model("E_usuarios");
	$escogido=$this->E_usuarios->Equipo_estadotrue();

    
	$this->load->model("Enfrentamientos");
	$estado=$this->Enfrentamientos->estado_liga();
		if($estado["estado"]==false){
			header("location:".site_url('Inicio_de_liga/Inicio_liga')."");
		}
	$enfrentamientos=$this->Enfrentamientos->equiposenfrentamientos();
	$html=$this->load->view("theme/jornada5.php",compact("enfrentamientos","Milan","Valencia","PSG","Bayer_Munich","Barcelona","Ajax","B_Dormunt","M_United","M_City","Arsenal","Oporto","At_Madrid","I_Milan","Tottenham","Liverpool","Juventus","Sevilla","R_Madrid","Chelsea","O_Lyon","jornada","resultados","escogido","logueado","mercado"),true);
	$conte["contenido"]=$html;
	$this->load->view("panel.php",$conte);
}
function jornada6(){
	 $this->load->model("Enfrentamientos");
     $mercado=$this->Enfrentamientos->mercadofichajes();
	$logueado=$this->session->userdata("sesionid");
	      	if(!isset($logueado)){
	      		header("location:".site_url('Usuariosl/login')."");
	      	}  $sin_asignar=$this->session->userdata("equipo_asig");
	     if($sin_asignar==false){
	     		header("location:".site_url('Usuariosl/elegir_equipo/'.$logueado)."");
	     	}
	     
	////recogemos los valores de lo equipos
	$this->load->model("Valor_equipos");
	// valor milan
	$Milan=$this->Valor_equipos->valor_Milan();
	$mil=array_rand($Milan[0]);
	$Milan=$Milan[0][$mil];

	///valor valencia
	$Valencia=$this->Valor_equipos->valor_Valencia();
	$val=array_rand($Valencia[0]);
	$Valencia=$Valencia[0][$val];

	//valor PSG
	$PSG=$this->Valor_equipos->valor_PSG();
	$p=array_rand($PSG[0]);
	$PSG=$PSG[0][$p];

	//valor bayer_munich
	$Bayer_Munich=$this->Valor_equipos->valor_Bayer_Munich();
	$bayer=array_rand($Bayer_Munich[0]);
	$Bayer_Munich=$Bayer_Munich[0][$bayer];

	// valor Barcelona
	$Barcelona=$this->Valor_equipos->valor_Barcelona();
	$Bar=array_rand($Barcelona[0]);
	$Barcelona=$Barcelona[0][$Bar];

	//valor Ajax
	$Ajax=$this->Valor_equipos->valor_Ajax();
	$A=array_rand($Ajax[0]);
	$Ajax=$Ajax[0][$A];

	//valor Borusia dormunt
	$B_Dormunt=$this->Valor_equipos->valor_B_Dormunt();
	$B=array_rand($B_Dormunt[0]);
	$B_Dormunt=$B_Dormunt[0][$B];

	//valor M_united
	$M_United=$this->Valor_equipos->valor_M_United();
	$M=array_rand($M_United[0]);
	$M_United=$M_United[0][$M];

	//valor M_City
	$M_City=$this->Valor_equipos->valor_M_City();
	$M_C=array_rand($M_City[0]);
	$M_City=$M_City[0][$M_C];

	//valor Arsenal
	$Arsenal=$this->Valor_equipos->valor_Arsenal();
	$Ar=array_rand($Arsenal[0]);
	$Arsenal=$Arsenal[0][$Ar];

	//valor Oporto
	$Oporto=$this->Valor_equipos->valor_Oporto();
	$Op=array_rand($Oporto[0]);
	$Oporto=$Oporto[0][$Op];

	//valor Atletico de Madrid
	$At_Madrid=$this->Valor_equipos->valor_At_Madrid();
	$AT=array_rand($At_Madrid[0]);
	$At_Madrid=$At_Madrid[0][$AT];

	//valor I_Milan
	$I_Milan=$this->Valor_equipos->valor_I_Milan();
	$I=array_rand($I_Milan[0]);
	$I_Milan=$I_Milan[0][$I];

	//valor Tottenham
	$Tottenham=$this->Valor_equipos->valor_Tottenham();
	$T=array_rand($Tottenham[0]);
	$Tottenham=$Tottenham[0][$T];

	//valor Livepool
	$Liverpool=$this->Valor_equipos->valor_Liverpool();
	$Li=array_rand($Liverpool[0]);
	$Liverpool=$Liverpool[0][$Li];

	//valor Juventus
	$Juventus=$this->Valor_equipos->valor_Juventus();
	$Ju=array_rand($Juventus[0]);
	$Juventus=$Juventus[0][$Ju];

	//valor Sevilla
	$Sevilla=$this->Valor_equipos->valor_Sevilla();
	$se=array_rand($Sevilla[0]);
	$Sevilla=$Sevilla[0][$se];

	//valor R_Madrid
	$R_Madrid=$this->Valor_equipos->valor_R_Madrid();
	$R=array_rand($R_Madrid[0]);
	$R_Madrid=$R_Madrid[0][$R];

	//valor Chelsea
	$Chelsea=$this->Valor_equipos->valor_Chelsea();
	$che=array_rand($Chelsea[0]);
	$Chelsea=$Chelsea[0][$che];

	//valor O_Lyon
	$O_Lyon=$this->Valor_equipos->valor_O_Lyon();
	$OL=array_rand($O_Lyon[0]);
	$O_Lyon=$O_Lyon[0][$OL];

	///recogemos el estado de jornada si es true o falso la pasamos a la vista para generar los resultados en caso de que la jornada este en falso,una vez se genere el resultado pasa a estado true ya que es jornada se ha jugado

	$this->load->model("Jornadas_m");
	$jornada=$this->Jornadas_m->select_jornadas();

	///cogemos los valores de la jornada para mostrarlos siempre y cuando este en true
	$this->load->model("Puntos_Goles");
	$resultados=$this->Puntos_Goles->mostrar_resultados("jornada6");

	////seleccionar el estado del equipo si lo ha escogido alguien o no para que no introduzca los goles automaticamente
	$this->load->model("E_usuarios");
	$escogido=$this->E_usuarios->Equipo_estadotrue();

    
	$this->load->model("Enfrentamientos");
	$estado=$this->Enfrentamientos->estado_liga();
		if($estado["estado"]==false){
			header("location:".site_url('Inicio_de_liga/Inicio_liga')."");
		}
	$enfrentamientos=$this->Enfrentamientos->equiposenfrentamientos();
	$html=$this->load->view("theme/jornada6.php",compact("enfrentamientos","Milan","Valencia","PSG","Bayer_Munich","Barcelona","Ajax","B_Dormunt","M_United","M_City","Arsenal","Oporto","At_Madrid","I_Milan","Tottenham","Liverpool","Juventus","Sevilla","R_Madrid","Chelsea","O_Lyon","jornada","resultados","escogido","logueado","mercado"),true);
	$conte["contenido"]=$html;
	$this->load->view("panel.php",$conte);
}
function jornada7(){
	 $this->load->model("Enfrentamientos");
     $mercado=$this->Enfrentamientos->mercadofichajes();
	$logueado=$this->session->userdata("sesionid");
	      	if(!isset($logueado)){
	      		header("location:".site_url('Usuariosl/login')."");
	      	}  $sin_asignar=$this->session->userdata("equipo_asig");
	     if($sin_asignar==false){
	     		header("location:".site_url('Usuariosl/elegir_equipo/'.$logueado)."");
	     	}
	     
	////recogemos los valores de lo equipos
	$this->load->model("Valor_equipos");
	// valor milan
	$Milan=$this->Valor_equipos->valor_Milan();
	$mil=array_rand($Milan[0]);
	$Milan=$Milan[0][$mil];

	///valor valencia
	$Valencia=$this->Valor_equipos->valor_Valencia();
	$val=array_rand($Valencia[0]);
	$Valencia=$Valencia[0][$val];

	//valor PSG
	$PSG=$this->Valor_equipos->valor_PSG();
	$p=array_rand($PSG[0]);
	$PSG=$PSG[0][$p];

	//valor bayer_munich
	$Bayer_Munich=$this->Valor_equipos->valor_Bayer_Munich();
	$bayer=array_rand($Bayer_Munich[0]);
	$Bayer_Munich=$Bayer_Munich[0][$bayer];

	// valor Barcelona
	$Barcelona=$this->Valor_equipos->valor_Barcelona();
	$Bar=array_rand($Barcelona[0]);
	$Barcelona=$Barcelona[0][$Bar];

	//valor Ajax
	$Ajax=$this->Valor_equipos->valor_Ajax();
	$A=array_rand($Ajax[0]);
	$Ajax=$Ajax[0][$A];

	//valor Borusia dormunt
	$B_Dormunt=$this->Valor_equipos->valor_B_Dormunt();
	$B=array_rand($B_Dormunt[0]);
	$B_Dormunt=$B_Dormunt[0][$B];

	//valor M_united
	$M_United=$this->Valor_equipos->valor_M_United();
	$M=array_rand($M_United[0]);
	$M_United=$M_United[0][$M];

	//valor M_City
	$M_City=$this->Valor_equipos->valor_M_City();
	$M_C=array_rand($M_City[0]);
	$M_City=$M_City[0][$M_C];

	//valor Arsenal
	$Arsenal=$this->Valor_equipos->valor_Arsenal();
	$Ar=array_rand($Arsenal[0]);
	$Arsenal=$Arsenal[0][$Ar];

	//valor Oporto
	$Oporto=$this->Valor_equipos->valor_Oporto();
	$Op=array_rand($Oporto[0]);
	$Oporto=$Oporto[0][$Op];

	//valor Atletico de Madrid
	$At_Madrid=$this->Valor_equipos->valor_At_Madrid();
	$AT=array_rand($At_Madrid[0]);
	$At_Madrid=$At_Madrid[0][$AT];

	//valor I_Milan
	$I_Milan=$this->Valor_equipos->valor_I_Milan();
	$I=array_rand($I_Milan[0]);
	$I_Milan=$I_Milan[0][$I];

	//valor Tottenham
	$Tottenham=$this->Valor_equipos->valor_Tottenham();
	$T=array_rand($Tottenham[0]);
	$Tottenham=$Tottenham[0][$T];

	//valor Livepool
	$Liverpool=$this->Valor_equipos->valor_Liverpool();
	$Li=array_rand($Liverpool[0]);
	$Liverpool=$Liverpool[0][$Li];

	//valor Juventus
	$Juventus=$this->Valor_equipos->valor_Juventus();
	$Ju=array_rand($Juventus[0]);
	$Juventus=$Juventus[0][$Ju];

	//valor Sevilla
	$Sevilla=$this->Valor_equipos->valor_Sevilla();
	$se=array_rand($Sevilla[0]);
	$Sevilla=$Sevilla[0][$se];

	//valor R_Madrid
	$R_Madrid=$this->Valor_equipos->valor_R_Madrid();
	$R=array_rand($R_Madrid[0]);
	$R_Madrid=$R_Madrid[0][$R];

	//valor Chelsea
	$Chelsea=$this->Valor_equipos->valor_Chelsea();
	$che=array_rand($Chelsea[0]);
	$Chelsea=$Chelsea[0][$che];

	//valor O_Lyon
	$O_Lyon=$this->Valor_equipos->valor_O_Lyon();
	$OL=array_rand($O_Lyon[0]);
	$O_Lyon=$O_Lyon[0][$OL];

	///recogemos el estado de jornada si es true o falso la pasamos a la vista para generar los resultados en caso de que la jornada este en falso,una vez se genere el resultado pasa a estado true ya que es jornada se ha jugado

	$this->load->model("Jornadas_m");
	$jornada=$this->Jornadas_m->select_jornadas();

	///cogemos los valores de la jornada para mostrarlos siempre y cuando este en true
	$this->load->model("Puntos_Goles");
	$resultados=$this->Puntos_Goles->mostrar_resultados("jornada7");

	////seleccionar el estado del equipo si lo ha escogido alguien o no para que no introduzca los goles automaticamente
	$this->load->model("E_usuarios");
	$escogido=$this->E_usuarios->Equipo_estadotrue();

    
	$this->load->model("Enfrentamientos");
	$estado=$this->Enfrentamientos->estado_liga();
		if($estado["estado"]==false){
			header("location:".site_url('Inicio_de_liga/Inicio_liga')."");
		}
	$enfrentamientos=$this->Enfrentamientos->equiposenfrentamientos();
	$html=$this->load->view("theme/jornada7.php",compact("enfrentamientos","Milan","Valencia","PSG","Bayer_Munich","Barcelona","Ajax","B_Dormunt","M_United","M_City","Arsenal","Oporto","At_Madrid","I_Milan","Tottenham","Liverpool","Juventus","Sevilla","R_Madrid","Chelsea","O_Lyon","jornada","resultados","escogido","logueado","mercado"),true);
	$conte["contenido"]=$html;
	$this->load->view("panel.php",$conte);
}
function jornada8(){
	 $this->load->model("Enfrentamientos");
     $mercado=$this->Enfrentamientos->mercadofichajes();
	$logueado=$this->session->userdata("sesionid");
	      	if(!isset($logueado)){
	      		header("location:".site_url('Usuariosl/login')."");
	      	}  $sin_asignar=$this->session->userdata("equipo_asig");
	     if($sin_asignar==false){
	     		header("location:".site_url('Usuariosl/elegir_equipo/'.$logueado)."");
	     	}
	     
	////recogemos los valores de lo equipos
	$this->load->model("Valor_equipos");
	// valor milan
	$Milan=$this->Valor_equipos->valor_Milan();
	$mil=array_rand($Milan[0]);
	$Milan=$Milan[0][$mil];

	///valor valencia
	$Valencia=$this->Valor_equipos->valor_Valencia();
	$val=array_rand($Valencia[0]);
	$Valencia=$Valencia[0][$val];

	//valor PSG
	$PSG=$this->Valor_equipos->valor_PSG();
	$p=array_rand($PSG[0]);
	$PSG=$PSG[0][$p];

	//valor bayer_munich
	$Bayer_Munich=$this->Valor_equipos->valor_Bayer_Munich();
	$bayer=array_rand($Bayer_Munich[0]);
	$Bayer_Munich=$Bayer_Munich[0][$bayer];

	// valor Barcelona
	$Barcelona=$this->Valor_equipos->valor_Barcelona();
	$Bar=array_rand($Barcelona[0]);
	$Barcelona=$Barcelona[0][$Bar];

	//valor Ajax
	$Ajax=$this->Valor_equipos->valor_Ajax();
	$A=array_rand($Ajax[0]);
	$Ajax=$Ajax[0][$A];

	//valor Borusia dormunt
	$B_Dormunt=$this->Valor_equipos->valor_B_Dormunt();
	$B=array_rand($B_Dormunt[0]);
	$B_Dormunt=$B_Dormunt[0][$B];

	//valor M_united
	$M_United=$this->Valor_equipos->valor_M_United();
	$M=array_rand($M_United[0]);
	$M_United=$M_United[0][$M];

	//valor M_City
	$M_City=$this->Valor_equipos->valor_M_City();
	$M_C=array_rand($M_City[0]);
	$M_City=$M_City[0][$M_C];

	//valor Arsenal
	$Arsenal=$this->Valor_equipos->valor_Arsenal();
	$Ar=array_rand($Arsenal[0]);
	$Arsenal=$Arsenal[0][$Ar];

	//valor Oporto
	$Oporto=$this->Valor_equipos->valor_Oporto();
	$Op=array_rand($Oporto[0]);
	$Oporto=$Oporto[0][$Op];

	//valor Atletico de Madrid
	$At_Madrid=$this->Valor_equipos->valor_At_Madrid();
	$AT=array_rand($At_Madrid[0]);
	$At_Madrid=$At_Madrid[0][$AT];

	//valor I_Milan
	$I_Milan=$this->Valor_equipos->valor_I_Milan();
	$I=array_rand($I_Milan[0]);
	$I_Milan=$I_Milan[0][$I];

	//valor Tottenham
	$Tottenham=$this->Valor_equipos->valor_Tottenham();
	$T=array_rand($Tottenham[0]);
	$Tottenham=$Tottenham[0][$T];

	//valor Livepool
	$Liverpool=$this->Valor_equipos->valor_Liverpool();
	$Li=array_rand($Liverpool[0]);
	$Liverpool=$Liverpool[0][$Li];

	//valor Juventus
	$Juventus=$this->Valor_equipos->valor_Juventus();
	$Ju=array_rand($Juventus[0]);
	$Juventus=$Juventus[0][$Ju];

	//valor Sevilla
	$Sevilla=$this->Valor_equipos->valor_Sevilla();
	$se=array_rand($Sevilla[0]);
	$Sevilla=$Sevilla[0][$se];

	//valor R_Madrid
	$R_Madrid=$this->Valor_equipos->valor_R_Madrid();
	$R=array_rand($R_Madrid[0]);
	$R_Madrid=$R_Madrid[0][$R];

	//valor Chelsea
	$Chelsea=$this->Valor_equipos->valor_Chelsea();
	$che=array_rand($Chelsea[0]);
	$Chelsea=$Chelsea[0][$che];

	//valor O_Lyon
	$O_Lyon=$this->Valor_equipos->valor_O_Lyon();
	$OL=array_rand($O_Lyon[0]);
	$O_Lyon=$O_Lyon[0][$OL];

	///recogemos el estado de jornada si es true o falso la pasamos a la vista para generar los resultados en caso de que la jornada este en falso,una vez se genere el resultado pasa a estado true ya que es jornada se ha jugado

	$this->load->model("Jornadas_m");
	$jornada=$this->Jornadas_m->select_jornadas();

	///cogemos los valores de la jornada para mostrarlos siempre y cuando este en true
	$this->load->model("Puntos_Goles");
	$resultados=$this->Puntos_Goles->mostrar_resultados("jornada8");

	///seleccionamos el estado de los cobros

	$estado_cobros=$this->Puntos_Goles->estado_cobro();

	////seleccionar el estado del equipo si lo ha escogido alguien o no para que no introduzca los goles automaticamente
	$this->load->model("E_usuarios");
	$escogido=$this->E_usuarios->Equipo_estadotrue();

    
	$this->load->model("Enfrentamientos");
	$estado=$this->Enfrentamientos->estado_liga();
		if($estado["estado"]==false){
			header("location:".site_url('Inicio_de_liga/Inicio_liga')."");
		}
	$enfrentamientos=$this->Enfrentamientos->equiposenfrentamientos();
	$html=$this->load->view("theme/jornada8.php",compact("enfrentamientos","Milan","Valencia","PSG","Bayer_Munich","Barcelona","Ajax","B_Dormunt","M_United","M_City","Arsenal","Oporto","At_Madrid","I_Milan","Tottenham","Liverpool","Juventus","Sevilla","R_Madrid","Chelsea","O_Lyon","jornada","resultados","escogido","estado_cobros","logueado","mercado"),true);
	$conte["contenido"]=$html;
	$this->load->view("panel.php",$conte);
}
function jornada9(){
	 $this->load->model("Enfrentamientos");
     $mercado=$this->Enfrentamientos->mercadofichajes();
	$logueado=$this->session->userdata("sesionid");
	      	if(!isset($logueado)){
	      		header("location:".site_url('Usuariosl/login')."");
	      	}  $sin_asignar=$this->session->userdata("equipo_asig");
	     if($sin_asignar==false){
	     		header("location:".site_url('Usuariosl/elegir_equipo/'.$logueado)."");
	     	}
	     
	////recogemos los valores de lo equipos
	$this->load->model("Valor_equipos");
	// valor milan
	$Milan=$this->Valor_equipos->valor_Milan();
	$mil=array_rand($Milan[0]);
	$Milan=$Milan[0][$mil];

	///valor valencia
	$Valencia=$this->Valor_equipos->valor_Valencia();
	$val=array_rand($Valencia[0]);
	$Valencia=$Valencia[0][$val];

	//valor PSG
	$PSG=$this->Valor_equipos->valor_PSG();
	$p=array_rand($PSG[0]);
	$PSG=$PSG[0][$p];

	//valor bayer_munich
	$Bayer_Munich=$this->Valor_equipos->valor_Bayer_Munich();
	$bayer=array_rand($Bayer_Munich[0]);
	$Bayer_Munich=$Bayer_Munich[0][$bayer];

	// valor Barcelona
	$Barcelona=$this->Valor_equipos->valor_Barcelona();
	$Bar=array_rand($Barcelona[0]);
	$Barcelona=$Barcelona[0][$Bar];

	//valor Ajax
	$Ajax=$this->Valor_equipos->valor_Ajax();
	$A=array_rand($Ajax[0]);
	$Ajax=$Ajax[0][$A];

	//valor Borusia dormunt
	$B_Dormunt=$this->Valor_equipos->valor_B_Dormunt();
	$B=array_rand($B_Dormunt[0]);
	$B_Dormunt=$B_Dormunt[0][$B];

	//valor M_united
	$M_United=$this->Valor_equipos->valor_M_United();
	$M=array_rand($M_United[0]);
	$M_United=$M_United[0][$M];

	//valor M_City
	$M_City=$this->Valor_equipos->valor_M_City();
	$M_C=array_rand($M_City[0]);
	$M_City=$M_City[0][$M_C];

	//valor Arsenal
	$Arsenal=$this->Valor_equipos->valor_Arsenal();
	$Ar=array_rand($Arsenal[0]);
	$Arsenal=$Arsenal[0][$Ar];

	//valor Oporto
	$Oporto=$this->Valor_equipos->valor_Oporto();
	$Op=array_rand($Oporto[0]);
	$Oporto=$Oporto[0][$Op];

	//valor Atletico de Madrid
	$At_Madrid=$this->Valor_equipos->valor_At_Madrid();
	$AT=array_rand($At_Madrid[0]);
	$At_Madrid=$At_Madrid[0][$AT];

	//valor I_Milan
	$I_Milan=$this->Valor_equipos->valor_I_Milan();
	$I=array_rand($I_Milan[0]);
	$I_Milan=$I_Milan[0][$I];

	//valor Tottenham
	$Tottenham=$this->Valor_equipos->valor_Tottenham();
	$T=array_rand($Tottenham[0]);
	$Tottenham=$Tottenham[0][$T];

	//valor Livepool
	$Liverpool=$this->Valor_equipos->valor_Liverpool();
	$Li=array_rand($Liverpool[0]);
	$Liverpool=$Liverpool[0][$Li];

	//valor Juventus
	$Juventus=$this->Valor_equipos->valor_Juventus();
	$Ju=array_rand($Juventus[0]);
	$Juventus=$Juventus[0][$Ju];

	//valor Sevilla
	$Sevilla=$this->Valor_equipos->valor_Sevilla();
	$se=array_rand($Sevilla[0]);
	$Sevilla=$Sevilla[0][$se];

	//valor R_Madrid
	$R_Madrid=$this->Valor_equipos->valor_R_Madrid();
	$R=array_rand($R_Madrid[0]);
	$R_Madrid=$R_Madrid[0][$R];

	//valor Chelsea
	$Chelsea=$this->Valor_equipos->valor_Chelsea();
	$che=array_rand($Chelsea[0]);
	$Chelsea=$Chelsea[0][$che];

	//valor O_Lyon
	$O_Lyon=$this->Valor_equipos->valor_O_Lyon();
	$OL=array_rand($O_Lyon[0]);
	$O_Lyon=$O_Lyon[0][$OL];

	///recogemos el estado de jornada si es true o falso la pasamos a la vista para generar los resultados en caso de que la jornada este en falso,una vez se genere el resultado pasa a estado true ya que es jornada se ha jugado

	$this->load->model("Jornadas_m");
	$jornada=$this->Jornadas_m->select_jornadas();

	///cogemos los valores de la jornada para mostrarlos siempre y cuando este en true
	$this->load->model("Puntos_Goles");
	$resultados=$this->Puntos_Goles->mostrar_resultados("jornada9");

	////seleccionar el estado del equipo si lo ha escogido alguien o no para que no introduzca los goles automaticamente
	$this->load->model("E_usuarios");
	$escogido=$this->E_usuarios->Equipo_estadotrue();

    
	$this->load->model("Enfrentamientos");
	$estado=$this->Enfrentamientos->estado_liga();
		if($estado["estado"]==false){
			header("location:".site_url('Inicio_de_liga/Inicio_liga')."");
		}
	$enfrentamientos=$this->Enfrentamientos->equiposenfrentamientos();
	$html=$this->load->view("theme/jornada9.php",compact("enfrentamientos","Milan","Valencia","PSG","Bayer_Munich","Barcelona","Ajax","B_Dormunt","M_United","M_City","Arsenal","Oporto","At_Madrid","I_Milan","Tottenham","Liverpool","Juventus","Sevilla","R_Madrid","Chelsea","O_Lyon","jornada","resultados","escogido","logueado","mercado"),true);
	$conte["contenido"]=$html;
	$this->load->view("panel.php",$conte);
}
function jornada10(){
	 $this->load->model("Enfrentamientos");
     $mercado=$this->Enfrentamientos->mercadofichajes();
	$logueado=$this->session->userdata("sesionid");
	      	if(!isset($logueado)){
	      		header("location:".site_url('Usuariosl/login')."");
	      	}  $sin_asignar=$this->session->userdata("equipo_asig");
	     if($sin_asignar==false){
	     		header("location:".site_url('Usuariosl/elegir_equipo/'.$logueado)."");
	     	}
	     
	////recogemos los valores de lo equipos
	$this->load->model("Valor_equipos");
	// valor milan
	$Milan=$this->Valor_equipos->valor_Milan();
	$mil=array_rand($Milan[0]);
	$Milan=$Milan[0][$mil];

	///valor valencia
	$Valencia=$this->Valor_equipos->valor_Valencia();
	$val=array_rand($Valencia[0]);
	$Valencia=$Valencia[0][$val];

	//valor PSG
	$PSG=$this->Valor_equipos->valor_PSG();
	$p=array_rand($PSG[0]);
	$PSG=$PSG[0][$p];

	//valor bayer_munich
	$Bayer_Munich=$this->Valor_equipos->valor_Bayer_Munich();
	$bayer=array_rand($Bayer_Munich[0]);
	$Bayer_Munich=$Bayer_Munich[0][$bayer];

	// valor Barcelona
	$Barcelona=$this->Valor_equipos->valor_Barcelona();
	$Bar=array_rand($Barcelona[0]);
	$Barcelona=$Barcelona[0][$Bar];

	//valor Ajax
	$Ajax=$this->Valor_equipos->valor_Ajax();
	$A=array_rand($Ajax[0]);
	$Ajax=$Ajax[0][$A];

	//valor Borusia dormunt
	$B_Dormunt=$this->Valor_equipos->valor_B_Dormunt();
	$B=array_rand($B_Dormunt[0]);
	$B_Dormunt=$B_Dormunt[0][$B];

	//valor M_united
	$M_United=$this->Valor_equipos->valor_M_United();
	$M=array_rand($M_United[0]);
	$M_United=$M_United[0][$M];

	//valor M_City
	$M_City=$this->Valor_equipos->valor_M_City();
	$M_C=array_rand($M_City[0]);
	$M_City=$M_City[0][$M_C];

	//valor Arsenal
	$Arsenal=$this->Valor_equipos->valor_Arsenal();
	$Ar=array_rand($Arsenal[0]);
	$Arsenal=$Arsenal[0][$Ar];

	//valor Oporto
	$Oporto=$this->Valor_equipos->valor_Oporto();
	$Op=array_rand($Oporto[0]);
	$Oporto=$Oporto[0][$Op];

	//valor Atletico de Madrid
	$At_Madrid=$this->Valor_equipos->valor_At_Madrid();
	$AT=array_rand($At_Madrid[0]);
	$At_Madrid=$At_Madrid[0][$AT];

	//valor I_Milan
	$I_Milan=$this->Valor_equipos->valor_I_Milan();
	$I=array_rand($I_Milan[0]);
	$I_Milan=$I_Milan[0][$I];

	//valor Tottenham
	$Tottenham=$this->Valor_equipos->valor_Tottenham();
	$T=array_rand($Tottenham[0]);
	$Tottenham=$Tottenham[0][$T];

	//valor Livepool
	$Liverpool=$this->Valor_equipos->valor_Liverpool();
	$Li=array_rand($Liverpool[0]);
	$Liverpool=$Liverpool[0][$Li];

	//valor Juventus
	$Juventus=$this->Valor_equipos->valor_Juventus();
	$Ju=array_rand($Juventus[0]);
	$Juventus=$Juventus[0][$Ju];

	//valor Sevilla
	$Sevilla=$this->Valor_equipos->valor_Sevilla();
	$se=array_rand($Sevilla[0]);
	$Sevilla=$Sevilla[0][$se];

	//valor R_Madrid
	$R_Madrid=$this->Valor_equipos->valor_R_Madrid();
	$R=array_rand($R_Madrid[0]);
	$R_Madrid=$R_Madrid[0][$R];

	//valor Chelsea
	$Chelsea=$this->Valor_equipos->valor_Chelsea();
	$che=array_rand($Chelsea[0]);
	$Chelsea=$Chelsea[0][$che];

	//valor O_Lyon
	$O_Lyon=$this->Valor_equipos->valor_O_Lyon();
	$OL=array_rand($O_Lyon[0]);
	$O_Lyon=$O_Lyon[0][$OL];

	///recogemos el estado de jornada si es true o falso la pasamos a la vista para generar los resultados en caso de que la jornada este en falso,una vez se genere el resultado pasa a estado true ya que es jornada se ha jugado

	$this->load->model("Jornadas_m");
	$jornada=$this->Jornadas_m->select_jornadas();

	///cogemos los valores de la jornada para mostrarlos siempre y cuando este en true
	$this->load->model("Puntos_Goles");
	$resultados=$this->Puntos_Goles->mostrar_resultados("jornada10");

	////seleccionar el estado del equipo si lo ha escogido alguien o no para que no introduzca los goles automaticamente
	$this->load->model("E_usuarios");
	$escogido=$this->E_usuarios->Equipo_estadotrue();

    
	$this->load->model("Enfrentamientos");
	$estado=$this->Enfrentamientos->estado_liga();
		if($estado["estado"]==false){
			header("location:".site_url('Inicio_de_liga/Inicio_liga')."");
		}
	$enfrentamientos=$this->Enfrentamientos->equiposenfrentamientos();
	$html=$this->load->view("theme/jornada10.php",compact("enfrentamientos","Milan","Valencia","PSG","Bayer_Munich","Barcelona","Ajax","B_Dormunt","M_United","M_City","Arsenal","Oporto","At_Madrid","I_Milan","Tottenham","Liverpool","Juventus","Sevilla","R_Madrid","Chelsea","O_Lyon","jornada","resultados","escogido","logueado","mercado"),true);
	$conte["contenido"]=$html;
	$this->load->view("panel.php",$conte);
}
function jornada11(){
	 $this->load->model("Enfrentamientos");
     $mercado=$this->Enfrentamientos->mercadofichajes();
	$logueado=$this->session->userdata("sesionid");
	      	if(!isset($logueado)){
	      		header("location:".site_url('Usuariosl/login')."");
	      	}  $sin_asignar=$this->session->userdata("equipo_asig");
	     if($sin_asignar==false){
	     		header("location:".site_url('Usuariosl/elegir_equipo/'.$logueado)."");
	     	}
	     
	////recogemos los valores de lo equipos
	$this->load->model("Valor_equipos");
	// valor milan
	$Milan=$this->Valor_equipos->valor_Milan();
	$mil=array_rand($Milan[0]);
	$Milan=$Milan[0][$mil];

	///valor valencia
	$Valencia=$this->Valor_equipos->valor_Valencia();
	$val=array_rand($Valencia[0]);
	$Valencia=$Valencia[0][$val];

	//valor PSG
	$PSG=$this->Valor_equipos->valor_PSG();
	$p=array_rand($PSG[0]);
	$PSG=$PSG[0][$p];

	//valor bayer_munich
	$Bayer_Munich=$this->Valor_equipos->valor_Bayer_Munich();
	$bayer=array_rand($Bayer_Munich[0]);
	$Bayer_Munich=$Bayer_Munich[0][$bayer];

	// valor Barcelona
	$Barcelona=$this->Valor_equipos->valor_Barcelona();
	$Bar=array_rand($Barcelona[0]);
	$Barcelona=$Barcelona[0][$Bar];

	//valor Ajax
	$Ajax=$this->Valor_equipos->valor_Ajax();
	$A=array_rand($Ajax[0]);
	$Ajax=$Ajax[0][$A];

	//valor Borusia dormunt
	$B_Dormunt=$this->Valor_equipos->valor_B_Dormunt();
	$B=array_rand($B_Dormunt[0]);
	$B_Dormunt=$B_Dormunt[0][$B];

	//valor M_united
	$M_United=$this->Valor_equipos->valor_M_United();
	$M=array_rand($M_United[0]);
	$M_United=$M_United[0][$M];

	//valor M_City
	$M_City=$this->Valor_equipos->valor_M_City();
	$M_C=array_rand($M_City[0]);
	$M_City=$M_City[0][$M_C];

	//valor Arsenal
	$Arsenal=$this->Valor_equipos->valor_Arsenal();
	$Ar=array_rand($Arsenal[0]);
	$Arsenal=$Arsenal[0][$Ar];

	//valor Oporto
	$Oporto=$this->Valor_equipos->valor_Oporto();
	$Op=array_rand($Oporto[0]);
	$Oporto=$Oporto[0][$Op];

	//valor Atletico de Madrid
	$At_Madrid=$this->Valor_equipos->valor_At_Madrid();
	$AT=array_rand($At_Madrid[0]);
	$At_Madrid=$At_Madrid[0][$AT];

	//valor I_Milan
	$I_Milan=$this->Valor_equipos->valor_I_Milan();
	$I=array_rand($I_Milan[0]);
	$I_Milan=$I_Milan[0][$I];

	//valor Tottenham
	$Tottenham=$this->Valor_equipos->valor_Tottenham();
	$T=array_rand($Tottenham[0]);
	$Tottenham=$Tottenham[0][$T];

	//valor Livepool
	$Liverpool=$this->Valor_equipos->valor_Liverpool();
	$Li=array_rand($Liverpool[0]);
	$Liverpool=$Liverpool[0][$Li];

	//valor Juventus
	$Juventus=$this->Valor_equipos->valor_Juventus();
	$Ju=array_rand($Juventus[0]);
	$Juventus=$Juventus[0][$Ju];

	//valor Sevilla
	$Sevilla=$this->Valor_equipos->valor_Sevilla();
	$se=array_rand($Sevilla[0]);
	$Sevilla=$Sevilla[0][$se];

	//valor R_Madrid
	$R_Madrid=$this->Valor_equipos->valor_R_Madrid();
	$R=array_rand($R_Madrid[0]);
	$R_Madrid=$R_Madrid[0][$R];

	//valor Chelsea
	$Chelsea=$this->Valor_equipos->valor_Chelsea();
	$che=array_rand($Chelsea[0]);
	$Chelsea=$Chelsea[0][$che];

	//valor O_Lyon
	$O_Lyon=$this->Valor_equipos->valor_O_Lyon();
	$OL=array_rand($O_Lyon[0]);
	$O_Lyon=$O_Lyon[0][$OL];

	///recogemos el estado de jornada si es true o falso la pasamos a la vista para generar los resultados en caso de que la jornada este en falso,una vez se genere el resultado pasa a estado true ya que es jornada se ha jugado

	$this->load->model("Jornadas_m");
	$jornada=$this->Jornadas_m->select_jornadas();

	///cogemos los valores de la jornada para mostrarlos siempre y cuando este en true
	$this->load->model("Puntos_Goles");
	$resultados=$this->Puntos_Goles->mostrar_resultados("jornada11");

	////seleccionar el estado del equipo si lo ha escogido alguien o no para que no introduzca los goles automaticamente
	$this->load->model("E_usuarios");
	$escogido=$this->E_usuarios->Equipo_estadotrue();

    
	$this->load->model("Enfrentamientos");
	$estado=$this->Enfrentamientos->estado_liga();
		if($estado["estado"]==false){
			header("location:".site_url('Inicio_de_liga/Inicio_liga')."");
		}
	$enfrentamientos=$this->Enfrentamientos->equiposenfrentamientos();
	$html=$this->load->view("theme/jornada11.php",compact("enfrentamientos","Milan","Valencia","PSG","Bayer_Munich","Barcelona","Ajax","B_Dormunt","M_United","M_City","Arsenal","Oporto","At_Madrid","I_Milan","Tottenham","Liverpool","Juventus","Sevilla","R_Madrid","Chelsea","O_Lyon","jornada","resultados","escogido","logueado","mercado"),true);
	$conte["contenido"]=$html;
	$this->load->view("panel.php",$conte);
}
function jornada12(){
	 $this->load->model("Enfrentamientos");
     $mercado=$this->Enfrentamientos->mercadofichajes();
	$logueado=$this->session->userdata("sesionid");
	      	if(!isset($logueado)){
	      		header("location:".site_url('Usuariosl/login')."");
	      	}  $sin_asignar=$this->session->userdata("equipo_asig");
	     if($sin_asignar==false){
	     		header("location:".site_url('Usuariosl/elegir_equipo/'.$logueado)."");
	     	}
	     
	////recogemos los valores de lo equipos
	$this->load->model("Valor_equipos");
	// valor milan
	$Milan=$this->Valor_equipos->valor_Milan();
	$mil=array_rand($Milan[0]);
	$Milan=$Milan[0][$mil];

	///valor valencia
	$Valencia=$this->Valor_equipos->valor_Valencia();
	$val=array_rand($Valencia[0]);
	$Valencia=$Valencia[0][$val];

	//valor PSG
	$PSG=$this->Valor_equipos->valor_PSG();
	$p=array_rand($PSG[0]);
	$PSG=$PSG[0][$p];

	//valor bayer_munich
	$Bayer_Munich=$this->Valor_equipos->valor_Bayer_Munich();
	$bayer=array_rand($Bayer_Munich[0]);
	$Bayer_Munich=$Bayer_Munich[0][$bayer];

	// valor Barcelona
	$Barcelona=$this->Valor_equipos->valor_Barcelona();
	$Bar=array_rand($Barcelona[0]);
	$Barcelona=$Barcelona[0][$Bar];

	//valor Ajax
	$Ajax=$this->Valor_equipos->valor_Ajax();
	$A=array_rand($Ajax[0]);
	$Ajax=$Ajax[0][$A];

	//valor Borusia dormunt
	$B_Dormunt=$this->Valor_equipos->valor_B_Dormunt();
	$B=array_rand($B_Dormunt[0]);
	$B_Dormunt=$B_Dormunt[0][$B];

	//valor M_united
	$M_United=$this->Valor_equipos->valor_M_United();
	$M=array_rand($M_United[0]);
	$M_United=$M_United[0][$M];

	//valor M_City
	$M_City=$this->Valor_equipos->valor_M_City();
	$M_C=array_rand($M_City[0]);
	$M_City=$M_City[0][$M_C];

	//valor Arsenal
	$Arsenal=$this->Valor_equipos->valor_Arsenal();
	$Ar=array_rand($Arsenal[0]);
	$Arsenal=$Arsenal[0][$Ar];

	//valor Oporto
	$Oporto=$this->Valor_equipos->valor_Oporto();
	$Op=array_rand($Oporto[0]);
	$Oporto=$Oporto[0][$Op];

	//valor Atletico de Madrid
	$At_Madrid=$this->Valor_equipos->valor_At_Madrid();
	$AT=array_rand($At_Madrid[0]);
	$At_Madrid=$At_Madrid[0][$AT];

	//valor I_Milan
	$I_Milan=$this->Valor_equipos->valor_I_Milan();
	$I=array_rand($I_Milan[0]);
	$I_Milan=$I_Milan[0][$I];

	//valor Tottenham
	$Tottenham=$this->Valor_equipos->valor_Tottenham();
	$T=array_rand($Tottenham[0]);
	$Tottenham=$Tottenham[0][$T];

	//valor Livepool
	$Liverpool=$this->Valor_equipos->valor_Liverpool();
	$Li=array_rand($Liverpool[0]);
	$Liverpool=$Liverpool[0][$Li];

	//valor Juventus
	$Juventus=$this->Valor_equipos->valor_Juventus();
	$Ju=array_rand($Juventus[0]);
	$Juventus=$Juventus[0][$Ju];

	//valor Sevilla
	$Sevilla=$this->Valor_equipos->valor_Sevilla();
	$se=array_rand($Sevilla[0]);
	$Sevilla=$Sevilla[0][$se];

	//valor R_Madrid
	$R_Madrid=$this->Valor_equipos->valor_R_Madrid();
	$R=array_rand($R_Madrid[0]);
	$R_Madrid=$R_Madrid[0][$R];

	//valor Chelsea
	$Chelsea=$this->Valor_equipos->valor_Chelsea();
	$che=array_rand($Chelsea[0]);
	$Chelsea=$Chelsea[0][$che];

	//valor O_Lyon
	$O_Lyon=$this->Valor_equipos->valor_O_Lyon();
	$OL=array_rand($O_Lyon[0]);
	$O_Lyon=$O_Lyon[0][$OL];

	///recogemos el estado de jornada si es true o falso la pasamos a la vista para generar los resultados en caso de que la jornada este en falso,una vez se genere el resultado pasa a estado true ya que es jornada se ha jugado

	$this->load->model("Jornadas_m");
	$jornada=$this->Jornadas_m->select_jornadas();

	///cogemos los valores de la jornada para mostrarlos siempre y cuando este en true
	$this->load->model("Puntos_Goles");
	$resultados=$this->Puntos_Goles->mostrar_resultados("jornada12");

	///seleccionamos el estado de los cobros

	$estado_cobros=$this->Puntos_Goles->estado_cobro();

	////seleccionar el estado del equipo si lo ha escogido alguien o no para que no introduzca los goles automaticamente
	$this->load->model("E_usuarios");
	$escogido=$this->E_usuarios->Equipo_estadotrue();

    
	$this->load->model("Enfrentamientos");
	$estado=$this->Enfrentamientos->estado_liga();
		if($estado["estado"]==false){
			header("location:".site_url('Inicio_de_liga/Inicio_liga')."");
		}
	$enfrentamientos=$this->Enfrentamientos->equiposenfrentamientos();
	$html=$this->load->view("theme/jornada12.php",compact("enfrentamientos","Milan","Valencia","PSG","Bayer_Munich","Barcelona","Ajax","B_Dormunt","M_United","M_City","Arsenal","Oporto","At_Madrid","I_Milan","Tottenham","Liverpool","Juventus","Sevilla","R_Madrid","Chelsea","O_Lyon","jornada","resultados","escogido","estado_cobros","logueado","mercado"),true);
	$conte["contenido"]=$html;
	$this->load->view("panel.php",$conte);
}
function jornada13(){
	 $this->load->model("Enfrentamientos");
     $mercado=$this->Enfrentamientos->mercadofichajes();
	$logueado=$this->session->userdata("sesionid");
	      	if(!isset($logueado)){
	      		header("location:".site_url('Usuariosl/login')."");
	      	}  $sin_asignar=$this->session->userdata("equipo_asig");
	     if($sin_asignar==false){
	     		header("location:".site_url('Usuariosl/elegir_equipo/'.$logueado)."");
	     	}
	     
	////recogemos los valores de lo equipos
	$this->load->model("Valor_equipos");
	// valor milan
	$Milan=$this->Valor_equipos->valor_Milan();
	$mil=array_rand($Milan[0]);
	$Milan=$Milan[0][$mil];

	///valor valencia
	$Valencia=$this->Valor_equipos->valor_Valencia();
	$val=array_rand($Valencia[0]);
	$Valencia=$Valencia[0][$val];

	//valor PSG
	$PSG=$this->Valor_equipos->valor_PSG();
	$p=array_rand($PSG[0]);
	$PSG=$PSG[0][$p];

	//valor bayer_munich
	$Bayer_Munich=$this->Valor_equipos->valor_Bayer_Munich();
	$bayer=array_rand($Bayer_Munich[0]);
	$Bayer_Munich=$Bayer_Munich[0][$bayer];

	// valor Barcelona
	$Barcelona=$this->Valor_equipos->valor_Barcelona();
	$Bar=array_rand($Barcelona[0]);
	$Barcelona=$Barcelona[0][$Bar];

	//valor Ajax
	$Ajax=$this->Valor_equipos->valor_Ajax();
	$A=array_rand($Ajax[0]);
	$Ajax=$Ajax[0][$A];

	//valor Borusia dormunt
	$B_Dormunt=$this->Valor_equipos->valor_B_Dormunt();
	$B=array_rand($B_Dormunt[0]);
	$B_Dormunt=$B_Dormunt[0][$B];

	//valor M_united
	$M_United=$this->Valor_equipos->valor_M_United();
	$M=array_rand($M_United[0]);
	$M_United=$M_United[0][$M];

	//valor M_City
	$M_City=$this->Valor_equipos->valor_M_City();
	$M_C=array_rand($M_City[0]);
	$M_City=$M_City[0][$M_C];

	//valor Arsenal
	$Arsenal=$this->Valor_equipos->valor_Arsenal();
	$Ar=array_rand($Arsenal[0]);
	$Arsenal=$Arsenal[0][$Ar];

	//valor Oporto
	$Oporto=$this->Valor_equipos->valor_Oporto();
	$Op=array_rand($Oporto[0]);
	$Oporto=$Oporto[0][$Op];

	//valor Atletico de Madrid
	$At_Madrid=$this->Valor_equipos->valor_At_Madrid();
	$AT=array_rand($At_Madrid[0]);
	$At_Madrid=$At_Madrid[0][$AT];

	//valor I_Milan
	$I_Milan=$this->Valor_equipos->valor_I_Milan();
	$I=array_rand($I_Milan[0]);
	$I_Milan=$I_Milan[0][$I];

	//valor Tottenham
	$Tottenham=$this->Valor_equipos->valor_Tottenham();
	$T=array_rand($Tottenham[0]);
	$Tottenham=$Tottenham[0][$T];

	//valor Livepool
	$Liverpool=$this->Valor_equipos->valor_Liverpool();
	$Li=array_rand($Liverpool[0]);
	$Liverpool=$Liverpool[0][$Li];

	//valor Juventus
	$Juventus=$this->Valor_equipos->valor_Juventus();
	$Ju=array_rand($Juventus[0]);
	$Juventus=$Juventus[0][$Ju];

	//valor Sevilla
	$Sevilla=$this->Valor_equipos->valor_Sevilla();
	$se=array_rand($Sevilla[0]);
	$Sevilla=$Sevilla[0][$se];

	//valor R_Madrid
	$R_Madrid=$this->Valor_equipos->valor_R_Madrid();
	$R=array_rand($R_Madrid[0]);
	$R_Madrid=$R_Madrid[0][$R];

	//valor Chelsea
	$Chelsea=$this->Valor_equipos->valor_Chelsea();
	$che=array_rand($Chelsea[0]);
	$Chelsea=$Chelsea[0][$che];

	//valor O_Lyon
	$O_Lyon=$this->Valor_equipos->valor_O_Lyon();
	$OL=array_rand($O_Lyon[0]);
	$O_Lyon=$O_Lyon[0][$OL];

	///recogemos el estado de jornada si es true o falso la pasamos a la vista para generar los resultados en caso de que la jornada este en falso,una vez se genere el resultado pasa a estado true ya que es jornada se ha jugado

	$this->load->model("Jornadas_m");
	$jornada=$this->Jornadas_m->select_jornadas();

	///cogemos los valores de la jornada para mostrarlos siempre y cuando este en true
	$this->load->model("Puntos_Goles");
	$resultados=$this->Puntos_Goles->mostrar_resultados("jornada13");

	////seleccionar el estado del equipo si lo ha escogido alguien o no para que no introduzca los goles automaticamente
	$this->load->model("E_usuarios");
	$escogido=$this->E_usuarios->Equipo_estadotrue();

    
	$this->load->model("Enfrentamientos");
	$estado=$this->Enfrentamientos->estado_liga();
		if($estado["estado"]==false){
			header("location:".site_url('Inicio_de_liga/Inicio_liga')."");
		}
	$enfrentamientos=$this->Enfrentamientos->equiposenfrentamientos();
	$html=$this->load->view("theme/jornada13.php",compact("enfrentamientos","Milan","Valencia","PSG","Bayer_Munich","Barcelona","Ajax","B_Dormunt","M_United","M_City","Arsenal","Oporto","At_Madrid","I_Milan","Tottenham","Liverpool","Juventus","Sevilla","R_Madrid","Chelsea","O_Lyon","jornada","resultados","escogido","logueado","mercado"),true);
	$conte["contenido"]=$html;
	$this->load->view("panel.php",$conte);
}
function jornada14(){
	 $this->load->model("Enfrentamientos");
     $mercado=$this->Enfrentamientos->mercadofichajes();
	$logueado=$this->session->userdata("sesionid");
	      	if(!isset($logueado)){
	      		header("location:".site_url('Usuariosl/login')."");
	      	}  $sin_asignar=$this->session->userdata("equipo_asig");
	     if($sin_asignar==false){
	     		header("location:".site_url('Usuariosl/elegir_equipo/'.$logueado)."");
	     	}
	     
	////recogemos los valores de lo equipos
	$this->load->model("Valor_equipos");
	// valor milan
	$Milan=$this->Valor_equipos->valor_Milan();
	$mil=array_rand($Milan[0]);
	$Milan=$Milan[0][$mil];

	///valor valencia
	$Valencia=$this->Valor_equipos->valor_Valencia();
	$val=array_rand($Valencia[0]);
	$Valencia=$Valencia[0][$val];

	//valor PSG
	$PSG=$this->Valor_equipos->valor_PSG();
	$p=array_rand($PSG[0]);
	$PSG=$PSG[0][$p];

	//valor bayer_munich
	$Bayer_Munich=$this->Valor_equipos->valor_Bayer_Munich();
	$bayer=array_rand($Bayer_Munich[0]);
	$Bayer_Munich=$Bayer_Munich[0][$bayer];

	// valor Barcelona
	$Barcelona=$this->Valor_equipos->valor_Barcelona();
	$Bar=array_rand($Barcelona[0]);
	$Barcelona=$Barcelona[0][$Bar];

	//valor Ajax
	$Ajax=$this->Valor_equipos->valor_Ajax();
	$A=array_rand($Ajax[0]);
	$Ajax=$Ajax[0][$A];

	//valor Borusia dormunt
	$B_Dormunt=$this->Valor_equipos->valor_B_Dormunt();
	$B=array_rand($B_Dormunt[0]);
	$B_Dormunt=$B_Dormunt[0][$B];

	//valor M_united
	$M_United=$this->Valor_equipos->valor_M_United();
	$M=array_rand($M_United[0]);
	$M_United=$M_United[0][$M];

	//valor M_City
	$M_City=$this->Valor_equipos->valor_M_City();
	$M_C=array_rand($M_City[0]);
	$M_City=$M_City[0][$M_C];

	//valor Arsenal
	$Arsenal=$this->Valor_equipos->valor_Arsenal();
	$Ar=array_rand($Arsenal[0]);
	$Arsenal=$Arsenal[0][$Ar];

	//valor Oporto
	$Oporto=$this->Valor_equipos->valor_Oporto();
	$Op=array_rand($Oporto[0]);
	$Oporto=$Oporto[0][$Op];

	//valor Atletico de Madrid
	$At_Madrid=$this->Valor_equipos->valor_At_Madrid();
	$AT=array_rand($At_Madrid[0]);
	$At_Madrid=$At_Madrid[0][$AT];

	//valor I_Milan
	$I_Milan=$this->Valor_equipos->valor_I_Milan();
	$I=array_rand($I_Milan[0]);
	$I_Milan=$I_Milan[0][$I];

	//valor Tottenham
	$Tottenham=$this->Valor_equipos->valor_Tottenham();
	$T=array_rand($Tottenham[0]);
	$Tottenham=$Tottenham[0][$T];

	//valor Livepool
	$Liverpool=$this->Valor_equipos->valor_Liverpool();
	$Li=array_rand($Liverpool[0]);
	$Liverpool=$Liverpool[0][$Li];

	//valor Juventus
	$Juventus=$this->Valor_equipos->valor_Juventus();
	$Ju=array_rand($Juventus[0]);
	$Juventus=$Juventus[0][$Ju];

	//valor Sevilla
	$Sevilla=$this->Valor_equipos->valor_Sevilla();
	$se=array_rand($Sevilla[0]);
	$Sevilla=$Sevilla[0][$se];

	//valor R_Madrid
	$R_Madrid=$this->Valor_equipos->valor_R_Madrid();
	$R=array_rand($R_Madrid[0]);
	$R_Madrid=$R_Madrid[0][$R];

	//valor Chelsea
	$Chelsea=$this->Valor_equipos->valor_Chelsea();
	$che=array_rand($Chelsea[0]);
	$Chelsea=$Chelsea[0][$che];

	//valor O_Lyon
	$O_Lyon=$this->Valor_equipos->valor_O_Lyon();
	$OL=array_rand($O_Lyon[0]);
	$O_Lyon=$O_Lyon[0][$OL];

	///recogemos el estado de jornada si es true o falso la pasamos a la vista para generar los resultados en caso de que la jornada este en falso,una vez se genere el resultado pasa a estado true ya que es jornada se ha jugado

	$this->load->model("Jornadas_m");
	$jornada=$this->Jornadas_m->select_jornadas();

	///cogemos los valores de la jornada para mostrarlos siempre y cuando este en true
	$this->load->model("Puntos_Goles");
	$resultados=$this->Puntos_Goles->mostrar_resultados("jornada14");

	////seleccionar el estado del equipo si lo ha escogido alguien o no para que no introduzca los goles automaticamente
	$this->load->model("E_usuarios");
	$escogido=$this->E_usuarios->Equipo_estadotrue();

    
	$this->load->model("Enfrentamientos");
	$estado=$this->Enfrentamientos->estado_liga();
		if($estado["estado"]==false){
			header("location:".site_url('Inicio_de_liga/Inicio_liga')."");
		}
	$enfrentamientos=$this->Enfrentamientos->equiposenfrentamientos();
	$html=$this->load->view("theme/jornada14.php",compact("enfrentamientos","Milan","Valencia","PSG","Bayer_Munich","Barcelona","Ajax","B_Dormunt","M_United","M_City","Arsenal","Oporto","At_Madrid","I_Milan","Tottenham","Liverpool","Juventus","Sevilla","R_Madrid","Chelsea","O_Lyon","jornada","resultados","escogido","logueado","mercado"),true);
	$conte["contenido"]=$html;
	$this->load->view("panel.php",$conte);
}
function jornada15(){
	 $this->load->model("Enfrentamientos");
     $mercado=$this->Enfrentamientos->mercadofichajes();
	$logueado=$this->session->userdata("sesionid");
	      	if(!isset($logueado)){
	      		header("location:".site_url('Usuariosl/login')."");
	      	}  $sin_asignar=$this->session->userdata("equipo_asig");
	     if($sin_asignar==false){
	     		header("location:".site_url('Usuariosl/elegir_equipo/'.$logueado)."");
	     	}
	     
	////recogemos los valores de lo equipos
	$this->load->model("Valor_equipos");
	// valor milan
	$Milan=$this->Valor_equipos->valor_Milan();
	$mil=array_rand($Milan[0]);
	$Milan=$Milan[0][$mil];

	///valor valencia
	$Valencia=$this->Valor_equipos->valor_Valencia();
	$val=array_rand($Valencia[0]);
	$Valencia=$Valencia[0][$val];

	//valor PSG
	$PSG=$this->Valor_equipos->valor_PSG();
	$p=array_rand($PSG[0]);
	$PSG=$PSG[0][$p];

	//valor bayer_munich
	$Bayer_Munich=$this->Valor_equipos->valor_Bayer_Munich();
	$bayer=array_rand($Bayer_Munich[0]);
	$Bayer_Munich=$Bayer_Munich[0][$bayer];

	// valor Barcelona
	$Barcelona=$this->Valor_equipos->valor_Barcelona();
	$Bar=array_rand($Barcelona[0]);
	$Barcelona=$Barcelona[0][$Bar];

	//valor Ajax
	$Ajax=$this->Valor_equipos->valor_Ajax();
	$A=array_rand($Ajax[0]);
	$Ajax=$Ajax[0][$A];

	//valor Borusia dormunt
	$B_Dormunt=$this->Valor_equipos->valor_B_Dormunt();
	$B=array_rand($B_Dormunt[0]);
	$B_Dormunt=$B_Dormunt[0][$B];

	//valor M_united
	$M_United=$this->Valor_equipos->valor_M_United();
	$M=array_rand($M_United[0]);
	$M_United=$M_United[0][$M];

	//valor M_City
	$M_City=$this->Valor_equipos->valor_M_City();
	$M_C=array_rand($M_City[0]);
	$M_City=$M_City[0][$M_C];

	//valor Arsenal
	$Arsenal=$this->Valor_equipos->valor_Arsenal();
	$Ar=array_rand($Arsenal[0]);
	$Arsenal=$Arsenal[0][$Ar];

	//valor Oporto
	$Oporto=$this->Valor_equipos->valor_Oporto();
	$Op=array_rand($Oporto[0]);
	$Oporto=$Oporto[0][$Op];

	//valor Atletico de Madrid
	$At_Madrid=$this->Valor_equipos->valor_At_Madrid();
	$AT=array_rand($At_Madrid[0]);
	$At_Madrid=$At_Madrid[0][$AT];

	//valor I_Milan
	$I_Milan=$this->Valor_equipos->valor_I_Milan();
	$I=array_rand($I_Milan[0]);
	$I_Milan=$I_Milan[0][$I];

	//valor Tottenham
	$Tottenham=$this->Valor_equipos->valor_Tottenham();
	$T=array_rand($Tottenham[0]);
	$Tottenham=$Tottenham[0][$T];

	//valor Livepool
	$Liverpool=$this->Valor_equipos->valor_Liverpool();
	$Li=array_rand($Liverpool[0]);
	$Liverpool=$Liverpool[0][$Li];

	//valor Juventus
	$Juventus=$this->Valor_equipos->valor_Juventus();
	$Ju=array_rand($Juventus[0]);
	$Juventus=$Juventus[0][$Ju];

	//valor Sevilla
	$Sevilla=$this->Valor_equipos->valor_Sevilla();
	$se=array_rand($Sevilla[0]);
	$Sevilla=$Sevilla[0][$se];

	//valor R_Madrid
	$R_Madrid=$this->Valor_equipos->valor_R_Madrid();
	$R=array_rand($R_Madrid[0]);
	$R_Madrid=$R_Madrid[0][$R];

	//valor Chelsea
	$Chelsea=$this->Valor_equipos->valor_Chelsea();
	$che=array_rand($Chelsea[0]);
	$Chelsea=$Chelsea[0][$che];

	//valor O_Lyon
	$O_Lyon=$this->Valor_equipos->valor_O_Lyon();
	$OL=array_rand($O_Lyon[0]);
	$O_Lyon=$O_Lyon[0][$OL];

	///recogemos el estado de jornada si es true o falso la pasamos a la vista para generar los resultados en caso de que la jornada este en falso,una vez se genere el resultado pasa a estado true ya que es jornada se ha jugado

	$this->load->model("Jornadas_m");
	$jornada=$this->Jornadas_m->select_jornadas();

	///cogemos los valores de la jornada para mostrarlos siempre y cuando este en true
	$this->load->model("Puntos_Goles");
	$resultados=$this->Puntos_Goles->mostrar_resultados("jornada15");

	////seleccionar el estado del equipo si lo ha escogido alguien o no para que no introduzca los goles automaticamente
	$this->load->model("E_usuarios");
	$escogido=$this->E_usuarios->Equipo_estadotrue();

    
	$this->load->model("Enfrentamientos");
	$estado=$this->Enfrentamientos->estado_liga();
		if($estado["estado"]==false){
			header("location:".site_url('Inicio_de_liga/Inicio_liga')."");
		}
	$enfrentamientos=$this->Enfrentamientos->equiposenfrentamientos();
	$html=$this->load->view("theme/jornada15.php",compact("enfrentamientos","Milan","Valencia","PSG","Bayer_Munich","Barcelona","Ajax","B_Dormunt","M_United","M_City","Arsenal","Oporto","At_Madrid","I_Milan","Tottenham","Liverpool","Juventus","Sevilla","R_Madrid","Chelsea","O_Lyon","jornada","resultados","escogido","logueado","mercado"),true);
	$conte["contenido"]=$html;
	$this->load->view("panel.php",$conte);
}
function jornada16(){
	 $this->load->model("Enfrentamientos");
     $mercado=$this->Enfrentamientos->mercadofichajes();
	$logueado=$this->session->userdata("sesionid");
	      	if(!isset($logueado)){
	      		header("location:".site_url('Usuariosl/login')."");
	      	}  $sin_asignar=$this->session->userdata("equipo_asig");
	     if($sin_asignar==false){
	     		header("location:".site_url('Usuariosl/elegir_equipo/'.$logueado)."");
	     	}
	     
	////recogemos los valores de lo equipos
	$this->load->model("Valor_equipos");
	// valor milan
	$Milan=$this->Valor_equipos->valor_Milan();
	$mil=array_rand($Milan[0]);
	$Milan=$Milan[0][$mil];

	///valor valencia
	$Valencia=$this->Valor_equipos->valor_Valencia();
	$val=array_rand($Valencia[0]);
	$Valencia=$Valencia[0][$val];

	//valor PSG
	$PSG=$this->Valor_equipos->valor_PSG();
	$p=array_rand($PSG[0]);
	$PSG=$PSG[0][$p];

	//valor bayer_munich
	$Bayer_Munich=$this->Valor_equipos->valor_Bayer_Munich();
	$bayer=array_rand($Bayer_Munich[0]);
	$Bayer_Munich=$Bayer_Munich[0][$bayer];

	// valor Barcelona
	$Barcelona=$this->Valor_equipos->valor_Barcelona();
	$Bar=array_rand($Barcelona[0]);
	$Barcelona=$Barcelona[0][$Bar];

	//valor Ajax
	$Ajax=$this->Valor_equipos->valor_Ajax();
	$A=array_rand($Ajax[0]);
	$Ajax=$Ajax[0][$A];

	//valor Borusia dormunt
	$B_Dormunt=$this->Valor_equipos->valor_B_Dormunt();
	$B=array_rand($B_Dormunt[0]);
	$B_Dormunt=$B_Dormunt[0][$B];

	//valor M_united
	$M_United=$this->Valor_equipos->valor_M_United();
	$M=array_rand($M_United[0]);
	$M_United=$M_United[0][$M];

	//valor M_City
	$M_City=$this->Valor_equipos->valor_M_City();
	$M_C=array_rand($M_City[0]);
	$M_City=$M_City[0][$M_C];

	//valor Arsenal
	$Arsenal=$this->Valor_equipos->valor_Arsenal();
	$Ar=array_rand($Arsenal[0]);
	$Arsenal=$Arsenal[0][$Ar];

	//valor Oporto
	$Oporto=$this->Valor_equipos->valor_Oporto();
	$Op=array_rand($Oporto[0]);
	$Oporto=$Oporto[0][$Op];

	//valor Atletico de Madrid
	$At_Madrid=$this->Valor_equipos->valor_At_Madrid();
	$AT=array_rand($At_Madrid[0]);
	$At_Madrid=$At_Madrid[0][$AT];

	//valor I_Milan
	$I_Milan=$this->Valor_equipos->valor_I_Milan();
	$I=array_rand($I_Milan[0]);
	$I_Milan=$I_Milan[0][$I];

	//valor Tottenham
	$Tottenham=$this->Valor_equipos->valor_Tottenham();
	$T=array_rand($Tottenham[0]);
	$Tottenham=$Tottenham[0][$T];

	//valor Livepool
	$Liverpool=$this->Valor_equipos->valor_Liverpool();
	$Li=array_rand($Liverpool[0]);
	$Liverpool=$Liverpool[0][$Li];

	//valor Juventus
	$Juventus=$this->Valor_equipos->valor_Juventus();
	$Ju=array_rand($Juventus[0]);
	$Juventus=$Juventus[0][$Ju];

	//valor Sevilla
	$Sevilla=$this->Valor_equipos->valor_Sevilla();
	$se=array_rand($Sevilla[0]);
	$Sevilla=$Sevilla[0][$se];

	//valor R_Madrid
	$R_Madrid=$this->Valor_equipos->valor_R_Madrid();
	$R=array_rand($R_Madrid[0]);
	$R_Madrid=$R_Madrid[0][$R];

	//valor Chelsea
	$Chelsea=$this->Valor_equipos->valor_Chelsea();
	$che=array_rand($Chelsea[0]);
	$Chelsea=$Chelsea[0][$che];

	//valor O_Lyon
	$O_Lyon=$this->Valor_equipos->valor_O_Lyon();
	$OL=array_rand($O_Lyon[0]);
	$O_Lyon=$O_Lyon[0][$OL];

	///recogemos el estado de jornada si es true o falso la pasamos a la vista para generar los resultados en caso de que la jornada este en falso,una vez se genere el resultado pasa a estado true ya que es jornada se ha jugado

	$this->load->model("Jornadas_m");
	$jornada=$this->Jornadas_m->select_jornadas();

	///cogemos los valores de la jornada para mostrarlos siempre y cuando este en true
	$this->load->model("Puntos_Goles");
	$resultados=$this->Puntos_Goles->mostrar_resultados("jornada16");

	///seleccionamos el estado de los cobros

	$estado_cobros=$this->Puntos_Goles->estado_cobro();

	////seleccionar el estado del equipo si lo ha escogido alguien o no para que no introduzca los goles automaticamente
	$this->load->model("E_usuarios");
	$escogido=$this->E_usuarios->Equipo_estadotrue();

    
	$this->load->model("Enfrentamientos");
	$estado=$this->Enfrentamientos->estado_liga();
		if($estado["estado"]==false){
			header("location:".site_url('Inicio_de_liga/Inicio_liga')."");
		}
	$enfrentamientos=$this->Enfrentamientos->equiposenfrentamientos();
	$html=$this->load->view("theme/jornada16.php",compact("enfrentamientos","Milan","Valencia","PSG","Bayer_Munich","Barcelona","Ajax","B_Dormunt","M_United","M_City","Arsenal","Oporto","At_Madrid","I_Milan","Tottenham","Liverpool","Juventus","Sevilla","R_Madrid","Chelsea","O_Lyon","jornada","resultados","escogido","estado_cobros","logueado","mercado"),true);
	$conte["contenido"]=$html;
	$this->load->view("panel.php",$conte);
}
function jornada17(){
	 $this->load->model("Enfrentamientos");
     $mercado=$this->Enfrentamientos->mercadofichajes();
	$logueado=$this->session->userdata("sesionid");
	      	if(!isset($logueado)){
	      		header("location:".site_url('Usuariosl/login')."");
	      	}  $sin_asignar=$this->session->userdata("equipo_asig");
	     if($sin_asignar==false){
	     		header("location:".site_url('Usuariosl/elegir_equipo/'.$logueado)."");
	     	}
	     
	////recogemos los valores de lo equipos
	$this->load->model("Valor_equipos");
	// valor milan
	$Milan=$this->Valor_equipos->valor_Milan();
	$mil=array_rand($Milan[0]);
	$Milan=$Milan[0][$mil];

	///valor valencia
	$Valencia=$this->Valor_equipos->valor_Valencia();
	$val=array_rand($Valencia[0]);
	$Valencia=$Valencia[0][$val];

	//valor PSG
	$PSG=$this->Valor_equipos->valor_PSG();
	$p=array_rand($PSG[0]);
	$PSG=$PSG[0][$p];

	//valor bayer_munich
	$Bayer_Munich=$this->Valor_equipos->valor_Bayer_Munich();
	$bayer=array_rand($Bayer_Munich[0]);
	$Bayer_Munich=$Bayer_Munich[0][$bayer];

	// valor Barcelona
	$Barcelona=$this->Valor_equipos->valor_Barcelona();
	$Bar=array_rand($Barcelona[0]);
	$Barcelona=$Barcelona[0][$Bar];

	//valor Ajax
	$Ajax=$this->Valor_equipos->valor_Ajax();
	$A=array_rand($Ajax[0]);
	$Ajax=$Ajax[0][$A];

	//valor Borusia dormunt
	$B_Dormunt=$this->Valor_equipos->valor_B_Dormunt();
	$B=array_rand($B_Dormunt[0]);
	$B_Dormunt=$B_Dormunt[0][$B];

	//valor M_united
	$M_United=$this->Valor_equipos->valor_M_United();
	$M=array_rand($M_United[0]);
	$M_United=$M_United[0][$M];

	//valor M_City
	$M_City=$this->Valor_equipos->valor_M_City();
	$M_C=array_rand($M_City[0]);
	$M_City=$M_City[0][$M_C];

	//valor Arsenal
	$Arsenal=$this->Valor_equipos->valor_Arsenal();
	$Ar=array_rand($Arsenal[0]);
	$Arsenal=$Arsenal[0][$Ar];

	//valor Oporto
	$Oporto=$this->Valor_equipos->valor_Oporto();
	$Op=array_rand($Oporto[0]);
	$Oporto=$Oporto[0][$Op];

	//valor Atletico de Madrid
	$At_Madrid=$this->Valor_equipos->valor_At_Madrid();
	$AT=array_rand($At_Madrid[0]);
	$At_Madrid=$At_Madrid[0][$AT];

	//valor I_Milan
	$I_Milan=$this->Valor_equipos->valor_I_Milan();
	$I=array_rand($I_Milan[0]);
	$I_Milan=$I_Milan[0][$I];

	//valor Tottenham
	$Tottenham=$this->Valor_equipos->valor_Tottenham();
	$T=array_rand($Tottenham[0]);
	$Tottenham=$Tottenham[0][$T];

	//valor Livepool
	$Liverpool=$this->Valor_equipos->valor_Liverpool();
	$Li=array_rand($Liverpool[0]);
	$Liverpool=$Liverpool[0][$Li];

	//valor Juventus
	$Juventus=$this->Valor_equipos->valor_Juventus();
	$Ju=array_rand($Juventus[0]);
	$Juventus=$Juventus[0][$Ju];

	//valor Sevilla
	$Sevilla=$this->Valor_equipos->valor_Sevilla();
	$se=array_rand($Sevilla[0]);
	$Sevilla=$Sevilla[0][$se];

	//valor R_Madrid
	$R_Madrid=$this->Valor_equipos->valor_R_Madrid();
	$R=array_rand($R_Madrid[0]);
	$R_Madrid=$R_Madrid[0][$R];

	//valor Chelsea
	$Chelsea=$this->Valor_equipos->valor_Chelsea();
	$che=array_rand($Chelsea[0]);
	$Chelsea=$Chelsea[0][$che];

	//valor O_Lyon
	$O_Lyon=$this->Valor_equipos->valor_O_Lyon();
	$OL=array_rand($O_Lyon[0]);
	$O_Lyon=$O_Lyon[0][$OL];

	///recogemos el estado de jornada si es true o falso la pasamos a la vista para generar los resultados en caso de que la jornada este en falso,una vez se genere el resultado pasa a estado true ya que es jornada se ha jugado

	$this->load->model("Jornadas_m");
	$jornada=$this->Jornadas_m->select_jornadas();

	///cogemos los valores de la jornada para mostrarlos siempre y cuando este en true
	$this->load->model("Puntos_Goles");
	$resultados=$this->Puntos_Goles->mostrar_resultados("jornada17");

	////seleccionar el estado del equipo si lo ha escogido alguien o no para que no introduzca los goles automaticamente
	$this->load->model("E_usuarios");
	$escogido=$this->E_usuarios->Equipo_estadotrue();

    
	$this->load->model("Enfrentamientos");
	$estado=$this->Enfrentamientos->estado_liga();
		if($estado["estado"]==false){
			header("location:".site_url('Inicio_de_liga/Inicio_liga')."");
		}
	$enfrentamientos=$this->Enfrentamientos->equiposenfrentamientos();
	$html=$this->load->view("theme/jornada17.php",compact("enfrentamientos","Milan","Valencia","PSG","Bayer_Munich","Barcelona","Ajax","B_Dormunt","M_United","M_City","Arsenal","Oporto","At_Madrid","I_Milan","Tottenham","Liverpool","Juventus","Sevilla","R_Madrid","Chelsea","O_Lyon","jornada","resultados","escogido","logueado","mercado"),true);
	$conte["contenido"]=$html;
	$this->load->view("panel.php",$conte);
}
function jornada18(){
	 $this->load->model("Enfrentamientos");
     $mercado=$this->Enfrentamientos->mercadofichajes();
	$logueado=$this->session->userdata("sesionid");
	      	if(!isset($logueado)){
	      		header("location:".site_url('Usuariosl/login')."");
	      	}  $sin_asignar=$this->session->userdata("equipo_asig");
	     if($sin_asignar==false){
	     		header("location:".site_url('Usuariosl/elegir_equipo/'.$logueado)."");
	     	}
	     
	////recogemos los valores de lo equipos
	$this->load->model("Valor_equipos");
	// valor milan
	$Milan=$this->Valor_equipos->valor_Milan();
	$mil=array_rand($Milan[0]);
	$Milan=$Milan[0][$mil];

	///valor valencia
	$Valencia=$this->Valor_equipos->valor_Valencia();
	$val=array_rand($Valencia[0]);
	$Valencia=$Valencia[0][$val];

	//valor PSG
	$PSG=$this->Valor_equipos->valor_PSG();
	$p=array_rand($PSG[0]);
	$PSG=$PSG[0][$p];

	//valor bayer_munich
	$Bayer_Munich=$this->Valor_equipos->valor_Bayer_Munich();
	$bayer=array_rand($Bayer_Munich[0]);
	$Bayer_Munich=$Bayer_Munich[0][$bayer];

	// valor Barcelona
	$Barcelona=$this->Valor_equipos->valor_Barcelona();
	$Bar=array_rand($Barcelona[0]);
	$Barcelona=$Barcelona[0][$Bar];

	//valor Ajax
	$Ajax=$this->Valor_equipos->valor_Ajax();
	$A=array_rand($Ajax[0]);
	$Ajax=$Ajax[0][$A];

	//valor Borusia dormunt
	$B_Dormunt=$this->Valor_equipos->valor_B_Dormunt();
	$B=array_rand($B_Dormunt[0]);
	$B_Dormunt=$B_Dormunt[0][$B];

	//valor M_united
	$M_United=$this->Valor_equipos->valor_M_United();
	$M=array_rand($M_United[0]);
	$M_United=$M_United[0][$M];

	//valor M_City
	$M_City=$this->Valor_equipos->valor_M_City();
	$M_C=array_rand($M_City[0]);
	$M_City=$M_City[0][$M_C];

	//valor Arsenal
	$Arsenal=$this->Valor_equipos->valor_Arsenal();
	$Ar=array_rand($Arsenal[0]);
	$Arsenal=$Arsenal[0][$Ar];

	//valor Oporto
	$Oporto=$this->Valor_equipos->valor_Oporto();
	$Op=array_rand($Oporto[0]);
	$Oporto=$Oporto[0][$Op];

	//valor Atletico de Madrid
	$At_Madrid=$this->Valor_equipos->valor_At_Madrid();
	$AT=array_rand($At_Madrid[0]);
	$At_Madrid=$At_Madrid[0][$AT];

	//valor I_Milan
	$I_Milan=$this->Valor_equipos->valor_I_Milan();
	$I=array_rand($I_Milan[0]);
	$I_Milan=$I_Milan[0][$I];

	//valor Tottenham
	$Tottenham=$this->Valor_equipos->valor_Tottenham();
	$T=array_rand($Tottenham[0]);
	$Tottenham=$Tottenham[0][$T];

	//valor Livepool
	$Liverpool=$this->Valor_equipos->valor_Liverpool();
	$Li=array_rand($Liverpool[0]);
	$Liverpool=$Liverpool[0][$Li];

	//valor Juventus
	$Juventus=$this->Valor_equipos->valor_Juventus();
	$Ju=array_rand($Juventus[0]);
	$Juventus=$Juventus[0][$Ju];

	//valor Sevilla
	$Sevilla=$this->Valor_equipos->valor_Sevilla();
	$se=array_rand($Sevilla[0]);
	$Sevilla=$Sevilla[0][$se];

	//valor R_Madrid
	$R_Madrid=$this->Valor_equipos->valor_R_Madrid();
	$R=array_rand($R_Madrid[0]);
	$R_Madrid=$R_Madrid[0][$R];

	//valor Chelsea
	$Chelsea=$this->Valor_equipos->valor_Chelsea();
	$che=array_rand($Chelsea[0]);
	$Chelsea=$Chelsea[0][$che];

	//valor O_Lyon
	$O_Lyon=$this->Valor_equipos->valor_O_Lyon();
	$OL=array_rand($O_Lyon[0]);
	$O_Lyon=$O_Lyon[0][$OL];

	///recogemos el estado de jornada si es true o falso la pasamos a la vista para generar los resultados en caso de que la jornada este en falso,una vez se genere el resultado pasa a estado true ya que es jornada se ha jugado

	$this->load->model("Jornadas_m");
	$jornada=$this->Jornadas_m->select_jornadas();

	///cogemos los valores de la jornada para mostrarlos siempre y cuando este en true
	$this->load->model("Puntos_Goles");
	$resultados=$this->Puntos_Goles->mostrar_resultados("jornada18");

	////seleccionar el estado del equipo si lo ha escogido alguien o no para que no introduzca los goles automaticamente
	$this->load->model("E_usuarios");
	$escogido=$this->E_usuarios->Equipo_estadotrue();

    
	$this->load->model("Enfrentamientos");
	$estado=$this->Enfrentamientos->estado_liga();
		if($estado["estado"]==false){
			header("location:".site_url('Inicio_de_liga/Inicio_liga')."");
		}
	$enfrentamientos=$this->Enfrentamientos->equiposenfrentamientos();
	$html=$this->load->view("theme/jornada18.php",compact("enfrentamientos","Milan","Valencia","PSG","Bayer_Munich","Barcelona","Ajax","B_Dormunt","M_United","M_City","Arsenal","Oporto","At_Madrid","I_Milan","Tottenham","Liverpool","Juventus","Sevilla","R_Madrid","Chelsea","O_Lyon","jornada","resultados","escogido","logueado","mercado"),true);
	$conte["contenido"]=$html;
	$this->load->view("panel.php",$conte);
}
function jornada19(){
	 $this->load->model("Enfrentamientos");
     $mercado=$this->Enfrentamientos->mercadofichajes();
	$logueado=$this->session->userdata("sesionid");
	      	if(!isset($logueado)){
	      		header("location:".site_url('Usuariosl/login')."");
	      	}  $sin_asignar=$this->session->userdata("equipo_asig");
	     if($sin_asignar==false){
	     		header("location:".site_url('Usuariosl/elegir_equipo/'.$logueado)."");
	     	}
	     
	////recogemos los valores de lo equipos
	$this->load->model("Valor_equipos");
	// valor milan
	$Milan=$this->Valor_equipos->valor_Milan();
	$mil=array_rand($Milan[0]);
	$Milan=$Milan[0][$mil];

	///valor valencia
	$Valencia=$this->Valor_equipos->valor_Valencia();
	$val=array_rand($Valencia[0]);
	$Valencia=$Valencia[0][$val];

	//valor PSG
	$PSG=$this->Valor_equipos->valor_PSG();
	$p=array_rand($PSG[0]);
	$PSG=$PSG[0][$p];

	//valor bayer_munich
	$Bayer_Munich=$this->Valor_equipos->valor_Bayer_Munich();
	$bayer=array_rand($Bayer_Munich[0]);
	$Bayer_Munich=$Bayer_Munich[0][$bayer];

	// valor Barcelona
	$Barcelona=$this->Valor_equipos->valor_Barcelona();
	$Bar=array_rand($Barcelona[0]);
	$Barcelona=$Barcelona[0][$Bar];

	//valor Ajax
	$Ajax=$this->Valor_equipos->valor_Ajax();
	$A=array_rand($Ajax[0]);
	$Ajax=$Ajax[0][$A];

	//valor Borusia dormunt
	$B_Dormunt=$this->Valor_equipos->valor_B_Dormunt();
	$B=array_rand($B_Dormunt[0]);
	$B_Dormunt=$B_Dormunt[0][$B];

	//valor M_united
	$M_United=$this->Valor_equipos->valor_M_United();
	$M=array_rand($M_United[0]);
	$M_United=$M_United[0][$M];

	//valor M_City
	$M_City=$this->Valor_equipos->valor_M_City();
	$M_C=array_rand($M_City[0]);
	$M_City=$M_City[0][$M_C];

	//valor Arsenal
	$Arsenal=$this->Valor_equipos->valor_Arsenal();
	$Ar=array_rand($Arsenal[0]);
	$Arsenal=$Arsenal[0][$Ar];

	//valor Oporto
	$Oporto=$this->Valor_equipos->valor_Oporto();
	$Op=array_rand($Oporto[0]);
	$Oporto=$Oporto[0][$Op];

	//valor Atletico de Madrid
	$At_Madrid=$this->Valor_equipos->valor_At_Madrid();
	$AT=array_rand($At_Madrid[0]);
	$At_Madrid=$At_Madrid[0][$AT];

	//valor I_Milan
	$I_Milan=$this->Valor_equipos->valor_I_Milan();
	$I=array_rand($I_Milan[0]);
	$I_Milan=$I_Milan[0][$I];

	//valor Tottenham
	$Tottenham=$this->Valor_equipos->valor_Tottenham();
	$T=array_rand($Tottenham[0]);
	$Tottenham=$Tottenham[0][$T];

	//valor Livepool
	$Liverpool=$this->Valor_equipos->valor_Liverpool();
	$Li=array_rand($Liverpool[0]);
	$Liverpool=$Liverpool[0][$Li];

	//valor Juventus
	$Juventus=$this->Valor_equipos->valor_Juventus();
	$Ju=array_rand($Juventus[0]);
	$Juventus=$Juventus[0][$Ju];

	//valor Sevilla
	$Sevilla=$this->Valor_equipos->valor_Sevilla();
	$se=array_rand($Sevilla[0]);
	$Sevilla=$Sevilla[0][$se];

	//valor R_Madrid
	$R_Madrid=$this->Valor_equipos->valor_R_Madrid();
	$R=array_rand($R_Madrid[0]);
	$R_Madrid=$R_Madrid[0][$R];

	//valor Chelsea
	$Chelsea=$this->Valor_equipos->valor_Chelsea();
	$che=array_rand($Chelsea[0]);
	$Chelsea=$Chelsea[0][$che];

	//valor O_Lyon
	$O_Lyon=$this->Valor_equipos->valor_O_Lyon();
	$OL=array_rand($O_Lyon[0]);
	$O_Lyon=$O_Lyon[0][$OL];

	///recogemos el estado de jornada si es true o falso la pasamos a la vista para generar los resultados en caso de que la jornada este en falso,una vez se genere el resultado pasa a estado true ya que es jornada se ha jugado

	$this->load->model("Jornadas_m");
	$jornada=$this->Jornadas_m->select_jornadas();

	///cogemos los valores de la jornada para mostrarlos siempre y cuando este en true
	$this->load->model("Puntos_Goles");
	$resultados=$this->Puntos_Goles->mostrar_resultados("jornada19");

	////seleccionar el estado del equipo si lo ha escogido alguien o no para que no introduzca los goles automaticamente
	$this->load->model("E_usuarios");
	$escogido=$this->E_usuarios->Equipo_estadotrue();

    
	$this->load->model("Enfrentamientos");
	$estado=$this->Enfrentamientos->estado_liga();
		if($estado["estado"]==false){
			header("location:".site_url('Inicio_de_liga/Inicio_liga')."");
		}
	$enfrentamientos=$this->Enfrentamientos->equiposenfrentamientos();
	$html=$this->load->view("theme/jornada19.php",compact("enfrentamientos","Milan","Valencia","PSG","Bayer_Munich","Barcelona","Ajax","B_Dormunt","M_United","M_City","Arsenal","Oporto","At_Madrid","I_Milan","Tottenham","Liverpool","Juventus","Sevilla","R_Madrid","Chelsea","O_Lyon","jornada","resultados","escogido","logueado","mercado"),true);
	$conte["contenido"]=$html;
	$this->load->view("panel.php",$conte);
}
function jornada20(){
	 $this->load->model("Enfrentamientos");
     $mercado=$this->Enfrentamientos->mercadofichajes();
	$logueado=$this->session->userdata("sesionid");
	      	if(!isset($logueado)){
	      		header("location:".site_url('Usuariosl/login')."");
	      	}  $sin_asignar=$this->session->userdata("equipo_asig");
	     if($sin_asignar==false){
	     		header("location:".site_url('Usuariosl/elegir_equipo/'.$logueado)."");
	     	}
	     
	////recogemos los valores de lo equipos
	$this->load->model("Valor_equipos");
	// valor milan
	$Milan=$this->Valor_equipos->valor_Milan();
	$mil=array_rand($Milan[0]);
	$Milan=$Milan[0][$mil];

	///valor valencia
	$Valencia=$this->Valor_equipos->valor_Valencia();
	$val=array_rand($Valencia[0]);
	$Valencia=$Valencia[0][$val];

	//valor PSG
	$PSG=$this->Valor_equipos->valor_PSG();
	$p=array_rand($PSG[0]);
	$PSG=$PSG[0][$p];

	//valor bayer_munich
	$Bayer_Munich=$this->Valor_equipos->valor_Bayer_Munich();
	$bayer=array_rand($Bayer_Munich[0]);
	$Bayer_Munich=$Bayer_Munich[0][$bayer];

	// valor Barcelona
	$Barcelona=$this->Valor_equipos->valor_Barcelona();
	$Bar=array_rand($Barcelona[0]);
	$Barcelona=$Barcelona[0][$Bar];

	//valor Ajax
	$Ajax=$this->Valor_equipos->valor_Ajax();
	$A=array_rand($Ajax[0]);
	$Ajax=$Ajax[0][$A];

	//valor Borusia dormunt
	$B_Dormunt=$this->Valor_equipos->valor_B_Dormunt();
	$B=array_rand($B_Dormunt[0]);
	$B_Dormunt=$B_Dormunt[0][$B];

	//valor M_united
	$M_United=$this->Valor_equipos->valor_M_United();
	$M=array_rand($M_United[0]);
	$M_United=$M_United[0][$M];

	//valor M_City
	$M_City=$this->Valor_equipos->valor_M_City();
	$M_C=array_rand($M_City[0]);
	$M_City=$M_City[0][$M_C];

	//valor Arsenal
	$Arsenal=$this->Valor_equipos->valor_Arsenal();
	$Ar=array_rand($Arsenal[0]);
	$Arsenal=$Arsenal[0][$Ar];

	//valor Oporto
	$Oporto=$this->Valor_equipos->valor_Oporto();
	$Op=array_rand($Oporto[0]);
	$Oporto=$Oporto[0][$Op];

	//valor Atletico de Madrid
	$At_Madrid=$this->Valor_equipos->valor_At_Madrid();
	$AT=array_rand($At_Madrid[0]);
	$At_Madrid=$At_Madrid[0][$AT];

	//valor I_Milan
	$I_Milan=$this->Valor_equipos->valor_I_Milan();
	$I=array_rand($I_Milan[0]);
	$I_Milan=$I_Milan[0][$I];

	//valor Tottenham
	$Tottenham=$this->Valor_equipos->valor_Tottenham();
	$T=array_rand($Tottenham[0]);
	$Tottenham=$Tottenham[0][$T];

	//valor Livepool
	$Liverpool=$this->Valor_equipos->valor_Liverpool();
	$Li=array_rand($Liverpool[0]);
	$Liverpool=$Liverpool[0][$Li];

	//valor Juventus
	$Juventus=$this->Valor_equipos->valor_Juventus();
	$Ju=array_rand($Juventus[0]);
	$Juventus=$Juventus[0][$Ju];

	//valor Sevilla
	$Sevilla=$this->Valor_equipos->valor_Sevilla();
	$se=array_rand($Sevilla[0]);
	$Sevilla=$Sevilla[0][$se];

	//valor R_Madrid
	$R_Madrid=$this->Valor_equipos->valor_R_Madrid();
	$R=array_rand($R_Madrid[0]);
	$R_Madrid=$R_Madrid[0][$R];

	//valor Chelsea
	$Chelsea=$this->Valor_equipos->valor_Chelsea();
	$che=array_rand($Chelsea[0]);
	$Chelsea=$Chelsea[0][$che];

	//valor O_Lyon
	$O_Lyon=$this->Valor_equipos->valor_O_Lyon();
	$OL=array_rand($O_Lyon[0]);
	$O_Lyon=$O_Lyon[0][$OL];

	///recogemos el estado de jornada si es true o falso la pasamos a la vista para generar los resultados en caso de que la jornada este en falso,una vez se genere el resultado pasa a estado true ya que es jornada se ha jugado

	$this->load->model("Jornadas_m");
	$jornada=$this->Jornadas_m->select_jornadas();

	///cogemos los valores de la jornada para mostrarlos siempre y cuando este en true
	$this->load->model("Puntos_Goles");
	$resultados=$this->Puntos_Goles->mostrar_resultados("jornada20");

	///seleccionamos el estado de los cobros

	$estado_cobros=$this->Puntos_Goles->estado_cobro();

	////seleccionar el estado del equipo si lo ha escogido alguien o no para que no introduzca los goles automaticamente
	$this->load->model("E_usuarios");
	$escogido=$this->E_usuarios->Equipo_estadotrue();

    
	$this->load->model("Enfrentamientos");
	$estado=$this->Enfrentamientos->estado_liga();
		if($estado["estado"]==false){
			header("location:".site_url('Inicio_de_liga/Inicio_liga')."");
		}
	$enfrentamientos=$this->Enfrentamientos->equiposenfrentamientos();
	$html=$this->load->view("theme/jornada20.php",compact("enfrentamientos","Milan","Valencia","PSG","Bayer_Munich","Barcelona","Ajax","B_Dormunt","M_United","M_City","Arsenal","Oporto","At_Madrid","I_Milan","Tottenham","Liverpool","Juventus","Sevilla","R_Madrid","Chelsea","O_Lyon","jornada","resultados","escogido","estado_cobros","logueado","mercado"),true);
	$conte["contenido"]=$html;
	$this->load->view("panel.php",$conte);
}function jornada21(){
	 $this->load->model("Enfrentamientos");
     $mercado=$this->Enfrentamientos->mercadofichajes();
	$logueado=$this->session->userdata("sesionid");
	      	if(!isset($logueado)){
	      		header("location:".site_url('Usuariosl/login')."");
	      	}  $sin_asignar=$this->session->userdata("equipo_asig");
	     if($sin_asignar==false){
	     		header("location:".site_url('Usuariosl/elegir_equipo/'.$logueado)."");
	     	}
	     
	////recogemos los valores de lo equipos
	$this->load->model("Valor_equipos");
	// valor milan
	$Milan=$this->Valor_equipos->valor_Milan();
	$mil=array_rand($Milan[0]);
	$Milan=$Milan[0][$mil];

	///valor valencia
	$Valencia=$this->Valor_equipos->valor_Valencia();
	$val=array_rand($Valencia[0]);
	$Valencia=$Valencia[0][$val];

	//valor PSG
	$PSG=$this->Valor_equipos->valor_PSG();
	$p=array_rand($PSG[0]);
	$PSG=$PSG[0][$p];

	//valor bayer_munich
	$Bayer_Munich=$this->Valor_equipos->valor_Bayer_Munich();
	$bayer=array_rand($Bayer_Munich[0]);
	$Bayer_Munich=$Bayer_Munich[0][$bayer];

	// valor Barcelona
	$Barcelona=$this->Valor_equipos->valor_Barcelona();
	$Bar=array_rand($Barcelona[0]);
	$Barcelona=$Barcelona[0][$Bar];

	//valor Ajax
	$Ajax=$this->Valor_equipos->valor_Ajax();
	$A=array_rand($Ajax[0]);
	$Ajax=$Ajax[0][$A];

	//valor Borusia dormunt
	$B_Dormunt=$this->Valor_equipos->valor_B_Dormunt();
	$B=array_rand($B_Dormunt[0]);
	$B_Dormunt=$B_Dormunt[0][$B];

	//valor M_united
	$M_United=$this->Valor_equipos->valor_M_United();
	$M=array_rand($M_United[0]);
	$M_United=$M_United[0][$M];

	//valor M_City
	$M_City=$this->Valor_equipos->valor_M_City();
	$M_C=array_rand($M_City[0]);
	$M_City=$M_City[0][$M_C];

	//valor Arsenal
	$Arsenal=$this->Valor_equipos->valor_Arsenal();
	$Ar=array_rand($Arsenal[0]);
	$Arsenal=$Arsenal[0][$Ar];

	//valor Oporto
	$Oporto=$this->Valor_equipos->valor_Oporto();
	$Op=array_rand($Oporto[0]);
	$Oporto=$Oporto[0][$Op];

	//valor Atletico de Madrid
	$At_Madrid=$this->Valor_equipos->valor_At_Madrid();
	$AT=array_rand($At_Madrid[0]);
	$At_Madrid=$At_Madrid[0][$AT];

	//valor I_Milan
	$I_Milan=$this->Valor_equipos->valor_I_Milan();
	$I=array_rand($I_Milan[0]);
	$I_Milan=$I_Milan[0][$I];

	//valor Tottenham
	$Tottenham=$this->Valor_equipos->valor_Tottenham();
	$T=array_rand($Tottenham[0]);
	$Tottenham=$Tottenham[0][$T];

	//valor Livepool
	$Liverpool=$this->Valor_equipos->valor_Liverpool();
	$Li=array_rand($Liverpool[0]);
	$Liverpool=$Liverpool[0][$Li];

	//valor Juventus
	$Juventus=$this->Valor_equipos->valor_Juventus();
	$Ju=array_rand($Juventus[0]);
	$Juventus=$Juventus[0][$Ju];

	//valor Sevilla
	$Sevilla=$this->Valor_equipos->valor_Sevilla();
	$se=array_rand($Sevilla[0]);
	$Sevilla=$Sevilla[0][$se];

	//valor R_Madrid
	$R_Madrid=$this->Valor_equipos->valor_R_Madrid();
	$R=array_rand($R_Madrid[0]);
	$R_Madrid=$R_Madrid[0][$R];

	//valor Chelsea
	$Chelsea=$this->Valor_equipos->valor_Chelsea();
	$che=array_rand($Chelsea[0]);
	$Chelsea=$Chelsea[0][$che];

	//valor O_Lyon
	$O_Lyon=$this->Valor_equipos->valor_O_Lyon();
	$OL=array_rand($O_Lyon[0]);
	$O_Lyon=$O_Lyon[0][$OL];

	///recogemos el estado de jornada si es true o falso la pasamos a la vista para generar los resultados en caso de que la jornada este en falso,una vez se genere el resultado pasa a estado true ya que es jornada se ha jugado

	$this->load->model("Jornadas_m");
	$jornada=$this->Jornadas_m->select_jornadas();

	///cogemos los valores de la jornada para mostrarlos siempre y cuando este en true
	$this->load->model("Puntos_Goles");
	$resultados=$this->Puntos_Goles->mostrar_resultados("jornada21");

	////seleccionar el estado del equipo si lo ha escogido alguien o no para que no introduzca los goles automaticamente
	$this->load->model("E_usuarios");
	$escogido=$this->E_usuarios->Equipo_estadotrue();

    
	$this->load->model("Enfrentamientos");
	$estado=$this->Enfrentamientos->estado_liga();
		if($estado["estado"]==false){
			header("location:".site_url('Inicio_de_liga/Inicio_liga')."");
		}
	$enfrentamientos=$this->Enfrentamientos->equiposenfrentamientos();
	$html=$this->load->view("theme/jornada21.php",compact("enfrentamientos","Milan","Valencia","PSG","Bayer_Munich","Barcelona","Ajax","B_Dormunt","M_United","M_City","Arsenal","Oporto","At_Madrid","I_Milan","Tottenham","Liverpool","Juventus","Sevilla","R_Madrid","Chelsea","O_Lyon","jornada","resultados","escogido","logueado","mercado"),true);
	$conte["contenido"]=$html;
	$this->load->view("panel.php",$conte);
}function jornada22(){
	 $this->load->model("Enfrentamientos");
     $mercado=$this->Enfrentamientos->mercadofichajes();
	$logueado=$this->session->userdata("sesionid");
	      	if(!isset($logueado)){
	      		header("location:".site_url('Usuariosl/login')."");
	      	}  $sin_asignar=$this->session->userdata("equipo_asig");
	     if($sin_asignar==false){
	     		header("location:".site_url('Usuariosl/elegir_equipo/'.$logueado)."");
	     	}
	     
	////recogemos los valores de lo equipos
	$this->load->model("Valor_equipos");
	// valor milan
	$Milan=$this->Valor_equipos->valor_Milan();
	$mil=array_rand($Milan[0]);
	$Milan=$Milan[0][$mil];

	///valor valencia
	$Valencia=$this->Valor_equipos->valor_Valencia();
	$val=array_rand($Valencia[0]);
	$Valencia=$Valencia[0][$val];

	//valor PSG
	$PSG=$this->Valor_equipos->valor_PSG();
	$p=array_rand($PSG[0]);
	$PSG=$PSG[0][$p];

	//valor bayer_munich
	$Bayer_Munich=$this->Valor_equipos->valor_Bayer_Munich();
	$bayer=array_rand($Bayer_Munich[0]);
	$Bayer_Munich=$Bayer_Munich[0][$bayer];

	// valor Barcelona
	$Barcelona=$this->Valor_equipos->valor_Barcelona();
	$Bar=array_rand($Barcelona[0]);
	$Barcelona=$Barcelona[0][$Bar];

	//valor Ajax
	$Ajax=$this->Valor_equipos->valor_Ajax();
	$A=array_rand($Ajax[0]);
	$Ajax=$Ajax[0][$A];

	//valor Borusia dormunt
	$B_Dormunt=$this->Valor_equipos->valor_B_Dormunt();
	$B=array_rand($B_Dormunt[0]);
	$B_Dormunt=$B_Dormunt[0][$B];

	//valor M_united
	$M_United=$this->Valor_equipos->valor_M_United();
	$M=array_rand($M_United[0]);
	$M_United=$M_United[0][$M];

	//valor M_City
	$M_City=$this->Valor_equipos->valor_M_City();
	$M_C=array_rand($M_City[0]);
	$M_City=$M_City[0][$M_C];

	//valor Arsenal
	$Arsenal=$this->Valor_equipos->valor_Arsenal();
	$Ar=array_rand($Arsenal[0]);
	$Arsenal=$Arsenal[0][$Ar];

	//valor Oporto
	$Oporto=$this->Valor_equipos->valor_Oporto();
	$Op=array_rand($Oporto[0]);
	$Oporto=$Oporto[0][$Op];

	//valor Atletico de Madrid
	$At_Madrid=$this->Valor_equipos->valor_At_Madrid();
	$AT=array_rand($At_Madrid[0]);
	$At_Madrid=$At_Madrid[0][$AT];

	//valor I_Milan
	$I_Milan=$this->Valor_equipos->valor_I_Milan();
	$I=array_rand($I_Milan[0]);
	$I_Milan=$I_Milan[0][$I];

	//valor Tottenham
	$Tottenham=$this->Valor_equipos->valor_Tottenham();
	$T=array_rand($Tottenham[0]);
	$Tottenham=$Tottenham[0][$T];

	//valor Livepool
	$Liverpool=$this->Valor_equipos->valor_Liverpool();
	$Li=array_rand($Liverpool[0]);
	$Liverpool=$Liverpool[0][$Li];

	//valor Juventus
	$Juventus=$this->Valor_equipos->valor_Juventus();
	$Ju=array_rand($Juventus[0]);
	$Juventus=$Juventus[0][$Ju];

	//valor Sevilla
	$Sevilla=$this->Valor_equipos->valor_Sevilla();
	$se=array_rand($Sevilla[0]);
	$Sevilla=$Sevilla[0][$se];

	//valor R_Madrid
	$R_Madrid=$this->Valor_equipos->valor_R_Madrid();
	$R=array_rand($R_Madrid[0]);
	$R_Madrid=$R_Madrid[0][$R];

	//valor Chelsea
	$Chelsea=$this->Valor_equipos->valor_Chelsea();
	$che=array_rand($Chelsea[0]);
	$Chelsea=$Chelsea[0][$che];

	//valor O_Lyon
	$O_Lyon=$this->Valor_equipos->valor_O_Lyon();
	$OL=array_rand($O_Lyon[0]);
	$O_Lyon=$O_Lyon[0][$OL];

	///recogemos el estado de jornada si es true o falso la pasamos a la vista para generar los resultados en caso de que la jornada este en falso,una vez se genere el resultado pasa a estado true ya que es jornada se ha jugado

	$this->load->model("Jornadas_m");
	$jornada=$this->Jornadas_m->select_jornadas();

	///cogemos los valores de la jornada para mostrarlos siempre y cuando este en true
	$this->load->model("Puntos_Goles");
	$resultados=$this->Puntos_Goles->mostrar_resultados("jornada22");

	////seleccionar el estado del equipo si lo ha escogido alguien o no para que no introduzca los goles automaticamente
	$this->load->model("E_usuarios");
	$escogido=$this->E_usuarios->Equipo_estadotrue();

    
	$this->load->model("Enfrentamientos");
	$estado=$this->Enfrentamientos->estado_liga();
		if($estado["estado"]==false){
			header("location:".site_url('Inicio_de_liga/Inicio_liga')."");
		}
	$enfrentamientos=$this->Enfrentamientos->equiposenfrentamientos();
	$html=$this->load->view("theme/jornada22.php",compact("enfrentamientos","Milan","Valencia","PSG","Bayer_Munich","Barcelona","Ajax","B_Dormunt","M_United","M_City","Arsenal","Oporto","At_Madrid","I_Milan","Tottenham","Liverpool","Juventus","Sevilla","R_Madrid","Chelsea","O_Lyon","jornada","resultados","escogido","logueado","mercado"),true);
	$conte["contenido"]=$html;
	$this->load->view("panel.php",$conte);
}function jornada23(){
	 $this->load->model("Enfrentamientos");
     $mercado=$this->Enfrentamientos->mercadofichajes();
	$logueado=$this->session->userdata("sesionid");
	      	if(!isset($logueado)){
	      		header("location:".site_url('Usuariosl/login')."");
	      	}  $sin_asignar=$this->session->userdata("equipo_asig");
	     if($sin_asignar==false){
	     		header("location:".site_url('Usuariosl/elegir_equipo/'.$logueado)."");
	     	}
	     
	////recogemos los valores de lo equipos
	$this->load->model("Valor_equipos");
	// valor milan
	$Milan=$this->Valor_equipos->valor_Milan();
	$mil=array_rand($Milan[0]);
	$Milan=$Milan[0][$mil];

	///valor valencia
	$Valencia=$this->Valor_equipos->valor_Valencia();
	$val=array_rand($Valencia[0]);
	$Valencia=$Valencia[0][$val];

	//valor PSG
	$PSG=$this->Valor_equipos->valor_PSG();
	$p=array_rand($PSG[0]);
	$PSG=$PSG[0][$p];

	//valor bayer_munich
	$Bayer_Munich=$this->Valor_equipos->valor_Bayer_Munich();
	$bayer=array_rand($Bayer_Munich[0]);
	$Bayer_Munich=$Bayer_Munich[0][$bayer];

	// valor Barcelona
	$Barcelona=$this->Valor_equipos->valor_Barcelona();
	$Bar=array_rand($Barcelona[0]);
	$Barcelona=$Barcelona[0][$Bar];

	//valor Ajax
	$Ajax=$this->Valor_equipos->valor_Ajax();
	$A=array_rand($Ajax[0]);
	$Ajax=$Ajax[0][$A];

	//valor Borusia dormunt
	$B_Dormunt=$this->Valor_equipos->valor_B_Dormunt();
	$B=array_rand($B_Dormunt[0]);
	$B_Dormunt=$B_Dormunt[0][$B];

	//valor M_united
	$M_United=$this->Valor_equipos->valor_M_United();
	$M=array_rand($M_United[0]);
	$M_United=$M_United[0][$M];

	//valor M_City
	$M_City=$this->Valor_equipos->valor_M_City();
	$M_C=array_rand($M_City[0]);
	$M_City=$M_City[0][$M_C];

	//valor Arsenal
	$Arsenal=$this->Valor_equipos->valor_Arsenal();
	$Ar=array_rand($Arsenal[0]);
	$Arsenal=$Arsenal[0][$Ar];

	//valor Oporto
	$Oporto=$this->Valor_equipos->valor_Oporto();
	$Op=array_rand($Oporto[0]);
	$Oporto=$Oporto[0][$Op];

	//valor Atletico de Madrid
	$At_Madrid=$this->Valor_equipos->valor_At_Madrid();
	$AT=array_rand($At_Madrid[0]);
	$At_Madrid=$At_Madrid[0][$AT];

	//valor I_Milan
	$I_Milan=$this->Valor_equipos->valor_I_Milan();
	$I=array_rand($I_Milan[0]);
	$I_Milan=$I_Milan[0][$I];

	//valor Tottenham
	$Tottenham=$this->Valor_equipos->valor_Tottenham();
	$T=array_rand($Tottenham[0]);
	$Tottenham=$Tottenham[0][$T];

	//valor Livepool
	$Liverpool=$this->Valor_equipos->valor_Liverpool();
	$Li=array_rand($Liverpool[0]);
	$Liverpool=$Liverpool[0][$Li];

	//valor Juventus
	$Juventus=$this->Valor_equipos->valor_Juventus();
	$Ju=array_rand($Juventus[0]);
	$Juventus=$Juventus[0][$Ju];

	//valor Sevilla
	$Sevilla=$this->Valor_equipos->valor_Sevilla();
	$se=array_rand($Sevilla[0]);
	$Sevilla=$Sevilla[0][$se];

	//valor R_Madrid
	$R_Madrid=$this->Valor_equipos->valor_R_Madrid();
	$R=array_rand($R_Madrid[0]);
	$R_Madrid=$R_Madrid[0][$R];

	//valor Chelsea
	$Chelsea=$this->Valor_equipos->valor_Chelsea();
	$che=array_rand($Chelsea[0]);
	$Chelsea=$Chelsea[0][$che];

	//valor O_Lyon
	$O_Lyon=$this->Valor_equipos->valor_O_Lyon();
	$OL=array_rand($O_Lyon[0]);
	$O_Lyon=$O_Lyon[0][$OL];

	///recogemos el estado de jornada si es true o falso la pasamos a la vista para generar los resultados en caso de que la jornada este en falso,una vez se genere el resultado pasa a estado true ya que es jornada se ha jugado

	$this->load->model("Jornadas_m");
	$jornada=$this->Jornadas_m->select_jornadas();

	///cogemos los valores de la jornada para mostrarlos siempre y cuando este en true
	$this->load->model("Puntos_Goles");
	$resultados=$this->Puntos_Goles->mostrar_resultados("jornada23");

	////seleccionar el estado del equipo si lo ha escogido alguien o no para que no introduzca los goles automaticamente
	$this->load->model("E_usuarios");
	$escogido=$this->E_usuarios->Equipo_estadotrue();

    
	$this->load->model("Enfrentamientos");
	$estado=$this->Enfrentamientos->estado_liga();
		if($estado["estado"]==false){
			header("location:".site_url('Inicio_de_liga/Inicio_liga')."");
		}
	$enfrentamientos=$this->Enfrentamientos->equiposenfrentamientos();
	$html=$this->load->view("theme/jornada23.php",compact("enfrentamientos","Milan","Valencia","PSG","Bayer_Munich","Barcelona","Ajax","B_Dormunt","M_United","M_City","Arsenal","Oporto","At_Madrid","I_Milan","Tottenham","Liverpool","Juventus","Sevilla","R_Madrid","Chelsea","O_Lyon","jornada","resultados","escogido","logueado","mercado"),true);
	$conte["contenido"]=$html;
	$this->load->view("panel.php",$conte);
}function jornada24(){
	 $this->load->model("Enfrentamientos");
     $mercado=$this->Enfrentamientos->mercadofichajes();
	$logueado=$this->session->userdata("sesionid");
	      	if(!isset($logueado)){
	      		header("location:".site_url('Usuariosl/login')."");
	      	}  $sin_asignar=$this->session->userdata("equipo_asig");
	     if($sin_asignar==false){
	     		header("location:".site_url('Usuariosl/elegir_equipo/'.$logueado)."");
	     	}
	     
	////recogemos los valores de lo equipos
	$this->load->model("Valor_equipos");
	// valor milan
	$Milan=$this->Valor_equipos->valor_Milan();
	$mil=array_rand($Milan[0]);
	$Milan=$Milan[0][$mil];

	///valor valencia
	$Valencia=$this->Valor_equipos->valor_Valencia();
	$val=array_rand($Valencia[0]);
	$Valencia=$Valencia[0][$val];

	//valor PSG
	$PSG=$this->Valor_equipos->valor_PSG();
	$p=array_rand($PSG[0]);
	$PSG=$PSG[0][$p];

	//valor bayer_munich
	$Bayer_Munich=$this->Valor_equipos->valor_Bayer_Munich();
	$bayer=array_rand($Bayer_Munich[0]);
	$Bayer_Munich=$Bayer_Munich[0][$bayer];

	// valor Barcelona
	$Barcelona=$this->Valor_equipos->valor_Barcelona();
	$Bar=array_rand($Barcelona[0]);
	$Barcelona=$Barcelona[0][$Bar];

	//valor Ajax
	$Ajax=$this->Valor_equipos->valor_Ajax();
	$A=array_rand($Ajax[0]);
	$Ajax=$Ajax[0][$A];

	//valor Borusia dormunt
	$B_Dormunt=$this->Valor_equipos->valor_B_Dormunt();
	$B=array_rand($B_Dormunt[0]);
	$B_Dormunt=$B_Dormunt[0][$B];

	//valor M_united
	$M_United=$this->Valor_equipos->valor_M_United();
	$M=array_rand($M_United[0]);
	$M_United=$M_United[0][$M];

	//valor M_City
	$M_City=$this->Valor_equipos->valor_M_City();
	$M_C=array_rand($M_City[0]);
	$M_City=$M_City[0][$M_C];

	//valor Arsenal
	$Arsenal=$this->Valor_equipos->valor_Arsenal();
	$Ar=array_rand($Arsenal[0]);
	$Arsenal=$Arsenal[0][$Ar];

	//valor Oporto
	$Oporto=$this->Valor_equipos->valor_Oporto();
	$Op=array_rand($Oporto[0]);
	$Oporto=$Oporto[0][$Op];

	//valor Atletico de Madrid
	$At_Madrid=$this->Valor_equipos->valor_At_Madrid();
	$AT=array_rand($At_Madrid[0]);
	$At_Madrid=$At_Madrid[0][$AT];

	//valor I_Milan
	$I_Milan=$this->Valor_equipos->valor_I_Milan();
	$I=array_rand($I_Milan[0]);
	$I_Milan=$I_Milan[0][$I];

	//valor Tottenham
	$Tottenham=$this->Valor_equipos->valor_Tottenham();
	$T=array_rand($Tottenham[0]);
	$Tottenham=$Tottenham[0][$T];

	//valor Livepool
	$Liverpool=$this->Valor_equipos->valor_Liverpool();
	$Li=array_rand($Liverpool[0]);
	$Liverpool=$Liverpool[0][$Li];

	//valor Juventus
	$Juventus=$this->Valor_equipos->valor_Juventus();
	$Ju=array_rand($Juventus[0]);
	$Juventus=$Juventus[0][$Ju];

	//valor Sevilla
	$Sevilla=$this->Valor_equipos->valor_Sevilla();
	$se=array_rand($Sevilla[0]);
	$Sevilla=$Sevilla[0][$se];

	//valor R_Madrid
	$R_Madrid=$this->Valor_equipos->valor_R_Madrid();
	$R=array_rand($R_Madrid[0]);
	$R_Madrid=$R_Madrid[0][$R];

	//valor Chelsea
	$Chelsea=$this->Valor_equipos->valor_Chelsea();
	$che=array_rand($Chelsea[0]);
	$Chelsea=$Chelsea[0][$che];

	//valor O_Lyon
	$O_Lyon=$this->Valor_equipos->valor_O_Lyon();
	$OL=array_rand($O_Lyon[0]);
	$O_Lyon=$O_Lyon[0][$OL];

	///recogemos el estado de jornada si es true o falso la pasamos a la vista para generar los resultados en caso de que la jornada este en falso,una vez se genere el resultado pasa a estado true ya que es jornada se ha jugado

	$this->load->model("Jornadas_m");
	$jornada=$this->Jornadas_m->select_jornadas();

	///cogemos los valores de la jornada para mostrarlos siempre y cuando este en true
	$this->load->model("Puntos_Goles");
	$resultados=$this->Puntos_Goles->mostrar_resultados("jornada24");

	///seleccionamos el estado de los cobros

	$estado_cobros=$this->Puntos_Goles->estado_cobro();

	////seleccionar el estado del equipo si lo ha escogido alguien o no para que no introduzca los goles automaticamente
	$this->load->model("E_usuarios");
	$escogido=$this->E_usuarios->Equipo_estadotrue();

    
	$this->load->model("Enfrentamientos");
	$estado=$this->Enfrentamientos->estado_liga();
		if($estado["estado"]==false){
			header("location:".site_url('Inicio_de_liga/Inicio_liga')."");
		}
	$enfrentamientos=$this->Enfrentamientos->equiposenfrentamientos();
	$html=$this->load->view("theme/jornada24.php",compact("enfrentamientos","Milan","Valencia","PSG","Bayer_Munich","Barcelona","Ajax","B_Dormunt","M_United","M_City","Arsenal","Oporto","At_Madrid","I_Milan","Tottenham","Liverpool","Juventus","Sevilla","R_Madrid","Chelsea","O_Lyon","jornada","resultados","escogido","estado_cobros","logueado","mercado"),true);
	$conte["contenido"]=$html;
	$this->load->view("panel.php",$conte);
}function jornada25(){
	 $this->load->model("Enfrentamientos");
     $mercado=$this->Enfrentamientos->mercadofichajes();
	$logueado=$this->session->userdata("sesionid");
	      	if(!isset($logueado)){
	      		header("location:".site_url('Usuariosl/login')."");
	      	}  $sin_asignar=$this->session->userdata("equipo_asig");
	     if($sin_asignar==false){
	     		header("location:".site_url('Usuariosl/elegir_equipo/'.$logueado)."");
	     	}
	     
	////recogemos los valores de lo equipos
	$this->load->model("Valor_equipos");
	// valor milan
	$Milan=$this->Valor_equipos->valor_Milan();
	$mil=array_rand($Milan[0]);
	$Milan=$Milan[0][$mil];

	///valor valencia
	$Valencia=$this->Valor_equipos->valor_Valencia();
	$val=array_rand($Valencia[0]);
	$Valencia=$Valencia[0][$val];

	//valor PSG
	$PSG=$this->Valor_equipos->valor_PSG();
	$p=array_rand($PSG[0]);
	$PSG=$PSG[0][$p];

	//valor bayer_munich
	$Bayer_Munich=$this->Valor_equipos->valor_Bayer_Munich();
	$bayer=array_rand($Bayer_Munich[0]);
	$Bayer_Munich=$Bayer_Munich[0][$bayer];

	// valor Barcelona
	$Barcelona=$this->Valor_equipos->valor_Barcelona();
	$Bar=array_rand($Barcelona[0]);
	$Barcelona=$Barcelona[0][$Bar];

	//valor Ajax
	$Ajax=$this->Valor_equipos->valor_Ajax();
	$A=array_rand($Ajax[0]);
	$Ajax=$Ajax[0][$A];

	//valor Borusia dormunt
	$B_Dormunt=$this->Valor_equipos->valor_B_Dormunt();
	$B=array_rand($B_Dormunt[0]);
	$B_Dormunt=$B_Dormunt[0][$B];

	//valor M_united
	$M_United=$this->Valor_equipos->valor_M_United();
	$M=array_rand($M_United[0]);
	$M_United=$M_United[0][$M];

	//valor M_City
	$M_City=$this->Valor_equipos->valor_M_City();
	$M_C=array_rand($M_City[0]);
	$M_City=$M_City[0][$M_C];

	//valor Arsenal
	$Arsenal=$this->Valor_equipos->valor_Arsenal();
	$Ar=array_rand($Arsenal[0]);
	$Arsenal=$Arsenal[0][$Ar];

	//valor Oporto
	$Oporto=$this->Valor_equipos->valor_Oporto();
	$Op=array_rand($Oporto[0]);
	$Oporto=$Oporto[0][$Op];

	//valor Atletico de Madrid
	$At_Madrid=$this->Valor_equipos->valor_At_Madrid();
	$AT=array_rand($At_Madrid[0]);
	$At_Madrid=$At_Madrid[0][$AT];

	//valor I_Milan
	$I_Milan=$this->Valor_equipos->valor_I_Milan();
	$I=array_rand($I_Milan[0]);
	$I_Milan=$I_Milan[0][$I];

	//valor Tottenham
	$Tottenham=$this->Valor_equipos->valor_Tottenham();
	$T=array_rand($Tottenham[0]);
	$Tottenham=$Tottenham[0][$T];

	//valor Livepool
	$Liverpool=$this->Valor_equipos->valor_Liverpool();
	$Li=array_rand($Liverpool[0]);
	$Liverpool=$Liverpool[0][$Li];

	//valor Juventus
	$Juventus=$this->Valor_equipos->valor_Juventus();
	$Ju=array_rand($Juventus[0]);
	$Juventus=$Juventus[0][$Ju];

	//valor Sevilla
	$Sevilla=$this->Valor_equipos->valor_Sevilla();
	$se=array_rand($Sevilla[0]);
	$Sevilla=$Sevilla[0][$se];

	//valor R_Madrid
	$R_Madrid=$this->Valor_equipos->valor_R_Madrid();
	$R=array_rand($R_Madrid[0]);
	$R_Madrid=$R_Madrid[0][$R];

	//valor Chelsea
	$Chelsea=$this->Valor_equipos->valor_Chelsea();
	$che=array_rand($Chelsea[0]);
	$Chelsea=$Chelsea[0][$che];

	//valor O_Lyon
	$O_Lyon=$this->Valor_equipos->valor_O_Lyon();
	$OL=array_rand($O_Lyon[0]);
	$O_Lyon=$O_Lyon[0][$OL];

	///recogemos el estado de jornada si es true o falso la pasamos a la vista para generar los resultados en caso de que la jornada este en falso,una vez se genere el resultado pasa a estado true ya que es jornada se ha jugado

	$this->load->model("Jornadas_m");
	$jornada=$this->Jornadas_m->select_jornadas();

	///cogemos los valores de la jornada para mostrarlos siempre y cuando este en true
	$this->load->model("Puntos_Goles");
	$resultados=$this->Puntos_Goles->mostrar_resultados("jornada25");

	////seleccionar el estado del equipo si lo ha escogido alguien o no para que no introduzca los goles automaticamente
	$this->load->model("E_usuarios");
	$escogido=$this->E_usuarios->Equipo_estadotrue();

    
	$this->load->model("Enfrentamientos");
	$estado=$this->Enfrentamientos->estado_liga();
		if($estado["estado"]==false){
			header("location:".site_url('Inicio_de_liga/Inicio_liga')."");
		}
	$enfrentamientos=$this->Enfrentamientos->equiposenfrentamientos();
	$html=$this->load->view("theme/jornada25.php",compact("enfrentamientos","Milan","Valencia","PSG","Bayer_Munich","Barcelona","Ajax","B_Dormunt","M_United","M_City","Arsenal","Oporto","At_Madrid","I_Milan","Tottenham","Liverpool","Juventus","Sevilla","R_Madrid","Chelsea","O_Lyon","jornada","resultados","escogido","logueado","mercado"),true);
	$conte["contenido"]=$html;
	$this->load->view("panel.php",$conte);
}function jornada26(){
	 $this->load->model("Enfrentamientos");
     $mercado=$this->Enfrentamientos->mercadofichajes();
	$logueado=$this->session->userdata("sesionid");
	      	if(!isset($logueado)){
	      		header("location:".site_url('Usuariosl/login')."");
	      	}  $sin_asignar=$this->session->userdata("equipo_asig");
	     if($sin_asignar==false){
	     		header("location:".site_url('Usuariosl/elegir_equipo/'.$logueado)."");
	     	}
	     
	////recogemos los valores de lo equipos
	$this->load->model("Valor_equipos");
	// valor milan
	$Milan=$this->Valor_equipos->valor_Milan();
	$mil=array_rand($Milan[0]);
	$Milan=$Milan[0][$mil];

	///valor valencia
	$Valencia=$this->Valor_equipos->valor_Valencia();
	$val=array_rand($Valencia[0]);
	$Valencia=$Valencia[0][$val];

	//valor PSG
	$PSG=$this->Valor_equipos->valor_PSG();
	$p=array_rand($PSG[0]);
	$PSG=$PSG[0][$p];

	//valor bayer_munich
	$Bayer_Munich=$this->Valor_equipos->valor_Bayer_Munich();
	$bayer=array_rand($Bayer_Munich[0]);
	$Bayer_Munich=$Bayer_Munich[0][$bayer];

	// valor Barcelona
	$Barcelona=$this->Valor_equipos->valor_Barcelona();
	$Bar=array_rand($Barcelona[0]);
	$Barcelona=$Barcelona[0][$Bar];

	//valor Ajax
	$Ajax=$this->Valor_equipos->valor_Ajax();
	$A=array_rand($Ajax[0]);
	$Ajax=$Ajax[0][$A];

	//valor Borusia dormunt
	$B_Dormunt=$this->Valor_equipos->valor_B_Dormunt();
	$B=array_rand($B_Dormunt[0]);
	$B_Dormunt=$B_Dormunt[0][$B];

	//valor M_united
	$M_United=$this->Valor_equipos->valor_M_United();
	$M=array_rand($M_United[0]);
	$M_United=$M_United[0][$M];

	//valor M_City
	$M_City=$this->Valor_equipos->valor_M_City();
	$M_C=array_rand($M_City[0]);
	$M_City=$M_City[0][$M_C];

	//valor Arsenal
	$Arsenal=$this->Valor_equipos->valor_Arsenal();
	$Ar=array_rand($Arsenal[0]);
	$Arsenal=$Arsenal[0][$Ar];

	//valor Oporto
	$Oporto=$this->Valor_equipos->valor_Oporto();
	$Op=array_rand($Oporto[0]);
	$Oporto=$Oporto[0][$Op];

	//valor Atletico de Madrid
	$At_Madrid=$this->Valor_equipos->valor_At_Madrid();
	$AT=array_rand($At_Madrid[0]);
	$At_Madrid=$At_Madrid[0][$AT];

	//valor I_Milan
	$I_Milan=$this->Valor_equipos->valor_I_Milan();
	$I=array_rand($I_Milan[0]);
	$I_Milan=$I_Milan[0][$I];

	//valor Tottenham
	$Tottenham=$this->Valor_equipos->valor_Tottenham();
	$T=array_rand($Tottenham[0]);
	$Tottenham=$Tottenham[0][$T];

	//valor Livepool
	$Liverpool=$this->Valor_equipos->valor_Liverpool();
	$Li=array_rand($Liverpool[0]);
	$Liverpool=$Liverpool[0][$Li];

	//valor Juventus
	$Juventus=$this->Valor_equipos->valor_Juventus();
	$Ju=array_rand($Juventus[0]);
	$Juventus=$Juventus[0][$Ju];

	//valor Sevilla
	$Sevilla=$this->Valor_equipos->valor_Sevilla();
	$se=array_rand($Sevilla[0]);
	$Sevilla=$Sevilla[0][$se];

	//valor R_Madrid
	$R_Madrid=$this->Valor_equipos->valor_R_Madrid();
	$R=array_rand($R_Madrid[0]);
	$R_Madrid=$R_Madrid[0][$R];

	//valor Chelsea
	$Chelsea=$this->Valor_equipos->valor_Chelsea();
	$che=array_rand($Chelsea[0]);
	$Chelsea=$Chelsea[0][$che];

	//valor O_Lyon
	$O_Lyon=$this->Valor_equipos->valor_O_Lyon();
	$OL=array_rand($O_Lyon[0]);
	$O_Lyon=$O_Lyon[0][$OL];

	///recogemos el estado de jornada si es true o falso la pasamos a la vista para generar los resultados en caso de que la jornada este en falso,una vez se genere el resultado pasa a estado true ya que es jornada se ha jugado

	$this->load->model("Jornadas_m");
	$jornada=$this->Jornadas_m->select_jornadas();

	///cogemos los valores de la jornada para mostrarlos siempre y cuando este en true
	$this->load->model("Puntos_Goles");
	$resultados=$this->Puntos_Goles->mostrar_resultados("jornada26");

	////seleccionar el estado del equipo si lo ha escogido alguien o no para que no introduzca los goles automaticamente
	$this->load->model("E_usuarios");
	$escogido=$this->E_usuarios->Equipo_estadotrue();

    
	$this->load->model("Enfrentamientos");
	$estado=$this->Enfrentamientos->estado_liga();
		if($estado["estado"]==false){
			header("location:".site_url('Inicio_de_liga/Inicio_liga')."");
		}
	$enfrentamientos=$this->Enfrentamientos->equiposenfrentamientos();
	$html=$this->load->view("theme/jornada26.php",compact("enfrentamientos","Milan","Valencia","PSG","Bayer_Munich","Barcelona","Ajax","B_Dormunt","M_United","M_City","Arsenal","Oporto","At_Madrid","I_Milan","Tottenham","Liverpool","Juventus","Sevilla","R_Madrid","Chelsea","O_Lyon","jornada","resultados","escogido","logueado","mercado"),true);
	$conte["contenido"]=$html;
	$this->load->view("panel.php",$conte);
}function jornada27(){
	 $this->load->model("Enfrentamientos");
     $mercado=$this->Enfrentamientos->mercadofichajes();
	$logueado=$this->session->userdata("sesionid");
	      	if(!isset($logueado)){
	      		header("location:".site_url('Usuariosl/login')."");
	      	}  $sin_asignar=$this->session->userdata("equipo_asig");
	     if($sin_asignar==false){
	     		header("location:".site_url('Usuariosl/elegir_equipo/'.$logueado)."");
	     	}
	     
	////recogemos los valores de lo equipos
	$this->load->model("Valor_equipos");
	// valor milan
	$Milan=$this->Valor_equipos->valor_Milan();
	$mil=array_rand($Milan[0]);
	$Milan=$Milan[0][$mil];

	///valor valencia
	$Valencia=$this->Valor_equipos->valor_Valencia();
	$val=array_rand($Valencia[0]);
	$Valencia=$Valencia[0][$val];

	//valor PSG
	$PSG=$this->Valor_equipos->valor_PSG();
	$p=array_rand($PSG[0]);
	$PSG=$PSG[0][$p];

	//valor bayer_munich
	$Bayer_Munich=$this->Valor_equipos->valor_Bayer_Munich();
	$bayer=array_rand($Bayer_Munich[0]);
	$Bayer_Munich=$Bayer_Munich[0][$bayer];

	// valor Barcelona
	$Barcelona=$this->Valor_equipos->valor_Barcelona();
	$Bar=array_rand($Barcelona[0]);
	$Barcelona=$Barcelona[0][$Bar];

	//valor Ajax
	$Ajax=$this->Valor_equipos->valor_Ajax();
	$A=array_rand($Ajax[0]);
	$Ajax=$Ajax[0][$A];

	//valor Borusia dormunt
	$B_Dormunt=$this->Valor_equipos->valor_B_Dormunt();
	$B=array_rand($B_Dormunt[0]);
	$B_Dormunt=$B_Dormunt[0][$B];

	//valor M_united
	$M_United=$this->Valor_equipos->valor_M_United();
	$M=array_rand($M_United[0]);
	$M_United=$M_United[0][$M];

	//valor M_City
	$M_City=$this->Valor_equipos->valor_M_City();
	$M_C=array_rand($M_City[0]);
	$M_City=$M_City[0][$M_C];

	//valor Arsenal
	$Arsenal=$this->Valor_equipos->valor_Arsenal();
	$Ar=array_rand($Arsenal[0]);
	$Arsenal=$Arsenal[0][$Ar];

	//valor Oporto
	$Oporto=$this->Valor_equipos->valor_Oporto();
	$Op=array_rand($Oporto[0]);
	$Oporto=$Oporto[0][$Op];

	//valor Atletico de Madrid
	$At_Madrid=$this->Valor_equipos->valor_At_Madrid();
	$AT=array_rand($At_Madrid[0]);
	$At_Madrid=$At_Madrid[0][$AT];

	//valor I_Milan
	$I_Milan=$this->Valor_equipos->valor_I_Milan();
	$I=array_rand($I_Milan[0]);
	$I_Milan=$I_Milan[0][$I];

	//valor Tottenham
	$Tottenham=$this->Valor_equipos->valor_Tottenham();
	$T=array_rand($Tottenham[0]);
	$Tottenham=$Tottenham[0][$T];

	//valor Livepool
	$Liverpool=$this->Valor_equipos->valor_Liverpool();
	$Li=array_rand($Liverpool[0]);
	$Liverpool=$Liverpool[0][$Li];

	//valor Juventus
	$Juventus=$this->Valor_equipos->valor_Juventus();
	$Ju=array_rand($Juventus[0]);
	$Juventus=$Juventus[0][$Ju];

	//valor Sevilla
	$Sevilla=$this->Valor_equipos->valor_Sevilla();
	$se=array_rand($Sevilla[0]);
	$Sevilla=$Sevilla[0][$se];

	//valor R_Madrid
	$R_Madrid=$this->Valor_equipos->valor_R_Madrid();
	$R=array_rand($R_Madrid[0]);
	$R_Madrid=$R_Madrid[0][$R];

	//valor Chelsea
	$Chelsea=$this->Valor_equipos->valor_Chelsea();
	$che=array_rand($Chelsea[0]);
	$Chelsea=$Chelsea[0][$che];

	//valor O_Lyon
	$O_Lyon=$this->Valor_equipos->valor_O_Lyon();
	$OL=array_rand($O_Lyon[0]);
	$O_Lyon=$O_Lyon[0][$OL];

	///recogemos el estado de jornada si es true o falso la pasamos a la vista para generar los resultados en caso de que la jornada este en falso,una vez se genere el resultado pasa a estado true ya que es jornada se ha jugado

	$this->load->model("Jornadas_m");
	$jornada=$this->Jornadas_m->select_jornadas();

	///cogemos los valores de la jornada para mostrarlos siempre y cuando este en true
	$this->load->model("Puntos_Goles");
	$resultados=$this->Puntos_Goles->mostrar_resultados("jornada27");

	////seleccionar el estado del equipo si lo ha escogido alguien o no para que no introduzca los goles automaticamente
	$this->load->model("E_usuarios");
	$escogido=$this->E_usuarios->Equipo_estadotrue();

    
	$this->load->model("Enfrentamientos");
	$estado=$this->Enfrentamientos->estado_liga();
		if($estado["estado"]==false){
			header("location:".site_url('Inicio_de_liga/Inicio_liga')."");
		}
	$enfrentamientos=$this->Enfrentamientos->equiposenfrentamientos();
	$html=$this->load->view("theme/jornada27.php",compact("enfrentamientos","Milan","Valencia","PSG","Bayer_Munich","Barcelona","Ajax","B_Dormunt","M_United","M_City","Arsenal","Oporto","At_Madrid","I_Milan","Tottenham","Liverpool","Juventus","Sevilla","R_Madrid","Chelsea","O_Lyon","jornada","resultados","escogido","logueado","mercado"),true);
	$conte["contenido"]=$html;
	$this->load->view("panel.php",$conte);
}function jornada28(){
	 $this->load->model("Enfrentamientos");
     $mercado=$this->Enfrentamientos->mercadofichajes();
	$logueado=$this->session->userdata("sesionid");
	      	if(!isset($logueado)){
	      		header("location:".site_url('Usuariosl/login')."");
	      	}  $sin_asignar=$this->session->userdata("equipo_asig");
	     if($sin_asignar==false){
	     		header("location:".site_url('Usuariosl/elegir_equipo/'.$logueado)."");
	     	}
	     
	////recogemos los valores de lo equipos
	$this->load->model("Valor_equipos");
	// valor milan
	$Milan=$this->Valor_equipos->valor_Milan();
	$mil=array_rand($Milan[0]);
	$Milan=$Milan[0][$mil];

	///valor valencia
	$Valencia=$this->Valor_equipos->valor_Valencia();
	$val=array_rand($Valencia[0]);
	$Valencia=$Valencia[0][$val];

	//valor PSG
	$PSG=$this->Valor_equipos->valor_PSG();
	$p=array_rand($PSG[0]);
	$PSG=$PSG[0][$p];

	//valor bayer_munich
	$Bayer_Munich=$this->Valor_equipos->valor_Bayer_Munich();
	$bayer=array_rand($Bayer_Munich[0]);
	$Bayer_Munich=$Bayer_Munich[0][$bayer];

	// valor Barcelona
	$Barcelona=$this->Valor_equipos->valor_Barcelona();
	$Bar=array_rand($Barcelona[0]);
	$Barcelona=$Barcelona[0][$Bar];

	//valor Ajax
	$Ajax=$this->Valor_equipos->valor_Ajax();
	$A=array_rand($Ajax[0]);
	$Ajax=$Ajax[0][$A];

	//valor Borusia dormunt
	$B_Dormunt=$this->Valor_equipos->valor_B_Dormunt();
	$B=array_rand($B_Dormunt[0]);
	$B_Dormunt=$B_Dormunt[0][$B];

	//valor M_united
	$M_United=$this->Valor_equipos->valor_M_United();
	$M=array_rand($M_United[0]);
	$M_United=$M_United[0][$M];

	//valor M_City
	$M_City=$this->Valor_equipos->valor_M_City();
	$M_C=array_rand($M_City[0]);
	$M_City=$M_City[0][$M_C];

	//valor Arsenal
	$Arsenal=$this->Valor_equipos->valor_Arsenal();
	$Ar=array_rand($Arsenal[0]);
	$Arsenal=$Arsenal[0][$Ar];

	//valor Oporto
	$Oporto=$this->Valor_equipos->valor_Oporto();
	$Op=array_rand($Oporto[0]);
	$Oporto=$Oporto[0][$Op];

	//valor Atletico de Madrid
	$At_Madrid=$this->Valor_equipos->valor_At_Madrid();
	$AT=array_rand($At_Madrid[0]);
	$At_Madrid=$At_Madrid[0][$AT];

	//valor I_Milan
	$I_Milan=$this->Valor_equipos->valor_I_Milan();
	$I=array_rand($I_Milan[0]);
	$I_Milan=$I_Milan[0][$I];

	//valor Tottenham
	$Tottenham=$this->Valor_equipos->valor_Tottenham();
	$T=array_rand($Tottenham[0]);
	$Tottenham=$Tottenham[0][$T];

	//valor Livepool
	$Liverpool=$this->Valor_equipos->valor_Liverpool();
	$Li=array_rand($Liverpool[0]);
	$Liverpool=$Liverpool[0][$Li];

	//valor Juventus
	$Juventus=$this->Valor_equipos->valor_Juventus();
	$Ju=array_rand($Juventus[0]);
	$Juventus=$Juventus[0][$Ju];

	//valor Sevilla
	$Sevilla=$this->Valor_equipos->valor_Sevilla();
	$se=array_rand($Sevilla[0]);
	$Sevilla=$Sevilla[0][$se];

	//valor R_Madrid
	$R_Madrid=$this->Valor_equipos->valor_R_Madrid();
	$R=array_rand($R_Madrid[0]);
	$R_Madrid=$R_Madrid[0][$R];

	//valor Chelsea
	$Chelsea=$this->Valor_equipos->valor_Chelsea();
	$che=array_rand($Chelsea[0]);
	$Chelsea=$Chelsea[0][$che];

	//valor O_Lyon
	$O_Lyon=$this->Valor_equipos->valor_O_Lyon();
	$OL=array_rand($O_Lyon[0]);
	$O_Lyon=$O_Lyon[0][$OL];

	///recogemos el estado de jornada si es true o falso la pasamos a la vista para generar los resultados en caso de que la jornada este en falso,una vez se genere el resultado pasa a estado true ya que es jornada se ha jugado

	$this->load->model("Jornadas_m");
	$jornada=$this->Jornadas_m->select_jornadas();

	///cogemos los valores de la jornada para mostrarlos siempre y cuando este en true
	$this->load->model("Puntos_Goles");
	$resultados=$this->Puntos_Goles->mostrar_resultados("jornada28");

	///seleccionamos el estado de los cobros

	$estado_cobros=$this->Puntos_Goles->estado_cobro();

	////seleccionar el estado del equipo si lo ha escogido alguien o no para que no introduzca los goles automaticamente
	$this->load->model("E_usuarios");
	$escogido=$this->E_usuarios->Equipo_estadotrue();

    
	$this->load->model("Enfrentamientos");
	$estado=$this->Enfrentamientos->estado_liga();
		if($estado["estado"]==false){
			header("location:".site_url('Inicio_de_liga/Inicio_liga')."");
		}
	$enfrentamientos=$this->Enfrentamientos->equiposenfrentamientos();
	$html=$this->load->view("theme/jornada28.php",compact("enfrentamientos","Milan","Valencia","PSG","Bayer_Munich","Barcelona","Ajax","B_Dormunt","M_United","M_City","Arsenal","Oporto","At_Madrid","I_Milan","Tottenham","Liverpool","Juventus","Sevilla","R_Madrid","Chelsea","O_Lyon","jornada","resultados","escogido","estado_cobros","logueado","mercado"),true);
	$conte["contenido"]=$html;
	$this->load->view("panel.php",$conte);
}function jornada29(){
	 $this->load->model("Enfrentamientos");
     $mercado=$this->Enfrentamientos->mercadofichajes();
	$logueado=$this->session->userdata("sesionid");
	      	if(!isset($logueado)){
	      		header("location:".site_url('Usuariosl/login')."");
	      	}  $sin_asignar=$this->session->userdata("equipo_asig");
	     if($sin_asignar==false){
	     		header("location:".site_url('Usuariosl/elegir_equipo/'.$logueado)."");
	     	}
	     
	////recogemos los valores de lo equipos
	$this->load->model("Valor_equipos");
	// valor milan
	$Milan=$this->Valor_equipos->valor_Milan();
	$mil=array_rand($Milan[0]);
	$Milan=$Milan[0][$mil];

	///valor valencia
	$Valencia=$this->Valor_equipos->valor_Valencia();
	$val=array_rand($Valencia[0]);
	$Valencia=$Valencia[0][$val];

	//valor PSG
	$PSG=$this->Valor_equipos->valor_PSG();
	$p=array_rand($PSG[0]);
	$PSG=$PSG[0][$p];

	//valor bayer_munich
	$Bayer_Munich=$this->Valor_equipos->valor_Bayer_Munich();
	$bayer=array_rand($Bayer_Munich[0]);
	$Bayer_Munich=$Bayer_Munich[0][$bayer];

	// valor Barcelona
	$Barcelona=$this->Valor_equipos->valor_Barcelona();
	$Bar=array_rand($Barcelona[0]);
	$Barcelona=$Barcelona[0][$Bar];

	//valor Ajax
	$Ajax=$this->Valor_equipos->valor_Ajax();
	$A=array_rand($Ajax[0]);
	$Ajax=$Ajax[0][$A];

	//valor Borusia dormunt
	$B_Dormunt=$this->Valor_equipos->valor_B_Dormunt();
	$B=array_rand($B_Dormunt[0]);
	$B_Dormunt=$B_Dormunt[0][$B];

	//valor M_united
	$M_United=$this->Valor_equipos->valor_M_United();
	$M=array_rand($M_United[0]);
	$M_United=$M_United[0][$M];

	//valor M_City
	$M_City=$this->Valor_equipos->valor_M_City();
	$M_C=array_rand($M_City[0]);
	$M_City=$M_City[0][$M_C];

	//valor Arsenal
	$Arsenal=$this->Valor_equipos->valor_Arsenal();
	$Ar=array_rand($Arsenal[0]);
	$Arsenal=$Arsenal[0][$Ar];

	//valor Oporto
	$Oporto=$this->Valor_equipos->valor_Oporto();
	$Op=array_rand($Oporto[0]);
	$Oporto=$Oporto[0][$Op];

	//valor Atletico de Madrid
	$At_Madrid=$this->Valor_equipos->valor_At_Madrid();
	$AT=array_rand($At_Madrid[0]);
	$At_Madrid=$At_Madrid[0][$AT];

	//valor I_Milan
	$I_Milan=$this->Valor_equipos->valor_I_Milan();
	$I=array_rand($I_Milan[0]);
	$I_Milan=$I_Milan[0][$I];

	//valor Tottenham
	$Tottenham=$this->Valor_equipos->valor_Tottenham();
	$T=array_rand($Tottenham[0]);
	$Tottenham=$Tottenham[0][$T];

	//valor Livepool
	$Liverpool=$this->Valor_equipos->valor_Liverpool();
	$Li=array_rand($Liverpool[0]);
	$Liverpool=$Liverpool[0][$Li];

	//valor Juventus
	$Juventus=$this->Valor_equipos->valor_Juventus();
	$Ju=array_rand($Juventus[0]);
	$Juventus=$Juventus[0][$Ju];

	//valor Sevilla
	$Sevilla=$this->Valor_equipos->valor_Sevilla();
	$se=array_rand($Sevilla[0]);
	$Sevilla=$Sevilla[0][$se];

	//valor R_Madrid
	$R_Madrid=$this->Valor_equipos->valor_R_Madrid();
	$R=array_rand($R_Madrid[0]);
	$R_Madrid=$R_Madrid[0][$R];

	//valor Chelsea
	$Chelsea=$this->Valor_equipos->valor_Chelsea();
	$che=array_rand($Chelsea[0]);
	$Chelsea=$Chelsea[0][$che];

	//valor O_Lyon
	$O_Lyon=$this->Valor_equipos->valor_O_Lyon();
	$OL=array_rand($O_Lyon[0]);
	$O_Lyon=$O_Lyon[0][$OL];

	///recogemos el estado de jornada si es true o falso la pasamos a la vista para generar los resultados en caso de que la jornada este en falso,una vez se genere el resultado pasa a estado true ya que es jornada se ha jugado

	$this->load->model("Jornadas_m");
	$jornada=$this->Jornadas_m->select_jornadas();

	///cogemos los valores de la jornada para mostrarlos siempre y cuando este en true
	$this->load->model("Puntos_Goles");
	$resultados=$this->Puntos_Goles->mostrar_resultados("jornada29");

	////seleccionar el estado del equipo si lo ha escogido alguien o no para que no introduzca los goles automaticamente
	$this->load->model("E_usuarios");
	$escogido=$this->E_usuarios->Equipo_estadotrue();

    
	$this->load->model("Enfrentamientos");
	$estado=$this->Enfrentamientos->estado_liga();
		if($estado["estado"]==false){
			header("location:".site_url('Inicio_de_liga/Inicio_liga')."");
		}
	$enfrentamientos=$this->Enfrentamientos->equiposenfrentamientos();
	$html=$this->load->view("theme/jornada29.php",compact("enfrentamientos","Milan","Valencia","PSG","Bayer_Munich","Barcelona","Ajax","B_Dormunt","M_United","M_City","Arsenal","Oporto","At_Madrid","I_Milan","Tottenham","Liverpool","Juventus","Sevilla","R_Madrid","Chelsea","O_Lyon","jornada","resultados","escogido","logueado","mercado"),true);
	$conte["contenido"]=$html;
	$this->load->view("panel.php",$conte);
}function jornada30(){
	 $this->load->model("Enfrentamientos");
     $mercado=$this->Enfrentamientos->mercadofichajes();
	$logueado=$this->session->userdata("sesionid");
	      	if(!isset($logueado)){
	      		header("location:".site_url('Usuariosl/login')."");
	      	}  $sin_asignar=$this->session->userdata("equipo_asig");
	     if($sin_asignar==false){
	     		header("location:".site_url('Usuariosl/elegir_equipo/'.$logueado)."");
	     	}
	     
	////recogemos los valores de lo equipos
	$this->load->model("Valor_equipos");
	// valor milan
	$Milan=$this->Valor_equipos->valor_Milan();
	$mil=array_rand($Milan[0]);
	$Milan=$Milan[0][$mil];

	///valor valencia
	$Valencia=$this->Valor_equipos->valor_Valencia();
	$val=array_rand($Valencia[0]);
	$Valencia=$Valencia[0][$val];

	//valor PSG
	$PSG=$this->Valor_equipos->valor_PSG();
	$p=array_rand($PSG[0]);
	$PSG=$PSG[0][$p];

	//valor bayer_munich
	$Bayer_Munich=$this->Valor_equipos->valor_Bayer_Munich();
	$bayer=array_rand($Bayer_Munich[0]);
	$Bayer_Munich=$Bayer_Munich[0][$bayer];

	// valor Barcelona
	$Barcelona=$this->Valor_equipos->valor_Barcelona();
	$Bar=array_rand($Barcelona[0]);
	$Barcelona=$Barcelona[0][$Bar];

	//valor Ajax
	$Ajax=$this->Valor_equipos->valor_Ajax();
	$A=array_rand($Ajax[0]);
	$Ajax=$Ajax[0][$A];

	//valor Borusia dormunt
	$B_Dormunt=$this->Valor_equipos->valor_B_Dormunt();
	$B=array_rand($B_Dormunt[0]);
	$B_Dormunt=$B_Dormunt[0][$B];

	//valor M_united
	$M_United=$this->Valor_equipos->valor_M_United();
	$M=array_rand($M_United[0]);
	$M_United=$M_United[0][$M];

	//valor M_City
	$M_City=$this->Valor_equipos->valor_M_City();
	$M_C=array_rand($M_City[0]);
	$M_City=$M_City[0][$M_C];

	//valor Arsenal
	$Arsenal=$this->Valor_equipos->valor_Arsenal();
	$Ar=array_rand($Arsenal[0]);
	$Arsenal=$Arsenal[0][$Ar];

	//valor Oporto
	$Oporto=$this->Valor_equipos->valor_Oporto();
	$Op=array_rand($Oporto[0]);
	$Oporto=$Oporto[0][$Op];

	//valor Atletico de Madrid
	$At_Madrid=$this->Valor_equipos->valor_At_Madrid();
	$AT=array_rand($At_Madrid[0]);
	$At_Madrid=$At_Madrid[0][$AT];

	//valor I_Milan
	$I_Milan=$this->Valor_equipos->valor_I_Milan();
	$I=array_rand($I_Milan[0]);
	$I_Milan=$I_Milan[0][$I];

	//valor Tottenham
	$Tottenham=$this->Valor_equipos->valor_Tottenham();
	$T=array_rand($Tottenham[0]);
	$Tottenham=$Tottenham[0][$T];

	//valor Livepool
	$Liverpool=$this->Valor_equipos->valor_Liverpool();
	$Li=array_rand($Liverpool[0]);
	$Liverpool=$Liverpool[0][$Li];

	//valor Juventus
	$Juventus=$this->Valor_equipos->valor_Juventus();
	$Ju=array_rand($Juventus[0]);
	$Juventus=$Juventus[0][$Ju];

	//valor Sevilla
	$Sevilla=$this->Valor_equipos->valor_Sevilla();
	$se=array_rand($Sevilla[0]);
	$Sevilla=$Sevilla[0][$se];

	//valor R_Madrid
	$R_Madrid=$this->Valor_equipos->valor_R_Madrid();
	$R=array_rand($R_Madrid[0]);
	$R_Madrid=$R_Madrid[0][$R];

	//valor Chelsea
	$Chelsea=$this->Valor_equipos->valor_Chelsea();
	$che=array_rand($Chelsea[0]);
	$Chelsea=$Chelsea[0][$che];

	//valor O_Lyon
	$O_Lyon=$this->Valor_equipos->valor_O_Lyon();
	$OL=array_rand($O_Lyon[0]);
	$O_Lyon=$O_Lyon[0][$OL];

	///recogemos el estado de jornada si es true o falso la pasamos a la vista para generar los resultados en caso de que la jornada este en falso,una vez se genere el resultado pasa a estado true ya que es jornada se ha jugado

	$this->load->model("Jornadas_m");
	$jornada=$this->Jornadas_m->select_jornadas();

	///cogemos los valores de la jornada para mostrarlos siempre y cuando este en true
	$this->load->model("Puntos_Goles");
	$resultados=$this->Puntos_Goles->mostrar_resultados("jornada30");

	////seleccionar el estado del equipo si lo ha escogido alguien o no para que no introduzca los goles automaticamente
	$this->load->model("E_usuarios");
	$escogido=$this->E_usuarios->Equipo_estadotrue();

    
	$this->load->model("Enfrentamientos");
	$estado=$this->Enfrentamientos->estado_liga();
		if($estado["estado"]==false){
			header("location:".site_url('Inicio_de_liga/Inicio_liga')."");
		}
	$enfrentamientos=$this->Enfrentamientos->equiposenfrentamientos();
	$html=$this->load->view("theme/jornada30.php",compact("enfrentamientos","Milan","Valencia","PSG","Bayer_Munich","Barcelona","Ajax","B_Dormunt","M_United","M_City","Arsenal","Oporto","At_Madrid","I_Milan","Tottenham","Liverpool","Juventus","Sevilla","R_Madrid","Chelsea","O_Lyon","jornada","resultados","escogido","logueado","mercado"),true);
	$conte["contenido"]=$html;
	$this->load->view("panel.php",$conte);
}function jornada31(){
	 $this->load->model("Enfrentamientos");
     $mercado=$this->Enfrentamientos->mercadofichajes();
	$logueado=$this->session->userdata("sesionid");
	      	if(!isset($logueado)){
	      		header("location:".site_url('Usuariosl/login')."");
	      	}  $sin_asignar=$this->session->userdata("equipo_asig");
	     if($sin_asignar==false){
	     		header("location:".site_url('Usuariosl/elegir_equipo/'.$logueado)."");
	     	}
	     
	////recogemos los valores de lo equipos
	$this->load->model("Valor_equipos");
	// valor milan
	$Milan=$this->Valor_equipos->valor_Milan();
	$mil=array_rand($Milan[0]);
	$Milan=$Milan[0][$mil];

	///valor valencia
	$Valencia=$this->Valor_equipos->valor_Valencia();
	$val=array_rand($Valencia[0]);
	$Valencia=$Valencia[0][$val];

	//valor PSG
	$PSG=$this->Valor_equipos->valor_PSG();
	$p=array_rand($PSG[0]);
	$PSG=$PSG[0][$p];

	//valor bayer_munich
	$Bayer_Munich=$this->Valor_equipos->valor_Bayer_Munich();
	$bayer=array_rand($Bayer_Munich[0]);
	$Bayer_Munich=$Bayer_Munich[0][$bayer];

	// valor Barcelona
	$Barcelona=$this->Valor_equipos->valor_Barcelona();
	$Bar=array_rand($Barcelona[0]);
	$Barcelona=$Barcelona[0][$Bar];

	//valor Ajax
	$Ajax=$this->Valor_equipos->valor_Ajax();
	$A=array_rand($Ajax[0]);
	$Ajax=$Ajax[0][$A];

	//valor Borusia dormunt
	$B_Dormunt=$this->Valor_equipos->valor_B_Dormunt();
	$B=array_rand($B_Dormunt[0]);
	$B_Dormunt=$B_Dormunt[0][$B];

	//valor M_united
	$M_United=$this->Valor_equipos->valor_M_United();
	$M=array_rand($M_United[0]);
	$M_United=$M_United[0][$M];

	//valor M_City
	$M_City=$this->Valor_equipos->valor_M_City();
	$M_C=array_rand($M_City[0]);
	$M_City=$M_City[0][$M_C];

	//valor Arsenal
	$Arsenal=$this->Valor_equipos->valor_Arsenal();
	$Ar=array_rand($Arsenal[0]);
	$Arsenal=$Arsenal[0][$Ar];

	//valor Oporto
	$Oporto=$this->Valor_equipos->valor_Oporto();
	$Op=array_rand($Oporto[0]);
	$Oporto=$Oporto[0][$Op];

	//valor Atletico de Madrid
	$At_Madrid=$this->Valor_equipos->valor_At_Madrid();
	$AT=array_rand($At_Madrid[0]);
	$At_Madrid=$At_Madrid[0][$AT];

	//valor I_Milan
	$I_Milan=$this->Valor_equipos->valor_I_Milan();
	$I=array_rand($I_Milan[0]);
	$I_Milan=$I_Milan[0][$I];

	//valor Tottenham
	$Tottenham=$this->Valor_equipos->valor_Tottenham();
	$T=array_rand($Tottenham[0]);
	$Tottenham=$Tottenham[0][$T];

	//valor Livepool
	$Liverpool=$this->Valor_equipos->valor_Liverpool();
	$Li=array_rand($Liverpool[0]);
	$Liverpool=$Liverpool[0][$Li];

	//valor Juventus
	$Juventus=$this->Valor_equipos->valor_Juventus();
	$Ju=array_rand($Juventus[0]);
	$Juventus=$Juventus[0][$Ju];

	//valor Sevilla
	$Sevilla=$this->Valor_equipos->valor_Sevilla();
	$se=array_rand($Sevilla[0]);
	$Sevilla=$Sevilla[0][$se];

	//valor R_Madrid
	$R_Madrid=$this->Valor_equipos->valor_R_Madrid();
	$R=array_rand($R_Madrid[0]);
	$R_Madrid=$R_Madrid[0][$R];

	//valor Chelsea
	$Chelsea=$this->Valor_equipos->valor_Chelsea();
	$che=array_rand($Chelsea[0]);
	$Chelsea=$Chelsea[0][$che];

	//valor O_Lyon
	$O_Lyon=$this->Valor_equipos->valor_O_Lyon();
	$OL=array_rand($O_Lyon[0]);
	$O_Lyon=$O_Lyon[0][$OL];

	///recogemos el estado de jornada si es true o falso la pasamos a la vista para generar los resultados en caso de que la jornada este en falso,una vez se genere el resultado pasa a estado true ya que es jornada se ha jugado

	$this->load->model("Jornadas_m");
	$jornada=$this->Jornadas_m->select_jornadas();

	///cogemos los valores de la jornada para mostrarlos siempre y cuando este en true
	$this->load->model("Puntos_Goles");
	$resultados=$this->Puntos_Goles->mostrar_resultados("jornada31");

	////seleccionar el estado del equipo si lo ha escogido alguien o no para que no introduzca los goles automaticamente
	$this->load->model("E_usuarios");
	$escogido=$this->E_usuarios->Equipo_estadotrue();

    
	$this->load->model("Enfrentamientos");
	$estado=$this->Enfrentamientos->estado_liga();
		if($estado["estado"]==false){
			header("location:".site_url('Inicio_de_liga/Inicio_liga')."");
		}
	$enfrentamientos=$this->Enfrentamientos->equiposenfrentamientos();
	$html=$this->load->view("theme/jornada31.php",compact("enfrentamientos","Milan","Valencia","PSG","Bayer_Munich","Barcelona","Ajax","B_Dormunt","M_United","M_City","Arsenal","Oporto","At_Madrid","I_Milan","Tottenham","Liverpool","Juventus","Sevilla","R_Madrid","Chelsea","O_Lyon","jornada","resultados","escogido","logueado","mercado"),true);
	$conte["contenido"]=$html;
	$this->load->view("panel.php",$conte);
}function jornada32(){
	 $this->load->model("Enfrentamientos");
     $mercado=$this->Enfrentamientos->mercadofichajes();
	$logueado=$this->session->userdata("sesionid");
	      	if(!isset($logueado)){
	      		header("location:".site_url('Usuariosl/login')."");
	      	}  $sin_asignar=$this->session->userdata("equipo_asig");
	     if($sin_asignar==false){
	     		header("location:".site_url('Usuariosl/elegir_equipo/'.$logueado)."");
	     	}
	     
	////recogemos los valores de lo equipos
	$this->load->model("Valor_equipos");
	// valor milan
	$Milan=$this->Valor_equipos->valor_Milan();
	$mil=array_rand($Milan[0]);
	$Milan=$Milan[0][$mil];

	///valor valencia
	$Valencia=$this->Valor_equipos->valor_Valencia();
	$val=array_rand($Valencia[0]);
	$Valencia=$Valencia[0][$val];

	//valor PSG
	$PSG=$this->Valor_equipos->valor_PSG();
	$p=array_rand($PSG[0]);
	$PSG=$PSG[0][$p];

	//valor bayer_munich
	$Bayer_Munich=$this->Valor_equipos->valor_Bayer_Munich();
	$bayer=array_rand($Bayer_Munich[0]);
	$Bayer_Munich=$Bayer_Munich[0][$bayer];

	// valor Barcelona
	$Barcelona=$this->Valor_equipos->valor_Barcelona();
	$Bar=array_rand($Barcelona[0]);
	$Barcelona=$Barcelona[0][$Bar];

	//valor Ajax
	$Ajax=$this->Valor_equipos->valor_Ajax();
	$A=array_rand($Ajax[0]);
	$Ajax=$Ajax[0][$A];

	//valor Borusia dormunt
	$B_Dormunt=$this->Valor_equipos->valor_B_Dormunt();
	$B=array_rand($B_Dormunt[0]);
	$B_Dormunt=$B_Dormunt[0][$B];

	//valor M_united
	$M_United=$this->Valor_equipos->valor_M_United();
	$M=array_rand($M_United[0]);
	$M_United=$M_United[0][$M];

	//valor M_City
	$M_City=$this->Valor_equipos->valor_M_City();
	$M_C=array_rand($M_City[0]);
	$M_City=$M_City[0][$M_C];

	//valor Arsenal
	$Arsenal=$this->Valor_equipos->valor_Arsenal();
	$Ar=array_rand($Arsenal[0]);
	$Arsenal=$Arsenal[0][$Ar];

	//valor Oporto
	$Oporto=$this->Valor_equipos->valor_Oporto();
	$Op=array_rand($Oporto[0]);
	$Oporto=$Oporto[0][$Op];

	//valor Atletico de Madrid
	$At_Madrid=$this->Valor_equipos->valor_At_Madrid();
	$AT=array_rand($At_Madrid[0]);
	$At_Madrid=$At_Madrid[0][$AT];

	//valor I_Milan
	$I_Milan=$this->Valor_equipos->valor_I_Milan();
	$I=array_rand($I_Milan[0]);
	$I_Milan=$I_Milan[0][$I];

	//valor Tottenham
	$Tottenham=$this->Valor_equipos->valor_Tottenham();
	$T=array_rand($Tottenham[0]);
	$Tottenham=$Tottenham[0][$T];

	//valor Livepool
	$Liverpool=$this->Valor_equipos->valor_Liverpool();
	$Li=array_rand($Liverpool[0]);
	$Liverpool=$Liverpool[0][$Li];

	//valor Juventus
	$Juventus=$this->Valor_equipos->valor_Juventus();
	$Ju=array_rand($Juventus[0]);
	$Juventus=$Juventus[0][$Ju];

	//valor Sevilla
	$Sevilla=$this->Valor_equipos->valor_Sevilla();
	$se=array_rand($Sevilla[0]);
	$Sevilla=$Sevilla[0][$se];

	//valor R_Madrid
	$R_Madrid=$this->Valor_equipos->valor_R_Madrid();
	$R=array_rand($R_Madrid[0]);
	$R_Madrid=$R_Madrid[0][$R];

	//valor Chelsea
	$Chelsea=$this->Valor_equipos->valor_Chelsea();
	$che=array_rand($Chelsea[0]);
	$Chelsea=$Chelsea[0][$che];

	//valor O_Lyon
	$O_Lyon=$this->Valor_equipos->valor_O_Lyon();
	$OL=array_rand($O_Lyon[0]);
	$O_Lyon=$O_Lyon[0][$OL];

	///recogemos el estado de jornada si es true o falso la pasamos a la vista para generar los resultados en caso de que la jornada este en falso,una vez se genere el resultado pasa a estado true ya que es jornada se ha jugado

	$this->load->model("Jornadas_m");
	$jornada=$this->Jornadas_m->select_jornadas();

	///cogemos los valores de la jornada para mostrarlos siempre y cuando este en true
	$this->load->model("Puntos_Goles");
	$resultados=$this->Puntos_Goles->mostrar_resultados("jornada32");

	///seleccionamos el estado de los cobros

	$estado_cobros=$this->Puntos_Goles->estado_cobro();

	////seleccionar el estado del equipo si lo ha escogido alguien o no para que no introduzca los goles automaticamente
	$this->load->model("E_usuarios");
	$escogido=$this->E_usuarios->Equipo_estadotrue();

    
	$this->load->model("Enfrentamientos");
	$estado=$this->Enfrentamientos->estado_liga();
		if($estado["estado"]==false){
			header("location:".site_url('Inicio_de_liga/Inicio_liga')."");
		}
	$enfrentamientos=$this->Enfrentamientos->equiposenfrentamientos();
	$html=$this->load->view("theme/jornada32.php",compact("enfrentamientos","Milan","Valencia","PSG","Bayer_Munich","Barcelona","Ajax","B_Dormunt","M_United","M_City","Arsenal","Oporto","At_Madrid","I_Milan","Tottenham","Liverpool","Juventus","Sevilla","R_Madrid","Chelsea","O_Lyon","jornada","resultados","escogido","estado_cobros","logueado","mercado"),true);
	$conte["contenido"]=$html;
	$this->load->view("panel.php",$conte);
}function jornada33(){
	 $this->load->model("Enfrentamientos");
     $mercado=$this->Enfrentamientos->mercadofichajes();
	$logueado=$this->session->userdata("sesionid");
	      	if(!isset($logueado)){
	      		header("location:".site_url('Usuariosl/login')."");
	      	}  $sin_asignar=$this->session->userdata("equipo_asig");
	     if($sin_asignar==false){
	     		header("location:".site_url('Usuariosl/elegir_equipo/'.$logueado)."");
	     	}
	     
	////recogemos los valores de lo equipos
	$this->load->model("Valor_equipos");
	// valor milan
	$Milan=$this->Valor_equipos->valor_Milan();
	$mil=array_rand($Milan[0]);
	$Milan=$Milan[0][$mil];

	///valor valencia
	$Valencia=$this->Valor_equipos->valor_Valencia();
	$val=array_rand($Valencia[0]);
	$Valencia=$Valencia[0][$val];

	//valor PSG
	$PSG=$this->Valor_equipos->valor_PSG();
	$p=array_rand($PSG[0]);
	$PSG=$PSG[0][$p];

	//valor bayer_munich
	$Bayer_Munich=$this->Valor_equipos->valor_Bayer_Munich();
	$bayer=array_rand($Bayer_Munich[0]);
	$Bayer_Munich=$Bayer_Munich[0][$bayer];

	// valor Barcelona
	$Barcelona=$this->Valor_equipos->valor_Barcelona();
	$Bar=array_rand($Barcelona[0]);
	$Barcelona=$Barcelona[0][$Bar];

	//valor Ajax
	$Ajax=$this->Valor_equipos->valor_Ajax();
	$A=array_rand($Ajax[0]);
	$Ajax=$Ajax[0][$A];

	//valor Borusia dormunt
	$B_Dormunt=$this->Valor_equipos->valor_B_Dormunt();
	$B=array_rand($B_Dormunt[0]);
	$B_Dormunt=$B_Dormunt[0][$B];

	//valor M_united
	$M_United=$this->Valor_equipos->valor_M_United();
	$M=array_rand($M_United[0]);
	$M_United=$M_United[0][$M];

	//valor M_City
	$M_City=$this->Valor_equipos->valor_M_City();
	$M_C=array_rand($M_City[0]);
	$M_City=$M_City[0][$M_C];

	//valor Arsenal
	$Arsenal=$this->Valor_equipos->valor_Arsenal();
	$Ar=array_rand($Arsenal[0]);
	$Arsenal=$Arsenal[0][$Ar];

	//valor Oporto
	$Oporto=$this->Valor_equipos->valor_Oporto();
	$Op=array_rand($Oporto[0]);
	$Oporto=$Oporto[0][$Op];

	//valor Atletico de Madrid
	$At_Madrid=$this->Valor_equipos->valor_At_Madrid();
	$AT=array_rand($At_Madrid[0]);
	$At_Madrid=$At_Madrid[0][$AT];

	//valor I_Milan
	$I_Milan=$this->Valor_equipos->valor_I_Milan();
	$I=array_rand($I_Milan[0]);
	$I_Milan=$I_Milan[0][$I];

	//valor Tottenham
	$Tottenham=$this->Valor_equipos->valor_Tottenham();
	$T=array_rand($Tottenham[0]);
	$Tottenham=$Tottenham[0][$T];

	//valor Livepool
	$Liverpool=$this->Valor_equipos->valor_Liverpool();
	$Li=array_rand($Liverpool[0]);
	$Liverpool=$Liverpool[0][$Li];

	//valor Juventus
	$Juventus=$this->Valor_equipos->valor_Juventus();
	$Ju=array_rand($Juventus[0]);
	$Juventus=$Juventus[0][$Ju];

	//valor Sevilla
	$Sevilla=$this->Valor_equipos->valor_Sevilla();
	$se=array_rand($Sevilla[0]);
	$Sevilla=$Sevilla[0][$se];

	//valor R_Madrid
	$R_Madrid=$this->Valor_equipos->valor_R_Madrid();
	$R=array_rand($R_Madrid[0]);
	$R_Madrid=$R_Madrid[0][$R];

	//valor Chelsea
	$Chelsea=$this->Valor_equipos->valor_Chelsea();
	$che=array_rand($Chelsea[0]);
	$Chelsea=$Chelsea[0][$che];

	//valor O_Lyon
	$O_Lyon=$this->Valor_equipos->valor_O_Lyon();
	$OL=array_rand($O_Lyon[0]);
	$O_Lyon=$O_Lyon[0][$OL];

	///recogemos el estado de jornada si es true o falso la pasamos a la vista para generar los resultados en caso de que la jornada este en falso,una vez se genere el resultado pasa a estado true ya que es jornada se ha jugado

	$this->load->model("Jornadas_m");
	$jornada=$this->Jornadas_m->select_jornadas();

	///cogemos los valores de la jornada para mostrarlos siempre y cuando este en true
	$this->load->model("Puntos_Goles");
	$resultados=$this->Puntos_Goles->mostrar_resultados("jornada33");

	////seleccionar el estado del equipo si lo ha escogido alguien o no para que no introduzca los goles automaticamente
	$this->load->model("E_usuarios");
	$escogido=$this->E_usuarios->Equipo_estadotrue();

    
	$this->load->model("Enfrentamientos");
	$estado=$this->Enfrentamientos->estado_liga();
		if($estado["estado"]==false){
			header("location:".site_url('Inicio_de_liga/Inicio_liga')."");
		}
	$enfrentamientos=$this->Enfrentamientos->equiposenfrentamientos();
	$html=$this->load->view("theme/jornada33.php",compact("enfrentamientos","Milan","Valencia","PSG","Bayer_Munich","Barcelona","Ajax","B_Dormunt","M_United","M_City","Arsenal","Oporto","At_Madrid","I_Milan","Tottenham","Liverpool","Juventus","Sevilla","R_Madrid","Chelsea","O_Lyon","jornada","resultados","escogido","logueado","mercado"),true);
	$conte["contenido"]=$html;
	$this->load->view("panel.php",$conte);
}function jornada34(){
	 $this->load->model("Enfrentamientos");
     $mercado=$this->Enfrentamientos->mercadofichajes();
	$logueado=$this->session->userdata("sesionid");
	      	if(!isset($logueado)){
	      		header("location:".site_url('Usuariosl/login')."");
	      	}  $sin_asignar=$this->session->userdata("equipo_asig");
	     if($sin_asignar==false){
	     		header("location:".site_url('Usuariosl/elegir_equipo/'.$logueado)."");
	     	}
	     
	////recogemos los valores de lo equipos
	$this->load->model("Valor_equipos");
	// valor milan
	$Milan=$this->Valor_equipos->valor_Milan();
	$mil=array_rand($Milan[0]);
	$Milan=$Milan[0][$mil];

	///valor valencia
	$Valencia=$this->Valor_equipos->valor_Valencia();
	$val=array_rand($Valencia[0]);
	$Valencia=$Valencia[0][$val];

	//valor PSG
	$PSG=$this->Valor_equipos->valor_PSG();
	$p=array_rand($PSG[0]);
	$PSG=$PSG[0][$p];

	//valor bayer_munich
	$Bayer_Munich=$this->Valor_equipos->valor_Bayer_Munich();
	$bayer=array_rand($Bayer_Munich[0]);
	$Bayer_Munich=$Bayer_Munich[0][$bayer];

	// valor Barcelona
	$Barcelona=$this->Valor_equipos->valor_Barcelona();
	$Bar=array_rand($Barcelona[0]);
	$Barcelona=$Barcelona[0][$Bar];

	//valor Ajax
	$Ajax=$this->Valor_equipos->valor_Ajax();
	$A=array_rand($Ajax[0]);
	$Ajax=$Ajax[0][$A];

	//valor Borusia dormunt
	$B_Dormunt=$this->Valor_equipos->valor_B_Dormunt();
	$B=array_rand($B_Dormunt[0]);
	$B_Dormunt=$B_Dormunt[0][$B];

	//valor M_united
	$M_United=$this->Valor_equipos->valor_M_United();
	$M=array_rand($M_United[0]);
	$M_United=$M_United[0][$M];

	//valor M_City
	$M_City=$this->Valor_equipos->valor_M_City();
	$M_C=array_rand($M_City[0]);
	$M_City=$M_City[0][$M_C];

	//valor Arsenal
	$Arsenal=$this->Valor_equipos->valor_Arsenal();
	$Ar=array_rand($Arsenal[0]);
	$Arsenal=$Arsenal[0][$Ar];

	//valor Oporto
	$Oporto=$this->Valor_equipos->valor_Oporto();
	$Op=array_rand($Oporto[0]);
	$Oporto=$Oporto[0][$Op];

	//valor Atletico de Madrid
	$At_Madrid=$this->Valor_equipos->valor_At_Madrid();
	$AT=array_rand($At_Madrid[0]);
	$At_Madrid=$At_Madrid[0][$AT];

	//valor I_Milan
	$I_Milan=$this->Valor_equipos->valor_I_Milan();
	$I=array_rand($I_Milan[0]);
	$I_Milan=$I_Milan[0][$I];

	//valor Tottenham
	$Tottenham=$this->Valor_equipos->valor_Tottenham();
	$T=array_rand($Tottenham[0]);
	$Tottenham=$Tottenham[0][$T];

	//valor Livepool
	$Liverpool=$this->Valor_equipos->valor_Liverpool();
	$Li=array_rand($Liverpool[0]);
	$Liverpool=$Liverpool[0][$Li];

	//valor Juventus
	$Juventus=$this->Valor_equipos->valor_Juventus();
	$Ju=array_rand($Juventus[0]);
	$Juventus=$Juventus[0][$Ju];

	//valor Sevilla
	$Sevilla=$this->Valor_equipos->valor_Sevilla();
	$se=array_rand($Sevilla[0]);
	$Sevilla=$Sevilla[0][$se];

	//valor R_Madrid
	$R_Madrid=$this->Valor_equipos->valor_R_Madrid();
	$R=array_rand($R_Madrid[0]);
	$R_Madrid=$R_Madrid[0][$R];

	//valor Chelsea
	$Chelsea=$this->Valor_equipos->valor_Chelsea();
	$che=array_rand($Chelsea[0]);
	$Chelsea=$Chelsea[0][$che];

	//valor O_Lyon
	$O_Lyon=$this->Valor_equipos->valor_O_Lyon();
	$OL=array_rand($O_Lyon[0]);
	$O_Lyon=$O_Lyon[0][$OL];

	///recogemos el estado de jornada si es true o falso la pasamos a la vista para generar los resultados en caso de que la jornada este en falso,una vez se genere el resultado pasa a estado true ya que es jornada se ha jugado

	$this->load->model("Jornadas_m");
	$jornada=$this->Jornadas_m->select_jornadas();

	///cogemos los valores de la jornada para mostrarlos siempre y cuando este en true
	$this->load->model("Puntos_Goles");
	$resultados=$this->Puntos_Goles->mostrar_resultados("jornada34");

	////seleccionar el estado del equipo si lo ha escogido alguien o no para que no introduzca los goles automaticamente
	$this->load->model("E_usuarios");
	$escogido=$this->E_usuarios->Equipo_estadotrue();

    
	$this->load->model("Enfrentamientos");
	$estado=$this->Enfrentamientos->estado_liga();
		if($estado["estado"]==false){
			header("location:".site_url('Inicio_de_liga/Inicio_liga')."");
		}
	$enfrentamientos=$this->Enfrentamientos->equiposenfrentamientos();
	$html=$this->load->view("theme/jornada34.php",compact("enfrentamientos","Milan","Valencia","PSG","Bayer_Munich","Barcelona","Ajax","B_Dormunt","M_United","M_City","Arsenal","Oporto","At_Madrid","I_Milan","Tottenham","Liverpool","Juventus","Sevilla","R_Madrid","Chelsea","O_Lyon","jornada","resultados","escogido","logueado","mercado"),true);
	$conte["contenido"]=$html;
	$this->load->view("panel.php",$conte);
}function jornada35(){
	 $this->load->model("Enfrentamientos");
     $mercado=$this->Enfrentamientos->mercadofichajes();
	$logueado=$this->session->userdata("sesionid");
	      	if(!isset($logueado)){
	      		header("location:".site_url('Usuariosl/login')."");
	      	}  $sin_asignar=$this->session->userdata("equipo_asig");
	     if($sin_asignar==false){
	     		header("location:".site_url('Usuariosl/elegir_equipo/'.$logueado)."");
	     	}
	     
	////recogemos los valores de lo equipos
	$this->load->model("Valor_equipos");
	// valor milan
	$Milan=$this->Valor_equipos->valor_Milan();
	$mil=array_rand($Milan[0]);
	$Milan=$Milan[0][$mil];

	///valor valencia
	$Valencia=$this->Valor_equipos->valor_Valencia();
	$val=array_rand($Valencia[0]);
	$Valencia=$Valencia[0][$val];

	//valor PSG
	$PSG=$this->Valor_equipos->valor_PSG();
	$p=array_rand($PSG[0]);
	$PSG=$PSG[0][$p];

	//valor bayer_munich
	$Bayer_Munich=$this->Valor_equipos->valor_Bayer_Munich();
	$bayer=array_rand($Bayer_Munich[0]);
	$Bayer_Munich=$Bayer_Munich[0][$bayer];

	// valor Barcelona
	$Barcelona=$this->Valor_equipos->valor_Barcelona();
	$Bar=array_rand($Barcelona[0]);
	$Barcelona=$Barcelona[0][$Bar];

	//valor Ajax
	$Ajax=$this->Valor_equipos->valor_Ajax();
	$A=array_rand($Ajax[0]);
	$Ajax=$Ajax[0][$A];

	//valor Borusia dormunt
	$B_Dormunt=$this->Valor_equipos->valor_B_Dormunt();
	$B=array_rand($B_Dormunt[0]);
	$B_Dormunt=$B_Dormunt[0][$B];

	//valor M_united
	$M_United=$this->Valor_equipos->valor_M_United();
	$M=array_rand($M_United[0]);
	$M_United=$M_United[0][$M];

	//valor M_City
	$M_City=$this->Valor_equipos->valor_M_City();
	$M_C=array_rand($M_City[0]);
	$M_City=$M_City[0][$M_C];

	//valor Arsenal
	$Arsenal=$this->Valor_equipos->valor_Arsenal();
	$Ar=array_rand($Arsenal[0]);
	$Arsenal=$Arsenal[0][$Ar];

	//valor Oporto
	$Oporto=$this->Valor_equipos->valor_Oporto();
	$Op=array_rand($Oporto[0]);
	$Oporto=$Oporto[0][$Op];

	//valor Atletico de Madrid
	$At_Madrid=$this->Valor_equipos->valor_At_Madrid();
	$AT=array_rand($At_Madrid[0]);
	$At_Madrid=$At_Madrid[0][$AT];

	//valor I_Milan
	$I_Milan=$this->Valor_equipos->valor_I_Milan();
	$I=array_rand($I_Milan[0]);
	$I_Milan=$I_Milan[0][$I];

	//valor Tottenham
	$Tottenham=$this->Valor_equipos->valor_Tottenham();
	$T=array_rand($Tottenham[0]);
	$Tottenham=$Tottenham[0][$T];

	//valor Livepool
	$Liverpool=$this->Valor_equipos->valor_Liverpool();
	$Li=array_rand($Liverpool[0]);
	$Liverpool=$Liverpool[0][$Li];

	//valor Juventus
	$Juventus=$this->Valor_equipos->valor_Juventus();
	$Ju=array_rand($Juventus[0]);
	$Juventus=$Juventus[0][$Ju];

	//valor Sevilla
	$Sevilla=$this->Valor_equipos->valor_Sevilla();
	$se=array_rand($Sevilla[0]);
	$Sevilla=$Sevilla[0][$se];

	//valor R_Madrid
	$R_Madrid=$this->Valor_equipos->valor_R_Madrid();
	$R=array_rand($R_Madrid[0]);
	$R_Madrid=$R_Madrid[0][$R];

	//valor Chelsea
	$Chelsea=$this->Valor_equipos->valor_Chelsea();
	$che=array_rand($Chelsea[0]);
	$Chelsea=$Chelsea[0][$che];

	//valor O_Lyon
	$O_Lyon=$this->Valor_equipos->valor_O_Lyon();
	$OL=array_rand($O_Lyon[0]);
	$O_Lyon=$O_Lyon[0][$OL];

	///recogemos el estado de jornada si es true o falso la pasamos a la vista para generar los resultados en caso de que la jornada este en falso,una vez se genere el resultado pasa a estado true ya que es jornada se ha jugado

	$this->load->model("Jornadas_m");
	$jornada=$this->Jornadas_m->select_jornadas();

	///cogemos los valores de la jornada para mostrarlos siempre y cuando este en true
	$this->load->model("Puntos_Goles");
	$resultados=$this->Puntos_Goles->mostrar_resultados("jornada35");

	////seleccionar el estado del equipo si lo ha escogido alguien o no para que no introduzca los goles automaticamente
	$this->load->model("E_usuarios");
	$escogido=$this->E_usuarios->Equipo_estadotrue();

    
	$this->load->model("Enfrentamientos");
	$estado=$this->Enfrentamientos->estado_liga();
		if($estado["estado"]==false){
			header("location:".site_url('Inicio_de_liga/Inicio_liga')."");
		}
	$enfrentamientos=$this->Enfrentamientos->equiposenfrentamientos();
	$html=$this->load->view("theme/jornada35.php",compact("enfrentamientos","Milan","Valencia","PSG","Bayer_Munich","Barcelona","Ajax","B_Dormunt","M_United","M_City","Arsenal","Oporto","At_Madrid","I_Milan","Tottenham","Liverpool","Juventus","Sevilla","R_Madrid","Chelsea","O_Lyon","jornada","resultados","escogido","logueado","mercado"),true);
	$conte["contenido"]=$html;
	$this->load->view("panel.php",$conte);
}function jornada36(){
	 $this->load->model("Enfrentamientos");
     $mercado=$this->Enfrentamientos->mercadofichajes();
	$logueado=$this->session->userdata("sesionid");
	      	if(!isset($logueado)){
	      		header("location:".site_url('Usuariosl/login')."");
	      	}  $sin_asignar=$this->session->userdata("equipo_asig");
	     if($sin_asignar==false){
	     		header("location:".site_url('Usuariosl/elegir_equipo/'.$logueado)."");
	     	}
	     
	////recogemos los valores de lo equipos
	$this->load->model("Valor_equipos");
	// valor milan
	$Milan=$this->Valor_equipos->valor_Milan();
	$mil=array_rand($Milan[0]);
	$Milan=$Milan[0][$mil];

	///valor valencia
	$Valencia=$this->Valor_equipos->valor_Valencia();
	$val=array_rand($Valencia[0]);
	$Valencia=$Valencia[0][$val];

	//valor PSG
	$PSG=$this->Valor_equipos->valor_PSG();
	$p=array_rand($PSG[0]);
	$PSG=$PSG[0][$p];

	//valor bayer_munich
	$Bayer_Munich=$this->Valor_equipos->valor_Bayer_Munich();
	$bayer=array_rand($Bayer_Munich[0]);
	$Bayer_Munich=$Bayer_Munich[0][$bayer];

	// valor Barcelona
	$Barcelona=$this->Valor_equipos->valor_Barcelona();
	$Bar=array_rand($Barcelona[0]);
	$Barcelona=$Barcelona[0][$Bar];

	//valor Ajax
	$Ajax=$this->Valor_equipos->valor_Ajax();
	$A=array_rand($Ajax[0]);
	$Ajax=$Ajax[0][$A];

	//valor Borusia dormunt
	$B_Dormunt=$this->Valor_equipos->valor_B_Dormunt();
	$B=array_rand($B_Dormunt[0]);
	$B_Dormunt=$B_Dormunt[0][$B];

	//valor M_united
	$M_United=$this->Valor_equipos->valor_M_United();
	$M=array_rand($M_United[0]);
	$M_United=$M_United[0][$M];

	//valor M_City
	$M_City=$this->Valor_equipos->valor_M_City();
	$M_C=array_rand($M_City[0]);
	$M_City=$M_City[0][$M_C];

	//valor Arsenal
	$Arsenal=$this->Valor_equipos->valor_Arsenal();
	$Ar=array_rand($Arsenal[0]);
	$Arsenal=$Arsenal[0][$Ar];

	//valor Oporto
	$Oporto=$this->Valor_equipos->valor_Oporto();
	$Op=array_rand($Oporto[0]);
	$Oporto=$Oporto[0][$Op];

	//valor Atletico de Madrid
	$At_Madrid=$this->Valor_equipos->valor_At_Madrid();
	$AT=array_rand($At_Madrid[0]);
	$At_Madrid=$At_Madrid[0][$AT];

	//valor I_Milan
	$I_Milan=$this->Valor_equipos->valor_I_Milan();
	$I=array_rand($I_Milan[0]);
	$I_Milan=$I_Milan[0][$I];

	//valor Tottenham
	$Tottenham=$this->Valor_equipos->valor_Tottenham();
	$T=array_rand($Tottenham[0]);
	$Tottenham=$Tottenham[0][$T];

	//valor Livepool
	$Liverpool=$this->Valor_equipos->valor_Liverpool();
	$Li=array_rand($Liverpool[0]);
	$Liverpool=$Liverpool[0][$Li];

	//valor Juventus
	$Juventus=$this->Valor_equipos->valor_Juventus();
	$Ju=array_rand($Juventus[0]);
	$Juventus=$Juventus[0][$Ju];

	//valor Sevilla
	$Sevilla=$this->Valor_equipos->valor_Sevilla();
	$se=array_rand($Sevilla[0]);
	$Sevilla=$Sevilla[0][$se];

	//valor R_Madrid
	$R_Madrid=$this->Valor_equipos->valor_R_Madrid();
	$R=array_rand($R_Madrid[0]);
	$R_Madrid=$R_Madrid[0][$R];

	//valor Chelsea
	$Chelsea=$this->Valor_equipos->valor_Chelsea();
	$che=array_rand($Chelsea[0]);
	$Chelsea=$Chelsea[0][$che];

	//valor O_Lyon
	$O_Lyon=$this->Valor_equipos->valor_O_Lyon();
	$OL=array_rand($O_Lyon[0]);
	$O_Lyon=$O_Lyon[0][$OL];

	///recogemos el estado de jornada si es true o falso la pasamos a la vista para generar los resultados en caso de que la jornada este en falso,una vez se genere el resultado pasa a estado true ya que es jornada se ha jugado

	$this->load->model("Jornadas_m");
	$jornada=$this->Jornadas_m->select_jornadas();

	///cogemos los valores de la jornada para mostrarlos siempre y cuando este en true
	$this->load->model("Puntos_Goles");
	$resultados=$this->Puntos_Goles->mostrar_resultados("jornada36");

	///seleccionamos el estado de los cobros

	$estado_cobros=$this->Puntos_Goles->estado_cobro();

	////seleccionar el estado del equipo si lo ha escogido alguien o no para que no introduzca los goles automaticamente
	$this->load->model("E_usuarios");
	$escogido=$this->E_usuarios->Equipo_estadotrue();

    
	$this->load->model("Enfrentamientos");
	$estado=$this->Enfrentamientos->estado_liga();
		if($estado["estado"]==false){
			header("location:".site_url('Inicio_de_liga/Inicio_liga')."");
		}
	$enfrentamientos=$this->Enfrentamientos->equiposenfrentamientos();
	$html=$this->load->view("theme/jornada36.php",compact("enfrentamientos","Milan","Valencia","PSG","Bayer_Munich","Barcelona","Ajax","B_Dormunt","M_United","M_City","Arsenal","Oporto","At_Madrid","I_Milan","Tottenham","Liverpool","Juventus","Sevilla","R_Madrid","Chelsea","O_Lyon","jornada","resultados","escogido","estado_cobros","logueado","mercado"),true);
	$conte["contenido"]=$html;
	$this->load->view("panel.php",$conte);
}function jornada37(){
	 $this->load->model("Enfrentamientos");
     $mercado=$this->Enfrentamientos->mercadofichajes();
	$logueado=$this->session->userdata("sesionid");
	      	if(!isset($logueado)){
	      		header("location:".site_url('Usuariosl/login')."");
	      	}  $sin_asignar=$this->session->userdata("equipo_asig");
	     if($sin_asignar==false){
	     		header("location:".site_url('Usuariosl/elegir_equipo/'.$logueado)."");
	     	}
	     
	////recogemos los valores de lo equipos
	$this->load->model("Valor_equipos");
	// valor milan
	$Milan=$this->Valor_equipos->valor_Milan();
	$mil=array_rand($Milan[0]);
	$Milan=$Milan[0][$mil];

	///valor valencia
	$Valencia=$this->Valor_equipos->valor_Valencia();
	$val=array_rand($Valencia[0]);
	$Valencia=$Valencia[0][$val];

	//valor PSG
	$PSG=$this->Valor_equipos->valor_PSG();
	$p=array_rand($PSG[0]);
	$PSG=$PSG[0][$p];

	//valor bayer_munich
	$Bayer_Munich=$this->Valor_equipos->valor_Bayer_Munich();
	$bayer=array_rand($Bayer_Munich[0]);
	$Bayer_Munich=$Bayer_Munich[0][$bayer];

	// valor Barcelona
	$Barcelona=$this->Valor_equipos->valor_Barcelona();
	$Bar=array_rand($Barcelona[0]);
	$Barcelona=$Barcelona[0][$Bar];

	//valor Ajax
	$Ajax=$this->Valor_equipos->valor_Ajax();
	$A=array_rand($Ajax[0]);
	$Ajax=$Ajax[0][$A];

	//valor Borusia dormunt
	$B_Dormunt=$this->Valor_equipos->valor_B_Dormunt();
	$B=array_rand($B_Dormunt[0]);
	$B_Dormunt=$B_Dormunt[0][$B];

	//valor M_united
	$M_United=$this->Valor_equipos->valor_M_United();
	$M=array_rand($M_United[0]);
	$M_United=$M_United[0][$M];

	//valor M_City
	$M_City=$this->Valor_equipos->valor_M_City();
	$M_C=array_rand($M_City[0]);
	$M_City=$M_City[0][$M_C];

	//valor Arsenal
	$Arsenal=$this->Valor_equipos->valor_Arsenal();
	$Ar=array_rand($Arsenal[0]);
	$Arsenal=$Arsenal[0][$Ar];

	//valor Oporto
	$Oporto=$this->Valor_equipos->valor_Oporto();
	$Op=array_rand($Oporto[0]);
	$Oporto=$Oporto[0][$Op];

	//valor Atletico de Madrid
	$At_Madrid=$this->Valor_equipos->valor_At_Madrid();
	$AT=array_rand($At_Madrid[0]);
	$At_Madrid=$At_Madrid[0][$AT];

	//valor I_Milan
	$I_Milan=$this->Valor_equipos->valor_I_Milan();
	$I=array_rand($I_Milan[0]);
	$I_Milan=$I_Milan[0][$I];

	//valor Tottenham
	$Tottenham=$this->Valor_equipos->valor_Tottenham();
	$T=array_rand($Tottenham[0]);
	$Tottenham=$Tottenham[0][$T];

	//valor Livepool
	$Liverpool=$this->Valor_equipos->valor_Liverpool();
	$Li=array_rand($Liverpool[0]);
	$Liverpool=$Liverpool[0][$Li];

	//valor Juventus
	$Juventus=$this->Valor_equipos->valor_Juventus();
	$Ju=array_rand($Juventus[0]);
	$Juventus=$Juventus[0][$Ju];

	//valor Sevilla
	$Sevilla=$this->Valor_equipos->valor_Sevilla();
	$se=array_rand($Sevilla[0]);
	$Sevilla=$Sevilla[0][$se];

	//valor R_Madrid
	$R_Madrid=$this->Valor_equipos->valor_R_Madrid();
	$R=array_rand($R_Madrid[0]);
	$R_Madrid=$R_Madrid[0][$R];

	//valor Chelsea
	$Chelsea=$this->Valor_equipos->valor_Chelsea();
	$che=array_rand($Chelsea[0]);
	$Chelsea=$Chelsea[0][$che];

	//valor O_Lyon
	$O_Lyon=$this->Valor_equipos->valor_O_Lyon();
	$OL=array_rand($O_Lyon[0]);
	$O_Lyon=$O_Lyon[0][$OL];

	///recogemos el estado de jornada si es true o falso la pasamos a la vista para generar los resultados en caso de que la jornada este en falso,una vez se genere el resultado pasa a estado true ya que es jornada se ha jugado

	$this->load->model("Jornadas_m");
	$jornada=$this->Jornadas_m->select_jornadas();

	///cogemos los valores de la jornada para mostrarlos siempre y cuando este en true
	$this->load->model("Puntos_Goles");
	$resultados=$this->Puntos_Goles->mostrar_resultados("jornada37");

	////seleccionar el estado del equipo si lo ha escogido alguien o no para que no introduzca los goles automaticamente
	$this->load->model("E_usuarios");
	$escogido=$this->E_usuarios->Equipo_estadotrue();

    
	$this->load->model("Enfrentamientos");
	$estado=$this->Enfrentamientos->estado_liga();
		if($estado["estado"]==false){
			header("location:".site_url('Inicio_de_liga/Inicio_liga')."");
		}
	$enfrentamientos=$this->Enfrentamientos->equiposenfrentamientos();
	$html=$this->load->view("theme/jornada37.php",compact("enfrentamientos","Milan","Valencia","PSG","Bayer_Munich","Barcelona","Ajax","B_Dormunt","M_United","M_City","Arsenal","Oporto","At_Madrid","I_Milan","Tottenham","Liverpool","Juventus","Sevilla","R_Madrid","Chelsea","O_Lyon","jornada","resultados","escogido","logueado","mercado"),true);
	$conte["contenido"]=$html;
	$this->load->view("panel.php",$conte);
}function jornada38(){
	 $this->load->model("Enfrentamientos");
     $mercado=$this->Enfrentamientos->mercadofichajes();
	$logueado=$this->session->userdata("sesionid");
	      	if(!isset($logueado)){
	      		header("location:".site_url('Usuariosl/login')."");
	      	}  $sin_asignar=$this->session->userdata("equipo_asig");
	     if($sin_asignar==false){
	     		header("location:".site_url('Usuariosl/elegir_equipo/'.$logueado)."");
	     	}
	     
	////recogemos los valores de lo equipos
	$this->load->model("Valor_equipos");
	// valor milan
	$Milan=$this->Valor_equipos->valor_Milan();
	$mil=array_rand($Milan[0]);
	$Milan=$Milan[0][$mil];

	///valor valencia
	$Valencia=$this->Valor_equipos->valor_Valencia();
	$val=array_rand($Valencia[0]);
	$Valencia=$Valencia[0][$val];

	//valor PSG
	$PSG=$this->Valor_equipos->valor_PSG();
	$p=array_rand($PSG[0]);
	$PSG=$PSG[0][$p];

	//valor bayer_munich
	$Bayer_Munich=$this->Valor_equipos->valor_Bayer_Munich();
	$bayer=array_rand($Bayer_Munich[0]);
	$Bayer_Munich=$Bayer_Munich[0][$bayer];

	// valor Barcelona
	$Barcelona=$this->Valor_equipos->valor_Barcelona();
	$Bar=array_rand($Barcelona[0]);
	$Barcelona=$Barcelona[0][$Bar];

	//valor Ajax
	$Ajax=$this->Valor_equipos->valor_Ajax();
	$A=array_rand($Ajax[0]);
	$Ajax=$Ajax[0][$A];

	//valor Borusia dormunt
	$B_Dormunt=$this->Valor_equipos->valor_B_Dormunt();
	$B=array_rand($B_Dormunt[0]);
	$B_Dormunt=$B_Dormunt[0][$B];

	//valor M_united
	$M_United=$this->Valor_equipos->valor_M_United();
	$M=array_rand($M_United[0]);
	$M_United=$M_United[0][$M];

	//valor M_City
	$M_City=$this->Valor_equipos->valor_M_City();
	$M_C=array_rand($M_City[0]);
	$M_City=$M_City[0][$M_C];

	//valor Arsenal
	$Arsenal=$this->Valor_equipos->valor_Arsenal();
	$Ar=array_rand($Arsenal[0]);
	$Arsenal=$Arsenal[0][$Ar];

	//valor Oporto
	$Oporto=$this->Valor_equipos->valor_Oporto();
	$Op=array_rand($Oporto[0]);
	$Oporto=$Oporto[0][$Op];

	//valor Atletico de Madrid
	$At_Madrid=$this->Valor_equipos->valor_At_Madrid();
	$AT=array_rand($At_Madrid[0]);
	$At_Madrid=$At_Madrid[0][$AT];

	//valor I_Milan
	$I_Milan=$this->Valor_equipos->valor_I_Milan();
	$I=array_rand($I_Milan[0]);
	$I_Milan=$I_Milan[0][$I];

	//valor Tottenham
	$Tottenham=$this->Valor_equipos->valor_Tottenham();
	$T=array_rand($Tottenham[0]);
	$Tottenham=$Tottenham[0][$T];

	//valor Livepool
	$Liverpool=$this->Valor_equipos->valor_Liverpool();
	$Li=array_rand($Liverpool[0]);
	$Liverpool=$Liverpool[0][$Li];

	//valor Juventus
	$Juventus=$this->Valor_equipos->valor_Juventus();
	$Ju=array_rand($Juventus[0]);
	$Juventus=$Juventus[0][$Ju];

	//valor Sevilla
	$Sevilla=$this->Valor_equipos->valor_Sevilla();
	$se=array_rand($Sevilla[0]);
	$Sevilla=$Sevilla[0][$se];

	//valor R_Madrid
	$R_Madrid=$this->Valor_equipos->valor_R_Madrid();
	$R=array_rand($R_Madrid[0]);
	$R_Madrid=$R_Madrid[0][$R];

	//valor Chelsea
	$Chelsea=$this->Valor_equipos->valor_Chelsea();
	$che=array_rand($Chelsea[0]);
	$Chelsea=$Chelsea[0][$che];

	//valor O_Lyon
	$O_Lyon=$this->Valor_equipos->valor_O_Lyon();
	$OL=array_rand($O_Lyon[0]);
	$O_Lyon=$O_Lyon[0][$OL];

	///recogemos el estado de jornada si es true o falso la pasamos a la vista para generar los resultados en caso de que la jornada este en falso,una vez se genere el resultado pasa a estado true ya que es jornada se ha jugado

	$this->load->model("Jornadas_m");
	$jornada=$this->Jornadas_m->select_jornadas();

	///cogemos los valores de la jornada para mostrarlos siempre y cuando este en true
	$this->load->model("Puntos_Goles");
	$resultados=$this->Puntos_Goles->mostrar_resultados("jornada38");

	////seleccionar el estado del equipo si lo ha escogido alguien o no para que no introduzca los goles automaticamente
	$this->load->model("E_usuarios");
	$escogido=$this->E_usuarios->Equipo_estadotrue();

    
	$this->load->model("Enfrentamientos");
	$estado=$this->Enfrentamientos->estado_liga();
		if($estado["estado"]==false){
			header("location:".site_url('Inicio_de_liga/Inicio_liga')."");
		}
	$enfrentamientos=$this->Enfrentamientos->equiposenfrentamientos();
	$html=$this->load->view("theme/jornada38.php",compact("enfrentamientos","Milan","Valencia","PSG","Bayer_Munich","Barcelona","Ajax","B_Dormunt","M_United","M_City","Arsenal","Oporto","At_Madrid","I_Milan","Tottenham","Liverpool","Juventus","Sevilla","R_Madrid","Chelsea","O_Lyon","jornada","resultados","escogido","logueado","mercado"),true);
	$conte["contenido"]=$html;
	$this->load->view("panel.php",$conte);
	if(isset($_POST["si"])){
         $this->load->model("Fin_temporada");
         $final=$this->Fin_temporada->acabar();
         header("location:".site_url('Inicio_de_liga/Inicio_liga')."");
   
	}
}

    function cobros_mensuales(){
    
     
    $this->load->model("Puntos_Goles");
	$salario=$this->Puntos_Goles->cobros($_POST["numero_cobro"]);
	


}



}


?>
