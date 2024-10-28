<?php
session_start();
if (empty($_SESSION['nombre']) && empty($_SESSION['email'])) {
    header('location:index.php');
    exit();
} ?>
<div>
<form action="../controllers/addNoticias.php" method="post">
      <h2>Crear noticias</h2><br>
      <label for="noticia">Noticia</label>
      <input type="text" name="noticia" id="noticia" placeholder="NOMBRE DE LA NOTICIA"><br>
      <label for="contenido">contenido</label><br>
      <textarea name="contenido" id="contenido" placeholder="contenido..."></textarea>
      <button type="submit">Agregar</button>
    </form>
</div>