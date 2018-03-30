<?php

$host = "localhost";
$port = "5431";
$dbname = "postgres";
$user = "postgres";
$password = "12345";
//$pg_options = "--client_encoding=UTF8";

$connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password}";
$dbconn = pg_connect($connection_string);


if($dbconn){
    echo "Connected to ". pg_host($dbconn); 
}else{
    echo "Error in connecting to database.";
}

echo "<br />";

?>