<?php

    
    require_once '../db/db-connect.php';

    $cedula = $_GET['vcedula'];
    $nombre = $_GET['vnombre'];
    $apellido = $_GET['vapellido'];
    $edad = $_GET['vedad'];
    $sexo = $_GET['vsexo'];

    $email = $_GET['vemail'];
    $pais = $_GET['vpais'];
    $departamento = $_GET['vdepartamento'];
    $ciudad = $_GET['vciudad'];
    $direccion = $_GET['vdireccion'];
    
$sql = "insert into usuario3 (cedula, nombre, edad, apellido, sexo, email, pais, dto, ciudad, direccion)  values('$cedula', '$nombre', '$edad', '$apellido', '$sexo', '$email', '$pais', '$departamento', '$ciudad', '$direccion')";

$result = pg_query($dbconn, $sql);

if(!$result){
  echo pg_last_error($dbconn);
} else {
  echo "Updated successfully"."</br>";
  
  return "index.php";
}

// Close the connection
pg_close($dbconn);

?>