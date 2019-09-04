<?php
    session_start();
    include_once 'dbconnect.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Inicio | Panel de Control</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
 
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
 
</head>
<body>
 
<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php" style="font-family: 'Lobster', cursive;">Panamericano</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar1">
            <ul class="nav navbar-nav navbar-right">
                <?php if (isset($_SESSION['usr_id'])) { ?>
                <li><p class="navbar-text">Logeado como <i class="btn btn-danger btn-xs" ><b><?php echo $_SESSION['usr_name']; ?></b></i></p></li>
                <li><a href="logout.php">Log Out</a></li>
                <?php } else { ?>
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Registro</a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>
 
<div class="container">
 
      <!--Componente principal de un mensaje de primario o llamado a la acción -->
      <div class="jumbotron">
        <h1>Bienvenido</h1>
        <p>
        Los Juegos Panamericanos son el mayor evento deportivo internacional multidisciplinario
         en el que participan atletas de América. La competencia se celebra entre deportistas 
        de los países del continente americano, cada cuatro años en el año anterior a los Juegos Olímpicos de Verano.
        </p>
        <p>Mira los deportes --> CLICK ABAJO</p>
        <p>
          <a class="btn btn-lg btn-primary" href="deportes.php" role="button">Deporte</a>
        </p>
      </div>
 
    </div>
 
<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>