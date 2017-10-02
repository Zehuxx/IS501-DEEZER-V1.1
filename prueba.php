<!DOCTYPE html>
<html>
<head>
	<title>prueba</title>

</head>
<body> 


<?php
  include ("class/class-conexion.php");

  $conexion = new Conexion();
  $conexion->establecerConexion();
  $consulta=$conexion->ejecutarInstruccion("select * from hr.employees");
  echo '<table border="1">
          <tr>
          <td>EMPLOYEE_ID</td>
          <td>FIRST_NAME</td>
          <td>LAST_NAME</td>
          <td>EMAIL</td>
          <td>PHONE_NUMBER</td>
          <td>HIRE_DATE</td>
          <td>JOB_ID</td>
          <td>SALARY</td>
          <td>COMMISSION_PCT</td>
          <td>MANAGER_ID</td>
          <td>DEPARTAMENT_ID</td>
          </tr>';
while ($row = $conexion->obtenerRegistro($consulta)) {
echo '<tr>
      <td>'.$row["EMPLOYEE_ID"].'</td>'.
      '<td>'.$row["FIRST_NAME"].'</td>'.
      '<td>'.$row["LAST_NAME"].'</td>'.
      '<td>'.$row["EMAIL"].'</td>'.
      '<td>'.$row["PHONE_NUMBER"].'</td>'.
      '<td>'.$row["HIRE_DATE"].'</td>'.
      '<td>'.$row["JOB_ID"].'</td>'.
      '<td>'.$row["SALARY"].'</td>'.
      '<td>'.$row["COMMISSION_PCT"].'</td>'.
      '<td>'.$row["MANAGER_ID"].'</td>'.
      '<td>'.$row["DEPARTMENT_ID"].'</td>'.
      '</tr>';
}
echo '</table>';

  /*
# Inicializar la conexión a Oracle
$conn = oci_connect('SYSTEM', 'hola', 'localhost/xe');
if (!$conn) {
     echo " hay un error";
}
else{
# Preparar la Query
$query = "select * from hr.employees";

//SELECT CODIGO_USUARIO ,CODIGO_CLAVE_POSTAL,CODIGO_LUGAR,CODIGO_RED,NOMBRE_USUARIO,CONTRASENA,FECHA_INSCRIPCION,EDAD,CORREO FROM TBL_Usuarios
 
# Conectar realmente y lanzar la consulta...
$stid = oci_parse($conn, $query);
oci_execute($stid, OCI_DEFAULT);

# Lanzar la consulta
while ($row = oci_fetch_array($stid, OCI_ASSOC)) {
 
# Recuperar las filas de la consulta
foreach ($row as $item) {
  echo $item." ";
}
echo "<br>\n";
}

# Cerrar la conexión con Oracle
}
oci_free_statement($stid);
oci_close($conn);
*/

?>﻿


</body>
</html>