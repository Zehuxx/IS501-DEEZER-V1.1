<?php
   function cortar($text){
   	
     if ((strlen($text)>30)) {
     	echo substr($text, 0, 30)."..."; 
     }else{
     	echo $text;
     }

   }

   function cortar2($text){
    
     if ((strlen($text)>25)) {
      echo substr($text, 0, 25)."..."; 
     }else{
      echo $text;
     }

   }
 

?>

<!DOCTYPE html>
<html>
<head>
	<title>Playlists</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/perfil.css">
	<style type="text/css">
		body{
			background-color: #f8f8f9;
			overflow: hidden;
		}
	</style>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 x">
				<div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 inic2">
					<h2 class="head col-xs-2">
          <span onclick="subventana(1)" class="link">
          <span class="color-primary">13</span>
          <span class="azz">
          <span> Playlists</span>
           <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
           </span>
           </span>
           </h2>
					<div style="margin-left:890px ">
          <button onclick="subventana(1)" class="btnn"><span class="es-but"></span>Todas las playlist  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></button>     
          </div>
				</div>
				<div class="col-md-12 col-xs-12 col-sm-12 col-lg-12 space">

					<div class="col-md-3 dash" onclick="moddd()">
						<div class="col-xs-12 bot">
							<div >
								<button class="plus">
									<span class="glyphicon glyphicon-plus adic" aria-hidden="true"></span>
								</button>
							</div>
							<span class="newplay">Crear una playlist</span>
						</div>
					</div>

					<?php 
                       for ($i=0; $i < 3 ; $i++) { 
                       	echo 
                       	'<div class="col-md-3 dash2">
                       		<div class="change">
                       			<div class="fotos" >
                       				<img src="img/goku.jpg" class="perf">

                       			</div>

                       		</div>
                       		<div class="ubicar">
                       			<div class="col-xs-3 circulo"><span class="glyphicon glyphicon-play app" style="color: #fff" aria-hidden="true"></span></div>
                       			<div class="col-xs-3 circulo"><span class="glyphicon glyphicon-heart app" style="color: #007feb" aria-hidden="true"></span></div>
                       			<div class="col-xs-3 circulo tot" data-trigger="manual"  data-placement="auto top"  data-toggle="popover"   data-html="true" data-content="
                       			<table id=\'otros\'>
                       				<tr>
                       					<a href=\'javascript:;\'><td><span class=\'glyphicon glyphicon-share gly\'  aria-hidden=\'true\'></span><span class=\'letras\'>Compartir</span></td><a/>
                       					</tr> 
                       					<tr>
                       						<a href=\'javascript:;\'><td><span class=\'glyphicon glyphicon-remove gly\'  aria-hidden=\'true\'></span><span class=\'letras\'>Eliminar de Mi Musica</span></td><a/>
                       						</tr> 	
                       						<tr>
                       							<a href=\'javascript:;\'><td><span class=\'letras\'>Perfil de usuario</span><span class=\' glyphicon glyphicon-chevron-right derecha\'></span></td><a/>
                       							</tr> 
                       						</table>
                       						"><span class="glyphicon glyphicon-option-horizontal app" style="color: #fff" aria-hidden="true"></span></div>
                       					</div>
                       					<div class="informacion">
                       						<table>
                       							<tr>
                       								<td>
                       									<span class="name-play">'; echo cortar("kfdkfkdfkdf");echo '</span>
                       								</td>
                       								<tr>
                       									<td>
                       										<span class="tipop">publicas</span>
                       									</td>
                       								</tr>
                       							</tr>
                       						</table>
                       					</div>
                       				</div>';




                       }

					?>
					




				</div>


        <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 inic2">
          <h2 class="head col-xs-2">
            <span onclick="subventana(2)" class="link">
          <span class="color-primary">13</span>
          <span class="azz"> 
          <span> Albumes</span>
           <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
           </span>
           </span>
          </h2>
          <div style="margin-left:885px ">
          <button onclick="subventana(2)" class="btnn"><span class="es-but"></span>Todos los albumes <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></button>     
          </div>
        </div>
        <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12 space">


          <?php 
                       for ($i=0; $i < 4 ; $i++) { 
                        echo 
                        '<div class="col-md-3 dash2">
                          <div class="change3">
                            <div class="fotos" >
                              <img src="img/goku.jpg" class="perf">

                            </div>

                          </div>
                          <div class="ubicar3">
                            <div class="col-xs-3 circulo"><span class="glyphicon glyphicon-play app" style="color: #fff" aria-hidden="true"></span></div>
                            <div class="col-xs-3 circulo"><span class="glyphicon glyphicon-heart app" style="color: #007feb" aria-hidden="true"></span></div>
                            <div class="col-xs-3 circulo tot3" data-trigger="focus"  data-placement="auto top"  data-toggle="popover"   data-html="true" data-content="
                            <table id=\'new2\'>
                              <tr>
                                <a href=\'javascript:;\'><td><span class=\'glyphicon glyphicon-option-horizontal\'  aria-hidden=\'true\'><span class=\'inform\'>Escuchar a continuacion</span></td><a/>
                              </tr> 
                              <tr>
                                <a href=\'javascript:;\'><td><span class=\'glyphicon glyphicon-list-alt\'  aria-hidden=\'true\'><span class=\'inform\'>Agregar a la cola</span></td><a/>
                              </tr>   
                              <tr>
                                <a href=\'javascript:;\'><td><span class=\'glyphicon glyphicon-share\'  aria-hidden=\'true\'><span class=\'inform\'>Compartir</span></td><a/>
                              </tr> 
                              <tr>
                                <a href=\'javascript:;\'><td><span class=\'glyphicon glyphicon-remove\'  aria-hidden=\'true\'><span class=\'inform\'>Eliminar de Mi Musica</span></td><a/>
                              </tr> 
                              <tr>
                                <a href=\'javascript:;\'><td><span class=\'inform\'>Reportar un problema</span></td><a/>
                              </tr> 
                            </table>
                                  "><span class="glyphicon glyphicon-option-horizontal app" style="color: #fff" aria-hidden="true"></span></div>
                                </div>
                                <div class="informacion">
                                  <table>
                                    <tr>
                                      <td>
                                        <span class="name-play">'; echo cortar("kfdkfkdfkdf");echo '</span>
                                      </td>
                                      <tr>
                                        <td>
                                          <span class="tipop">de <span class="tipop2">';echo cortar("artistasjdsdddddddddddjjksdkdkskdkskd");echo '</span></span>
                                        </td>
                                      </tr>
                                    </tr>
                                  </table>
                                </div>
                              </div>';




                       }

          ?>
          




        </div>


        <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 inic2">
          <h2 class="head col-xs-2">
            <span onclick="subventana(3)" class="link">
          <span class="color-primary">13</span>
          <span class="azz">
          <span> Artistas fav.</span>
           <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
           </span>
           </span>
          </h2>
          <div style="margin-left:885px ">
          <button onclick="subventana(3)" class="btnn"><span class="es-but"></span>Todos los artistas <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></button>     
          </div>
        </div>
        <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12 space">


          <?php 
                       for ($i=0; $i < 4 ; $i++) { 
                        echo 
                        '<div class="col-md-3 dash2">
                          <div class="change2">
                            <div class="fotos2" >
                              <img src="img/goku.jpg" class="perf2">

                            </div>

                          </div>
                          <div class="ubicar2">
                            <div class="col-xs-3 circulo"><span class="glyphicon glyphicon-play app" style="color: #fff" aria-hidden="true"></span>
                            </div>
                            <div class="col-xs-3 circulo"><span class="glyphicon glyphicon-heart app" style="color: #007feb" aria-hidden="true"></span>
                            </div>
                            </div>
                                <div class="informacion2">
                                  <table>
                                    <tr>
                                      <td>
                                        <span class="name-play">'; echo cortar2("kfdkfkdfkdffgrgrtdgrhtttt d");echo '</span>
                                      </td>
                                      <tr>
                                        <td>
                                          <span class="tipop">2.344.2323 seguidores</span>
                                        </td>
                                      </tr>
                                    </tr>
                                  </table>
                                </div>
                              </div>';




                       }

          ?>
          




        </div>


			</div>

		</div>
	</div>



	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/perfil.js"></script>
	<script type="text/javascript">
		$(function () {
          $('[data-toggle="popover"]').popover();
        });

     $(document).ready(function(){

     	$('#newplaylist',window.parent.parent.document).on('hide.bs.modal', function (e) {
     if($("#dropp",window.parent.parent.document).hasClass("modal-backdrop")){
    $(".modal-backdrop",window.parent.parent.document).remove();
}
});



 $(".tot").click(function(){
  $(this).popover('toggle');
});



 $(".ubicar").hover(function(){
  $(this).css({"visibility":"visible","opacity":"1"});
  $(this).siblings("div.change").css("opacity","0.8");
},function(){
  $(this).css({"visibility":"visible","opacity":"1"});
   $(this).siblings("div.change").css("opacity","0.8");
});


$(".change").hover(function(){
  $(this).css("opacity","0.8");
  $(this).siblings("div.ubicar").css({"visibility":"visible","opacity":"1"});
},function(){
  if ($(this).siblings("div.ubicar").children("div.tot").popover('hide')) {
       
  }else{
      $(this).siblings("div.ubicar").children("div.tot").popover('hide');
  }
  $(this).css("opacity","1");
  $(this).siblings("div.ubicar").css({"visibility":"hidden","opacity":"0"});
});

$(".change").click(function(){
  if ($(this).siblings("div.ubicar").children("div.tot").popover('hide')) {

  }else{
      $(this).siblings("div.ubicar").children("div.tot").popover('toggle');
  }
  
});






 $(".tot3").click(function(){
  $(this).popover('toggle');
});



 $(".ubicar3").hover(function(){

  $(".change3").css("opacity","1");
  $(".ubicar3").css({"visibility":"hidden","opacity":"0"});
  $(this).css({"visibility":"visible","opacity":"1"});
  $(this).siblings("div.change3").css("opacity","0.8");
},function(){
  $(".tot3").popover('hide');
  $(this).css({"visibility":"visible","opacity":"1"});
   $(this).siblings("div.change3").css("opacity","0.8");
});



$(".change3").hover(function(){

  $(".change3").css("opacity","1");
  $(".ubicar3").css({"visibility":"hidden","opacity":"0"});
  $(this).css("opacity","0.8");
  $(this).siblings("div.ubicar3").css({"visibility":"visible","opacity":"1"});
},function(){
  $(".tot3").popover('hide');
  $(".change3").css("opacity","1");
  $(".ubicar3").css({"visibility":"hidden","opacity":"0"});
});



 $(".ubicar2").hover(function(){

  $(this).css({"visibility":"visible","opacity":"1"});
  $(this).siblings("div.change2").css("opacity","0.8");
},function(){
  $(this).css({"visibility":"visible","opacity":"1"});
   $(this).siblings("div.change2").css("opacity","0.8");
});



$(".perf2").hover(function(){
  $(this).parent().parent().css("opacity","0.8");
  $(this).parent().parent().siblings("div.ubicar2").css({"visibility":"visible","opacity":"1"});
},function(){
  $(this).parent().parent().css("opacity","1");
  $(this).parent().parent().siblings("div.ubicar2").css({"visibility":"hidden","opacity":"0"});
});



     });
	</script>
</body>
</html>