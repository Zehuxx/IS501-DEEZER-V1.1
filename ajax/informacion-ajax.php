<?php
session_start();
//$_GET['accion']='2';
//$_SESSION['codigo_usuario']=1; 
 //if(!isset($_SESSION['codigo_usuario']))
 //header('Location:http://localhost/IS501-DEEZER-V1.1/conectarse.php');
include ("../class/class-conexion.php");
$conexion = new Conexion();
$conexion->establecerConexion();

$resultado=array(); 
switch ($_GET['accion']){ 
	
	case '1':
	    $nombreu=$_POST['nombreu'];
	    $sexo=$_POST["sexo"];
	    $dia=$_POST['dia'];
	    $mes=$_POST['mes'];
	    $ano=$_POST['ano'];
	    $apellido=$_POST['apellido'];
	    $telefono=$_POST['telefono'];
	    $nombre=$_POST['nombre'];
	    $codigop=$_POST['codigop'];
	    
        $actualizarpersona=$conexion->ejecutarInstruccion("UPDATE TBL_PERSONAS 
        	                                               SET  CODIGO_SEXO=$sexo,
                                                                NOMBRE='$nombre',
                                                                APELLIDO='$apellido',
                                                                FECHA_NACIMIENTO=TO_DATE('$dia/$mes/$ano','DD-MM-YYYY'),
                                                                TELEFONO='$telefono'
                                                           WHERE CODIGO_PERSONA=".$_SESSION['codigo_usuario']."");

        $actualizarusuario=$conexion->ejecutarInstruccion("UPDATE TBL_USUARIOS 
                                                            SET  CODIGO_LUGAR=$codigop,
                                                                 NOMBRE_USUARIO='$nombreu'
                                                            WHERE  CODIGO_USUARIO=".$_SESSION['codigo_usuario']."");
        $resultado['codigo']=1;
        $resultado['mensaje']="Actualizacion Exitosa";
	break;
	case '2':
       $contrasena=$_POST['contrasena'];
       $nuevacontrasena=$_POST['nuevacontrasena'];
       $confcontrasena=$_POST['confcontrasena'];
       $cont=0;
      $verificar=$conexion->ejecutarInstruccion("SELECT COUNT(1) AS COINCIDENCIAS
       	                                          FROM TBL_USUARIOS
                                                  WHERE CODIGO_USUARIO=".$_SESSION['codigo_usuario']." AND CONTRASENA='$contrasena'");
     

       while ($row = $conexion->obtenerRegistro($verificar)) {
			if ($row["COINCIDENCIAS"]=="0") {
				$resultado['codigo']=0;
				$resultado["mensaje"]="Contrasena incorrecta";
				$cont++;
			}
		}

        if ($cont==0) {
        	$actualizarcontrasena=$conexion->ejecutarInstruccion("UPDATE TBL_USUARIOS
                                                                  SET
                                                                  CONTRASENA='$nuevacontrasena'
                                                                  WHERE CODIGO_USUARIO=".$_SESSION['codigo_usuario']."");

        	$resultado["codigo"]=1;
            $resultado["mensaje"]="Actualizacion exitosa";
        }

	break;
	default:
	
	break;

}
echo json_encode($resultado);

?>

