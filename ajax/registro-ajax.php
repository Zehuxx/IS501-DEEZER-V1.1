<?php
//$_GET['accion']='1';

switch ($_GET['accion']){
	case '1':
		$nombreu=$_POST['nombreu'];
		$correo=$_POST['correo'];
		$edad=$_POST['edad'];
		$sexo=$_POST['sexo'];
		$contrasena=$_POST['contrasena'];
		$resultado=array();
        $resultado['codigo']=1;
        $resultado["mensaje"]='Nombre Usuario= '.$nombreu.' '.'Contraseña= '.$contrasena.' '.'Correo= '.$correo.' '.'Edad= '.$edad.' '.'Sexo='.$sexo;
        echo json_encode($resultado);
		break;
	
	default:
		# code...
		break;
}


?>