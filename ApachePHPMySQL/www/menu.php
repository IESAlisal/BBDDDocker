<?php include 'vars.php';?>
<ul class="nav nav-tabs">
    <li class="nav-item"><a class="nav-link<?if($pagina=="/index.php"){  echo ' active'; }?>" href="index.php">Personas</a></li>
    <li class="nav-item"><a class="nav-link<?if($pagina=="/alumnos.php"){  echo ' active'; }?>" href="alumnos.php">Alumnos</a></li>
    <li class="nav-item"><a class="nav-link<?if($pagina=="/clientes.php"){   echo ' active'; }?>" href="clientes.php">Clientes</a></li>
    <li class="nav-item"><a class="nav-link<?if($pagina=="/info.php"){   echo ' active'; }?>" href="info.php">Info PHP</a></li>
</ul>
