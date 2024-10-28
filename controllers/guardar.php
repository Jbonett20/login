<?php 
if(isset($_POST)){
 if(!empty($_POST['mail']) && !empty($_POST['name']) && !empty($_POST['password'])){
 $nombre  = trim($_POST['name']);
 $email  = trim($_POST['mail']);
 $password = trim($_POST['password']);
 include('../models/guardar.php');
 $response = guardar::save($nombre,$email,$password);
}else{
    echo "Completa todos los campos";
 }
}