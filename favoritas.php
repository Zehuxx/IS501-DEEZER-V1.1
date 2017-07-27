<?php
   function cortar($text){
   	;
     if ((strlen($text)>15)) {
     	echo substr($text, 0, 15)."..."; 
     }else{
     	echo $text;
     }

   }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Favoritas</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/perfil.css">
	<style type="text/css">
		body{
			background-color: #f8f8f9;
			overflow: hidden;
		}
	</style>
	<script type="text/javascript" src="js/perfil.js"></script>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 x">
				<div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 inic">
					<h2 class="head"><span class="color-primary">13 </span>Canciones</h2>
				</div>
				<div class="col-lg-12 col-sm-12 col-xs-12 col-md-6 escu">
					<button class="btn-listen"><span class="glyphicon glyphicon-play-circle circl"  aria-hidden="true"></span> Escuchar</button>
				</div>
				<div class="col-lg-12 col-sm-12 col-xs-12 col-md-6" id="unir">
					<div class="col-xs-6" id="comb">
						<select class="form-control arreg"  style="width: 200px">
							<option>Añadido recientemente</option>
							<option>A - Z (cancion)</option>
							<option>A - Z (por artista)</option>
							<option>A - Z (por album)</option>
							<option>Manual</option>
						</select>
 
					</div>
					<div class="col-xs-6" id="buss">
						<input type="text" placeholder="Buscar dentro de las canciones" class="form-control arreg" style="width: 200px;">
					</div>

				</div>
			</div>
			<div class="col-lg-122">
				<table class="datagrid-table estilo table-striped " >
				<?php

				echo '<tr>
						<th class="first">
						</th>
						<th class="heart">
						</th>
						<th class="ecua">
							
						</th>
						<th class="song">
							<span>Cancion</span>
						</th>
						<th class="punto">
							
						</th>
						<th class="art">
							<span>Artista</span>
						</th>
						<th class="album">
							<span>Album</span>
						</th>
						<th>
							<span>D.</span>
						</th>
						<th>
							<span>Añadido</span>
						</th>
						<th class="last"></th>
					</tr>';
                  for ($i=0; $i < 13 ; $i++) { 
                  echo 
                    '<tr>
						<td class="first">
							
						</td>
						<td>
							<span><span class="glyphicon glyphicon-heart"  aria-hidden="true"></span>
						</td>
						<td>
							<img src="img/ecauliz.gif" width="12" height="12">
							<a href="javascript:;" style="display: none"><span class="glyphicon glyphicon-play"  aria-hidden="true"></a>
							<a href="javascript:;" style="display: none"><span class="glyphicon glyphicon-pause"  aria-hidden="true"></a>
						</td>
						<td>
								<a href="javascript:;"><span  class="ellipsis rec"><script type="text/javascript" >recortar2("The walking dead prueba jaja bueno hasta aquidf")</script></span></a>
						</td>
						<td >
						<a href="javascript:;" data-trigger="focus" data-placement="auto right"  data-toggle="popover"   data-html="true" data-content="

                         <div class=\'detalles2\'>
                         	<table class=\'margeee\' >
                         		<tr >
                         			<td><img class=\'respon\' src=\'img/goku.jpg\'></td>
                         			<td ><a href=\'javascript:;\'><span class=\'art3\'>'; echo cortar("Me Rehuso"); echo '</span></a>
                         			<div class=\'espacio\'></div>
                         			<span class=\'song3\'>de <a href=\'javascript:;\'>';echo cortar("Danny OceakkkkkkkMaluma");echo'</a></span>
                         			</td>
                         		</tr>
                         		
                         	</table>
                            <hr>
                            <table id=\'new\'>
                            	<tr>
                            		<a href=\'javascript:;\'><td><span class=\'glyphicon glyphicon-option-horizontal\'  aria-hidden=\'true\'><span class=\'inform\'>Escuchar justo despues</span></td><a/>
                            	</tr> 
                            	<tr>
                            		<a href=\'javascript:;\'><td><span class=\'glyphicon glyphicon-list-alt\'  aria-hidden=\'true\'><span class=\'inform\'>Añadir a la lista de espera</span></td><a/>
                            	</tr> 	
                            	<tr>
                            	<a href=\'javascript:;\'><td><span class=\'glyphicon glyphicon-music\'  aria-hidden=\'true\'><span class=\'inform\'>Añadir a una playlist</span></td><a/>
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
                         </div>

						"



						><span><span class="glyphicon glyphicon-option-horizontal puntos"  aria-hidden="true"></span></a>
						
						</td>
						<td>
								<a href="javascript:;"><span class="ellipsis rec"><script type="text/javascript" >recortar2("The walking dead prueba jaja bueno hasta aquidf")</script></span></a>
						</td>
						<td>
								<a href="javascript:;"><span class="ellipsis rec"><script type="text/javascript" >recortar2("The walking dead prueba jaja bueno hasta aquidf")</script></span></a>
						</td>
						<td>
							<span>21:22</span>
						</td>
						<td class="time">
						<span id="time" class="ellipsis date"><script type="text/javascript" >recortar("Hace 2 horas")</script> </span>
						</td>
						<td class="last">
							
						</td>
					</tr>';
                  }
 

				?>
					
					
					
				</table>
			</div>
		</div>
</div>

	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
		$(function () {
          $('[data-toggle="popover"]').popover();
        });

   
	</script>
</body>
</html>