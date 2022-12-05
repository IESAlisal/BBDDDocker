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
        <div class="container">
            <div class="jumbotron">
                <h1 class="display-4">Docker app. <span class="badge bg-secondary">Personas</span></h1>
                <p class="lead">Ejemplo de aplicacion PHP y MySQL con contenedores</p>
                <hr class="my-4">
                <p>Usa un contenedor para Apache/PHP, otro para phpmyadmin y otro para MySQL con almacenamiento de aplicación y de datos en volúmenes externos</p>
                <?php include 'menu.php';?>
            </div>
            <?php
                $conexion = new mysqli($BBDDServidor, $BBDDUsuario, $BBDDPassword, $BBDD);

                $cadenaSQL = 'SELECT * From Personas';
                $resultado = mysqli_query($conexion, $cadenaSQL);
                echo '<table class="table table-striped table-responsive">';
                echo '<thead><tr><th></th><th>IdPersona</th><th>Nombre</th></tr></thead>';
                while($fila = $resultado->fetch_array(MYSQLI_ASSOC)){
                    echo '<tr>';
                        echo '<td><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-briefcase-fill" viewBox="0 0 16 16">
                            <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v1.384l7.614 2.03a1.5 1.5 0 0 0 .772 0L16 5.884V4.5A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5z"/>
                            <path d="M0 12.5A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5V6.85L8.129 8.947a.5.5 0 0 1-.258 0L0 6.85v5.65z"/>
                            </svg></span></a></td>';
                        foreach($fila as $elemento){
                            echo '<td>' . $elemento . '</td>';
                        }
                    echo '</tr>';
                }
                echo '</table>';
                $resultado->close();
                mysqli_close($conexion);
            ?>
        </div>
    </body>
</html>