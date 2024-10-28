<?php
class guardar{
    public static function save($nombre,$email,$password){
        include('../config/db.php');
        $consulta="INSERT INTO user(name, mail, password) VALUES ('$nombre','$email','$password')";
        $result = mysqli_query($conn, $consulta);
       if($result){
           header('Location: ../views/index.php');
       }else{
           echo 'ERROR AL RESGISTRARSE';
        }
          
    }
}