<!DOCTYPE html>
<html lang="en">
<head>
<?php
session_start();
if (empty($_SESSION['nombre']) && empty($_SESSION['email'])) {
    header('location:index.php');
    exit();
}

if (isset($_POST['logout'])) {
    // Vaciar todas las variables de sesión
    $_SESSION = [];

    // Destruir la sesión
    session_destroy();

    // Redirigir al usuario a la página de inicio
    header('Location: index.php');
    exit();
}
?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INICIO</title>
</head>
<body>
    <h1>BIENVENIDO  <?php echo  $_SESSION['nombre'] ?> </h1>
    <hr>
    <form method="POST" action="">
    <button type="submit" name="logout">Salir</button>
</form>
    
    <?php 
    if($_SESSION['rolid']==1){
        include('usuarios.php');
    }else{
        include('noticias.php');
    }
   
   ?>
</body>
</html>