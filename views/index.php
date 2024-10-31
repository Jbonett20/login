<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<!-- @emil hernandez -->
    <form action="../controllers/login.php" method="post">
      <h2>Inicia sesion</h2><br>
      <label for="mail">Usuario</label>
      <input type="email" name="mail" id="mail" placeholder="ESCRIBE  TU CORREO"><br>
      <label for="password">Contraseña</label>
      <input type="password" name="password" id="password" placeholder="CONTRASEÑA"><br>
      <button type="submit">Ingresar</button>
    </form>
    <p> Estas registrado?</p>
    <button><a href="registrarse.php">Registrarse</a></button>
    </body>
</html>