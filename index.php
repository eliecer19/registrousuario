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
<div class="container">
<h1>Consultar Usuario</h1>


<ul class="nav nav-tabs">
  <li class="nav-item">
   <a class="nav-link disabled" href="index.php">Inicio</a >
  </li>
  <li class="nav-item">
   <a class="nav-link disabled" href="insertar.php">Insertar</a >
  </li>
  <li class="nav-item">
   <a class="nav-link disabled" href="editar.php">Editar</a>
  </li>
  <li class="nav-item">
   <a class="nav-link disabled" href="eliminar.php">Eliminar</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="consultar.php">Consultar</a>
  </li>
  <li class="nav-item">
   <a class="nav-link disabled" href="app/creartabla.php">Crear Tabla</a>
  </li>
</ul>

<div class="panel-body">
    <table class="table">
      <thead>
       <tr>
         <th scope="col">Cedula</th>
         <th scope="col">Nombre</th>
         <th scope="col">Apellido</th>
         <th scope="col">Edad</th>
         <th scope="col">Sexo</th>

         <th scope="col">Email</th>
         <th scope="col">Pais</th>
         <th scope="col">Departamento</th>
         <th scope="col">Ciudad</th>
         <th scope="col">Direccion</th>
       </tr>
      </thead>


       
    <?php
    
        require_once 'db/db-connect.php';

        $result = pg_query($dbconn, "SELECT * FROM usuario3");
        if (!$result) {
          echo "An error occurred.\n";
          exit;
       }

        while ($row = pg_fetch_row($result)) {
          print_r("<tr>"."<td scope='col'>".$row[0]."</th>".
                        "<td scope='col'>".$row[1]."</th>".
                        "<td scope='col'>".$row[2]."</th>".
                        "<td scope='col'>".$row[3]."</th>".
                        "<td scope='col'>".$row[4]."</th>".
                        "<td scope='col'>".$row[5]."</th>".
                        "<td scope='col'>".$row[6]."</th>".
                        "<td scope='col'>".$row[7]."</th>".
                        "<td scope='col'>".$row[8]."</th>".
                        "<td scope='col'>".$row[9]."</th>"."</tr>");
        }

    ?> 
     
    </table>
</div>

</div>
</body>

</html>