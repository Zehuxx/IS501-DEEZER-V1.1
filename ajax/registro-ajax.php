<?php
//$_GET['accion']='2';
include ("../class/class-conexion.php");
$conexion = new Conexion();
$conexion->establecerConexion();

$resultado=array();
switch ($_GET['accion']){ 
	
	case '1': 
		$nombreu=$_POST["nombreu"];
		$correo=$_POST["correo"];
		$contrasena=$_POST["contrasena"];
		$sexo=$_POST["sexo"];
		$edad=$_POST["edad"];
		$cont=0;
		$correoconsulta=$conexion->ejecutarInstruccion("
        SELECT COUNT(1) COINCIDENCIAS FROM (SELECT NOMBRE_USUARIO FROM TBL_USUARIOS WHERE CORREO ='$correo')");
        
		while ($row = $conexion->obtenerRegistro($correoconsulta)) {
			if ($row["COINCIDENCIAS"]=="1") {
				$resultado['codigo1']=0;
				$resultado["mensaje1"]="Correo en uso";
				$cont++;
			}
		}

		$nombreuconsulta=$conexion->ejecutarInstruccion("SELECT COUNT(1) COINCIDENCIAS FROM (SELECT NOMBRE_USUARIO FROM TBL_USUARIOS
        WHERE NOMBRE_USUARIO ='$nombreu')");

		while ($row = $conexion->obtenerRegistro($nombreuconsulta)) {
            if ($row["COINCIDENCIAS"]=="1") {
            	$resultado['codigo2']=0;
				$resultado["mensaje2"]="usuario en uso";
				$cont++;
            }
		}

        if ($cont==0) {
        	$insertpersona=$conexion->ejecutarInstruccion("INSERT INTO   TBL_PERSONAS (CODIGO_PERSONA, CODIGO_SEXO) VALUES (SEQ_CODPERSONAS.NEXTVAL,'$sexo')");
           $insertusuario=$conexion->ejecutarInstruccion("INSERT INTO TBL_USUARIOS (CODIGO_USUARIO, NOMBRE_USUARIO, CONTRASENA, FECHA_INSCRIPCION, EDAD, CORREO) VALUES (SEQ_CODUSUARIOS.NEXTVAL, '$nombreu', '$contrasena',SYSDATE, '$edad', '$correo')");
            
            $resultado["codigo"]=1;
            $resultado["mensaje"]="Registro exitoso";
        }


		break;
	case '2':
	    $nombreu=$_POST["nombreu"];
	    $contrasena=$_POST["contrasena"];

	    $registros=$conexion->ejecutarInstruccion("SELECT COUNT(1) COINCIDENCIAS FROM (SELECT CODIGO_USUARIO FROM TBL_USUARIOS WHERE NOMBRE_USUARIO ='$nombreu' AND CONTRASENA='$contrasena')");

	    while ($row = $conexion->obtenerRegistro($registros)) {
	    	if ($row["COINCIDENCIAS"]=="1") {
        	$codigo=$conexion->ejecutarInstruccion("SELECT CODIGO_USUARIO FROM TBL_USUARIOS WHERE NOMBRE_USUARIO ='$nombreu' AND CONTRASENA='$contrasena'");
        	 $codigo_usuario=$codigo["CODIGO_USUARIO"];
             $resultado["codigo"]=1;
		     $resultado["mensaje"]="Login exitoso";
        }else{
          $resultado["codigo"]=0;
		  $resultado["mensaje"]="Usuario o Contrasena incorrecta";
	         }
	    } 

	break;
	case '3':
	    $nombreu=$_POST['nombreu'];
	    $contrasena=$_POST['contrasena'];
	    $sexo=$_POST['sexo'];
	    $dia=$_POST['dia'];
	    $mes=$_POST['mes'];
	    $ano=$_POST['ano'];
	    $apellido=$_POST['apellido'];
	    $telefono=$_POST['telefono'];
	    $nombre=$_POST['nombre'];
	    $codigop=$_POST['codigop'];
	    $correo=$_POST['correo'];
	    $resultado['codigo']=1;
        $resultado["mensaje"]='Nombre Usuario= '.$nombreu.' '.'Contraseña= '.$contrasena.' '.'Correo= '.$correo.' '.'sexo= '.$sexo.' '.'dia= '.$dia.' '.'mes= '.$mes.' '.'año= '.$ano.' '.'nombre= '.$nombre.' '.'apellido= '.$apellido.' '.'Codigop= '.$codigop.' '.'telefono= '.$telefono;
        //$info=$conexion->ejecutarInstruccion("select CODIGO_LUGAR,NOMBRE_LUGAR from TBL_LUGARES");
	break;
	default:
	
	break;

}
echo json_encode($resultado);

?>