<?php

require_once '../db/db-connect.php';


$sql = "CREATE TABLE usuario3
      (cedula  SERIAL PRIMARY KEY,
      nombre   TEXT    NOT NULL,
      apellido TEXT     NOT NULL,
      edad     TEXT     NOT NULL,
      sexo     TEXT     NOT NULL,
      email    TEXT     NOT NULL,
      pais     TEXT     NOT NULL,
      dto     TEXT     NOT NULL,
      ciudad     TEXT     NOT NULL,
      direccion     TEXT     NOT NULL
      )";

$result = pg_query($dbconn, $sql);
if(!$result){
  echo pg_last_error($dbconn);
} else {
  echo "Table created successfully";
}

// Close the connection
pg_close($dbconn);

?>