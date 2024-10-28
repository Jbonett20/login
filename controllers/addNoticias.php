<?php 
if(isset($_POST) &&  !empty($_POST)){

 if(!empty($_POST['noticia']) && !empty($_POST['contenido'])){
 $noticia  = trim($_POST['noticia']);
 $contenido  = trim($_POST['contenido']);
 include('../models/addNoticias.php');
 $response = noticias::save($noticia,$contenido);
}else{
    echo "Informacion incompleta";
 }
}else{
    include('../models/addNoticias.php');
    $noticias = noticias::listarNoticias();  
}