function borde(id){
 if (id=="mu") {
   $("#mu").addClass("borde-a");
   $("#fav").removeClass("borde-a");
   $("#pla").removeClass("borde-a");
   $("#alb").removeClass("borde-a");
   $("#art").removeClass("borde-a");
   $("#um").css("color","#32323d");
   $("#alp").css("color","#72727d");
   $("#bla").css("color","#72727d");
   $("#tra").css("color","#72727d");
   $("#mas").css("color","#72727d");
   $("#af").css("color","#72727d");
 }
 if (id=="fav") {
 	$("#fav").addClass("borde-a"); 
   $("#mu").removeClass("borde-a");
   $("#pla").removeClass("borde-a");
   $("#alb").removeClass("borde-a");
   $("#art").removeClass("borde-a");
   $("#af").css("color","#32323d");
   $("#alp").css("color","#72727d");
   $("#bla").css("color","#72727d");
   $("#tra").css("color","#72727d");
   $("#mas").css("color","#72727d");
   $("#um").css("color","#72727d");
 }
 if (id=="pla") {
 	$("#pla").addClass("borde-a");
   $("#fav").removeClass("borde-a");
   $("#mu").removeClass("borde-a");
   $("#alb").removeClass("borde-a");
   $("#art").removeClass("borde-a");
   $("#alp").css("color","#32323d");
   $("#um").css("color","#72727d");
   $("#bla").css("color","#72727d");
   $("#tra").css("color","#72727d");
   $("#mas").css("color","#72727d");
   $("#af").css("color","#72727d");
 }
 if (id=="alb") {
 	$("#alb").addClass("borde-a");
   $("#fav").removeClass("borde-a");
   $("#pla").removeClass("borde-a");
   $("#mu").removeClass("borde-a");
   $("#art").removeClass("borde-a");
   $("#bla").css("color","#32323d");
   $("#alp").css("color","#72727d");
   $("#um").css("color","#72727d");
   $("#tra").css("color","#72727d");
   $("#mas").css("color","#72727d");
   $("#af").css("color","#72727d");
 }
 if (id=="art") {
 	$("#art").addClass("borde-a");
   $("#fav").removeClass("borde-a");
   $("#pla").removeClass("borde-a");
   $("#alb").removeClass("borde-a");
   $("#mu").removeClass("borde-a");
   $("#tra").css("color","#32323d");
   $("#alp").css("color","#72727d");
   $("#bla").css("color","#72727d");
   $("#um").css("color","#72727d");
   $("#mas").css("color","#72727d");
   $("#af").css("color","#72727d");
 }
 
}

function redimensionariframe(obj) {
    obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
  }

function sobre(id){
	if (id!="sma") {
		$("#"+id).css("border-bottom","3px solid rgb(0, 127, 235)");
		$("#"+id).click(function(){
			$("#"+id).css("border-bottom","");
			borde(id);

		});
	}else{
		$("#"+id).click(function(){

		});
	    $("#flecha").removeClass("glyphicon glyphicon-chevron-down");
        $("#flecha").addClass("glyphicon glyphicon-chevron-up");
        $("#mas").css("color","#32323d");
	}
    
	
}

function unsobre(id){
	if (id=="sma") {
		$("#flecha").addClass("glyphicon glyphicon-chevron-down");
		$("#mas").css("color","#72727d");
	}
	if ($("#"+id).css("border-bottom")=="3px solid rgb(0, 127, 235)"){
		$("#"+id).css("border-bottom","");
	}
    
}




function ifra4(link){
    if (link==1)
    	$("#ifra4").html('<iframe class="contenido4" onload="redimensionariframe(this)" src="favoritas.php" frameborder="0"  ></iframe>');
    if(link==2)
    	$("#ifra4").html("<iframe class='contenido4' onload='redimensionariframe(this)' src='playlists.php' frameborder='0' ></iframe>");
     if(link==3)
    	$("#ifra4").html("<iframe class='contenido4' onload='redimensionariframe(this)' src='albumes.php' frameborder='0' ></iframe>");
    if(link==4)
      $("#ifra4").html("<iframe class='contenido4' onload='redimensionariframe(this)' src='artistas.php' frameborder='0' ></iframe>");
    if(link==5)
      $("#ifra4").html("<iframe class='contenido4' onload='redimensionariframe(this)' src='mimusica.php' frameborder='0' ></iframe>");
}


function recortar(texto){
  if(texto.length>10){
    texto=texto.slice(0,11)+"...";
  }
  document.write(texto);
}

function recortar2(texto){
  if(texto.length>46){
    texto=texto.slice(0,46)+"...";
  }
  document.write(texto);
}

function recortar3(texto){
  if(texto.length>16){
    texto=texto.slice(0,16)+"...";
  }
  return texto;
}


function info(){
 $('#ifra', window.parent.document).html('<iframe class="contenido" src="configuraciones.php" frameborder="0"  ></iframe>');
}

function comprobar(){
  var a=window.parent.document.getElementById("pla");
  var b=window.parent.document.getElementById("alb");
  var c=window.parent.document.getElementById("mu");
  var d=window.parent.document.getElementById("art");
  if (a.classList.contains("borde-a")) {
     a.classList.remove("borde-a");
  }
  if (b.classList.contains("borde-a")) {
      b.classList.remove("borde-a");
  }
  if (c.classList.contains("borde-a")) {
       c.classList.remove("borde-a");
  }
  if (d.classList.contains("borde-a")) {
       d.classList.remove("borde-a");
  }
  
}

function subventana(id){
  comprobar();
  if (id==1) {
    window.parent.document.getElementById("pla").classList.add("borde-a");
    $('#ifra4', window.parent.document).html('<iframe class="contenido4" onload="redimensionariframe(this)" src="playlists.php" frameborder="0"  ></iframe>');
  }
  if (id==2) {
    window.parent.document.getElementById("alb").classList.add("borde-a");
    $('#ifra4', window.parent.document).html('<iframe class="contenido4" onload="redimensionariframe(this)" src="albumes.php" frameborder="0"  ></iframe>');
  }
  if (id==3) {
    window.parent.document.getElementById("art").classList.add("borde-a");
    $('#ifra4', window.parent.document).html('<iframe class="contenido4" onload="redimensionariframe(this)" src="artistas.php" frameborder="0"  ></iframe>');
  }
}


function moddd(){
  $('#newplaylist',window.parent.parent.document).modal('show');

  $("body",window.parent.parent.document).append('<div class="modal-backdrop fade in" id="dropp"  ></div>');
  
if ($('body').hasClass('modal-open')) {
  $('body').removeClass('modal-open');
  $('.fade').removeClass("modal-backdrop"); 
  
}
   
}




