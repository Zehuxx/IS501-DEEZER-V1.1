<?php
session_start();
//$_GET['accion']='2';
//$_SESSION['codigo_usuario']=1; 
 //if(!isset($_SESSION['codigo_usuario']))
 //header('Location:http://localhost/IS501-DEEZER-V1.1/conectarse.php');
include ("../class/class-conexion.php");
$conexion = new Conexion();
//$conexion->establecerConexion();
//$resultado=array(); 
switch ($_GET['accion']){ 
	case '1':

	    $codigoplaylist=$_POST['codigoplaylist'];
        //$playlist=$conexion->ejecutarInstruccion("");
        $arr[]=array("title"=>"God2....","artist"=>"God....","mp3"=>"http://localhost/pruebass/musica/god.mp3","poster"=>"http://www.jplayer.org/video/poster/Big_Buck_Bunny_Trailer_480x270.png");
        $arr[]=array("title"=>"Good Good","artist"=>"buenooo","mp3"=>"http://localhost/pruebass/musica/goo.mp3","poster"=>"http://www.jplayer.org/video/poster/Finding_Nemo_Teaser_640x352.png");
        $arr[]=array("title"=>"Fast and Forius","artist"=>"Vin","mp3"=>"http://localhost/pruebass/musica/fast.mp3","poster"=>"http://www.jplayer.org/video/poster/Incredibles_Teaser_640x272.png");
	break;
	case '2':
     
	break;
	default:
	
	break;

}
echo json_encode($arr);

?>