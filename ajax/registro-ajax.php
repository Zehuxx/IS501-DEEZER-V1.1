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

	default:
	
	break;

}
echo json_encode($resultado);

?>