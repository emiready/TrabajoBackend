<?php
$usuario = $_POST ["user"];
$contrasenia = $_POST ["password"];

$checkuser ="admin";
$checkpass ="1234";

if ($usuario == $checkuser && $contrasenia == $checkpass) {
   header ("location: listar.php") ;
 
}   
 else { 
      header ("location:error.html");
 }


?>