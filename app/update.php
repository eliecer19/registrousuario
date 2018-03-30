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

$sql = "update usuario3 set sexo ='$sexo', nombre ='$nombre', apellido ='$apellido',edad ='$edad',email ='$email',dto ='$departamento',pais ='$pais' ,ciudad ='$ciudad',direccion ='$direccion' where cedula = '$cedula'";

$result = pg_query($dbconn, $sql);
if(!$result){
  echo pg_last_error($dbconn);
} else {
  echo "Updated successfully.";
}

// Close the connection
pg_close($dbconn);

?>