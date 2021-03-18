<?php

function Conectar(){

$server = "localhost";
$user = "root";
$password = "Felipe12";
$bd = "travel";
$conn =  new mysqli($server, $user, $password, $bd);

if($conn->connect_error){
	("Não foi possível conectar".$conn->connect_error);
}else

return $conn;
}

?>
