<?php
session_start();
if (empty($_SESSION['nombre']) && empty($_SESSION['email'])) {
    header('location:index.php');
    exit();
}
include('../controllers/addNoticias.php')
 ?>
<div>
  <a href="addNoticias.php">Agregar noticia</a>
<?php 
if(isset($noticias)  && !empty($noticias)){

foreach ($noticias as $key => $noti) { 
/*   print_r($noti['noticia']); */

  ?>
  <article>
    <p><strong><?php echo $noti['noticia']; ?></strong></p>
    <p><?php echo $noti['contenido']; ?></p>
    <cite><strong>Fecha creacion : </strong><?php echo $noti['fecha']; ?></cite>
    <cite><strong>Autor : </strong><?php echo $noti['usuario']; ?></cite>
  </article>
  <hr>
<?php }} ?>


</div>