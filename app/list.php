<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen"> 
    <script src="main.js"></script>
</head>

<body>
<?php
  
  require_once '../db/db-connect.php';

  $cedula = $_GET['vcedula'];

  $result = pg_query($dbconn, "SELECT * FROM usuario3 where cedula='$cedula' ");
  if (!$result) {
      echo "An error occurred.\n";
      exit;
  }

  if ($result ==null) {
    echo "An error occurred.\n";
    exit;
 }
  $row = pg_fetch_row($result);

  echo "<h1>Consulta</h1>";
  print_r("<label  >Cedula:  </label>".'<label>'.$row[0].'</label>'."<br>");
  print_r("<label >Nombre:  </label>".'<label>'.$row[1].'</label>'."<br>");
  print_r("<label >Apellido:  </label>".'<label>'.$row[2].'</label>'."<br>");
  print_r("<label >Edad:  </label>".'<label>'.$row[3].'</label>'."<br>");
  print_r("<label >Sexo:  </label>".'<label>'.$row[4].'</label>'."<br>");

  print_r("<label >Email:  </label>".'<label>'.$row[5].'</label>'."<br>");
  print_r("<label >Pais:  </label>".'<label>'.$row[6].'</label>'."<br>");
  print_r("<label >Departamento:  </label>".'<label>'.$row[7].'</label>'."<br>");
  print_r("<label >Ciudad:  </label>".'<label>'.$row[8].'</label>'."<br>");
  print_r("<label >Direccion:  </label>".'<label>'.$row[9].'</label>'."<br>");
  
?>


</body>

</html>