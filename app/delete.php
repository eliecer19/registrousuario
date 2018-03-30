<?php

require_once '../db/db-connect.php';

$cedula = $_GET['vcedula'];
$nombre = $_GET['vnombre'];
$sql = "delete from usuario3 where cedula = '$cedula' and nombre = '$nombre' ";

 $result = pg_query($dbconn, $sql);
if(!$result){
  echo pg_last_error($dbconn);

} else {
  echo "Deleted successfully\n";
  return '../index.php';
}


// Close the connection
pg_close($dbconn);

?>