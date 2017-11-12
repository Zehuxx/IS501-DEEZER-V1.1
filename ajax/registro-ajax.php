<?php
session_start();
//$_GET['accion']='1';
include ("../class/class-conexion.php");
$conexion = new Conexion();
$conexion->establecerConexion();

$resultado=array(); 
switch ($_GET['accion']){ 
	
	case '1': 
	$nombreu=$_POST['nombreu'];
	$correo=$_POST["correo"];
	$contrasena=$_POST['contrasena'];
	$sexo=$_POST["sexo"];
	$edad=$_POST["edad"];
	$registro=$conexion->ejecutarInstruccion("BEGIN REGISTRO('$nombreu','$correo','$contrasena',$sexo,$edad);END;");
	$verificar=$conexion->ejecutarInstruccion("SELECT * FROM HELP");

	while ($row = $conexion->obtenerRegistro($verificar)) {
		switch ($row["CODIGO_MENSAJE"]) {
			case '0':
			$codusuario=$conexion->ejecutarInstruccion("SELECT CODIGO_USUARIO FROM TBL_USUARIOS WHERE NOMBRE_USUARIO='$nombreu' AND CORREO='$correo'");

			while ($row2 = $conexion->obtenerRegistro($codusuario)) {
				$_SESSION["codigo_usuario"]=$row2["CODIGO_USUARIO"];
			}

			$resultado["codigo"]=0;
			$resultado["mensaje"]="Registro exitoso";
			break;
            case '1':
             $resultado["codigo"]=1;
			$resultado["mensaje"]="Usuario en uso";
            	break;
            case '2':
             $resultado["codigo"]=2;
			$resultado["mensaje"]="Correo en uso";
            	break;
            case '3':
             $resultado["codigo"]=3;
			$resultado["mensaje"]="Correo y Usuario en uso";
            	break;
			default:
        		
			break;
		}

	}



	break;
	case '2':
	$correo=$_POST['correo'];
	$contrasena=$_POST['contrasena'];

	$registros=$conexion->ejecutarInstruccion("SELECT COUNT(1) COINCIDENCIAS FROM (SELECT CODIGO_USUARIO FROM TBL_USUARIOS WHERE CORREO ='$correo' AND CONTRASENA='$contrasena')");

	while ($row = $conexion->obtenerRegistro($registros)) {
		if ($row["COINCIDENCIAS"]=="1") {
			$codigo=$conexion->ejecutarInstruccion("SELECT CODIGO_USUARIO FROM TBL_USUARIOS WHERE CORREO ='$correo' AND CONTRASENA='$contrasena'");
			while ($row2=$conexion->obtenerRegistro($codigo)) {
				$_SESSION["codigo_usuario"]=$row2["CODIGO_USUARIO"];
			}
			$resultado["codigo"]=1;
			$resultado["mensaje"]="Login exitoso";
		}else{
			$resultado["codigo"]=0;
			$resultado["mensaje"]="Correo o Contrasena incorrecta";
		}
	} 

	break;
	
	default:
	
	break;

}
echo json_encode($resultado);

?>