<?php
class eliminar {
    public static function delete($id) {
        include('../config/db.php');

       
        $consulUsuario = "SELECT * FROM user WHERE id = $id";
        $exist = mysqli_query($conn, $consulUsuario);

        if (mysqli_num_rows($exist) == 0) {
            echo 'No existe un usuario con ese ID';
        } else {
          
            $delete = "DELETE FROM user WHERE id = $id";
            $result = mysqli_query($conn, $delete);

            if ($result) {
                header('Location: ../views/inicio.php');
            } else {
                echo "Error al eliminar los datos: " . mysqli_error($conn);
            }
        }
    }
}