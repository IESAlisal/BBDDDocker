<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Web PHP-MySQL con Docker</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
  <div class = "container">
    <div class="jumbotron">
      <h1 class="display-4">Docker app.  <span class="badge bg-secondary">Clientes</span></h1>
      <p class="lead">Ejemplo de aplicacion PHP y MySQL con contenedores</p>
      <hr class="my-4">
      <p>Usa un contenedor para Apache/PHP, otro para phpmyadmin y otro para MySQL con almacenamiento de aplicación y de datos en volúmenes externos</p>
      <ul class="nav nav-tabs">
                    <li class="nav-item"><a class="nav-link" href="index.php">Personas</a></li>
                    <li class="nav-item"><a class="nav-link" href="alumnos.php">Alumnos</a></li>
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="clientes.php">Clientes</a></li>
                    <li class="nav-item"><a class="nav-link" href="http://localhost:8000" target="_blanck">phpmyadmin</a></li>
                </ul>      
    </div>
    <table class="table table-striped table-responsive">
      <thead>
        <tr>
          <th>Name</th>
          <th>Credit Rating</th>
          <th>Address</th>
          <th>City</th>
          <th>State</th>
          <th>Country</th>
          <th>Zip</th>
        </tr>
      </thead>
      <tbody>
        <?php
            $conexion = new mysqli('db', 'usuario', 'test', 'Instituto');
            $cadenaSQL = "SELECT * From Clientes";
            $resultado = $conexion->query($cadenaSQL);

            while ($fila = $resultado->fetch_object()) {
                echo  " <tr><td> " .$fila->name . 
                      "</td><td>" . $fila->credit_rating .
                      "</td><td>" . $fila->address .
                      "</td><td>" . $fila->city .
                      "</td><td>" . $fila->state .
                      "</td><td>" . $fila->country .
                      "</td><td>" . $fila->zip_code .
                      "</td></tr>";
            }
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>
