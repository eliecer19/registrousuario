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

<h1>Actualizar Usuario</h1>

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

<form action="app/update.php" method="GET">

  <div class="form-group">
    <label for="idcedula">Cedula :</label>
    <input type="number" name="vcedula" class="form-control" id="idcedula" aria-describedby="emailHelp" placeholder="Numero de cedula">
  </div>

  <div class="row">
       <div class="col">
          <div class="form-group">
          <label for="idnombre">Nombre :</label>
          <input type="text" name="vnombre" class="form-control" id="idnombre" aria-describedby="emailHelp" placeholder="Nombre nombre">
        </div>
     </div>
        <div class="col">
           <div class="form-group">
           <label for="idapellido">Apellido :</label>
           <input type="text" name="vapellido" class="form-control" id="idapellido" aria-describedby="emailHelp" placeholder="Apellido"> 
        </div>
       </div>
  </div>

  <div class="row">
       <div class="col">
        <div class="form-group">
         <label for="idedad">Edad :</label>
         <input type="number" name="vedad" class="form-control" id="idedad" aria-describedby="emailHelp" placeholder="Edad"> 
        </div>
       </div>   

       <div class="col">
          <div class="form-group">
            <label for="idsexo">Sexo</label>
            <select class="form-control" id="idsexo" name="vsexo">
               <option>Maculino</option>
               <option>Femenino</option>
            </select>
         </div>
       </div>
  </div>

  
 <div class="form-group">
    <label for="idemail">Email address</label>
    <input type="email" name="vemail" class="form-control" id="idemail" aria-describedby="emailHelp" placeholder="xxxxxx@hotmail.com">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
<div class="row">
 <div class="col">
  <div class="form-group">
    <label for="idpais">Pais</label>
    <select class="form-control" id="idpais" name="vpais">
      <option>Colombia</option>
      <option>España</option>
    </select>
  </div>
 </div>

<div class="col">   
  <div class="form-group">
    <label for="iddepartamento">Departamento</label>
    <select class="form-control" id="iddepartamento" name="vdepartamento">
      <option>Valle del cauca</option>
      <option>Cundinamarca</option>
    </select>
  </div>
</div>
<div class="col">
  <div class="form-group">
    <label for="idciudad">Ciudad</label>
    <select class="form-control" id="idciudad" name="vciudad">
      <option>Cali</option>
      <option>Bogota</option>
    </select>
  </div>
</div>
</div>
  
  <div class="form-group">
    <label for="iddireccion">Direccion :</label>
    <input type="text" name="vdireccion" class="form-control" id="iddireccion" aria-describedby="emailHelp" placeholder="carrera , avenida , calle"> 
  </div>

  <button type="submit" class="btn btn-secondary">Actualizar</button>

</form>

</div>
</body>

</html>