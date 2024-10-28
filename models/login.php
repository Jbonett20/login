<?php

class login{
    public static function user($email,$password){
        include('../config/db.php');
        $consulta="SELECT * FROM user WHERE mail ='$email' AND  password ='$password'";
        $result = mysqli_query($conn, $consulta);
       if(mysqli_num_rows($result)>0){
          session_start();
          if($fila=mysqli_fetch_assoc($result)){
             $_SESSION['idUsuario']=$fila['id'];
             $_SESSION['nombre']=$fila['name'];
             $_SESSION['email']=$fila['mail']; 
             $_SESSION['rolid']=$fila['rolid']; 
             
       }
       header('Location: ../views/inicio.php');
       }else{
          echo 'usuario no encontrado o las credenciales son incorrectas';
       }
    }
}