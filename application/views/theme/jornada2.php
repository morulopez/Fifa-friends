<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>

  <div class="row">
  	<div class="col-md-12" id="resulusuarios">
     <input type="hidden"  id="jornada" value="<?php echo $this->uri->segment(2);?>">
     <h3>Jornada 2</h3>
      <div class="table-responsive">
        <table class="table table-bordered">
          <tr>
            <td >
              <a href="<?php echo site_url('Jornadas/jornada1');?>">1º</a>
            </td>
            <td id="colu2">
              <a href="<?php echo site_url('Jornadas/jornada2');?>">2º</a>
            </td>
            <td>
              <a href="<?php echo site_url('Jornadas/jornada3');?>">3º</a>
            </td>
            <td>
              <a href="<?php echo site_url('Jornadas/jornada4');?>">4º</a>
            </td>
            <td>
              <a href="<?php echo site_url('Jornadas/jornada5');?>">5º</a>
            </td>
            <td>
              <a href="<?php echo site_url('Jornadas/jornada6');?>">6º</a>
            </td>
            <td>
              <a href="<?php echo site_url('Jornadas/jornada7');?>">7º</a>
            </td>
            <td>
              <a href="<?php echo site_url('Jornadas/jornada8');?>">8º</a>
            </td>
            <td>
              <a href="<?php echo site_url('Jornadas/jornada9');?>">9º</a>
            </td>
            <td>
              <a href="<?php echo site_url('Jornadas/jornada10');?>">10º</a>
            </td>
            <td>
              <a href="<?php echo site_url('Jornadas/jornada11');?>">11º</a>
            </td>
            <td>
              <a href="<?php echo site_url('Jornadas/jornada12');?>">12º</a>
            </td>
            <td>
              <a href="<?php echo site_url('Jornadas/jornada13');?>">13º</a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="<?php echo site_url('Jornadas/jornada14');?>">14º</a>
            </td>
            <td>
              <a href="<?php echo site_url('Jornadas/jornada15');?>">15º</a>
            </td>
            <td>
              <a href="<?php echo site_url('Jornadas/jornada16');?>">16º</a>
            </td>
            <td>
              <a href="<?php echo site_url('Jornadas/jornada17');?>">17º</a>
            </td>
             <td>
              <a href="<?php echo site_url('Jornadas/jornada18');?>">18º</a>
            </td>
             <td>
              <a href="<?php echo site_url('Jornadas/jornada19');?>">19º</a>
            </td>
            <td>
              <a href="<?php echo site_url('Jornadas/jornada20');?>">20º</a>
            </td>
            <td>
              <a href="<?php echo site_url('Jornadas/jornada21');?>">21º</a>
            </td>
            <td>
              <a href="<?php echo site_url('Jornadas/jornada22');?>">22º</a>
            </td>
            <td>
              <a href="<?php echo site_url('Jornadas/jornada23');?>">23º</a>
            </td>
             <td>
              <a href="<?php echo site_url('Jornadas/jornada24');?>">24º</a>
            </td>
             <td>
              <a href="<?php echo site_url('Jornadas/jornada25');?>">25º</a>
            </td>
            <td>
              <a href="<?php echo site_url('Jornadas/jornada26');?>">26º</a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="<?php echo site_url('Jornadas/jornada27');?>">27º</a>
            </td>
            <td>
              <a href="<?php echo site_url('Jornadas/jornada28');?>">28º</a>
            </td>
            <td>
              <a href="<?php echo site_url('Jornadas/jornada29');?>">29º</a>
            </td>
            <td>
              <a href="<?php echo site_url('Jornadas/jornada30');?>">30º</a>
            </td>
             <td>
              <a href="<?php echo site_url('Jornadas/jornada31');?>">31º</a>
            </td>
             <td>
              <a href="<?php echo site_url('Jornadas/jornada32');?>">32º</a>
            </td>
            <td>
              <a href="<?php echo site_url('Jornadas/jornada33');?>">33º</a>
            </td>
            <td>
              <a href="<?php echo site_url('Jornadas/jornada34');?>">34º</a>
            </td>
            <td>
              <a href="<?php echo site_url('Jornadas/jornada35');?>">35º</a>
            </td>
            <td>
              <a href="<?php echo site_url('Jornadas/jornada36');?>">36º</a>
            </td>
             <td>
              <a href="<?php echo site_url('Jornadas/jornada37');?>">37º</a>
            </td>
             <td>
              <a href="<?php echo site_url('Jornadas/jornada38');?>">38º</a>
            </td>
          </tr>
   
        </table>
      </div>
     <p id="info">
       </p>
        <?php
        if($logueado==4){
        if($jornada[1]["estado"]==false){ 
          
        ?>
        <button type="submit"  onclick="Ajax.generar();">Generar Resulstados</button><br><br><br><br>
       <?php } ?>
       <?php
                 
          
        ?>
       <input type="hidden" id="local1" class="equiposv" value="<?php echo $enfrentamientos[18]['nombre_equipo']; ?>"> <input type="hidden" class="resul" id="resultadolocal1">  <input type="hidden" class="resul" id="resultadovisitante1"> <input type="hidden" class="equiposv" id="visitante1" value="<?php echo $enfrentamientos[0]['nombre_equipo']; ?>">
        <input type="hidden" id="local2"  class="equiposv" value="<?php echo $enfrentamientos[17]['nombre_equipo']; ?>"> <input type="hidden" class="resul" id="resultadolocal2" > <input type="hidden" class="resul" id="resultadovisitante2"> <input type="hidden" class="equiposv" id="visitante2" value="<?php echo $enfrentamientos[19]['nombre_equipo']; ?>">
         <input type="hidden" id="local3" class="equiposv" value="<?php echo $enfrentamientos[16]['nombre_equipo']; ?>"> <input type="hidden" class="resul" id="resultadolocal3" >   <input type="hidden" class="resul" id="resultadovisitante3"> <input type="hidden" id="visitante3" class="equiposv" value="<?php echo $enfrentamientos[1]['nombre_equipo']; ?>">
          <input type="hidden" id="local4" class="equiposv" value="<?php echo $enfrentamientos[15]['nombre_equipo']; ?>"> <input type="hidden" class="resul" id="resultadolocal4" >  <input type="hidden" class="resul" id="resultadovisitante4"> <input type="hidden" id="visitante4" class="equiposv" value="<?php echo $enfrentamientos[2]['nombre_equipo']; ?>">
           <input type="hidden" class="equiposv" id="local5" value="<?php echo $enfrentamientos[14]['nombre_equipo']; ?>"> <input type="hidden"  class="resul" id="resultadolocal5" >  <input type="hidden" class="resul" id="resultadovisitante5"> <input type="hidden" class="equiposv" id="visitante5" value="<?php echo $enfrentamientos[3]['nombre_equipo']; ?>">
            <input type="hidden" id="local6" class="equiposv" value="<?php echo $enfrentamientos[13]['nombre_equipo']; ?>"> <input type="hidden" class="resul" id="resultadolocal6" >  <input type="hidden" class="resul" id="resultadovisitante6"> <input type="hidden" id="visitante6" class="equiposv" value="<?php echo $enfrentamientos[4]['nombre_equipo']; ?>">
             <input type="hidden" class="equiposv" id="local7" value="<?php echo $enfrentamientos[12]['nombre_equipo']; ?>"> <input type="hidden" class="resul" id="resultadolocal7" >  <input type="hidden" class="resul" id="resultadovisitante7"> <input type="hidden" class="equiposv" id="visitante7" value="<?php echo $enfrentamientos[5]['nombre_equipo']; ?>">
              <input type="hidden" class="equiposv" id="local8" value="<?php echo $enfrentamientos[11]['nombre_equipo']; ?>"> <input type="hidden" class="resul" id="resultadolocal8" >   <input type="hidden" class="resul" id="resultadovisitante8"> <input type="hidden" class="equiposv" id="visitante8" value="<?php echo $enfrentamientos[6]['nombre_equipo']; ?>">
               <input type="hidden" class="equiposv" id="local9" value="<?php echo $enfrentamientos[10]['nombre_equipo']; ?>"> <input type="hidden" class="resul" id="resultadolocal9" >   <input type="hidden" class="resul" id="resultadovisitante9"> <input type="hidden" class="equiposv" id="visitante9" value="<?php echo $enfrentamientos[7]['nombre_equipo']; ?>">
                <input type="hidden" class="equiposv" id="local10" value="<?php echo $enfrentamientos[9]['nombre_equipo']; ?>"> <input type="hidden" class="resul" id="resultadolocal10" >  
                 <input type="hidden" class="resul" id="resultadovisitante10"> <input type="hidden" class="equiposv" id="visitante10" value="<?php echo $enfrentamientos[8]['nombre_equipo']; ?>">
                <h5 >INSERTAR RESULTADOS DE EQUIPOS DE USUARIOS</h5>
                <div class="row">
                 <div class="col-md-12" id="botonresultadosusuarios">
                <button type="button" class="btn btn-warning"  onclick="Ajax.generar_resultado_usuarios();">Generar Resultados usuarios</button><br><br><br><br>
                </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <table class="table" id="tabla">
                    </table>
                  </div>
                </div>
                 

                 <script type="text/javascript">
                  /////creammos los input de los equipos de los usuarios.
                  for(var i=1;i<20;i++){

                   if(<?php echo $escogido[0]["escogido"];?>){
                    if(document.getElementById("local"+i).value=="A.C.Milan"){
                       ///creamos un input nuevo para poder generar el resultado de los usuarios a mano.
                          var nombreElocal=document.getElementById("local"+i).value;
                          var nombreEvisitante=document.getElementById("visitante"+i).value;
                          var fila=document.createElement("tr");
                          var columna=document.createElement("td");
                          var input=document.createElement("INPUT");
                          input.setAttribute("type","text");
                          input.setAttribute("value",nombreElocal);
                          input.setAttribute("class","equiposv");
                          input.setAttribute("id","equipousuariocasa"+i);
                          columna.appendChild(input);
                          fila.appendChild(columna);
                          tabla.appendChild(fila);
                           document.getElementById("equipousuariocasa"+i).readOnly= true;
                          ///creamos un input para insertar los goles del partido local
                          var inputRe1=document.createElement("INPUT");
                          inputRe1.setAttribute("type","text");
                           inputRe1.setAttribute("class","resul");
                           inputRe1.setAttribute("id","resulequipousuariocasa"+i);
                           columna.appendChild(inputRe1);
                           fila.appendChild(columna);
                           tabla.appendChild(fila);
                         
                        ///creamos un input nuevo para poder generar el resultado de los usuarios a mano.
                          var input2 = document.createElement("INPUT");
                          input2.setAttribute("type","text");
                          input2.setAttribute("value",nombreEvisitante);
                          input2.setAttribute("class","equiposv");
                          input2.setAttribute("id","equipousuariovisiatante"+i);
                          columna.appendChild(input2);
                          fila.appendChild(columna);
                          tabla.appendChild(fila);
                          document.getElementById("equipousuariovisiatante"+i).readOnly= true;
                          ///creamos un input para insertar los goles del partido local
                           var inputRe2=document.createElement("INPUT");
                           inputRe2.setAttribute("type","text");
                           inputRe2.setAttribute("class","resul");
                           inputRe2.setAttribute("id","resulequipousuariovisitante"+i);
                           columna.appendChild(inputRe2);
                           fila.appendChild(columna);
                           tabla.appendChild(fila);
                           document.getElementById("visitante"+i).value="";
                           document.getElementById("local"+i).value="";
                      }else if(document.getElementById("visitante"+i).value=="A.C.Milan"){
                        ///creamos un input nuevo para poder generar el resultado de los usuarios a mano.
                          var nombreElocal=document.getElementById("local"+i).value;
                          var nombreEvisitante=document.getElementById("visitante"+i).value;
                          var fila=document.createElement("tr");
                          var columna=document.createElement("td");
                          var input=document.createElement("INPUT");
                          input.setAttribute("type","text");
                          input.setAttribute("value",nombreElocal);
                          input.setAttribute("class","equiposv");
                          input.setAttribute("id","equipousuariocasa"+i);
                          columna.appendChild(input);
                          fila.appendChild(columna);
                          tabla.appendChild(fila);
                           document.getElementById("equipousuariocasa"+i).readOnly= true;
                          ///creamos un input para insertar los goles del partido local
                          var inputRe1=document.createElement("INPUT");
                          inputRe1.setAttribute("type","text");
                           inputRe1.setAttribute("class","resul");
                           inputRe1.setAttribute("id","resulequipousuariocasa"+i);
                           columna.appendChild(inputRe1);
                           fila.appendChild(columna);
                           tabla.appendChild(fila);
                         
                        ///creamos un input nuevo para poder generar el resultado de los usuarios a mano.
                          var input2 = document.createElement("INPUT");
                          input2.setAttribute("type","text");
                          input2.setAttribute("value",nombreEvisitante);
                          input2.setAttribute("class","equiposv");
                          input2.setAttribute("id","equipousuariovisiatante"+i);
                          columna.appendChild(input2);
                          fila.appendChild(columna);
                          tabla.appendChild(fila);
                          document.getElementById("equipousuariovisiatante"+i).readOnly= true;
                          ///creamos un input para insertar los goles del partido local
                           var inputRe2=document.createElement("INPUT");
                           inputRe2.setAttribute("type","text");
                           inputRe2.setAttribute("class","resul");
                           inputRe2.setAttribute("id","resulequipousuariovisitante"+i);
                           columna.appendChild(inputRe2);
                           fila.appendChild(columna);
                           tabla.appendChild(fila);
                           document.getElementById("visitante"+i).value="";
                           document.getElementById("local"+i).value="";
                      }
                    } 
                   if(<?php echo $escogido[1]["escogido"];?>){
                    if(document.getElementById("local"+i).value=="Valencia"){
                       ///creamos un input nuevo para poder generar el resultado de los usuarios a mano.
                          var nombreElocal=document.getElementById("local"+i).value;
                          var nombreEvisitante=document.getElementById("visitante"+i).value;
                          var fila=document.createElement("tr");
                          var columna=document.createElement("td");
                          var input=document.createElement("INPUT");
                          input.setAttribute("type","text");
                          input.setAttribute("value",nombreElocal);
                          input.setAttribute("class","equiposv");
                          input.setAttribute("id","equipousuariocasa"+i);
                          columna.appendChild(input);
                          fila.appendChild(columna);
                          tabla.appendChild(fila);
                           document.getElementById("equipousuariocasa"+i).readOnly= true;
                          ///creamos un input para insertar los goles del partido local
                          var inputRe1=document.createElement("INPUT");
                          inputRe1.setAttribute("type","text");
                           inputRe1.setAttribute("class","resul");
                           inputRe1.setAttribute("id","resulequipousuariocasa"+i);
                           columna.appendChild(inputRe1);
                           fila.appendChild(columna);
                           tabla.appendChild(fila);
                         
                        ///creamos un input nuevo para poder generar el resultado de los usuarios a mano.
                          var input2 = document.createElement("INPUT");
                          input2.setAttribute("type","text");
                          input2.setAttribute("value",nombreEvisitante);
                          input2.setAttribute("class","equiposv");
                          input2.setAttribute("id","equipousuariovisiatante"+i);
                          columna.appendChild(input2);
                          fila.appendChild(columna);
                          tabla.appendChild(fila);
                          document.getElementById("equipousuariovisiatante"+i).readOnly= true;
                          ///creamos un input para insertar los goles del partido local
                           var inputRe2=document.createElement("INPUT");
                           inputRe2.setAttribute("type","text");
                           inputRe2.setAttribute("class","resul");
                           inputRe2.setAttribute("id","resulequipousuariovisitante"+i);
                           columna.appendChild(inputRe2);
                           fila.appendChild(columna);
                           tabla.appendChild(fila);
                           document.getElementById("visitante"+i).value="";
                           document.getElementById("local"+i).value="";
                      }else if(document.getElementById("visitante"+i).value=="Valencia"){
                        ///creamos un input nuevo para poder generar el resultado de los usuarios a mano.
                          var nombreElocal=document.getElementById("local"+i).value;
                          var nombreEvisitante=document.getElementById("visitante"+i).value;
                          var fila=document.createElement("tr");
                          var columna=document.createElement("td");
                          var input=document.createElement("INPUT");
                          input.setAttribute("type","text");
                          input.setAttribute("value",nombreElocal);
                          input.setAttribute("class","equiposv");
                          input.setAttribute("id","equipousuariocasa"+i);
                          columna.appendChild(input);
                          fila.appendChild(columna);
                          tabla.appendChild(fila);
                           document.getElementById("equipousuariocasa"+i).readOnly= true;
                          ///creamos un input para insertar los goles del partido local
                          var inputRe1=document.createElement("INPUT");
                          inputRe1.setAttribute("type","text");
                           inputRe1.setAttribute("class","resul");
                           inputRe1.setAttribute("id","resulequipousuariocasa"+i);
                           columna.appendChild(inputRe1);
                           fila.appendChild(columna);
                           tabla.appendChild(fila);
                         
                        ///creamos un input nuevo para poder generar el resultado de los usuarios a mano.
                          var input2 = document.createElement("INPUT");
                          input2.setAttribute("type","text");
                          input2.setAttribute("value",nombreEvisitante);
                          input2.setAttribute("class","equiposv");
                          input2.setAttribute("id","equipousuariovisiatante"+i);
                          columna.appendChild(input2);
                          fila.appendChild(columna);
                          tabla.appendChild(fila);
                          document.getElementById("equipousuariovisiatante"+i).readOnly= true;
                          ///creamos un input para insertar los goles del partido local
                           var inputRe2=document.createElement("INPUT");
                           inputRe2.setAttribute("type","text");
                           inputRe2.setAttribute("class","resul");
                           inputRe2.setAttribute("id","resulequipousuariovisitante"+i);
                           columna.appendChild(inputRe2);
                           fila.appendChild(columna);
                           tabla.appendChild(fila);
                           document.getElementById("visitante"+i).value="";
                           document.getElementById("local"+i).value="";
                      }
                    }
                    if(<?php echo $escogido[2]["escogido"];?>){
                      if(document.getElementById("local"+i).value=="PSG"){
                          ///creamos un input nuevo para poder generar el resultado de los usuarios a mano.
                          var nombreElocal=document.getElementById("local"+i).value;
                          var nombreEvisitante=document.getElementById("visitante"+i).value;
                          var fila=document.createElement("tr");
                          var columna=document.createElement("td");
                          var input=document.createElement("INPUT");
                          input.setAttribute("type","text");
                          input.setAttribute("value",nombreElocal);
                          input.setAttribute("class","equiposv");
                          input.setAttribute("id","equipousuariocasa"+i);
                          columna.appendChild(input);
                          fila.appendChild(columna);
                          tabla.appendChild(fila);
                           document.getElementById("equipousuariocasa"+i).readOnly= true;
                          ///creamos un input para insertar los goles del partido local
                          var inputRe1=document.createElement("INPUT");
                          inputRe1.setAttribute("type","text");
                           inputRe1.setAttribute("class","resul");
                           inputRe1.setAttribute("id","resulequipousuariocasa"+i);
                           columna.appendChild(inputRe1);
                           fila.appendChild(columna);
                           tabla.appendChild(fila);
                         
                        ///creamos un input nuevo para poder generar el resultado de los usuarios a mano.
                          var input2 = document.createElement("INPUT");
                          input2.setAttribute("type","text");
                          input2.setAttribute("value",nombreEvisitante);
                          input2.setAttribute("class","equiposv");
                          input2.setAttribute("id","equipousuariovisiatante"+i);
                          columna.appendChild(input2);
                          fila.appendChild(columna);
                          tabla.appendChild(fila);
                          document.getElementById("equipousuariovisiatante"+i).readOnly= true;
                          ///creamos un input para insertar los goles del partido local
                           var inputRe2=document.createElement("INPUT");
                           inputRe2.setAttribute("type","text");
                           inputRe2.setAttribute("class","resul");
                           inputRe2.setAttribute("id","resulequipousuariovisitante"+i);
                           columna.appendChild(inputRe2);
                           fila.appendChild(columna);
                           tabla.appendChild(fila);
                           document.getElementById("visitante"+i).value="";
                           document.getElementById("local"+i).value="";
                        }else if(document.getElementById("visitante"+i).value=="PSG"){
                         ///creamos un input nuevo para poder generar el resultado de los usuarios a mano.
                          var nombreElocal=document.getElementById("local"+i).value;
                          var nombreEvisitante=document.getElementById("visitante"+i).value;
                          var fila=document.createElement("tr");
                          var columna=document.createElement("td");
                          var input=document.createElement("INPUT");
                          input.setAttribute("type","text");
                          input.setAttribute("value",nombreElocal);
                          input.setAttribute("class","equiposv");
                          input.setAttribute("id","equipousuariocasa"+i);
                          columna.appendChild(input);
                          fila.appendChild(columna);
                          tabla.appendChild(fila);
                           document.getElementById("equipousuariocasa"+i).readOnly= true;
                          ///creamos un input para insertar los goles del partido local
                          var inputRe1=document.createElement("INPUT");
                          inputRe1.setAttribute("type","text");
                           inputRe1.setAttribute("class","resul");
                           inputRe1.setAttribute("id","resulequipousuariocasa"+i);
                           columna.appendChild(inputRe1);
                           fila.appendChild(columna);
                           tabla.appendChild(fila);
                         
                        ///creamos un input nuevo para poder generar el resultado de los usuarios a mano.
                          var input2 = document.createElement("INPUT");
                          input2.setAttribute("type","text");
                          input2.setAttribute("value",nombreEvisitante);
                          input2.setAttribute("class","equiposv");
                          input2.setAttribute("id","equipousuariovisiatante"+i);
                          columna.appendChild(input2);
                          fila.appendChild(columna);
                          tabla.appendChild(fila);
                          document.getElementById("equipousuariovisiatante"+i).readOnly= true;
                          ///creamos un input para insertar los goles del partido local
                           var inputRe2=document.createElement("INPUT");
                           inputRe2.setAttribute("type","text");
                           inputRe2.setAttribute("class","resul");
                           inputRe2.setAttribute("id","resulequipousuariovisitante"+i);
                           columna.appendChild(inputRe2);
                           fila.appendChild(columna);
                           tabla.appendChild(fila);
                           document.getElementById("visitante"+i).value="";
                           document.getElementById("local"+i).value="";
                        }
                    } 
                    if(<?php echo $escogido[3]["escogido"];?>){
                      if(document.getElementById("local"+i).value=="Bayer Munich"){
                         ///creamos un input nuevo para poder generar el resultado de los usuarios a mano.
                          var nombreElocal=document.getElementById("local"+i).value;
                          var nombreEvisitante=document.getElementById("visitante"+i).value;
                          var fila=document.createElement("tr");
                          var columna=document.createElement("td");
                          var input=document.createElement("INPUT");
                           input.setAttribute("type","text");
                          input.setAttribute("value",nombreElocal);
                          input.setAttribute("class","equiposv");
                          input.setAttribute("id","equipousuariocasa"+i);
                          columna.appendChild(input);
                          fila.appendChild(columna);
                          tabla.appendChild(fila);
                           document.getElementById("equipousuariocasa"+i).readOnly= true;
                          ///creamos un input para insertar los goles del partido local
                          var inputRe1=document.createElement("INPUT");
                           inputRe1.setAttribute("type","text");
                           inputRe1.setAttribute("class","resul");
                           inputRe1.setAttribute("id","resulequipousuariocasa"+i);
                           columna.appendChild(inputRe1);
                           fila.appendChild(columna);
                           tabla.appendChild(fila);
                         
                        ///creamos un input nuevo para poder generar el resultado de los usuarios a mano.
                          var input2 = document.createElement("INPUT");
                           input2.setAttribute("type","text");
                          input2.setAttribute("value",nombreEvisitante);
                          input2.setAttribute("class","equiposv");
                          input2.setAttribute("id","equipousuariovisiatante"+i);
                          columna.appendChild(input2);
                          fila.appendChild(columna);
                          tabla.appendChild(fila);
                          document.getElementById("equipousuariovisiatante"+i).readOnly= true;
                          ///creamos un input para insertar los goles del partido local
                           var inputRe2=document.createElement("INPUT");
                            inputRe2.setAttribute("type","text");
                           inputRe2.setAttribute("class","resul");
                           inputRe2.setAttribute("id","resulequipousuariovisitante"+i);
                           columna.appendChild(inputRe2);
                           fila.appendChild(columna);
                           tabla.appendChild(fila);
                           document.getElementById("visitante"+i).value="";
                           document.getElementById("local"+i).value="";
                          document.getElementById("local"+i).value="";
                           document.getElementById("visitante"+i).value="";
                        }else if(document.getElementById("visitante"+i).value=="Bayer Munich"){
                         ///creamos un input nuevo para poder generar el resultado de los usuarios a mano.
                          var nombreElocal=document.getElementById("local"+i).value;
                          var nombreEvisitante=document.getElementById("visitante"+i).value;
                          var fila=document.createElement("tr");
                          var columna=document.createElement("td");
                          var input=document.createElement("INPUT");
                           input.setAttribute("type","text");
                          input.setAttribute("value",nombreElocal);
                          input.setAttribute("class","equiposv");
                          input.setAttribute("id","equipousuariocasa"+i);
                          columna.appendChild(input);
                          fila.appendChild(columna);
                          tabla.appendChild(fila);
                           document.getElementById("equipousuariocasa"+i).readOnly= true;
                          ///creamos un input para insertar los goles del partido local
                          var inputRe1=document.createElement("INPUT");
                           inputRe1.setAttribute("type","text");
                           inputRe1.setAttribute("class","resul");
                           inputRe1.setAttribute("id","resulequipousuariocasa"+i);
                           columna.appendChild(inputRe1);
                           fila.appendChild(columna);
                           tabla.appendChild(fila);
                         
                        ///creamos un input nuevo para poder generar el resultado de los usuarios a mano.
                          var input2 = document.createElement("INPUT");
                           input2.setAttribute("type","text");
                          input2.setAttribute("value",nombreEvisitante);
                          input2.setAttribute("class","equiposv");
                          input2.setAttribute("id","equipousuariovisiatante"+i);
                          columna.appendChild(input2);
                          fila.appendChild(columna);
                          tabla.appendChild(fila);
                          document.getElementById("equipousuariovisiatante"+i).readOnly= true;
                          ///creamos un input para insertar los goles del partido local
                           var inputRe2=document.createElement("INPUT");
                            inputRe2.setAttribute("type","text");
                           inputRe2.setAttribute("class","resul");
                           inputRe2.setAttribute("id","resulequipousuariovisitante"+i);
                           columna.appendChild(inputRe2);
                           fila.appendChild(columna);
                           tabla.appendChild(fila);
                           document.getElementById("visitante"+i).value="";
                           document.getElementById("local"+i).value="";
                        }
                      } 
                    if(<?php echo $escogido[4]["escogido"];?>){
                      if(document.getElementById("local"+i).value=="F.C.Barcelona"){
                          ///creamos un input nuevo para poder generar el resultado de los usuarios a mano.
                          var nombreElocal=document.getElementById("local"+i).value;
                          var nombreEvisitante=document.getElementById("visitante"+i).value;
                          var fila=document.createElement("tr");
                          var columna=document.createElement("td");
                          var input=document.createElement("INPUT");
                           input.setAttribute("type","text");
                          input.setAttribute("value",nombreElocal);
                          input.setAttribute("class","equiposv");
                          input.setAttribute("id","equipousuariocasa"+i);
                          columna.appendChild(input);
                          fila.appendChild(columna);
                          tabla.appendChild(fila);
                           document.getElementById("equipousuariocasa"+i).readOnly= true;
                          ///creamos un input para insertar los goles del partido local
                          var inputRe1=document.createElement("INPUT");
                           inputRe1.setAttribute("type","text");
                           inputRe1.setAttribute("class","resul");
                           inputRe1.setAttribute("id","resulequipousuariocasa"+i);
                           columna.appendChild(inputRe1);
                           fila.appendChild(columna);
                           tabla.appendChild(fila);
                         
                        ///creamos un input nuevo para poder generar el resultado de los usuarios a mano.
                          var input2 = document.createElement("INPUT");
                           input2.setAttribute("type","text");
                          input2.setAttribute("value",nombreEvisitante);
                          input2.setAttribute("class","equiposv");
                          input2.setAttribute("id","equipousuariovisiatante"+i);
                          columna.appendChild(input2);
                          fila.appendChild(columna);
                          tabla.appendChild(fila);
                          document.getElementById("equipousuariovisiatante"+i).readOnly= true;
                          ///creamos un input para insertar los goles del partido local
                           var inputRe2=document.createElement("INPUT");
                            inputRe2.setAttribute("type","text");
                           inputRe2.setAttribute("class","resul");
                           inputRe2.setAttribute("id","resulequipousuariovisitante"+i);
                           columna.appendChild(inputRe2);
                           fila.appendChild(columna);
                           tabla.appendChild(fila);
                           document.getElementById("visitante"+i).value="";
                           document.getElementById("local"+i).value="";
                        }else if(document.getElementById("visitante"+i).value=="F.C.Barcelona"){
                         ///creamos un input nuevo para poder generar el resultado de los usuarios a mano.
                          var nombreElocal=document.getElementById("local"+i).value;
                          var nombreEvisitante=document.getElementById("visitante"+i).value;
                          var fila=document.createElement("tr");
                          var columna=document.createElement("td");
                          var input=document.createElement("INPUT");
                           input.setAttribute("type","text");
                          input.setAttribute("value",nombreElocal);
                          input.setAttribute("class","equiposv");
                          input.setAttribute("id","equipousuariocasa"+i);
                          columna.appendChild(input);
                          fila.appendChild(columna);
                          tabla.appendChild(fila);
                           document.getElementById("equipousuariocasa"+i).readOnly= true;
                          ///creamos un input para insertar los goles del partido local
                          var inputRe1=document.createElement("INPUT");
                           inputRe1.setAttribute("type","text");
                           inputRe1.setAttribute("class","resul");
                           inputRe1.setAttribute("id","resulequipousuariocasa"+i);
                           columna.appendChild(inputRe1);
                           fila.appendChild(columna);
                           tabla.appendChild(fila);
                         
                        ///creamos un input nuevo para poder generar el resultado de los usuarios a mano.
                          var input2 = document.createElement("INPUT");
                           input2.setAttribute("type","text");
                          input2.setAttribute("value",nombreEvisitante);
                          input2.setAttribute("class","equiposv");
                          input2.setAttribute("id","equipousuariovisiatante"+i);
                          columna.appendChild(input2);
                          fila.appendChild(columna);
                          tabla.appendChild(fila);
                          document.getElementById("equipousuariovisiatante"+i).readOnly= true;
                          ///creamos un input para insertar los goles del partido local
                           var inputRe2=document.createElement("INPUT");
                            inputRe2.setAttribute("type","text");
                           inputRe2.setAttribute("class","resul");
                           inputRe2.setAttribute("id","resulequipousuariovisitante"+i);
                           columna.appendChild(inputRe2);
                           fila.appendChild(columna);
                           tabla.appendChild(fila);
                           document.getElementById("visitante"+i).value="";
                           document.getElementById("local"+i).value="";
                        }
                    } 
                    if(<?php echo $escogido[5]["escogido"];?>){
                      if(document.getElementById("local"+i).value=="Ajax"){
                         ///creamos un input nuevo para poder generar el resultado de los usuarios a mano.
                          var nombreElocal=document.getElementById("local"+i).value;
                          var nombreEvisitante=document.getElementById("visitante"+i).value;
                          var fila=document.createElement("tr");
                          var columna=document.createElement("td");
                          var input=document.createElement("INPUT");
                           input.setAttribute("type","text");
                          input.setAttribute("value",nombreElocal);
                          input.setAttribute("class","equiposv");
                          input.setAttribute("id","equipousuariocasa"+i);
                          columna.appendChild(input);
                          fila.appendChild(columna);
                          tabla.appendChild(fila);
                           document.getElementById("equipousuariocasa"+i).readOnly= true;
                          ///creamos un input para insertar los goles del partido local
                          var inputRe1=document.createElement("INPUT");
                           inputRe1.setAttribute("type","text");
                           inputRe1.setAttribute("class","resul");
                           inputRe1.setAttribute("id","resulequipousuariocasa"+i);
                           columna.appendChild(inputRe1);
                           fila.appendChild(columna);
                           tabla.appendChild(fila);
                         
                        ///creamos un input nuevo para poder generar el resultado de los usuarios a mano.
                          var input2 = document.createElement("INPUT");
                           input2.setAttribute("type","text");
                          input2.setAttribute("value",nombreEvisitante);
                          input2.setAttribute("class","equiposv");
                          input2.setAttribute("id","equipousuariovisiatante"+i);
                          columna.appendChild(input2);
                          fila.appendChild(columna);
                          tabla.appendChild(fila);
                          document.getElementById("equipousuariovisiatante"+i).readOnly= true;
                          ///creamos un input para insertar los goles del partido local
                           var inputRe2=document.createElement("INPUT");
                            inputRe2.setAttribute("type","text");
                           inputRe2.setAttribute("class","resul");
                           inputRe2.setAttribute("id","resulequipousuariovisitante"+i);
                           columna.appendChild(inputRe2);
                           fila.appendChild(columna);
                           tabla.appendChild(fila);
                           document.getElementById("visitante"+i).value="";
                           document.getElementById("local"+i).value="";
                        }else if(document.getElementById("visitante"+i).value=="Ajax"){
                          ///creamos un input nuevo para poder generar el resultado de los usuarios a mano.
                          var nombreElocal=document.getElementById("local"+i).value;
                          var nombreEvisitante=document.getElementById("visitante"+i).value;
                          var fila=document.createElement("tr");
                          var columna=document.createElement("td");
                          var input=document.createElement("INPUT");
                           input.setAttribute("type","text");
                          input.setAttribute("value",nombreElocal);
                          input.setAttribute("class","equiposv");
                          input.setAttribute("id","equipousuariocasa"+i);
                          columna.appendChild(input);
                          fila.appendChild(columna);
                          tabla.appendChild(fila);
                           document.getElementById("equipousuariocasa"+i).readOnly= true;
                          ///creamos un input para insertar los goles del partido local
                          var inputRe1=document.createElement("INPUT");
                           inputRe1.setAttribute("type","text");
                           inputRe1.setAttribute("class","resul");
                           inputRe1.setAttribute("id","resulequipousuariocasa"+i);
                           columna.appendChild(inputRe1);
                           fila.appendChild(columna);
                           tabla.appendChild(fila);
                         
                        ///creamos un input nuevo para poder generar el resultado de los usuarios a mano.
                          var input2 = document.createElement("INPUT");
                           input2.setAttribute("type","text");
                          input2.setAttribute("value",nombreEvisitante);
                          input2.setAttribute("class","equiposv");
                          input2.setAttribute("id","equipousuariovisiatante"+i);
                          columna.appendChild(input2);
                          fila.appendChild(columna);
                          tabla.appendChild(fila);
                          document.getElementById("equipousuariovisiatante"+i).readOnly= true;
                          ///creamos un input para insertar los goles del partido local
                           var inputRe2=document.createElement("INPUT");
                            inputRe2.setAttribute("type","text");
                           inputRe2.setAttribute("class","resul");
                           inputRe2.setAttribute("id","resulequipousuariovisitante"+i);
                           columna.appendChild(inputRe2);
                           fila.appendChild(columna);
                           tabla.appendChild(fila);
                           document.getElementById("visitante"+i).value="";
                           document.getElementById("local"+i).value="";
                        }
                    } 
                    if(<?php echo $escogido[6]["escogido"];?>){
                      if(document.getElementById("local"+i).value=="B.Dormunt"){
                         ///creamos un input nuevo para poder generar el resultado de los usuarios a mano.
                          var nombreElocal=document.getElementById("local"+i).value;
                          var nombreEvisitante=document.getElementById("visitante"+i).value;
                          var fila=document.createElement("tr");
                          var columna=document.createElement("td");
                          var input=document.createElement("INPUT");
                           input.setAttribute("type","text");
                          input.setAttribute("value",nombreElocal);
                          input.setAttribute("class","equiposv");
                          input.setAttribute("id","equipousuariocasa"+i);
                          columna.appendChild(input);
                          fila.appendChild(columna);
                          tabla.appendChild(fila);
                           document.getElementById("equipousuariocasa"+i).readOnly= true;
                          ///creamos un input para insertar los goles del partido local
                          var inputRe1=document.createElement("INPUT");
                           inputRe1.setAttribute("type","text");
                           inputRe1.setAttribute("class","resul");
                           inputRe1.setAttribute("id","resulequipousuariocasa"+i);
                           columna.appendChild(inputRe1);
                           fila.appendChild(columna);
                           tabla.appendChild(fila);
                         
                        ///creamos un input nuevo para poder generar el resultado de los usuarios a mano.
                          var input2 = document.createElement("INPUT");
                           input2.setAttribute("type","text");
                          input2.setAttribute("value",nombreEvisitante);
                          input2.setAttribute("class","equiposv");
                          input2.setAttribute("id","equipousuariovisiatante"+i);
                          columna.appendChild(input2);
                          fila.appendChild(columna);
                          tabla.appendChild(fila);
                          document.getElementById("equipousuariovisiatante"+i).readOnly= true;
                          ///creamos un input para insertar los goles del partido local
                           var inputRe2=document.createElement("INPUT");
                            inputRe2.setAttribute("type","text");
                           inputRe2.setAttribute("class","resul");
                           inputRe2.setAttribute("id","resulequipousuariovisitante"+i);
                           columna.appendChild(inputRe2);
                           fila.appendChild(columna);
                           tabla.appendChild(fila);
                           document.getElementById("visitante"+i).value="";
                           document.getElementById("local"+i).value="";
                        }else if(document.getElementById("visitante"+i).value=="B.Dormunt"){
                        ///creamos un input nuevo para poder generar el resultado de los usuarios a mano.
                          var nombreElocal=document.getElementById("local"+i).value;
                          var nombreEvisitante=document.getElementById("visitante"+i).value;
                          var fila=document.createElement("tr");
                          var columna=document.createElement("td");
                          var input=document.createElement("INPUT");
                           input.setAttribute("type","text");
                          input.setAttribute("value",nombreElocal);
                          input.setAttribute("class","equiposv");
                          input.setAttribute("id","equipousuariocasa"+i);
                          columna.appendChild(input);
                          fila.appendChild(columna);
                          tabla.appendChild(fila);
                           document.getElementById("equipousuariocasa"+i).readOnly= true;
                          ///creamos un input para insertar los goles del partido local
                          var inputRe1=document.createElement("INPUT");
                           inputRe1.setAttribute("type","text");
                           inputRe1.setAttribute("class","resul");
                           inputRe1.setAttribute("id","resulequipousuariocasa"+i);
                           columna.appendChild(inputRe1);
                           fila.appendChild(columna);
                           tabla.appendChild(fila);
                         
                        ///creamos un input nuevo para poder generar el resultado de los usuarios a mano.
                          var input2 = document.createElement("INPUT");
                           input2.setAttribute("type","text");
                          input2.setAttribute("value",nombreEvisitante);
                          input2.setAttribute("class","equiposv");
                          input2.setAttribute("id","equipousuariovisiatante"+i);
                          columna.appendChild(input2);
                          fila.appendChild(columna);
                          tabla.appendChild(fila);
                          document.getElementById("equipousuariovisiatante"+i).readOnly= true;
                          ///creamos un input para insertar los goles del partido local
                           var inputRe2=document.createElement("INPUT");
                            inputRe2.setAttribute("type","text");
                           inputRe2.setAttribute("class","resul");
                           inputRe2.setAttribute("id","resulequipousuariovisitante"+i);
                           columna.appendChild(inputRe2);
                           fila.appendChild(columna);
                           tabla.appendChild(fila);
                           document.getElementById("visitante"+i).value="";
                           document.getElementById("local"+i).value="";
                        }
                    } 
                    if(<?php echo $escogido[7]["escogido"];?>){
                      if(document.getElementById("local"+i).value=="M.United"){
                          ///creamos un input nuevo para poder generar el resultado de los usuarios a mano.
                          var nombreElocal=document.getElementById("local"+i).value;
                          var nombreEvisitante=document.getElementById("visitante"+i).value;
                          var fila=document.createElement("tr");
                          var columna=document.createElement("td");
                          var input=document.createElement("INPUT");
                           input.setAttribute("type","text");
                          input.setAttribute("value",nombreElocal);
                          input.setAttribute("class","equiposv");
                          input.setAttribute("id","equipousuariocasa"+i);
                          columna.appendChild(input);
                          fila.appendChild(columna);
                          tabla.appendChild(fila);
                           document.getElementById("equipousuariocasa"+i).readOnly= true;
                          ///creamos un input para insertar los goles del partido local
                          var inputRe1=document.createElement("INPUT");
                           inputRe1.setAttribute("type","text");
                           inputRe1.setAttribute("class","resul");
                           inputRe1.setAttribute("id","resulequipousuariocasa"+i);
                           columna.appendChild(inputRe1);
                           fila.appendChild(columna);
                           tabla.appendChild(fila);
                         
                        ///creamos un input nuevo para poder generar el resultado de los usuarios a mano.
                          var input2 = document.createElement("INPUT");
                           input2.setAttribute("type","text");
                          input2.setAttribute("value",nombreEvisitante);
                          input2.setAttribute("class","equiposv");
                          input2.setAttribute("id","equipousuariovisiatante"+i);
                          columna.appendChild(input2);
                          fila.appendChild(columna);
                          tabla.appendChild(fila);
                          document.getElementById("equipousuariovisiatante"+i).readOnly= true;
                          ///creamos un input para insertar los goles del partido local
                           var inputRe2=document.createElement("INPUT");
                            inputRe2.setAttribute("type","text");
                           inputRe2.setAttribute("class","resul");
                           inputRe2.setAttribute("id","resulequipousuariovisitante"+i);
                           columna.appendChild(inputRe2);
                           fila.appendChild(columna);
                           tabla.appendChild(fila);
                           document.getElementById("visitante"+i).value="";
                           document.getElementById("local"+i).value="";
                        }else if(document.getElementById("visitante"+i).value=="M.United"){
                         ///creamos un input nuevo para poder generar el resultado de los usuarios a mano.
                          var nombreElocal=document.getElementById("local"+i).value;
                          var nombreEvisitante=document.getElementById("visitante"+i).value;
                          var fila=document.createElement("tr");
                          var columna=document.createElement("td");
                          var input=document.createElement("INPUT");
                           input.setAttribute("type","text");
                          input.setAttribute("value",nombreElocal);
                          input.setAttribute("class","equiposv");
                          input.setAttribute("id","equipousuariocasa"+i);
                          columna.appendChild(input);
                          fila.appendChild(columna);
                          tabla.appendChild(fila);
                           document.getElementById("equipousuariocasa"+i).readOnly= true;
                          ///creamos un input para insertar los goles del partido local
                          var inputRe1=document.createElement("INPUT");
                           inputRe1.setAttribute("type","text");
                           inputRe1.setAttribute("class","resul");
                           inputRe1.setAttribute("id","resulequipousuariocasa"+i);
                           columna.appendChild(inputRe1);
                           fila.appendChild(columna);
                           tabla.appendChild(fila);
                         
                        ///creamos un input nuevo para poder generar el resultado de los usuarios a mano.
                          var input2 = document.createElement("INPUT");
                           input2.setAttribute("type","text");
                          input2.setAttribute("value",nombreEvisitante);
                          input2.setAttribute("class","equiposv");
                          input2.setAttribute("id","equipousuariovisiatante"+i);
                          columna.appendChild(input2);
                          fila.appendChild(columna);
                          tabla.appendChild(fila);
                          document.getElementById("equipousuariovisiatante"+i).readOnly= true;
                          ///creamos un input para insertar los goles del partido local
                           var inputRe2=document.createElement("INPUT");
                            inputRe2.setAttribute("type","text");
                           inputRe2.setAttribute("class","resul");
                           inputRe2.setAttribute("id","resulequipousuariovisitante"+i);
                           columna.appendChild(inputRe2);
                           fila.appendChild(columna);
                           tabla.appendChild(fila);
                           document.getElementById("visitante"+i).value="";
                           document.getElementById("local"+i).value="";
                        }
                    } 
                    if(<?php echo $escogido[8]["escogido"];?>){
                      if(document.getElementById("local"+i).value=="M.City"){
                          ///creamos un input nuevo para poder generar el resultado de los usuarios a mano.
                          var nombreElocal=document.getElementById("local"+i).value;
                          var nombreEvisitante=document.getElementById("visitante"+i).value;
                          var fila=document.createElement("tr");
                          var columna=document.createElement("td");
                          var input=document.createElement("INPUT");
                           input.setAttribute("type","text");
                          input.setAttribute("value",nombreElocal);
                          input.setAttribute("class","equiposv");
                          input.setAttribute("id","equipousuariocasa"+i);
                          columna.appendChild(input);
                          fila.appendChild(columna);
                          tabla.appendChild(fila);
                           document.getElementById("equipousuariocasa"+i).readOnly= true;
                          ///creamos un input para insertar los goles del partido local
                          var inputRe1=document.createElement("INPUT");
                           inputRe1.setAttribute("type","text");
                           inputRe1.setAttribute("class","resul");
                           inputRe1.setAttribute("id","resulequipousuariocasa"+i);
                           columna.appendChild(inputRe1);
                           fila.appendChild(columna);
                           tabla.appendChild(fila);
                         
                        ///creamos un input nuevo para poder generar el resultado de los usuarios a mano.
                          var input2 = document.createElement("INPUT");
                           input2.setAttribute("type","text");
                          input2.setAttribute("value",nombreEvisitante);
                          input2.setAttribute("class","equiposv");
                          input2.setAttribute("id","equipousuariovisiatante"+i);
                          columna.appendChild(input2);
                          fila.appendChild(columna);
                          tabla.appendChild(fila);
                          document.getElementById("equipousuariovisiatante"+i).readOnly= true;
                          ///creamos un input para insertar los goles del partido local
                           var inputRe2=document.createElement("INPUT");
                            inputRe2.setAttribute("type","text");
                           inputRe2.setAttribute("class","resul");
                           inputRe2.setAttribute("id","resulequipousuariovisitante"+i);
                           columna.appendChild(inputRe2);
                           fila.appendChild(columna);
                           tabla.appendChild(fila);
                           document.getElementById("visitante"+i).value="";
                           document.getElementById("local"+i).value="";
                        }else if(document.getElementById("visitante"+i).value=="M.City"){
                         ///creamos un input nuevo para poder generar el resultado de los usuarios a mano.
                          var nombreElocal=document.getElementById("local"+i).value;
                          var nombreEvisitante=document.getElementById("visitante"+i).value;
                          var fila=document.createElement("tr");
                          var columna=document.createElement("td");
                          var input=document.createElement("INPUT");
                           input.setAttribute("type","text");
                          input.setAttribute("value",nombreElocal);
                          input.setAttribute("class","equiposv");
                          input.setAttribute("id","equipousuariocasa"+i);
                          columna.appendChild(input);
                          fila.appendChild(columna);
                          tabla.appendChild(fila);
                           document.getElementById("equipousuariocasa"+i).readOnly= true;
                          ///creamos un input para insertar los goles del partido local
                          var inputRe1=document.createElement("INPUT");
                           inputRe1.setAttribute("type","text");
                           inputRe1.setAttribute("class","resul");
                           inputRe1.setAttribute("id","resulequipousuariocasa"+i);
                           columna.appendChild(inputRe1);
                           fila.appendChild(columna);
                           tabla.appendChild(fila);
                         
                        ///creamos un input nuevo para poder generar el resultado de los usuarios a mano.
                          var input2 = document.createElement("INPUT");
                           input2.setAttribute("type","text");
                          input2.setAttribute("value",nombreEvisitante);
                          input2.setAttribute("class","equiposv");
                          input2.setAttribute("id","equipousuariovisiatante"+i);
                          columna.appendChild(input2);
                          fila.appendChild(columna);
                          tabla.appendChild(fila);
                          document.getElementById("equipousuariovisiatante"+i).readOnly= true;
                          ///creamos un input para insertar los goles del partido local
                           var inputRe2=document.createElement("INPUT");
                            inputRe2.setAttribute("type","text");
                           inputRe2.setAttribute("class","resul");
                           inputRe2.setAttribute("id","resulequipousuariovisitante"+i);
                           columna.appendChild(inputRe2);
                           fila.appendChild(columna);
                           tabla.appendChild(fila);
                           document.getElementById("visitante"+i).value="";
                           document.getElementById("local"+i).value="";
                        }
                    } 
                    if(<?php echo $escogido[9]["escogido"];?>){
                      if(document.getElementById("local"+i).value=="Arsenal"){
                         ///creamos un input nuevo para poder generar el resultado de los usuarios a mano.
                          var nombreElocal=document.getElementById("local"+i).value;
                          var nombreEvisitante=document.getElementById("visitante"+i).value;
                          var fila=document.createElement("tr");
                          var columna=document.createElement("td");
                          var input=document.createElement("INPUT");
                           input.setAttribute("type","text");
                          input.setAttribute("value",nombreElocal);
                          input.setAttribute("class","equiposv");
                          input.setAttribute("id","equipousuariocasa"+i);
                          columna.appendChild(input);
                          fila.appendChild(columna);
                          tabla.appendChild(fila);
                           document.getElementById("equipousuariocasa"+i).readOnly= true;
                          ///creamos un input para insertar los goles del partido local
                          var inputRe1=document.createElement("INPUT");
                           inputRe1.setAttribute("type","text");
                           inputRe1.setAttribute("class","resul");
                           inputRe1.setAttribute("id","resulequipousuariocasa"+i);
                           columna.appendChild(inputRe1);
                           fila.appendChild(columna);
                           tabla.appendChild(fila);
                         
                        ///creamos un input nuevo para poder generar el resultado de los usuarios a mano.
                          var input2 = document.createElement("INPUT");
                           input2.setAttribute("type","text");
                          input2.setAttribute("value",nombreEvisitante);
                          input2.setAttribute("class","equiposv");
                          input2.setAttribute("id","equipousuariovisiatante"+i);
                          columna.appendChild(input2);
                          fila.appendChild(columna);
                          tabla.appendChild(fila);
                          document.getElementById("equipousuariovisiatante"+i).readOnly= true;
                          ///creamos un input para insertar los goles del partido local
                           var inputRe2=document.createElement("INPUT");
                            inputRe2.setAttribute("type","text");
                           inputRe2.setAttribute("class","resul");
                           inputRe2.setAttribute("id","resulequipousuariovisitante"+i);
                           columna.appendChild(inputRe2);
                           fila.appendChild(columna);
                           tabla.appendChild(fila);
                           document.getElementById("visitante"+i).value="";
                           document.getElementById("local"+i).value="";
                        }else if(document.getElementById("visitante"+i).value=="Arsenal"){
                          ///creamos un input nuevo para poder generar el resultado de los usuarios a mano.
                          var nombreElocal=document.getElementById("local"+i).value;
                          var nombreEvisitante=document.getElementById("visitante"+i).value;
                          var fila=document.createElement("tr");
                          var columna=document.createElement("td");
                          var input=document.createElement("INPUT");
                           input.setAttribute("type","text");
                          input.setAttribute("value",nombreElocal);
                          input.setAttribute("class","equiposv");
                          input.setAttribute("id","equipousuariocasa"+i);
                          columna.appendChild(input);
                          fila.appendChild(columna);
                          tabla.appendChild(fila);
                           document.getElementById("equipousuariocasa"+i).readOnly= true;
                          ///creamos un input para insertar los goles del partido local
                          var inputRe1=document.createElement("INPUT");
                           inputRe1.setAttribute("type","text");
                           inputRe1.setAttribute("class","resul");
                           inputRe1.setAttribute("id","resulequipousuariocasa"+i);
                           columna.appendChild(inputRe1);
                           fila.appendChild(columna);
                           tabla.appendChild(fila);
                         
                        ///creamos un input nuevo para poder generar el resultado de los usuarios a mano.
                          var input2 = document.createElement("INPUT");
                           input2.setAttribute("type","text");
                          input2.setAttribute("value",nombreEvisitante);
                          input2.setAttribute("class","equiposv");
                          input2.setAttribute("id","equipousuariovisiatante"+i);
                          columna.appendChild(input2);
                          fila.appendChild(columna);
                          tabla.appendChild(fila);
                          document.getElementById("equipousuariovisiatante"+i).readOnly= true;
                          ///creamos un input para insertar los goles del partido local
                           var inputRe2=document.createElement("INPUT");
                            inputRe2.setAttribute("type","text");
                           inputRe2.setAttribute("class","resul");
                           inputRe2.setAttribute("id","resulequipousuariovisitante"+i);
                           columna.appendChild(inputRe2);
                           fila.appendChild(columna);
                           tabla.appendChild(fila);
                           document.getElementById("visitante"+i).value="";
                           document.getElementById("local"+i).value="";
                        }
                    } 
                    if(<?php echo $escogido[10]["escogido"];?>){
                      if(document.getElementById("local"+i).value=="Oporto"){
                         ///creamos un input nuevo para poder generar el resultado de los usuarios a mano.
                          var nombreElocal=document.getElementById("local"+i).value;
                          var nombreEvisitante=document.getElementById("visitante"+i).value;
                          var fila=document.createElement("tr");
                          var columna=document.createElement("td");
                          var input=document.createElement("INPUT");
                           input.setAttribute("type","text");
                          input.setAttribute("value",nombreElocal);
                          input.setAttribute("class","equiposv");
                          input.setAttribute("id","equipousuariocasa"+i);
                          columna.appendChild(input);
                          fila.appendChild(columna);
                          tabla.appendChild(fila);
                           document.getElementById("equipousuariocasa"+i).readOnly= true;
                          ///creamos un input para insertar los goles del partido local
                          var inputRe1=document.createElement("INPUT");
                           inputRe1.setAttribute("type","text");
                           inputRe1.setAttribute("class","resul");
                           inputRe1.setAttribute("id","resulequipousuariocasa"+i);
                           columna.appendChild(inputRe1);
                           fila.appendChild(columna);
                           tabla.appendChild(fila);
                         
                        ///creamos un input nuevo para poder generar el resultado de los usuarios a mano.
                          var input2 = document.createElement("INPUT");
                           input2.setAttribute("type","text");
                          input2.setAttribute("value",nombreEvisitante);
                          input2.setAttribute("class","equiposv");
                          input2.setAttribute("id","equipousuariovisiatante"+i);
                          columna.appendChild(input2);
                          fila.appendChild(columna);
                          tabla.appendChild(fila);
                          document.getElementById("equipousuariovisiatante"+i).readOnly= true;
                          ///creamos un input para insertar los goles del partido local
                           var inputRe2=document.createElement("INPUT");
                            inputRe2.setAttribute("type","text");
                           inputRe2.setAttribute("class","resul");
                           inputRe2.setAttribute("id","resulequipousuariovisitante"+i);
                           columna.appendChild(inputRe2);
                           fila.appendChild(columna);
                           tabla.appendChild(fila);
                           document.getElementById("visitante"+i).value="";
                           document.getElementById("local"+i).value="";
                        }else if(document.getElementById("visitante"+i).value=="Oporto"){
                         ///creamos un input nuevo para poder generar el resultado de los usuarios a mano.
                          var nombreElocal=document.getElementById("local"+i).value;
                          var nombreEvisitante=document.getElementById("visitante"+i).value;
                          var fila=document.createElement("tr");
                          var columna=document.createElement("td");
                          var input=document.createElement("INPUT");
                           input.setAttribute("type","text");
                          input.setAttribute("value",nombreElocal);
                          input.setAttribute("class","equiposv");
                          input.setAttribute("id","equipousuariocasa"+i);
                          columna.appendChild(input);
                          fila.appendChild(columna);
                          tabla.appendChild(fila);
                           document.getElementById("equipousuariocasa"+i).readOnly= true;
                          ///creamos un input para insertar los goles del partido local
                          var inputRe1=document.createElement("INPUT");
                           inputRe1.setAttribute("type","text");
                           inputRe1.setAttribute("class","resul");
                           inputRe1.setAttribute("id","resulequipousuariocasa"+i);
                           columna.appendChild(inputRe1);
                           fila.appendChild(columna);
                           tabla.appendChild(fila);
                         
                        ///creamos un input nuevo para poder generar el resultado de los usuarios a mano.
                          var input2 = document.createElement("INPUT");
                           input2.setAttribute("type","text");
                          input2.setAttribute("value",nombreEvisitante);
                          input2.setAttribute("class","equiposv");
                          input2.setAttribute("id","equipousuariovisiatante"+i);
                          columna.appendChild(input2);
                          fila.appendChild(columna);
                          tabla.appendChild(fila);
                          document.getElementById("equipousuariovisiatante"+i).readOnly= true;
                          ///creamos un input para insertar los goles del partido local
                           var inputRe2=document.createElement("INPUT");
                            inputRe2.setAttribute("type","text");
                           inputRe2.setAttribute("class","resul");
                           inputRe2.setAttribute("id","resulequipousuariovisitante"+i);
                           columna.appendChild(inputRe2);
                           fila.appendChild(columna);
                           tabla.appendChild(fila);
                           document.getElementById("visitante"+i).value="";
                           document.getElementById("local"+i).value="";
                        }
                    } 
                    if(<?php echo $escogido[11]["escogido"];?>){
                      if(document.getElementById("local"+i).value=="At.Madrid"){
                          ///creamos un input nuevo para poder generar el resultado de los usuarios a mano.
                          var nombreElocal=document.getElementById("local"+i).value;
                          var nombreEvisitante=document.getElementById("visitante"+i).value;
                          var fila=document.createElement("tr");
                          var columna=document.createElement("td");
                          var input=document.createElement("INPUT");
                           input.setAttribute("type","text");
                          input.setAttribute("value",nombreElocal);
                          input.setAttribute("class","equiposv");
                          input.setAttribute("id","equipousuariocasa"+i);
                          columna.appendChild(input);
                          fila.appendChild(columna);
                          tabla.appendChild(fila);
                           document.getElementById("equipousuariocasa"+i).readOnly= true;
                          ///creamos un input para insertar los goles del partido local
                          var inputRe1=document.createElement("INPUT");
                           inputRe1.setAttribute("type","text");
                           inputRe1.setAttribute("class","resul");
                           inputRe1.setAttribute("id","resulequipousuariocasa"+i);
                           columna.appendChild(inputRe1);
                           fila.appendChild(columna);
                           tabla.appendChild(fila);
                         
                        ///creamos un input nuevo para poder generar el resultado de los usuarios a mano.
                          var input2 = document.createElement("INPUT");
                           input2.setAttribute("type","text");
                          input2.setAttribute("value",nombreEvisitante);
                          input2.setAttribute("class","equiposv");
                          input2.setAttribute("id","equipousuariovisiatante"+i);
                          columna.appendChild(input2);
                          fila.appendChild(columna);
                          tabla.appendChild(fila);
                          document.getElementById("equipousuariovisiatante"+i).readOnly= true;
                          ///creamos un input para insertar los goles del partido local
                           var inputRe2=document.createElement("INPUT");
                            inputRe2.setAttribute("type","text");
                           inputRe2.setAttribute("class","resul");
                           inputRe2.setAttribute("id","resulequipousuariovisitante"+i);
                           columna.appendChild(inputRe2);
                           fila.appendChild(columna);
                           tabla.appendChild(fila);
                           document.getElementById("visitante"+i).value="";
                           document.getElementById("local"+i).value="";
                        }else if(document.getElementById("visitante"+i).value=="At.Madrid"){
                          ///creamos un input nuevo para poder generar el resultado de los usuarios a mano.
                          var nombreElocal=document.getElementById("local"+i).value;
                          var nombreEvisitante=document.getElementById("visitante"+i).value;
                          var fila=document.createElement("tr");
                          var columna=document.createElement("td");
                          var input=document.createElement("INPUT");
                           input.setAttribute("type","text");
                          input.setAttribute("value",nombreElocal);
                          input.setAttribute("class","equiposv");
                          input.setAttribute("id","equipousuariocasa"+i);
                          columna.appendChild(input);
                          fila.appendChild(columna);
                          tabla.appendChild(fila);
                           document.getElementById("equipousuariocasa"+i).readOnly= true;
                          ///creamos un input para insertar los goles del partido local
                          var inputRe1=document.createElement("INPUT");
                           inputRe1.setAttribute("type","text");
                           inputRe1.setAttribute("class","resul");
                           inputRe1.setAttribute("id","resulequipousuariocasa"+i);
                           columna.appendChild(inputRe1);
                           fila.appendChild(columna);
                           tabla.appendChild(fila);
                         
                        ///creamos un input nuevo para poder generar el resultado de los usuarios a mano.
                          var input2 = document.createElement("INPUT");
                           input2.setAttribute("type","text");
                          input2.setAttribute("value",nombreEvisitante);
                          input2.setAttribute("class","equiposv");
                          input2.setAttribute("id","equipousuariovisiatante"+i);
                          columna.appendChild(input2);
                          fila.appendChild(columna);
                          tabla.appendChild(fila);
                          document.getElementById("equipousuariovisiatante"+i).readOnly= true;
                          ///creamos un input para insertar los goles del partido local
                           var inputRe2=document.createElement("INPUT");
                            inputRe2.setAttribute("type","text");
                           inputRe2.setAttribute("class","resul");
                           inputRe2.setAttribute("id","resulequipousuariovisitante"+i);
                           columna.appendChild(inputRe2);
                           fila.appendChild(columna);
                           tabla.appendChild(fila);
                           document.getElementById("visitante"+i).value="";
                           document.getElementById("local"+i).value="";
                        }
                    } 
                    if(<?php echo $escogido[12]["escogido"];?>){
                      if(document.getElementById("local"+i).value=="I.Milan"){
                          ///creamos un input nuevo para poder generar el resultado de los usuarios a mano.
                          var nombreElocal=document.getElementById("local"+i).value;
                          var nombreEvisitante=document.getElementById("visitante"+i).value;
                          var fila=document.createElement("tr");
                          var columna=document.createElement("td");
                          var input=document.createElement("INPUT");
                           input.setAttribute("type","text");
                          input.setAttribute("value",nombreElocal);
                          input.setAttribute("class","equiposv");
                          input.setAttribute("id","equipousuariocasa"+i);
                          columna.appendChild(input);
                          fila.appendChild(columna);
                          tabla.appendChild(fila);
                           document.getElementById("equipousuariocasa"+i).readOnly= true;
                          ///creamos un input para insertar los goles del partido local
                          var inputRe1=document.createElement("INPUT");
                           inputRe1.setAttribute("type","text");
                           inputRe1.setAttribute("class","resul");
                           inputRe1.setAttribute("id","resulequipousuariocasa"+i);
                           columna.appendChild(inputRe1);
                           fila.appendChild(columna);
                           tabla.appendChild(fila);
                         
                        ///creamos un input nuevo para poder generar el resultado de los usuarios a mano.
                          var input2 = document.createElement("INPUT");
                           input2.setAttribute("type","text");
                          input2.setAttribute("value",nombreEvisitante);
                          input2.setAttribute("class","equiposv");
                          input2.setAttribute("id","equipousuariovisiatante"+i);
                          columna.appendChild(input2);
                          fila.appendChild(columna);
                          tabla.appendChild(fila);
                          document.getElementById("equipousuariovisiatante"+i).readOnly= true;
                          ///creamos un input para insertar los goles del partido local
                           var inputRe2=document.createElement("INPUT");
                            inputRe2.setAttribute("type","text");
                           inputRe2.setAttribute("class","resul");
                           inputRe2.setAttribute("id","resulequipousuariovisitante"+i);
                           columna.appendChild(inputRe2);
                           fila.appendChild(columna);
                           tabla.appendChild(fila);
                           document.getElementById("visitante"+i).value="";
                           document.getElementById("local"+i).value="";
                        }else if(document.getElementById("visitante"+i).value=="I.Milan"){
                          ///creamos un input nuevo para poder generar el resultado de los usuarios a mano.
                          var nombreElocal=document.getElementById("local"+i).value;
                          var nombreEvisitante=document.getElementById("visitante"+i).value;
                          var fila=document.createElement("tr");
                          var columna=document.createElement("td");
                          var input=document.createElement("INPUT");
                           input.setAttribute("type","text");
                          input.setAttribute("value",nombreElocal);
                          input.setAttribute("class","equiposv");
                          input.setAttribute("id","equipousuariocasa"+i);
                          columna.appendChild(input);
                          fila.appendChild(columna);
                          tabla.appendChild(fila);
                           document.getElementById("equipousuariocasa"+i).readOnly= true;
                          ///creamos un input para insertar los goles del partido local
                          var inputRe1=document.createElement("INPUT");
                           inputRe1.setAttribute("type","text");
                           inputRe1.setAttribute("class","resul");
                           inputRe1.setAttribute("id","resulequipousuariocasa"+i);
                           columna.appendChild(inputRe1);
                           fila.appendChild(columna);
                           tabla.appendChild(fila);
                         
                        ///creamos un input nuevo para poder generar el resultado de los usuarios a mano.
                          var input2 = document.createElement("INPUT");
                           input2.setAttribute("type","text");
                          input2.setAttribute("value",nombreEvisitante);
                          input2.setAttribute("class","equiposv");
                          input2.setAttribute("id","equipousuariovisiatante"+i);
                          columna.appendChild(input2);
                          fila.appendChild(columna);
                          tabla.appendChild(fila);
                          document.getElementById("equipousuariovisiatante"+i).readOnly= true;
                          ///creamos un input para insertar los goles del partido local
                           var inputRe2=document.createElement("INPUT");
                            inputRe2.setAttribute("type","text");
                           inputRe2.setAttribute("class","resul");
                           inputRe2.setAttribute("id","resulequipousuariovisitante"+i);
                           columna.appendChild(inputRe2);
                           fila.appendChild(columna);
                           tabla.appendChild(fila);
                           document.getElementById("visitante"+i).value="";
                           document.getElementById("local"+i).value="";
                        }
                    } 
                    if(<?php echo $escogido[13]["escogido"];?>){
                      if(document.getElementById("local"+i).value=="Liverpool"){
                        ///creamos un input nuevo para poder generar el resultado de los usuarios a mano.
                          var nombreElocal=document.getElementById("local"+i).value;
                          var nombreEvisitante=document.getElementById("visitante"+i).value;
                          var fila=document.createElement("tr");
                          var columna=document.createElement("td");
                          var input=document.createElement("INPUT");
                           input.setAttribute("type","text");
                          input.setAttribute("value",nombreElocal);
                          input.setAttribute("class","equiposv");
                          input.setAttribute("id","equipousuariocasa"+i);
                          columna.appendChild(input);
                          fila.appendChild(columna);
                          tabla.appendChild(fila);
                           document.getElementById("equipousuariocasa"+i).readOnly= true;
                          ///creamos un input para insertar los goles del partido local
                          var inputRe1=document.createElement("INPUT");
                           inputRe1.setAttribute("type","text");
                           inputRe1.setAttribute("class","resul");
                           inputRe1.setAttribute("id","resulequipousuariocasa"+i);
                           columna.appendChild(inputRe1);
                           fila.appendChild(columna);
                           tabla.appendChild(fila);
                         
                        ///creamos un input nuevo para poder generar el resultado de los usuarios a mano.
                          var input2 = document.createElement("INPUT");
                          input2.setAttribute("type","text");
                          input2.setAttribute("value",nombreEvisitante);
                          input2.setAttribute("class","equiposv");
                          input2.setAttribute("id","equipousuariovisiatante"+i);
                          columna.appendChild(input2);
                          fila.appendChild(columna);
                          tabla.appendChild(fila);
                          document.getElementById("equipousuariovisiatante"+i).readOnly= true;
                          ///creamos un input para insertar los goles del partido local
                           var inputRe2=document.createElement("INPUT");
                            inputRe2.setAttribute("type","text");
                           inputRe2.setAttribute("class","resul");
                           inputRe2.setAttribute("id","resulequipousuariovisitante"+i);
                           columna.appendChild(inputRe2);
                           fila.appendChild(columna);
                           tabla.appendChild(fila);
                           document.getElementById("visitante"+i).value="";
                           document.getElementById("local"+i).value="";
                        }else if(document.getElementById("visitante"+i).value=="Liverpool"){
                         ///creamos un input nuevo para poder generar el resultado de los usuarios a mano.
                          var nombreElocal=document.getElementById("local"+i).value;
                          var nombreEvisitante=document.getElementById("visitante"+i).value;
                          var fila=document.createElement("tr");
                          var columna=document.createElement("td");
                          var input=document.createElement("INPUT");
                           input.setAttribute("type","text");
                          input.setAttribute("value",nombreElocal);
                          input.setAttribute("class","equiposv");
                          input.setAttribute("id","equipousuariocasa"+i);
                          columna.appendChild(input);
                          fila.appendChild(columna);
                          tabla.appendChild(fila);
                           document.getElementById("equipousuariocasa"+i).readOnly= true;
                          ///creamos un input para insertar los goles del partido local
                          var inputRe1=document.createElement("INPUT");
                           inputRe1.setAttribute("type","text");
                           inputRe1.setAttribute("class","resul");
                           inputRe1.setAttribute("id","resulequipousuariocasa"+i);
                           columna.appendChild(inputRe1);
                           fila.appendChild(columna);
                           tabla.appendChild(fila);
                         
                        ///creamos un input nuevo para poder generar el resultado de los usuarios a mano.
                          var input2 = document.createElement("INPUT");
                           input2.setAttribute("type","text");
                          input2.setAttribute("value",nombreEvisitante);
                          input2.setAttribute("class","equiposv");
                          input2.setAttribute("id","equipousuariovisiatante"+i);
                          columna.appendChild(input2);
                          fila.appendChild(columna);
                          tabla.appendChild(fila);
                          document.getElementById("equipousuariovisiatante"+i).readOnly= true;
                          ///creamos un input para insertar los goles del partido local
                           var inputRe2=document.createElement("INPUT");
                            inputRe2.setAttribute("type","text");
                           inputRe2.setAttribute("class","resul");
                           inputRe2.setAttribute("id","resulequipousuariovisitante"+i);
                           columna.appendChild(inputRe2);
                           fila.appendChild(columna);
                           tabla.appendChild(fila);
                           document.getElementById("visitante"+i).value="";
                           document.getElementById("local"+i).value="";
                        }
                    } 
                    if(<?php echo $escogido[14]["escogido"];?>){
                      if(document.getElementById("local"+i).value=="Juventus"){
                         ///creamos un input nuevo para poder generar el resultado de los usuarios a mano.
                          var nombreElocal=document.getElementById("local"+i).value;
                          var nombreEvisitante=document.getElementById("visitante"+i).value;
                          var fila=document.createElement("tr");
                          var columna=document.createElement("td");
                          var input=document.createElement("INPUT");
                           input.setAttribute("type","text");
                          input.setAttribute("value",nombreElocal);
                          input.setAttribute("class","equiposv");
                          input.setAttribute("id","equipousuariocasa"+i);
                          columna.appendChild(input);
                          fila.appendChild(columna);
                          tabla.appendChild(fila);
                           document.getElementById("equipousuariocasa"+i).readOnly= true;
                          ///creamos un input para insertar los goles del partido local
                          var inputRe1=document.createElement("INPUT");
                           inputRe1.setAttribute("type","text");
                           inputRe1.setAttribute("class","resul");
                           inputRe1.setAttribute("id","resulequipousuariocasa"+i);
                           columna.appendChild(inputRe1);
                           fila.appendChild(columna);
                           tabla.appendChild(fila);
                         
                        ///creamos un input nuevo para poder generar el resultado de los usuarios a mano.
                          var input2 = document.createElement("INPUT");
                           input2.setAttribute("type","text");
                          input2.setAttribute("value",nombreEvisitante);
                          input2.setAttribute("class","equiposv");
                          input2.setAttribute("id","equipousuariovisiatante"+i);
                          columna.appendChild(input2);
                          fila.appendChild(columna);
                          tabla.appendChild(fila);
                          document.getElementById("equipousuariovisiatante"+i).readOnly= true;
                          ///creamos un input para insertar los goles del partido local
                           var inputRe2=document.createElement("INPUT");
                            inputRe2.setAttribute("type","text");
                           inputRe2.setAttribute("class","resul");
                           inputRe2.setAttribute("id","resulequipousuariovisitante"+i);
                           columna.appendChild(inputRe2);
                           fila.appendChild(columna);
                           tabla.appendChild(fila);
                           document.getElementById("visitante"+i).value="";
                           document.getElementById("local"+i).value="";
                        }else if(document.getElementById("visitante"+i).value=="Juventus"){
                         ///creamos un input nuevo para poder generar el resultado de los usuarios a mano.
                          var nombreElocal=document.getElementById("local"+i).value;
                          var nombreEvisitante=document.getElementById("visitante"+i).value;
                          var fila=document.createElement("tr");
                          var columna=document.createElement("td");
                          var input=document.createElement("INPUT");
                           input.setAttribute("type","text");
                          input.setAttribute("value",nombreElocal);
                          input.setAttribute("class","equiposv");
                          input.setAttribute("id","equipousuariocasa"+i);
                          columna.appendChild(input);
                          fila.appendChild(columna);
                          tabla.appendChild(fila);
                           document.getElementById("equipousuariocasa"+i).readOnly= true;
                          ///creamos un input para insertar los goles del partido local
                          var inputRe1=document.createElement("INPUT");
                           inputRe1.setAttribute("type","text");
                           inputRe1.setAttribute("class","resul");
                           inputRe1.setAttribute("id","resulequipousuariocasa"+i);
                           columna.appendChild(inputRe1);
                           fila.appendChild(columna);
                           tabla.appendChild(fila);
                         
                        ///creamos un input nuevo para poder generar el resultado de los usuarios a mano.
                          var input2 = document.createElement("INPUT");
                           input2.setAttribute("type","text");
                          input2.setAttribute("value",nombreEvisitante);
                          input2.setAttribute("class","equiposv");
                          input2.setAttribute("id","equipousuariovisiatante"+i);
                          columna.appendChild(input2);
                          fila.appendChild(columna);
                          tabla.appendChild(fila);
                          document.getElementById("equipousuariovisiatante"+i).readOnly= true;
                          ///creamos un input para insertar los goles del partido local
                           var inputRe2=document.createElement("INPUT");
                            inputRe2.setAttribute("type","text");
                           inputRe2.setAttribute("class","resul");
                           inputRe2.setAttribute("id","resulequipousuariovisitante"+i);
                           columna.appendChild(inputRe2);
                           fila.appendChild(columna);
                           tabla.appendChild(fila);
                           document.getElementById("visitante"+i).value="";
                           document.getElementById("local"+i).value="";
                        }
                    } 
                    if(<?php echo $escogido[15]["escogido"];?>){
                      if(document.getElementById("local"+i).value=="Tottenham"){
                         ///creamos un input nuevo para poder generar el resultado de los usuarios a mano.
                          var nombreElocal=document.getElementById("local"+i).value;
                          var nombreEvisitante=document.getElementById("visitante"+i).value;
                          var fila=document.createElement("tr");
                          var columna=document.createElement("td");
                          var input=document.createElement("INPUT");
                          input.setAttribute("type","text");
                          input.setAttribute("value",nombreElocal);
                          input.setAttribute("class","equiposv");
                          input.setAttribute("id","equipousuariocasa"+i);
                          columna.appendChild(input);
                          fila.appendChild(columna);
                          tabla.appendChild(fila);
                           document.getElementById("equipousuariocasa"+i).readOnly= true;
                          ///creamos un input para insertar los goles del partido local
                          var inputRe1=document.createElement("INPUT");
                           inputRe1.setAttribute("type","text");
                           inputRe1.setAttribute("class","resul");
                           inputRe1.setAttribute("id","resulequipousuariocasa"+i);
                           columna.appendChild(inputRe1);
                           fila.appendChild(columna);
                           tabla.appendChild(fila);
                         
                        ///creamos un input nuevo para poder generar el resultado de los usuarios a mano.
                          var input2 = document.createElement("INPUT");
                          input2.setAttribute("type","text");
                          input2.setAttribute("value",nombreEvisitante);
                          input2.setAttribute("class","equiposv");
                          input2.setAttribute("id","equipousuariovisiatante"+i);
                          columna.appendChild(input2);
                          fila.appendChild(columna);
                          tabla.appendChild(fila);
                          document.getElementById("equipousuariovisiatante"+i).readOnly= true;
                          ///creamos un input para insertar los goles del partido local
                           var inputRe2=document.createElement("INPUT");
                           inputRe2.setAttribute("type","text");
                           inputRe2.setAttribute("class","resul");
                           inputRe2.setAttribute("id","resulequipousuariovisitante"+i);
                           columna.appendChild(inputRe2);
                           fila.appendChild(columna);
                           tabla.appendChild(fila);
                           document.getElementById("visitante"+i).value="";
                           document.getElementById("local"+i).value="";
                        }else if(document.getElementById("visitante"+i).value=="Tottenham"){
                         ///creamos un input nuevo para poder generar el resultado de los usuarios a mano.
                          var nombreElocal=document.getElementById("local"+i).value;
                          var nombreEvisitante=document.getElementById("visitante"+i).value;
                          var fila=document.createElement("tr");
                          var columna=document.createElement("td");
                          var input=document.createElement("INPUT");
                          input.setAttribute("type","text");
                          input.setAttribute("value",nombreElocal);
                          input.setAttribute("class","equiposv");
                          input.setAttribute("id","equipousuariocasa"+i);
                          columna.appendChild(input);
                          fila.appendChild(columna);
                          tabla.appendChild(fila);
                           document.getElementById("equipousuariocasa"+i).readOnly= true;
                          ///creamos un input para insertar los goles del partido local
                          var inputRe1=document.createElement("INPUT");
                           inputRe1.setAttribute("type","text");
                           inputRe1.setAttribute("class","resul");
                           inputRe1.setAttribute("id","resulequipousuariocasa"+i);
                           columna.appendChild(inputRe1);
                           fila.appendChild(columna);
                           tabla.appendChild(fila);
                         
                        ///creamos un input nuevo para poder generar el resultado de los usuarios a mano.
                          var input2 = document.createElement("INPUT");
                           input2.setAttribute("type","text");
                          input2.setAttribute("value",nombreEvisitante);
                          input2.setAttribute("class","equiposv");
                          input2.setAttribute("id","equipousuariovisiatante"+i);
                          columna.appendChild(input2);
                          fila.appendChild(columna);
                          tabla.appendChild(fila);
                          document.getElementById("equipousuariovisiatante"+i).readOnly= true;
                          ///creamos un input para insertar los goles del partido local
                           var inputRe2=document.createElement("INPUT");
                            inputRe2.setAttribute("type","text");
                           inputRe2.setAttribute("class","resul");
                           inputRe2.setAttribute("id","resulequipousuariovisitante"+i);
                           columna.appendChild(inputRe2);
                           fila.appendChild(columna);
                           tabla.appendChild(fila);
                           document.getElementById("visitante"+i).value="";
                           document.getElementById("local"+i).value="";
                        }
                    } 
                    if(<?php echo $escogido[16]["escogido"];?>){
                      if(document.getElementById("local"+i).value=="Sevilla"){
                          ///creamos un input nuevo para poder generar el resultado de los usuarios a mano.
                          var nombreElocal=document.getElementById("local"+i).value;
                          var nombreEvisitante=document.getElementById("visitante"+i).value;
                          var fila=document.createElement("tr");
                          var columna=document.createElement("td");
                          var input=document.createElement("INPUT");
                           input.setAttribute("type","text");
                          input.setAttribute("value",nombreElocal);
                          input.setAttribute("class","equiposv");
                          input.setAttribute("id","equipousuariocasa"+i);
                          columna.appendChild(input);
                          fila.appendChild(columna);
                          tabla.appendChild(fila);
                           document.getElementById("equipousuariocasa"+i).readOnly= true;
                          ///creamos un input para insertar los goles del partido local
                          var inputRe1=document.createElement("INPUT");
                           inputRe1.setAttribute("type","text");
                           inputRe1.setAttribute("class","resul");
                           inputRe1.setAttribute("id","resulequipousuariocasa"+i);
                           columna.appendChild(inputRe1);
                           fila.appendChild(columna);
                           tabla.appendChild(fila);
                         
                        ///creamos un input nuevo para poder generar el resultado de los usuarios a mano.
                          var input2 = document.createElement("INPUT");
                           input2.setAttribute("type","text");
                          input2.setAttribute("value",nombreEvisitante);
                          input2.setAttribute("class","equiposv");
                          input2.setAttribute("id","equipousuariovisiatante"+i);
                          columna.appendChild(input2);
                          fila.appendChild(columna);
                          tabla.appendChild(fila);
                          document.getElementById("equipousuariovisiatante"+i).readOnly= true;
                          ///creamos un input para insertar los goles del partido local
                           var inputRe2=document.createElement("INPUT");
                            inputRe2.setAttribute("type","text");
                           inputRe2.setAttribute("class","resul");
                           inputRe2.setAttribute("id","resulequipousuariovisitante"+i);
                           columna.appendChild(inputRe2);
                           fila.appendChild(columna);
                           tabla.appendChild(fila);
                           document.getElementById("visitante"+i).value="";
                           document.getElementById("local"+i).value="";
                        }else if(document.getElementById("visitante"+i).value=="Sevilla"){
                          ///creamos un input nuevo para poder generar el resultado de los usuarios a mano.
                          var nombreElocal=document.getElementById("local"+i).value;
                          var nombreEvisitante=document.getElementById("visitante"+i).value;
                          var fila=document.createElement("tr");
                          var columna=document.createElement("td");
                          var input=document.createElement("INPUT");
                           input.setAttribute("type","text");
                          input.setAttribute("value",nombreElocal);
                          input.setAttribute("class","equiposv");
                          input.setAttribute("id","equipousuariocasa"+i);
                          columna.appendChild(input);
                          fila.appendChild(columna);
                          tabla.appendChild(fila);
                           document.getElementById("equipousuariocasa"+i).readOnly= true;
                          ///creamos un input para insertar los goles del partido local
                          var inputRe1=document.createElement("INPUT");
                           inputRe1.setAttribute("type","text");
                           inputRe1.setAttribute("class","resul");
                           inputRe1.setAttribute("id","resulequipousuariocasa"+i);
                           columna.appendChild(inputRe1);
                           fila.appendChild(columna);
                           tabla.appendChild(fila);
                         
                        ///creamos un input nuevo para poder generar el resultado de los usuarios a mano.
                          var input2 = document.createElement("INPUT");
                           input2.setAttribute("type","text");
                          input2.setAttribute("value",nombreEvisitante);
                          input2.setAttribute("class","equiposv");
                          input2.setAttribute("id","equipousuariovisiatante"+i);
                          columna.appendChild(input2);
                          fila.appendChild(columna);
                          tabla.appendChild(fila);
                          document.getElementById("equipousuariovisiatante"+i).readOnly= true;
                          ///creamos un input para insertar los goles del partido local
                           var inputRe2=document.createElement("INPUT");
                            inputRe2.setAttribute("type","text");
                           inputRe2.setAttribute("class","resul");
                           inputRe2.setAttribute("id","resulequipousuariovisitante"+i);
                           columna.appendChild(inputRe2);
                           fila.appendChild(columna);
                           tabla.appendChild(fila);
                           document.getElementById("visitante"+i).value="";
                           document.getElementById("local"+i).value="";
                        }
                    } 
                    if(<?php echo $escogido[17]["escogido"];?>){
                      if(document.getElementById("local"+i).value=="R.Madrid"){
                          ///creamos un input nuevo para poder generar el resultado de los usuarios a mano.
                          var nombreElocal=document.getElementById("local"+i).value;
                          var nombreEvisitante=document.getElementById("visitante"+i).value;
                          var fila=document.createElement("tr");
                          var columna=document.createElement("td");
                          var input=document.createElement("INPUT");
                           input.setAttribute("type","text");
                          input.setAttribute("value",nombreElocal);
                          input.setAttribute("class","equiposv");
                          input.setAttribute("id","equipousuariocasa"+i);
                          columna.appendChild(input);
                          fila.appendChild(columna);
                          tabla.appendChild(fila);
                           document.getElementById("equipousuariocasa"+i).readOnly= true;
                          ///creamos un input para insertar los goles del partido local
                          var inputRe1=document.createElement("INPUT");
                           inputRe1.setAttribute("type","text");
                           inputRe1.setAttribute("class","resul");
                           inputRe1.setAttribute("id","resulequipousuariocasa"+i);
                           columna.appendChild(inputRe1);
                           fila.appendChild(columna);
                           tabla.appendChild(fila);
                         
                        ///creamos un input nuevo para poder generar el resultado de los usuarios a mano.
                          var input2 = document.createElement("INPUT");
                           input2.setAttribute("type","text");
                          input2.setAttribute("value",nombreEvisitante);
                          input2.setAttribute("class","equiposv");
                          input2.setAttribute("id","equipousuariovisiatante"+i);
                          columna.appendChild(input2);
                          fila.appendChild(columna);
                          tabla.appendChild(fila);
                          document.getElementById("equipousuariovisiatante"+i).readOnly= true;
                          ///creamos un input para insertar los goles del partido local
                           var inputRe2=document.createElement("INPUT");
                            inputRe2.setAttribute("type","text");
                           inputRe2.setAttribute("class","resul");
                           inputRe2.setAttribute("id","resulequipousuariovisitante"+i);
                           columna.appendChild(inputRe2);
                           fila.appendChild(columna);
                           tabla.appendChild(fila);
                           document.getElementById("visitante"+i).value="";
                           document.getElementById("local"+i).value="";
                        }else if(document.getElementById("visitante"+i).value=="R.Madrid"){
                          ///creamos un input nuevo para poder generar el resultado de los usuarios a mano.
                          var nombreElocal=document.getElementById("local"+i).value;
                          var nombreEvisitante=document.getElementById("visitante"+i).value;
                          var fila=document.createElement("tr");
                          var columna=document.createElement("td");
                          var input=document.createElement("INPUT");
                           input.setAttribute("type","text");
                          input.setAttribute("value",nombreElocal);
                          input.setAttribute("class","equiposv");
                          input.setAttribute("id","equipousuariocasa"+i);
                          columna.appendChild(input);
                          fila.appendChild(columna);
                          tabla.appendChild(fila);
                           document.getElementById("equipousuariocasa"+i).readOnly= true;
                          ///creamos un input para insertar los goles del partido local
                          var inputRe1=document.createElement("INPUT");
                           inputRe1.setAttribute("type","text");
                           inputRe1.setAttribute("class","resul");
                           inputRe1.setAttribute("id","resulequipousuariocasa"+i);
                           columna.appendChild(inputRe1);
                           fila.appendChild(columna);
                           tabla.appendChild(fila);
                         
                        ///creamos un input nuevo para poder generar el resultado de los usuarios a mano.
                          var input2 = document.createElement("INPUT");
                           input2.setAttribute("type","text");
                          input2.setAttribute("value",nombreEvisitante);
                          input2.setAttribute("class","equiposv");
                          input2.setAttribute("id","equipousuariovisiatante"+i);
                          columna.appendChild(input2);
                          fila.appendChild(columna);
                          tabla.appendChild(fila);
                          document.getElementById("equipousuariovisiatante"+i).readOnly= true;
                          ///creamos un input para insertar los goles del partido local
                           var inputRe2=document.createElement("INPUT");
                            inputRe2.setAttribute("type","text");
                           inputRe2.setAttribute("class","resul");
                           inputRe2.setAttribute("id","resulequipousuariovisitante"+i);
                           columna.appendChild(inputRe2);
                           fila.appendChild(columna);
                           tabla.appendChild(fila);
                           document.getElementById("visitante"+i).value="";
                           document.getElementById("local"+i).value="";
                        }
                    } 
                    if(<?php echo $escogido[18]["escogido"];?>){
                      if(document.getElementById("local"+i).value=="Chelsea"){
                          ///creamos un input nuevo para poder generar el resultado de los usuarios a mano.
                          var nombreElocal=document.getElementById("local"+i).value;
                          var nombreEvisitante=document.getElementById("visitante"+i).value;
                          var fila=document.createElement("tr");
                          var columna=document.createElement("td");
                          var input=document.createElement("INPUT");
                           input.setAttribute("type","text");
                          input.setAttribute("value",nombreElocal);
                          input.setAttribute("class","equiposv");
                          input.setAttribute("id","equipousuariocasa"+i);
                          columna.appendChild(input);
                          fila.appendChild(columna);
                          tabla.appendChild(fila);
                           document.getElementById("equipousuariocasa"+i).readOnly= true;
                          ///creamos un input para insertar los goles del partido local
                          var inputRe1=document.createElement("INPUT");
                           inputRe1.setAttribute("type","text");
                           inputRe1.setAttribute("class","resul");
                           inputRe1.setAttribute("id","resulequipousuariocasa"+i);
                           columna.appendChild(inputRe1);
                           fila.appendChild(columna);
                           tabla.appendChild(fila);
                         
                        ///creamos un input nuevo para poder generar el resultado de los usuarios a mano.
                          var input2 = document.createElement("INPUT");
                           input2.setAttribute("type","text");
                          input2.setAttribute("value",nombreEvisitante);
                          input2.setAttribute("class","equiposv");
                          input2.setAttribute("id","equipousuariovisiatante"+i);
                          columna.appendChild(input2);
                          fila.appendChild(columna);
                          tabla.appendChild(fila);
                          document.getElementById("equipousuariovisiatante"+i).readOnly= true;
                          ///creamos un input para insertar los goles del partido local
                           var inputRe2=document.createElement("INPUT");
                           inputRe2.setAttribute("type","text");
                           inputRe2.setAttribute("class","resul");
                           inputRe2.setAttribute("id","resulequipousuariovisitante"+i);
                           columna.appendChild(inputRe2);
                           fila.appendChild(columna);
                           tabla.appendChild(fila);
                           document.getElementById("visitante"+i).value="";
                           document.getElementById("local"+i).value="";
                        }else if(document.getElementById("visitante"+i).value=="Chelsea"){
                            ///creamos un input nuevo para poder generar el resultado de los usuarios a mano.
                          var nombreElocal=document.getElementById("local"+i).value;
                          var nombreEvisitante=document.getElementById("visitante"+i).value;
                          var fila=document.createElement("tr");
                          var columna=document.createElement("td");
                          var input=document.createElement("INPUT");
                           input.setAttribute("type","text");
                          input.setAttribute("value",nombreElocal);
                          input.setAttribute("class","equiposv");
                          input.setAttribute("id","equipousuariocasa"+i);
                          columna.appendChild(input);
                          fila.appendChild(columna);
                          tabla.appendChild(fila);
                           document.getElementById("equipousuariocasa"+i).readOnly= true;
                          ///creamos un input para insertar los goles del partido local
                          var inputRe1=document.createElement("INPUT");
                           inputRe1.setAttribute("type","text");
                           inputRe1.setAttribute("class","resul");
                           inputRe1.setAttribute("id","resulequipousuariocasa"+i);
                           columna.appendChild(inputRe1);
                           fila.appendChild(columna);
                           tabla.appendChild(fila);
                         
                        ///creamos un input nuevo para poder generar el resultado de los usuarios a mano.
                          var input2 = document.createElement("INPUT");
                           input2.setAttribute("type","text");
                          input2.setAttribute("value",nombreEvisitante);
                          input2.setAttribute("class","equiposv");
                          input2.setAttribute("id","equipousuariovisiatante"+i);
                          columna.appendChild(input2);
                          fila.appendChild(columna);
                          tabla.appendChild(fila);
                          document.getElementById("equipousuariovisiatante"+i).readOnly= true;
                          ///creamos un input para insertar los goles del partido local
                           var inputRe2=document.createElement("INPUT");
                            inputRe2.setAttribute("type","text");
                           inputRe2.setAttribute("class","resul");
                           inputRe2.setAttribute("id","resulequipousuariovisitante"+i);
                           columna.appendChild(inputRe2);
                           fila.appendChild(columna);
                           tabla.appendChild(fila);
                           document.getElementById("visitante"+i).value="";
                           document.getElementById("local"+i).value="";
                          
                        }
                    } 
                    if(<?php echo $escogido[19]["escogido"];?>){
                      if(document.getElementById("local"+i).value=="O.Lyon"){
                        ///creamos un input nuevo para poder generar el resultado de los usuarios a mano.
                          var nombreElocal=document.getElementById("local"+i).value;
                          var nombreEvisitante=document.getElementById("visitante"+i).value;
                          var fila=document.createElement("tr");
                          var columna=document.createElement("td");
                          var input=document.createElement("INPUT");
                           input.setAttribute("type","text");
                          input.setAttribute("value",nombreElocal);
                          input.setAttribute("class","equiposv");
                          input.setAttribute("id","equipousuariocasa"+i);
                          columna.appendChild(input);
                          fila.appendChild(columna);
                          tabla.appendChild(fila);
                           document.getElementById("equipousuariocasa"+i).readOnly= true;
                          ///creamos un input para insertar los goles del partido local
                          var inputRe1=document.createElement("INPUT");
                           inputRe1.setAttribute("type","text");
                           inputRe1.setAttribute("class","resul");
                           inputRe1.setAttribute("id","resulequipousuariocasa"+i);
                           columna.appendChild(inputRe1);
                           fila.appendChild(columna);
                           tabla.appendChild(fila);
                         
                        ///creamos un input nuevo para poder generar el resultado de los usuarios a mano.
                          var input2 = document.createElement("INPUT");
                           input2.setAttribute("type","text");
                          input2.setAttribute("value",nombreEvisitante);
                          input2.setAttribute("class","equiposv");
                          input2.setAttribute("id","equipousuariovisiatante"+i);
                          columna.appendChild(input2);
                          fila.appendChild(columna);
                          tabla.appendChild(fila);
                          document.getElementById("equipousuariovisiatante"+i).readOnly= true;
                          ///creamos un input para insertar los goles del partido local
                           var inputRe2=document.createElement("INPUT");
                            inputRe2.setAttribute("type","text");
                           inputRe2.setAttribute("class","resul");
                           inputRe2.setAttribute("id","resulequipousuariovisitante"+i);
                           columna.appendChild(inputRe2);
                           fila.appendChild(columna);
                           tabla.appendChild(fila);
                           document.getElementById("visitante"+i).value="";
                           document.getElementById("local"+i).value="";
                              


                        }else if(document.getElementById("visitante"+i).value=="O.Lyon"){
                           ///creamos un input nuevo para poder generar el resultado de los usuarios a mano.
                          var nombreElocal=document.getElementById("local"+i).value;
                          var nombreEvisitante=document.getElementById("visitante"+i).value;
                          var fila=document.createElement("tr");
                          var columna=document.createElement("td");
                          var input=document.createElement("INPUT");
                           input.setAttribute("type","text");
                          input.setAttribute("value",nombreElocal);
                          input.setAttribute("class","equiposv");
                          input.setAttribute("id","equipousuariocasa"+i);
                          columna.appendChild(input);
                          fila.appendChild(columna);
                          tabla.appendChild(fila);
                           document.getElementById("equipousuariocasa"+i).readOnly= true;
                          ///creamos un input para insertar los goles del partido local
                          var inputRe1=document.createElement("INPUT");
                           inputRe1.setAttribute("type","text");
                           inputRe1.setAttribute("class","resul");
                           inputRe1.setAttribute("id","resulequipousuariocasa"+i);
                           columna.appendChild(inputRe1);
                           fila.appendChild(columna);
                           tabla.appendChild(fila);
                         
                        ///creamos un input nuevo para poder generar el resultado de los usuarios a mano.
                          var input2 = document.createElement("INPUT");
                           input2.setAttribute("type","text");
                          input2.setAttribute("value",nombreEvisitante);
                          input2.setAttribute("class","equiposv");
                          input2.setAttribute("id","equipousuariovisiatante"+i);
                          columna.appendChild(input2);
                          fila.appendChild(columna);
                          tabla.appendChild(fila);
                          document.getElementById("equipousuariovisiatante"+i).readOnly= true;
                          ///creamos un input para insertar los goles del partido local
                           var inputRe2=document.createElement("INPUT");
                            inputRe2.setAttribute("type","text");
                           inputRe2.setAttribute("class","resul");
                           inputRe2.setAttribute("id","resulequipousuariovisitante"+i);
                           columna.appendChild(inputRe2);
                           fila.appendChild(columna);
                           tabla.appendChild(fila);
                           document.getElementById("visitante"+i).value="";
                           document.getElementById("local"+i).value="";
                         
                        }
                    } 
                    

                      
                    }
<?php
} ?>
                  
                 </script>
          <table class="table table-hover">
           
          <td><input type="text" id="rlocal1" class="equiposv" value="<?php echo $enfrentamientos[18]['nombre_equipo']; ?>" readonly></td>
          <td><?php echo "<input class='equiposv' id='resultadodc1' type='text' value='{$resultados[0]['resultadocasa1']}' readonly>"; ?></td>
          <td> VS </td>
          <td><?php  echo "<input class='equiposv' id='resultadodv1' type='text' value='{$resultados[0]['resultadovisitante1']}' readonly>"; ?></td>
          <td><input type="text" class="equiposv" id="rvisitante1" value="<?php echo $enfrentamientos[0]['nombre_equipo']; ?>" readonlys></td>
        </tr>

         <tr>
          <td><input type="text" id="rlocal2" class="equiposv colorresul" value="<?php echo $enfrentamientos[17]['nombre_equipo']; ?>" readonly></td>
          <td><?php  echo "<input   class='equiposv colorresul' id='resultadodc2' type='text' value='{$resultados[0]['resultadocasa2']}' readonly>"; ?></td>
          <td> VS </td>
          <td><?php  echo "<input class='equiposv colorresul' type='text' id='resultadodv2' value='{$resultados[0]['resultadovisitante2']}' readonly>"; ?></td>
          <td><input type="text" class="equiposv colorresul" id="rvisitante1" value="<?php echo $enfrentamientos[19]['nombre_equipo']; ?>" readonly></td>
        </tr>

         <tr>
          <td><input type="text" id="rlocal3" class="equiposv" value="<?php echo $enfrentamientos[16]['nombre_equipo']; ?>" readonly></td>
          <td><?php  echo "<input class='equiposv' id='resultadodc3' type='text' value='{$resultados[0]['resultadocasa3']}' readonly>"; ?></td>
          <td> VS </td>
          <td><?php  echo "<input class='equiposv' id='resultadodv3' type='text' value='{$resultados[0]['resultadovisitante3']}' readonly>"; ?></td>
          <td><input type="text" class="equiposv" id="rvisitante3" value="<?php echo $enfrentamientos[1]['nombre_equipo']; ?>" readonly></td>
        </tr>

         <tr>
          <td><input type="text" id="rlocal4" class="equiposv colorresul" value="<?php echo $enfrentamientos[15]['nombre_equipo']; ?>" readonly></td>
          <td><?php echo "<input class='equiposv colorresul' id='resultadodc4' type='text' value='{$resultados[0]['resultadocasa4']}' readonly>"; ?></td>
          <td> VS </td>
          <td><?php  echo "<input class='equiposv colorresul' id='resultadodv4' type='text' value='{$resultados[0]['resultadovisitante4']}' readonly>"; ?></td>
          <td><input type="text" class="equiposv colorresul" id="rvisitante4" value="<?php echo $enfrentamientos[2]['nombre_equipo']; ?>" readonly></td>
        </tr>

         <tr>
          <td><input type="text" id="rlocal5" class="equiposv" value="<?php echo $enfrentamientos[14]['nombre_equipo']; ?>" readonly></td>
          <td><?php  echo "<input class='equiposv' id='resultadodc5' type='text' value='{$resultados[0]['resultadocasa5']}' readonly>"; ?></td>
          <td> VS </td>
          <td><?php  echo "<input  class='equiposv' id='resultadodv5' type='text' value='{$resultados[0]['resultadovisitante5']}' readonly>"; ?></td>
          <td><input type="text" class="equiposv" id="rvisitante5" value="<?php echo $enfrentamientos[3]['nombre_equipo']; ?>" readonly></td>
        </tr>

         <tr>
          <td><input type="text" id="rlocal6" class="equiposv colorresul" value="<?php echo $enfrentamientos[13]['nombre_equipo']; ?>" readonly></td>
          <td><?php  echo "<input class='equiposv colorresul' id='resultadodc6' type='text' value='{$resultados[0]['resultadocasa6']}' readonly>"; ?></td>
          <td> VS </td>
          <td><?php  echo "<input class='equiposv colorresul' id='resultadodv6' type='text' value='{$resultados[0]['resultadovisitante6']}' readonly>"; ?></td>
          <td><input type="text" class="equiposv colorresul" id="rvisitante6" value="<?php echo $enfrentamientos[4]['nombre_equipo']; ?>" readonly></td>
        </tr>

         <tr>
          <td><input type="text" id="rlocal7" class="equiposv" value="<?php echo $enfrentamientos[12]['nombre_equipo']; ?>" readonly></td>
          <td><?php  echo "<input class='equiposv' id='resultadodc7'  type='text' value='{$resultados[0]['resultadocasa7']}' readonly>"; ?></td>
          <td> VS </td>
          <td><?php  echo "<input class='equiposv' id='resultadodv7' type='text' value='{$resultados[0]['resultadovisitante7']}' readonly>"; ?></td>
          <td><input type="text" class="equiposv" id="rvisitante7" value="<?php echo $enfrentamientos[5]['nombre_equipo']; ?>" readonly></td>
        </tr>

         <tr>
          <td><input type="text" id="rlocal8" class="equiposv colorresul" value="<?php echo $enfrentamientos[11]['nombre_equipo']; ?>" readonly></td>
          <td><?php  echo "<input class='equiposv colorresul' class='equiposv colorresul' id='resultadodc8' type='text' value='{$resultados[0]['resultadocasa8']}' readonly>"; ?></td>
          <td> VS </td>  
          <td><?php echo "<input class='equiposv colorresul' id='resultadodv8' type='text' value='{$resultados[0]['resultadovisitante8']}' readonly>"; ?></td>
          <td><input type="text" class="equiposv colorresul" id="rvisitante8" value="<?php echo $enfrentamientos[6]['nombre_equipo']; ?>" readonly></td>
        </tr>

         <tr>
          <td><input type="text" id="rlocal9" class="equiposv" value="<?php echo $enfrentamientos[10]['nombre_equipo']; ?>" readonly></td>
          <td><?php echo "<input class='equiposv' id='resultadodc9' type='text' value='{$resultados[0]['resultadocasa9']}' readonly>"; ?></td>
          <td> VS </td>
          <td><?php  echo "<input class='equiposv' id='resultadodv9' type='text' value='{$resultados[0]['resultadovisitante9']}' readonly>"; ?></td>
          <td><input type="text" class="equiposv" id="rvisitante9" value="<?php echo $enfrentamientos[7]['nombre_equipo']; ?>" readonly></td>
        </tr>

         <tr>
          <td><input type="text" id="rlocal10" class="equiposv colorresul" value="<?php echo $enfrentamientos[9]['nombre_equipo']; ?>" readonly></td>
          <td><?php  echo "<input class='equiposv colorresul' id='resultadodc10'  type='text' value='{$resultados[0]['resultadocasa10']}' readonly>"; ?></td>
          <td> VS </td>
          <td><?php  echo "<input class='equiposv colorresul' id='resultadodv10' type='text' value='{$resultados[0]['resultadovisitante10']}' readonly>"; ?></td>
          <td><input type="text" class="equiposv colorresul" id="rvisitante10" value="<?php echo $enfrentamientos[8]['nombre_equipo']; ?>" readonly></td>
         </tr>
       </table>
        
                    
                   <script type="text/javascript">
      
                  //// INSERTAMOS LOS RESULTADOS AL AZAR A LOS EUIPOS CORRESPONDIENTES

                  for(var i=1;i<20;i++){
                      if(document.getElementById("local"+i).value=="A.C.Milan"){
                        document.getElementById("resultadolocal"+i).value="<?php echo $Milan; ?>";
                      }else if(document.getElementById("local"+i).value=="Bayer Munich"){
                         document.getElementById("resultadolocal"+i).value="<?php echo $Bayer_Munich; ?>";
                      }else if(document.getElementById("local"+i).value=="Valencia"){
                        document.getElementById("resultadolocal"+i).value="<?php echo $Valencia; ?>";
                      }else if(document.getElementById("local"+i).value=="PSG"){
                        document.getElementById("resultadolocal"+i).value="<?php echo $PSG; ?>";
                      }else if(document.getElementById("local"+i).value=="Ajax"){
                        document.getElementById("resultadolocal"+i).value="<?php echo $Ajax; ?>";
                      }else if(document.getElementById("local"+i).value=="F.C.Barcelona"){
                        document.getElementById("resultadolocal"+i).value="<?php echo $Barcelona; ?>";
                      }else if(document.getElementById("local"+i).value=="B.Dormunt"){
                        document.getElementById("resultadolocal"+i).value="<?php echo $B_Dormunt; ?>";
                      }else if(document.getElementById("local"+i).value=="M.United"){
                        document.getElementById("resultadolocal"+i).value="<?php echo $M_United; ?>";
                      }else if(document.getElementById("local"+i).value=="Arsenal"){
                        document.getElementById("resultadolocal"+i).value="<?php echo $Arsenal; ?>";
                      }else if(document.getElementById("local"+i).value=="M.City"){
                        document.getElementById("resultadolocal"+i).value="<?php echo $M_City; ?>";
                      }else if(document.getElementById("local"+i).value=="At.Madrid"){
                        document.getElementById("resultadolocal"+i).value="<?php echo $At_Madrid; ?>";
                      }else if(document.getElementById("local"+i).value=="Oporto"){
                        document.getElementById("resultadolocal"+i).value="<?php echo $Oporto; ?>";
                      }else if(document.getElementById("local"+i).value=="I.Milan"){
                        document.getElementById("resultadolocal"+i).value="<?php echo $I_Milan; ?>";
                      }else if(document.getElementById("local"+i).value=="Liverpool"){
                        document.getElementById("resultadolocal"+i).value="<?php echo $Liverpool; ?>";
                      }else if(document.getElementById("local"+i).value=="Juventus"){
                        document.getElementById("resultadolocal"+i).value="<?php echo $Juventus; ?>";
                      }else if(document.getElementById("local"+i).value=="Tottenham"){
                        document.getElementById("resultadolocal"+i).value="<?php echo $Tottenham; ?>";
                      }else if(document.getElementById("local"+i).value=="Chelsea"){
                        document.getElementById("resultadolocal"+i).value="<?php echo $Chelsea; ?>";
                      }else if(document.getElementById("local"+i).value=="Sevilla"){
                        document.getElementById("resultadolocal"+i).value="<?php echo $Sevilla; ?>";
                      }else if(document.getElementById("local"+i).value=="O.Lyon"){
                        document.getElementById("resultadolocal"+i).value="<?php echo $O_Lyon; ?>";
                      }else if(document.getElementById("local"+i).value=="R.Madrid"){
                        document.getElementById("resultadolocal"+i).value="<?php echo $R_Madrid; ?>";
                      }
                    
                      if(document.getElementById("visitante"+i).value=="Valencia"){
                        document.getElementById("resultadovisitante"+i).value="<?php echo $Valencia; ?>";
                      }else if(document.getElementById("visitante"+i).value=="A.C.Milan"){
                        document.getElementById("resultadovisitante"+i).value="<?php echo $Milan; ?>";
                      }else if(document.getElementById("visitante"+i).value=="Ajax"){
                        document.getElementById("resultadovisitante"+i).value="<?php echo $Ajax; ?>";
       }
                      else if(document.getElementById("visitante"+i).value=="PSG"){
                        document.getElementById("resultadovisitante"+i).value="<?php echo $PSG; ?>";
                      }else if(document.getElementById("visitante"+i).value=="Bayer Munich"){
                        document.getElementById("resultadovisitante"+i).value="<?php echo $Bayer_Munich; ?>";
                      }else if(document.getElementById("visitante"+i).value=="F.C.Barcelona"){
                        document.getElementById("resultadovisitante"+i).value="<?php echo $Barcelona; ?>";
                      }else if(document.getElementById("visitante"+i).value=="B.Dormunt"){
                        document.getElementById("resultadovisitante"+i).value="<?php echo $B_Dormunt; ?>";
                      }else if(document.getElementById("visitante"+i).value=="M.United"){
                        document.getElementById("resultadovisitante"+i).value="<?php echo $M_United; ?>";
                      }else if(document.getElementById("visitante"+i).value=="Arsenal"){
                        document.getElementById("resultadovisitante"+i).value="<?php echo $Arsenal; ?>";
                      }else if(document.getElementById("visitante"+i).value=="M.City"){
                        document.getElementById("resultadovisitante"+i).value="<?php echo $M_City; ?>";
                      }else if(document.getElementById("visitante"+i).value=="At.Madrid"){
                        document.getElementById("resultadovisitante"+i).value="<?php echo $At_Madrid; ?>";
                      }else if(document.getElementById("visitante"+i).value=="Oporto"){
                        document.getElementById("resultadovisitante"+i).value="<?php echo $Oporto; ?>";
                      }else if(document.getElementById("visitante"+i).value=="I.Milan"){
                        document.getElementById("resultadovisitante"+i).value="<?php echo $I_Milan; ?>";
                      }else if(document.getElementById("visitante"+i).value=="Liverpool"){
                        document.getElementById("resultadovisitante"+i).value="<?php echo $Liverpool; ?>";
                      }else if(document.getElementById("visitante"+i).value=="Juventus"){
                        document.getElementById("resultadovisitante"+i).value="<?php echo $Juventus; ?>";
                      }else if(document.getElementById("visitante"+i).value=="Ajax"){
                        document.getElementById("resultadovisitante"+i).value="<?php echo $Ajax; ?>";
                    }else if(document.getElementById("visitante"+i).value=="Tottenham"){
                        document.getElementById("resultadovisitante"+i).value="<?php echo $Tottenham; ?>";
                      }else if(document.getElementById("visitante"+i).value=="Chelsea"){
                        document.getElementById("resultadovisitante"+i).value="<?php echo $Chelsea; ?>";
                      }else if(document.getElementById("visitante"+i).value=="Sevilla"){
                        document.getElementById("resultadovisitante"+i).value="<?php echo $Sevilla; ?>";
                      }else if(document.getElementById("visitante"+i).value=="O.Lyon"){
                        document.getElementById("resultadovisitante"+i).value="<?php echo $O_Lyon; ?>";
                      }else if(document.getElementById("visitante"+i).value=="R.Madrid"){
                        document.getElementById("resultadovisitante"+i).value="<?php echo $R_Madrid; ?>";
                      }
                  }
                     
                </script>
                <script type="text/javascript">
                      
                       hidden_input.quitar_input();
                       Fondo.color_fondo(2);
                     
                  
                </script>

    

  </div>
  </div>

 




