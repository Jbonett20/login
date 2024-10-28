<?php
class actualizar{
    public static function update($correo,$id,$nombre){
        include('../config/db.php');
      $consulCorreo = "SELECT name FROM user where mail LIKE '$correo' AND id != $id";
      $exist=mysqli_query($conn,$consulCorreo);
       if (mysqli_num_rows($exist) > 0) {
        echo 'Ya existe un usuario con ese correo';
    } else {
       
        $update = "UPDATE user SET name='$nombre', mail='$correo' WHERE id=$id";
        $result = mysqli_query($conn, $update);

        if ($result) {
            header('Location: ../views/inicio.php');
        } else {
            echo "Error al actualizar los datos: " . mysqli_error($conn);
        }
    }
    }
}