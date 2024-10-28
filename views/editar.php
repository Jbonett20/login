<!DOCTYPE html>
<html lang="en">
<head>
    <?php
     session_start();
     if(empty($_SESSION['nombre']) && empty($_SESSION['email'])){
        header('location:index.php');
     }
     include('../controllers/consultarId.php');
     $datos = consultar::consultar($_GET['id']);
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
</head>
<body>
   <form action="../controllers/actualizar.php" method="post">
    <h3>Actualizar datos</h3>
<input type="hidden" name="idUser" id="iduser" value="<?php echo $datos['id'] ?>"></br>
<label for="">NOMBRE</label>
<input type="text" name="name" id="name" value="<?php echo $datos['nombre'] ?>" ><br>
<label for="">EMAIL</label>
<input type="email" name="mail" id="mail" value="<?php echo $datos['email'] ?>"> <br>
<button type="submit">Guardar</button>
</form>

   
</body>
</html>


