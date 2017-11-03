<?php
session_start();
$_GET['accion']='1';
//$_SESSION['codigo_usuario']=2; 
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
	default:
	
	break;

}
echo json_encode($resultado);

?>

