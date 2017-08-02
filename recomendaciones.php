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
			overflow-x: hidden;
		}
	</style>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 x">
				
				<div class="linea"></div>
				<div class="divider-text">Recomendado hoy para ti.</div>
				<div class="col-md-12 col-xs-12 col-sm-12 col-lg-12 space">

					<div class="tarjetas">



						<div class="informacion-a">
							<span class="shadow">ALBUM</span>
							<span class="andlisten">Y si escuchas:</span>
							<table class="adjus">
								<tr>
									<td>
										<span class="name-play-a">kfdkfkdfkdf</span>
									</td>
									<tr>
										<td>
											<span class="tipop">de <span class="tipop2-a">artistasdkdkskdkskd</span></span>
										</td>
									</tr>
								</tr>
							</table>
							<div class="otherdetails">
							<img src="img/goku.jpg" width="80" height="100" class="image-a">
                              <span class="reinv discos">Discografía (58)</span>  
                              
                              <span class="reinv art-same">Artistas similares</span> 
                              <span class="art-alb discos-content"><span class="point">Energía</span>, <span class="point">La Familia B Sides</span></span> 
                              <span class="art-alb art-content"><span class="point">Zion & Lennox</span>, <span class="point">Dragon & Caballero</span>, <span class="point">J Balvin</span></span>
                              <div class="linea22"></div>
							</div>

						</div>


						<div class="col-md-3 dash2-a">
							<div class="change-a">
								<div class="fotos-a" >
									<img src="img/goku.jpg" class="perf-a">

								</div>

							</div>
							<div class="ubicar-a">
								<div class="col-xs-3 circulo"><span class="glyphicon glyphicon-play app" style="color: #fff" aria-hidden="true"></span></div>
								<div class="col-xs-3 circulo"><span class="glyphicon glyphicon-heart app" style="color: #007feb" aria-hidden="true"></span></div>
								<div class="col-xs-3 circulo tot" data-trigger="focus"  data-placement="auto top"  data-toggle="popover"   data-html="true" data-content="
								<table id='new2'>
									<tr>
										<a href='javascript:;'><td><span class='glyphicon glyphicon-option-horizontal'  aria-hidden='true'><span class='inform'>Escuchar a continuacion</span></td><a/>
										</tr> 
										<tr>
											<a href='javascript:;'><td><span class='glyphicon glyphicon-list-alt'  aria-hidden='true'><span class='inform'>Agregar a la cola</span></td><a/>
											</tr>   
											<tr>
												<a href='javascript:;'><td><span class='glyphicon glyphicon-share'  aria-hidden='true'><span class='inform'>Compartir</span></td><a/>
												</tr> 
												<tr>
													<a href='javascript:;'><td><span class='glyphicon glyphicon-remove'  aria-hidden='true'><span class='inform'>Eliminar de Mi Musica</span></td><a/>
													</tr> 
													<tr>
														<a href='javascript:;'><td><span class='inform'>Reportar un problema</span></td><a/>
														</tr> 
													</table>
													"><span class="glyphicon glyphicon-option-horizontal app" style="color: #fff" aria-hidden="true"></span></div>
												</div>

											</div>


										</div>




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



								$(".ubicar-a").hover(function(){

									$(".change-a").css("opacity","1");
									$(".ubicar-a").css({"visibility":"hidden","opacity":"0"});
									$(this).css({"visibility":"visible","opacity":"1"});
									$(this).siblings("div.change-a").css("opacity","0.8");
								},function(){
									$(".tot").popover('hide');
									$(this).css({"visibility":"visible","opacity":"1"});
									$(this).siblings("div.change-a").css("opacity","0.8");
								});



								$(".change-a").hover(function(){

									$(".change-a").css("opacity","1");
									$(".ubicar-a").css({"visibility":"hidden","opacity":"0"});
									$(this).css("opacity","0.8");
									$(this).siblings("div.ubicar-a").css({"visibility":"visible","opacity":"1"});
								},function(){
									$(".tot").popover('hide');
									$(".change-a").css("opacity","1");
									$(".ubicar-a").css({"visibility":"hidden","opacity":"0"});
								});




							});
						</script>
					</body>
					</html>