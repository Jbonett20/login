<?php 

if(isset($_POST)){
 if(!empty($_POST['mail'])  && !empty($_POST['password'])){
 $email  = trim($_POST['mail']);
 $password = trim($_POST['password']);
 include('../models/login.php');
 $response = login::user($email,$password); 
 }else{
    echo "Completa todos los campos";
 }
}