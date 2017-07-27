<?php
   function cortar($text){
   	;
     if ((strlen($text)>30)) {
     	echo substr($text, 0, 30)."..."; 
     }else{
     	echo $text;
     }

   }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Albumes</title>
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
					<h2 class="head col-xs-2"><span class="color-primary">13 </span>Albumes</h2>
					<table  >
						<tr>
							<td style="padding-right: 10px;padding-left: 440px">
								<input type="text" placeholder="Buscar" class="form-control arreg2" style="width: 200px">
							</td>
							<td style="padding-right: 10px;"">
								<select class="form-control arreg2"  style="width: 200px">
									<option>A - Z (por artista)</option>
									<option>A - Z (por album)</option>
									<option>Agregado recientemente</option>
									<option>Mas Escuchado</option>
								</select>
							</td>
						</tr>
					</table>
				</div>
				<div class="col-md-12 col-xs-12 col-sm-12 col-lg-12 space">


					<?php 
                       for ($i=0; $i < 10 ; $i++) { 
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
                       			<div class="col-xs-3 circulo tot" data-trigger="focus"  data-placement="auto top"  data-toggle="popover"   data-html="true" data-content="
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



 $(".tot").click(function(){
  $(this).popover('toggle');
});



 $(".ubicar").hover(function(){

  $(".change").css("opacity","1");
  $(".ubicar").css({"visibility":"hidden","opacity":"0"});
  $(this).css({"visibility":"visible","opacity":"1"});
  $(this).siblings("div.change").css("opacity","0.8");
},function(){
  $(".tot").popover('hide');
  $(this).css({"visibility":"visible","opacity":"1"});
   $(this).siblings("div.change").css("opacity","0.8");
});



$(".change").hover(function(){

  $(".change").css("opacity","1");
  $(".ubicar").css({"visibility":"hidden","opacity":"0"});
  $(this).css("opacity","0.8");
  $(this).siblings("div.ubicar").css({"visibility":"visible","opacity":"1"});
},function(){
  $(".tot").popover('hide');
  $(".change").css("opacity","1");
  $(".ubicar").css({"visibility":"hidden","opacity":"0"});
});




     });
	</script>
</body>
</html>