<div>
<?php

if (empty($_SESSION['nombre']) && empty($_SESSION['email'])) {
    header('location:index.php');
    exit();
}
include('../controllers/traerUsuarios.php');    ?>
<button><a href="noticias.php">Noticias</a></button><br>
<hr>
    <table>
    <caption> USUARIOS REGISTRADOS 2024 </caption>
    <thead>
        <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>EMAIL</th>
            <th>OPCIONES</th>
         </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $key => $usuario) { ?>
          <tr>
            <td><?php echo $usuario['id'] ?></td>
            <td><?php echo $usuario['name'] ?></td>
            <td><?php echo $usuario['email'] ?></td>
            <td><button><a href="editar.php?id=<?php echo $usuario['id'] ?>">Editar</a></button></td>
            <td><button><a href="../controllers/eliminar.php?id=<?php echo $usuario['id'] ?>">eliminar</a></button>           
            </td>
          </tr>
       <?php } ?>
    </tbody>
    </table>

   <!--  <?php 
    $x=3;
    if($x==2){?> 
        <p>ok</p>
        
        <?php } else{?>
            <button type="button">enviar</button>
         <?php } ?> -->

 </div>