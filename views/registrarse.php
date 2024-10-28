<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
</head>
<body>

      <!-- esto es para el registro -->
    <form action="../controllers/guardar.php" method="post">
      <h2>Registrarse</h2><br>
      <label for="name">Nombre</label>
      <input type="text" name="name" id="name" placeholder="ESCRIBE  TU NOMBRE"><br>
      <label for="mail">Usuario</label>
      <input type="email" name="mail" id="mail" placeholder="ESCRIBE  TU CORREO"><br>
      <label for="password">Contraseña</label>
      <input type="password" name="password" id="password" placeholder="CONTRASEÑA"><br>
      <button type="submit">Guardar</button>
    </form>
    
    <button><a href="index.php">Atras</a></button>
    </body>
</html>