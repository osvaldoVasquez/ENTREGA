<?php 
$servidor="localhost"; 
$usuario="root"; 
$password=""; 
$database="actas";
$conexiones = mysqli_connect($servidor, $usuario, $password, $database); 
if(!$conexiones){
  die("Connection failed: " . mysqli_connect_error());
}

echo " ";

?> 