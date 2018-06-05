 ///objeto ajax donde pasaremos los resultados de los partidos automaticos y el de los usuarios
 class objetoajax{

  generar(){

  
  
   var resultado1=document.getElementById("info");
   var jornada=document.getElementById("jornada").value;
   //recogemos los resultados y los nombres de los equipos

   var local1=document.getElementById("local1").value;
   var resultadolocal1=document.getElementById("resultadolocal1").value;
   var visitante1=document.getElementById("visitante1").value;
   var resultadovisitante1=document.getElementById("resultadovisitante1").value;

   var local2=document.getElementById("local2").value;
   var resultadolocal2=document.getElementById("resultadolocal2").value;
   var visitante2=document.getElementById("visitante2").value;
   var resultadovisitante2=document.getElementById("resultadovisitante2").value;

   var local3=document.getElementById("local3").value;
   var resultadolocal3=document.getElementById("resultadolocal3").value;
   var visitante3=document.getElementById("visitante3").value;
   var resultadovisitante3=document.getElementById("resultadovisitante3").value;

   var local4=document.getElementById("local4").value;
   var resultadolocal4=document.getElementById("resultadolocal4").value;
   var visitante4=document.getElementById("visitante4").value;
   var resultadovisitante4=document.getElementById("resultadovisitante4").value;

   var local5=document.getElementById("local5").value;
   var resultadolocal5=document.getElementById("resultadolocal5").value;
   var visitante5=document.getElementById("visitante5").value;
   var resultadovisitante5=document.getElementById("resultadovisitante5").value;

   var local6=document.getElementById("local6").value;
   var resultadolocal6=document.getElementById("resultadolocal6").value;
   var visitante6=document.getElementById("visitante6").value;
   var resultadovisitante6=document.getElementById("resultadovisitante6").value;

   var local7=document.getElementById("local7").value;
   var resultadolocal7=document.getElementById("resultadolocal7").value;
   var visitante7=document.getElementById("visitante7").value;
   var resultadovisitante7=document.getElementById("resultadovisitante7").value;

   var local8=document.getElementById("local8").value;
   var resultadolocal8=document.getElementById("resultadolocal8").value;
   var visitante8=document.getElementById("visitante8").value;
   var resultadovisitante8=document.getElementById("resultadovisitante8").value;

   var local9=document.getElementById("local9").value;
   var resultadolocal9=document.getElementById("resultadolocal9").value;
   var visitante9=document.getElementById("visitante9").value;
   var resultadovisitante9=document.getElementById("resultadovisitante9").value;

   var local10=document.getElementById("local10").value;
   var resultadolocal10=document.getElementById("resultadolocal10").value;
   var visitante10=document.getElementById("visitante10").value;
   var resultadovisitante10=document.getElementById("resultadovisitante10").value;


   var informacion= "jornada=" + jornada + "&local1=" + local1 + "&resultadolocal1=" + resultadolocal1 + 
                               "&visitante1=" + visitante1 + "&resultadovisitante1="+ resultadovisitante1 +
                               "&local2=" + local2 + "&resultadolocal2=" + resultadolocal2 + 
                               "&visitante2=" + visitante2 + "&resultadovisitante2=" + resultadovisitante2 +
                               "&local3=" + local3 + "&resultadolocal3=" + resultadolocal3 + 
                               "&visitante3=" + visitante3 + "&resultadovisitante3=" + resultadovisitante3 +
                               "&local4=" + local4 + "&resultadolocal4=" + resultadolocal4 + 
                               "&visitante4=" + visitante4 + "&resultadovisitante4=" + resultadovisitante4 +
                               "&local5=" + local5 + "&resultadolocal5=" + resultadolocal5 + 
                               "&visitante5=" + visitante5 + "&resultadovisitante5="+ resultadovisitante5 +
                               "&local6=" + local6 + "&resultadolocal6=" + resultadolocal6 + 
                               "&visitante6=" + visitante6 + "&resultadovisitante6=" + resultadovisitante6 +
                               "&local7=" + local7 + "&resultadolocal7=" + resultadolocal7 + 
                               "&visitante7=" + visitante7 + "&resultadovisitante7=" + resultadovisitante7 +
                               "&local8=" + local8 + "&resultadolocal8=" + resultadolocal8 + 
                               "&visitante8=" + visitante8 + "&resultadovisitante8=" + resultadovisitante8 +
                               "&local9=" + local9 + "&resultadolocal9=" + resultadolocal9 + 
                               "&visitante9=" + visitante9 + "&resultadovisitante9=" + resultadovisitante9 +
                               "&local10=" + local10 + "&resultadolocal10=" + resultadolocal10 + 
                               "&visitante10=" + visitante10 + "&resultadovisitante10=" + resultadovisitante10;
   var ajax;
    ajax= new XMLHttpRequest;

    ajax.onreadystatechange=function(){
   

   if(ajax.readyState===4 && ajax.status===200){


    resultado1.innerHTML=ajax.responseText;
    

     }
     
    }
   ajax.open("POST","http://localhost/fifafriends/index.php/Jornadas/valorequipos",true);
   ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
   ajax.send(informacion);
  }
  generar_resultado_usuarios(){
   var resultado1=document.getElementById("info");
   var boton=document.getElementById("botonresultadosusuarios");
    boton.style.display="none";
   var jornada=document.getElementById("jornada").value;
   //recogemos los resultados y los nombres de los equipos
   if(document.getElementById("equipousuariocasa1") && document.getElementById("equipousuariovisiatante1")){
   var local1=document.getElementById("equipousuariocasa1").value;
   var resultadolocal1=document.getElementById("resulequipousuariocasa1").value;
   var visitante1=document.getElementById("equipousuariovisiatante1").value;
   var resultadovisitante1=document.getElementById("resulequipousuariovisitante1").value;
  }else{
    var local1="";
    var resultadolocal1="";
    var visitante1="";
    var resultadovisitante1="";
  }
   if(document.getElementById("equipousuariocasa2") && document.getElementById("equipousuariovisiatante2")){
   var local2=document.getElementById("equipousuariocasa2").value;
   var resultadolocal2=document.getElementById("resulequipousuariocasa2").value;
   var visitante2=document.getElementById("equipousuariovisiatante2").value;
   var resultadovisitante2=document.getElementById("resulequipousuariovisitante2").value;
 }else{
    var local2="";
    var resultadolocal2="";
    var visitante2="";
    var resultadovisitante2="";
  }
   if(document.getElementById("equipousuariocasa3") && document.getElementById("equipousuariovisiatante3")){
   var local3=document.getElementById("equipousuariocasa3").value;
   var resultadolocal3=document.getElementById("resulequipousuariocasa3").value;
   var visitante3=document.getElementById("equipousuariovisiatante3").value;
   var resultadovisitante3=document.getElementById("resulequipousuariovisitante3").value;
 }else{
    var local3="";
    var resultadolocal3="";
    var visitante3="";
    var resultadovisitante3="";
  }
   if(document.getElementById("equipousuariocasa4") && document.getElementById("equipousuariovisiatante4")){
   var local4=document.getElementById("equipousuariocasa4").value;
   var resultadolocal4=document.getElementById("resulequipousuariocasa4").value;
   var visitante4=document.getElementById("equipousuariovisiatante4").value;
   var resultadovisitante4=document.getElementById("resulequipousuariovisitante4").value;
 }else{
    var local4="";
    var resultadolocal4="";
    var visitante4="";
    var resultadovisitante4="";
  }
   if(document.getElementById("equipousuariocasa5") && document.getElementById("equipousuariovisiatante5")){
   var local5=document.getElementById("equipousuariocasa5").value;
   var resultadolocal5=document.getElementById("resulequipousuariocasa5").value;
   var visitante5=document.getElementById("equipousuariovisiatante5").value;
   var resultadovisitante5=document.getElementById("resulequipousuariovisitante5").value;
 }else{
    var local5="";
    var resultadolocal5="";
    var visitante5="";
    var resultadovisitante5="";
  }
   if(document.getElementById("equipousuariocasa6") && document.getElementById("equipousuariovisiatante6")){
   var local6=document.getElementById("equipousuariocasa6").value;
   var resultadolocal6=document.getElementById("resulequipousuariocasa6").value;
   var visitante6=document.getElementById("equipousuariovisiatante6").value;
   var resultadovisitante6=document.getElementById("resulequipousuariovisitante6").value;
 }else{
    var local6="";
    var resultadolocal6="";
    var visitante6="";
    var resultadovisitante6="";
  }
    if(document.getElementById("equipousuariocasa7") && document.getElementById("equipousuariovisiatante7")){
   var local7=document.getElementById("equipousuariocasa7").value;
   var resultadolocal7=document.getElementById("resulequipousuariocasa7").value;
   var visitante7=document.getElementById("equipousuariovisiatante7").value;
   var resultadovisitante7=document.getElementById("resulequipousuariovisitante7").value;
 }else{
    var local7="";
    var resultadolocal7="";
    var visitante7="";
    var resultadovisitante7="";
  }
  if(document.getElementById("equipousuariocasa8") && document.getElementById("equipousuariovisiatante8")){
   var local8=document.getElementById("equipousuariocasa8").value;
   var resultadolocal8=document.getElementById("resulequipousuariocasa8").value;
   var visitante8=document.getElementById("equipousuariovisiatante8").value;
   var resultadovisitante8=document.getElementById("resulequipousuariovisitante8").value;
 }else{
    var local8="";
    var resultadolocal8="";
    var visitante8="";
    var resultadovisitante8="";
  }
   if(document.getElementById("equipousuariocasa9") && document.getElementById("equipousuariovisiatante9")){
   var local9=document.getElementById("equipousuariocasa9").value;
   var resultadolocal9=document.getElementById("resulequipousuariocasa9").value;
   var visitante9=document.getElementById("equipousuariovisiatante9").value;
   var resultadovisitante9=document.getElementById("resulequipousuariovisitante9").value;
 }else{
    var local9="";
    var resultadolocal9="";
    var visitante9="";
    var resultadovisitante9="";
  }
   if(document.getElementById("equipousuariocasa10") && document.getElementById("equipousuariovisiatante10")){
   var local10=document.getElementById("equipousuariocasa10").value;
   var resultadolocal10=document.getElementById("resulequipousuariocasa10").value;
   var visitante10=document.getElementById("equipousuariovisiatante10").value;
   var resultadovisitante10=document.getElementById("resulequipousuariovisitante10").value;
 }else{
    var local10="";
    var resultadolocal10="";
    var visitante10="";
    var resultadovisitante10="";
  }

   
   var informacion= "jornada=" + jornada + "&local1=" + local1 + "&resultadolocal1=" + resultadolocal1 + 
                               "&visitante1=" + visitante1 + "&resultadovisitante1="+ resultadovisitante1 +
                               "&local2=" + local2 + "&resultadolocal2=" + resultadolocal2 + 
                               "&visitante2=" + visitante2 + "&resultadovisitante2=" + resultadovisitante2 +
                               "&local3=" + local3 + "&resultadolocal3=" + resultadolocal3 + 
                               "&visitante3=" + visitante3 + "&resultadovisitante3=" + resultadovisitante3 +
                               "&local4=" + local4 + "&resultadolocal4=" + resultadolocal4 + 
                               "&visitante4=" + visitante4 + "&resultadovisitante4=" + resultadovisitante4 +
                               "&local5=" + local5 + "&resultadolocal5=" + resultadolocal5 + 
                               "&visitante5=" + visitante5 + "&resultadovisitante5="+ resultadovisitante5 +
                               "&local6=" + local6 + "&resultadolocal6=" + resultadolocal6 + 
                               "&visitante6=" + visitante6 + "&resultadovisitante6=" + resultadovisitante6 +
                               "&local7=" + local7 + "&resultadolocal7=" + resultadolocal7 + 
                               "&visitante7=" + visitante7 + "&resultadovisitante7=" + resultadovisitante7 +
                               "&local8=" + local8 + "&resultadolocal8=" + resultadolocal8 + 
                               "&visitante8=" + visitante8 + "&resultadovisitante8=" + resultadovisitante8 +
                               "&local9=" + local9 + "&resultadolocal9=" + resultadolocal9 + 
                               "&visitante9=" + visitante9 + "&resultadovisitante9=" + resultadovisitante9 +
                               "&local10=" + local10 + "&resultadolocal10=" + resultadolocal10 + 
                               "&visitante10=" + visitante10 + "&resultadovisitante10=" + resultadovisitante10;
   var ajax;
    ajax= new XMLHttpRequest;

    ajax.onreadystatechange=function(){
   

   if(ajax.readyState===4 && ajax.status===200){


    resultado1.innerHTML=ajax.responseText;
    setTimeout(function(){  location.reload(); }, 10);

     }
     
    }
   ajax.open("POST","http://localhost/fifafriends/index.php/Jornadas/valorequipos_usuarios",true);
   ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
   ajax.send(informacion);
   
}

cobros(){
  var resultado1=document.getElementById("info");
  var co=document.getElementById("estadoco").value;
  var cobro="numero_cobro="+ co;
  var ajax;

  ajax= new XMLHttpRequest;
  ajax.onreadystatechange=function(){
      if(ajax.readyState===4 && ajax.status===200){


    resultado1.innerHTML=ajax.responseText;
    

     }
  }
  ajax.open("POST","http://localhost/fifafriends/index.php/Jornadas/cobros_mensuales",true);
   ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
   ajax.send(cobro);
}

}
class hidden{

