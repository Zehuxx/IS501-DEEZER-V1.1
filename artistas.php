<?php
   function cortar($text){
   	;
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
					<h2 class="head col-xs-2"><span class="color-primary">13 </span>Artistas</h2>
					<table  >
						<tr>
							<td style="padding-right: 10px;padding-left: 440px">
								<input type="text" placeholder="Buscar" class="form-control arreg2" style="width: 200px">
							</td>
							<td style="padding-right: 10px;"">
								<select class="form-control arreg2"  style="width: 200px">
									<option>A - Z</option>
									<option>Agregado recientemente</option>
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
                       									<span class="name-play">'; echo cortar("kfdkfkdfkdffgrgrtdgrhtttt d");echo '</span>
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