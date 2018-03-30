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

    <form action="app/list.php" method="GET">

    <div class="form-group">
        <label for="idcedula">Cedula :</label>
        <input type="number" name="vcedula" class="form-control" id="idcedula" aria-describedby="emailHelp" placeholder="Numero de cedula">
    </div>
    <button type="submit" class="btn btn-secondary">Buscar</button>
    </form>

</div>    
</body>

</html>