<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Web PHP-MySQL con Docker</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
            <div class="jumbotron">
                <h1 class="display-4">Docker app. <span class="badge bg-secondary">Alumnos</span></h1>
                <p class="lead">Ejemplo de aplicacion PHP y MySQL con contenedores</p>
                <hr class="my-4">
                <p>Usa un contenedor para Apache/PHP, otro para phpmyadmin y otro para MySQL con almacenamiento de aplicación y de datos en volúmenes externos</p>
                <?php include 'menu.php';?>
            </div>
            <table class="table table-striped table-responsive">
                <thead>
                    <tr>
                        <th></th>
                        <th>IdAlumno</th>
                        <th>Apellidos</th>
                        <th>Nombre</th>
                        <th>Sexo</th>
                        <th>Foto</th>
                        <th>DireccionA</th>
                        <th>LocalidadA</th>
                        <th>ProvinciaA</th>
                        <th>CodPostalAint,</th>
                        <th>TelefonoAint,</th>
                        <th>TutorContacto</th>
                        <th>FechaNacimientoA</th>
                        <th>CorreoA</th>
                        <th>PcorreoA</th>
                        <th>WebA</th>
                        <th>PWebA</th>
                        <th>TelefonoA2int,</th>
                        <th>CorreoEmpresarial</th>
                    </tr>
                </thead>
                <tbody>                
                    <?php
                        $conexion = new mysqli($BBDDServidor, $BBDDUsuario, $BBDDPassword, $BBDD);

                        $cadenaSQL = 'SELECT * From Alumnos';
                        $resultado = mysqli_query($conexion, $cadenaSQL);
                        while($fila = $resultado->fetch_array(MYSQLI_ASSOC)){
                            echo '<tr>';
                                echo '<td></span><a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                    </svg>
                                </a></td>';
                                foreach($fila as $elemento){
                                    echo '<td>' . $elemento . '</td>';
                                }
                            echo '</tr>';
                        }
                        $resultado->close();
                        mysqli_close($conexion);
                    ?>
                </tbody>    
            </table>';
        </div>
    </body>
</html>