  quitar_input(){
    for(var i=1;i<=10;i++){
      
      if(document.getElementById("resultadodc"+i).value){
          if(document.getElementById("equipousuariocasa"+i)){
          document.getElementById("equipousuariocasa"+i).style.display = "none";
          document.getElementById("resulequipousuariocasa"+i).style.display = "none";
          document.getElementById("equipousuariovisiatante"+i).style.display = "none";
          document.getElementById("resulequipousuariovisitante"+i).style.display = "none";
      }

          }
    }
  }
}

class color_tabla{
  color_fondo(id){
    var fondo;
    fondo=document.getElementById("colu"+id);
    fondo.style.backgroundColor="#e1e8f4";
    fondo.style.color="#ffffff";
  }
}

class miequipo{

  actualizar2(id){
    var ID;
    ID="idusuario=" + id;
    var alert;
    alert=document.getElementById("alerta");
    var div;
    div=document.getElementById("insertarusuarios2");
    var escudo;
    escudo=document.getElementById("escudo");
    var presupuesto;
    presupuesto=document.getElementById("presupuesto");
     var gastosdiv;
    gastosdiv=document.getElementById("gastos");
    var ajax;
    ajax=new XMLHttpRequest;
     ajax.onreadystatechange=function(){
      if(ajax.readyState===4 && ajax.status===200){
          ajax.responseText;
          var datos;
          datos=JSON.parse(ajax.responseText);
          console.log(datos);
          var idequipo;
          var gastos=parseInt(datos[1][0]["gastos"]);
          var presupuesto1=parseInt(datos[1][0]["PRESUPUESTO"]);
          idequipo= datos[0];
          escudo.innerHTML="<img class='escudoequi' src=http://localhost/fifafriends/CDN/imagenes/" +datos[1][0]['escudo']+ "><br><strong>"+datos[1][0]["nombre"]+"</strong>";
          if(gastos > presupuesto1){
            presupuesto.style.color="#f20252";
            var alerta="Estas en numeros rojos si acabas así la temporada o la siguiente no puedes hacer frente a los gastos, serás despedido de tu equipo.";
             presupuesto.innerHTML="<strong>PRESUPUESTO:    </strong><br><input type='text' class=' inputpre' value='"+presupuesto1+" €' readonly>";
             alert.style.color="#f20252";
             gastosdiv.innerHTML="<strong>GASTOS:    </strong><br><input type='text' class=' inputpre' value='"+gastos+" €' readonly>";
             alert.innerHTML=alerta;
             alert.style.borderStyle = "0'5 px";
             alert.style.borderStyle = "solid";
             alert.style.fontSize="10px";
          }else{
              presupuesto.style.color="#18bc80";
              presupuesto.innerHTML="<strong>PRESUPUESTO:    </strong><br><input type='text' class=' inputpre' value='"+presupuesto1+" €' readonly>";
              gastosdiv.innerHTML="<strong>GASTOS:   </strong><br><input type='text' class=' inputpre' value='"+gastos+" €' readonly>";
          }
          var numero= -1;
         for(var i in datos){
          var jugadores=datos[i];
          for(var j in jugadores){
            if(jugadores[j]["nombre_jugador"]!=undefined){
            div.innerHTML+="<tr><td id='nombre"+ numero +"'><strong>"+jugadores[j]["nombre_jugador"]+
                           "</strong></td><td>"+jugadores[j]["puesto"]+
                           "</td><td id='salario"+ numero +"'>"+jugadores[j]["salario"]+
                           "</td><td id='clausula"+ numero +"'>"+jugadores[j]["clausula"]+"</td></tr>";
                          
                
          }
          numero++;
          }
           
         }
      }
    }
   ajax.open("POST","http://localhost/fifafriends/index.php/Usuariosl/Mi_equipo",true);
   ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
   ajax.send(ID);

  }

