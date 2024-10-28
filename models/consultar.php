<?php

class consultar{
public static function  consultar($id){
include('../config/db.php');
$query = "SELECT * FROM user WHERE id = $id";
$result = mysqli_query($conn,$query);
$data = [];
if($obj = mysqli_fetch_assoc($result)){
 $data['id'] = $obj['id'];
 $data['nombre'] = $obj['name'];
 $data['email'] = $obj['mail'];

}
return  $data;

}
}