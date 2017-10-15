<?php
 include ("class/class-conexion.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>informacion</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/personalizado.css">
	<style type="text/css">
		body{
			width: 100%;
		}
	</style>
	
</head> 
<body style="background-color: #f1f1f1">
	<div class="loader" style="display: block;"></div>
<div class="container-fluid"> 
	<div class="row">
		<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 afuera">
			<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 dentro ">
			 <div class="col-lg-2 col-sm-2 col-md-2 col-xs-2 imagen ">
				<img src="img/goku.jpg" width="150" height="150" style="border-radius: 4px">

			</div>
			<div class="col-lg-10 col-sm-10 col-md-10 col-xs-10 texto ">

				<p class="titulo">Mi oferta</p>
				<hr>
				<div class="alinear" >
				 <div class="letrass"> Estás disfrutando de la versión gratuita de Deezer.<button  class="suscripcion"><a style="text-decoration:none;color:black;" href="">Administrar mi suscripción</a> </button></div>
			<p class="titulo">Inicia Sesion</p>
			<hr>
			<div >
			<table>
				<tr>
				    <td style="text-align: right;padding-right: 10px;"><label class="extras">Tu correo electrónico:</label></td>
					<td width="300"><input type="text" id="txt-correo" class="form-control " > </td>

				</tr>
				<tr>
					<td><div style="height: 10px"></div></td>
				</tr>
				<tr >
                    <td style="text-align: right;padding-right: 10px;"><label class="extras">Tu contraseña:</label></td>
					<td><input type="text" id="txt-contrasena" class="form-control "></td>
				</tr>
			</table>
				<div class="datoss">
					Datos visibles para otros usuarios
					<hr>
				</div>
				<table >
					<tr>
						<td style="text-align: right;padding-left: 10px;padding-bottom: 17px">
							<label class="extras">Sexo</label>
							<td style="padding-left: 15px;padding-bottom: 17px">
							<select class="form-control" id="slc-sexo">
								<option value="N/A">Sexo</option>
								<option value="1">Femenino</option>
								<option value="2">Masculino</option>
							</select>
							</td>
						</td>
					</tr>
					<tr>
						<td style="text-align: right;padding-left: 10px">
							<label class="extras">Nombre de Usuario</label>
						</td>
						<td width="313" style="padding-left: 15px">
							<input type="text" class="form-control" id="txt-nombreu">
						</td>
					</tr>
				</table>
				<div class="personales">
					Datos Privados
					<hr>
				</div>
				<table style="margin-left: -45px">
					<tr>
						<td style="text-align: right;padding-bottom: 15px">
							<label class="extras">Apellido</label>
						</td>
						<td width="300" style="padding-left: 15px;padding-bottom: 15px">
							<input type="text" id="txt-apellido" class="form-control">
						</td>
					</tr>
					<tr>
						<td style="text-align: right;padding-bottom: 15px">
							<label class="extras">Nombre</label>
						</td>
						<td style="padding-left: 15px;padding-bottom: 15px">
							<input type="text" id="txt-nombre" class="form-control">
						</td>
					</tr>
					<tr>
						<td style="text-align: right;padding-bottom: 15px">
							<label class="extras">Fecha de nacimiento</label>
						</td>
						<td >
							<div class="col-xs-4">
								<select  class="form-control" id="dia" style="margin-bottom: 15px;width: 80px">
									<option value="N/A">N/A</option>
								<?php
                                  for ($i=1; $i <32 ; $i++) { 
                                  	echo "<option value=".$i.">".$i."</option>";
                                  }
								?>
							</select>
							</div>
							<div class="col-xs-4">
								<select  class="form-control" id="mes" style="margin-left:6px;margin-bottom: 15px;width: 80px;">
									<option value="N/A">N/A</option>
								<?php
                                  for ($i=1; $i <13 ; $i++) { 
                                  	echo "<option value=".$i.">".$i."</option>";
                                  }
								?>
							</select>
							</div>
							<div class="col-xs-4">
								<select  class="form-control" id="year" style="margin-left:10px;margin-bottom: 15px;width: 80px;">
									<option value="N/A">N/A</option>
								<?php
                                  for ($i=1900; $i <2017 ; $i++) { 
                                  	echo "<option value=".$i.">".$i."</option>";
                                  }
								?>
							</select>
							</div>
						</td>
						<td>
							
						</td>
					</tr>
					
					<tr>
						<td style="text-align: right;padding-bottom: 15px">
							<label class="extras">Pais</label>
						</td>
						<td style="padding-left: 15px;padding-bottom: 15px">
							<select id="slc-pais" class="form-control">
								<option value="">N/A</option>

								<?php
								$conexion = new Conexion();
								$conexion->establecerConexion();
                                $lugares=$conexion->ejecutarInstruccion("select CODIGO_LUGAR,NOMBRE_LUGAR from TBL_LUGARES"); 
								while ($row = $conexion->obtenerRegistro($lugares)) {
									echo '<option value='.$row["CODIGO_LUGAR"].'>'.$row["NOMBRE_LUGAR"].'</option>';	
								}
								$conexion->cerrarConexion();
								?>
							</select>
							
						</td>
					</tr>
					
					<tr>
						<td style="text-align: right;padding-bottom: 15px">
							<label class="extras" class="form-control">Movil</label>
						</td>
						<td style="padding-left: 15px;padding-bottom: 15px">
							<input type="text" id="txt-phone" class="form-control">
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<div id="resultado" style="padding-bottom: 15px;"></div>
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<button class="btn btn-primary" id="btn-save" type="button" style="margin-left: 180px"><span class="label">Guardar</span></button>
						</td>
					</tr>
				</table>
				
			</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-lg-12 col-md-12" style="padding-top: 20px;">
				<div class="final">
					<a href="" style="text-decoration:none;color: #72727d; ">Eliminar mi Cuenta</a>
				</div>
			</div>
			</div>
		</div>
	</div>
</div>
    <script type="text/javascript" src="js/jquery.min.js"></script> 
	<script src="js/index.js"></script>
	<script src="js/informacion.js"></script>
	
	<script type="text/javascript">
    
       $(".loader").css("display","none");

</script>
</body>
</html>