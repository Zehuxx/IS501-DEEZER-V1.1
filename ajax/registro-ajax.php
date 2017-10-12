<?php
//$_GET['accion']='2';
$resultado=array();
switch ($_GET['accion']){
	
	case '1':
		$nombreu=$_POST['nombreu'];
		$correo=$_POST['correo'];
		$edad=$_POST['edad'];
		$sexo=$_POST['sexo'];
		$contrasena=$_POST['contrasena'];
        $resultado['codigo']=1;
        $resultado["mensaje"]='Nombre Usuario= '.$nombreu.' '.'Contraseña= '.$contrasena.' '.'Correo= '.$correo.' '.'Edad= '.$edad.' '.'Sexo='.$sexo;
        
		break;
	case '2':
	    $nombreu=$_POST['nombreu'];
	    $contrasena=$_POST['contrasena'];
	    $resultado['codigo']=1;
        $resultado["mensaje"]='Nombre Usuario= '.$nombreu.' '.'Contraseña= '.$contrasena;
        
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
        
	break;
	default:
	
	break;

}
echo json_encode($resultado);

?>