  actualizar(id){
    var ID;
    ID="idusuario=" + id;
    var alert;
    alert=document.getElementById("alerta");
    var div2;
    div2=document.getElementById("insertarusuarios");
    var escudo;
    escudo=document.getElementById("escudo");
    var presupuesto;
    presupuesto=document.getElementById("presupuesto");
     var gastosdiv;
    gastosdiv=document.getElementById("gastos");
    var ajax;
    ajax=new XMLHttpRequest;
     ajax.onreadystatechange=function(){
      if(ajax.readyState===4 && ajax.status===200){
          ajax.responseText;
          var datos;
          datos=JSON.parse(ajax.responseText);
          var idequipo;
          var gastos=parseInt(datos[1][0]["gastos"]);
          var presupuesto1=parseInt(datos[1][0]["PRESUPUESTO"]);
          idequipo= datos[0];
          escudo.innerHTML="<img class='escudoequi' src=http://localhost/fifafriends/CDN/imagenes/" +datos[1][0]['escudo']+ ">";
          if(gastos > presupuesto1){
            presupuesto.style.color="#f20252";
            var alerta="Estas en numeros rojos si acabas así la temporada o la siguiente no puedes hacer frente a los gastos, serás despedido de tu equipo.";
              presupuesto.innerHTML="<strong>PRESUPUESTO:    </strong><br><input type='text' class=' inputpre' value='"+presupuesto1+" €' readonly>";
            gastosdiv.innerHTML="<strong>GASTOS:   </strong><br><input type='text' class=' inputpre' value='"+gastos+" €' readonly>";
             alert.style.color="#f20252";
             alert.style.borderStyle = "0'5 px";
             alert.style.borderStyle = "solid";
             alert.style.fontSize="10px";
             alert.innerHTML=alerta;
             alert.style.borderStyle = "solid red";
          }else{
              presupuesto.style.color="#18bc80";
            presupuesto.innerHTML="<strong>PRESUPUESTO:    </strong><br><input type='text' class=' inputpre' value='"+presupuesto1+" €' readonly>";
            gastosdiv.innerHTML="<strong>GASTOS:   </strong><br><input type='text' class=' inputpre' value='"+gastos+" €' readonly>";
          }
          var numero= -1;
         for(var i in datos){
          var jugadores=datos[i];
          for(var j in jugadores){
            if(jugadores[j]["nombre_jugador"]!=undefined){
            div2.innerHTML+="<tr><td id='nombre"+ numero +"'><strong>"+jugadores[j]["nombre_jugador"]+
                           "</strong></td><td>"+jugadores[j]["puesto"]+
                           "</td><td id='salario"+ numero +"'>"+jugadores[j]["salario"]+
                           "</td><td id='clausula"+ numero +"'>"+jugadores[j]["clausula"]+"</td><td><button class='btn btn-info' type='button' id='"+ numero +"' onclick='Miequipo.actujugador(this.id)'>EDITAR</button>  <button class='btn btn-default' type='button' id='venderjugador"+numero+"' onclick='Miequipo.venderjugador(this.id,"+numero+","+idequipo+","+id+")'>VENDER JUGADOR</button><button class='btn btn-warning botonnaranja' type='button' id='actualizardatos"+ numero +"' onclick='Miequipo.actujugadordefinitivo(this.id,"+numero+","+idequipo+","+id+")'>ACTUALIZAR DATOS</button></td></tr>";
          var botonnaranja=document.getElementById("actualizardatos"+numero+"");
          botonnaranja.style.display="none";
                
          }
          numero++;
          }
           
         }
      }
    }
   ajax.open("POST","http://localhost/fifafriends/index.php/Usuariosl/Mi_equipo",true);
   ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
   ajax.send(ID);

  }
  venderjugador(idboton,id,idequipo,idusuario){
    var div;
    var nombrejugador=document.getElementById("nombre"+id).textContent;
    div=document.getElementById("insertarusuarios");
    var inputsalario=document.createElement("INPUT");
     inputsalario.setAttribute("type","number");
     inputsalario.setAttribute("id","venderjugadorinput");
     var inputjugador=document.createElement("INPUT");
     inputjugador.setAttribute("type","hidden");
     inputjugador.setAttribute("id","jugadorinput");
     inputjugador.setAttribute("value",nombrejugador);
     div.innerHTML=" <h6 class='h6vender'> INSERTA LA CANTIDAD Y EQUIPO AL QUE QUIERES VENDER TU JUGADOR :</h6><h3 class='h6vender'>"+nombrejugador+"</h3> <h6 class='h6vender'>(NUMEROS SIN PUNTOS NI COMAS)</h6><br>"+
                    "<select class='select ' id='select'>"+
  "<option value='1'>A.C.Milan</option>"+
  "<option value='2'>Valencia</option>"+
  "<option value='3'>PSG</option>"+
  "<option value='4'>Bayer Munich</option>"+
  "<option value='5'>F.C.Barcelona</option>"+
  "<option value='6'>Ajax</option>"+
  "<option value='7'>B.Dormunt</option>"+
  "<option value='8'>M.United</option>"+
  "<option value='9'>M.City</option>"+
  "<option value='10'>Arsenal</option>"+
  "<option value='11'>Oporto</option>"+
  "<option value='12'>At.Madrid</option>"+
  "<option value='13'>I.Milan</option>"+
  "<option value='14'>Liverpool</option>"+
  "<option value='15'>Juventus</option>"+
  "<option value='16'>Tottenham</option>"+
  "<option value='17'>Sevilla</option>"+
  "<option value='18'>R.Madrid</option>"+
  "<option value='19'>Chelsea</option>"+
  "<option value='20'>O.Lyon</option>"+
  "</select>"+
  "<button class='btn btn-info' type='button' id='venderjugadorazul' onclick='Miequipo.vender("+ idequipo + ","+ idusuario +")'>VENDER JUGADOR</button> <button class='btn btn-danger' type='button' id='novenderjugadorojo' onclick='Miequipo.novenderjugador("+idusuario+")'>NO VENDER</button>";
     div.appendChild(inputsalario);
     div.appendChild(inputjugador);
      
  }
  vender(idequipo,idusuario){
    var preciojugador=document.getElementById("venderjugadorinput").value;
    var jugador=document.getElementById("jugadorinput").value;
    var idequipoventa=document.getElementById("select").value;
    var ajax;
    var informacion="jugador=" +jugador+ "&idequipo=" +idequipo + "&idusuario=" +idusuario+ "&idequipoventa="+idequipoventa+ "&precio=" +preciojugador;
    ajax=new XMLHttpRequest;
    ajax.onreadystatechange=function(){
      if(ajax.readyState===4 && ajax.status===200){
        if(ajax.responseText=="existe"){
          alert("Este jugador lo tienes en un proceso de venta, escoge a otro por favor");
          setTimeout(function(){  location.reload(); }, 1000);
        }
         else if(ajax.responseText=="mismo"){
          alert("No puedes venderte a ti mismo un jugador peaso de aspogrades");
          setTimeout(function(){  location.reload(); }, 1000);
        }
        else if(ajax.responseText=="equipo escogido"){
          alert("Este equipo esta escogido por un usuario,no puedes venderle el jugador,escoge otro equipo");
          setTimeout(function(){  location.reload(); }, 1000);
        }
        else if(ajax.responseText==true){
          alert("Peticion de venta de jugador aceptada, tienen que dar el visto bueno tus compañeros, cuando todos contesten se te enviará un formulario para la venta final");
          setTimeout(function(){  location.reload(); }, 1000);
         }else if(ajax.responseText=="dieciocho"){
          alert("Tienes 18 jugadores en tu plantilla y no puedes reducirla más,si quieres vender tienes que ampliar tu plantilla");
          setTimeout(function(){  location.reload(); }, 1000);
         }else{
          alert("El equipo al que quieres vender el jugador tiene ya 25 jugadores,por lo que no puede ampliar su plantilla.Elige otro equipo");
          setTimeout(function(){  location.reload(); }, 1000);
         }

      }
    }
    ajax.open("POST","http://localhost/fifafriends/index.php/Usuariosl/venderjugador",true);
   ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
   ajax.send(informacion);
  }
  novenderjugador(idusuario){
        var div;
        div=document.getElementById("insertarusuarios");
        div.innerHTML='<table class="table table-bordered tablamiequipo" id="insertarusuarios"><th>JUGADOR</th><th>POSICION</th><th>SALARIO</th><th>CLAUSULA</th></table>';
        Miequipo.actualizar(idusuario);
  }
  actujugador(id){
    var botonblanco=document.getElementById("venderjugador"+id);
    botonblanco.style.display="none";
     var boton=document.getElementById(id);
     boton.style.display="none";
     var boton2=document.getElementById("actualizardatos"+id);
     boton2.style.display="block";
     var tabla=document.getElementById("insertarusuarios");
     var columnasalario=document.getElementById("salario"+id);
     var valorsalario=document.getElementById("salario"+id).textContent;
      columnasalario.innerHTML = "";
     var columnaclausula=document.getElementById("clausula"+id);
     var valorclausula=document.getElementById("clausula"+id).textContent;
     columnaclausula.innerHTML="";

     var inputsalario=document.createElement("INPUT");
     inputsalario.setAttribute("type","number");
     inputsalario.setAttribute("value",valorsalario);
     inputsalario.setAttribute("id","insalario");
     columnasalario.appendChild(inputsalario);

     var inputclausula=document.createElement("INPUT");
     inputclausula.setAttribute("type","number");
     inputclausula.setAttribute("value",valorclausula);
     inputclausula.setAttribute("id","inclausula");
     columnaclausula.appendChild(inputclausula);

     var botonnaranja=document.getElementById("actualizardatos"+id).style.visibility="visible";
  }
  actujugadordefinitivo(idboton,id,idequipo,idusuario){
    var nuevosalario=document.getElementById("insalario").value;
    var nuevaclausula=document.getElementById("inclausula").value;
    var nombrejugador=document.getElementById("nombre"+id).textContent;
    var informacion="nombrejugador="+ nombrejugador+ "&nuevaclausula="+ nuevaclausula+ "&nuevosalario=" + nuevosalario + "&idequipo=" + idequipo;
    var ajax;
    ajax= new XMLHttpRequest;
    ajax.onreadystatechange=function(){
      if(ajax.readyState===4 && ajax.status===200){
        if(ajax.responseText==true){
          alert("Datos de tu jugador (salario y clausula ) actualizados correctamente");
        var div;
        div=document.getElementById("insertarusuarios");
        div.innerHTML='<table class="table table-bordered tablamiequipo" id="insertarusuarios"><th>JUGADOR</th><th>POSICION</th><th>SALARIO</th><th>CLAUSULA</th></table>';
        Miequipo.actualizar(idusuario);
        }else{
           alert("Los datos de tu jugador no han podido actualizarse por que no tienes suficiente presupuesto");
        var div;
        div=document.getElementById("insertarusuarios");
        div.innerHTML='<table class="table table-bordered tablamiequipo" id="insertarusuarios"><th>JUGADOR</th><th>POSICION</th><th>SALARIO</th><th>CLAUSULA</th></table>';
        Miequipo.actualizar(idusuario);
        }
      }
    }

   ajax.open("POST","http://localhost/fifafriends/index.php/Usuariosl/ediclausulasalario",true);
   ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
   ajax.send(informacion);
  }
  abrir(){
    var tabla;
              tabla=document.getElementById("insertarusuarios");
              var boton1=document.getElementById("botonver");
              var boton2=document.getElementById("botonver2");
              if(tabla.style.display = "none"){
                tabla.style.display = "block";
                boton2.style.display = "block";
                boton1.style.display = "none";
              }
        }
  abrir2(){
    var tabla;
              tabla=document.getElementById("insertarusuarios2");
              var boton1=document.getElementById("botonver1dos");
              var boton2=document.getElementById("botonver2dos");
              if(tabla.style.display = "none"){
                tabla.style.display = "block";
                boton2.style.display = "block";
                boton1.style.display = "none";
              }
        }
    cerrar(){
      var tabla;
              tabla=document.getElementById("insertarusuarios");
              var boton1=document.getElementById("botonver");
              var boton2=document.getElementById("botonver2");
              if(tabla.style.display != "none"){
                tabla.style.display = "none";
                boton2.style.display = "none";
                boton1.style.display = "block";
              }
            }
    cerrar2(){
      var tabla;
              tabla=document.getElementById("insertarusuarios2");
              var boton1=document.getElementById("botonver1dos");
              var boton2=document.getElementById("botonver2dos");
              if(tabla.style.display != "none"){
                tabla.style.display = "none";
                boton2.style.display = "none";
                boton1.style.display = "block";
              }
            }

}
class Fichajes{
   busqueda_avanzada(){
    var botonverde=document.getElementById("busquedaavanzada");
    botonverde.style.display="none";
    var div=document.getElementById("check");
    div.style.display="block";
   }
   fjugadorespordefecto(){
    var defecto=document.getElementById("jugadorespordefecto");
        defecto.style.display="none";
   }
   botonfueradeliga(){
    var quitardiv=document.getElementById("check");
        quitardiv.style.display="none";
    var div=document.getElementById("divfueradeliga");
    div.innerHTML="<h4>Inserta el jugador, equipo procedente y cantidad a pagar</h4><br> JUGADOR:<br>"+
     "<form acttion='' method='POST'><input class='form-control' name='jugador' required><br> EQUIPO PROCEDENTE:<br>"+
     "<input class='form-control' name='equipoprocedente' required><br> CANTIDAD A PAGAR:<br>"+
     "<input type='number' class='form-control' name='cantidad' required><br>"+
     "<button type='submit' name='botonficharotrojugador' class='botonficharotro'>FICHAR JUGADOR</button></form>";
   }
}

var Miequipo= new miequipo();
var hidden_input= new hidden();
var Ajax = new objetoajax();
var Fondo= new color_tabla();
var fichajes=new Fichajes();



