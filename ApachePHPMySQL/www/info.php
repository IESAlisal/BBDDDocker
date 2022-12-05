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
                <h1 class="display-4">Docker app. <span class="badge bg-secondary">PHP Info</span></h1>
                <p class="lead">Ejemplo de aplicacion PHP y MySQL con contenedores</p>
                <hr class="my-4">
                <p>Usa un contenedor para Apache/PHP, otro para phpmyadmin y otro para MySQL con almacenamiento de aplicación y de datos en volúmenes externos</p>
				<?php include 'menu.php';?>
				<?php
					phpinfo();
				?>
			</div>
		</div>
	</body>
</html>
