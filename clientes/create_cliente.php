<?php
include_once "../bd/bd.php";
$conn = Conectar();
session_start();
if($_SESSION["s_usuario"] === null){
    header("Location: ../index.php");
}

if ($_SERVER['REQUEST_METHOD']==='POST' AND isset($_POST["create"])){
	$cif = isset($_POST["cif"]) ? filter_input(INPUT_POST, 'cif', FILTER_SANITIZE_SPECIAL_CHARS) : "";
	$nombre = isset($_POST["nombre"]) ? filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_SPECIAL_CHARS) : "";
	$direccion = isset($_POST["direccion"]) ? filter_input(INPUT_POST, 'direccion', FILTER_SANITIZE_SPECIAL_CHARS) : "";
	$cp = isset($_POST["cp"]) ? filter_input(INPUT_POST, 'cp', FILTER_SANITIZE_SPECIAL_CHARS) : "";
	$poblacion = isset($_POST["poblacion"]) ? filter_input(INPUT_POST, 'poblacion', FILTER_SANITIZE_SPECIAL_CHARS) : "";
	$provincia = isset($_POST["provincia"]) ? filter_input(INPUT_POST, 'provincia', FILTER_SANITIZE_SPECIAL_CHARS) : "";
	$pais = isset($_POST["pais"]) ? filter_input(INPUT_POST, 'pais', FILTER_SANITIZE_SPECIAL_CHARS) : "";
	$email = isset($_POST["email"]) ? filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS) : "";
	$telefono = isset($_POST["telefono"]) ? filter_input(INPUT_POST, 'telefono', FILTER_SANITIZE_SPECIAL_CHARS) : "";	
	$sql = "INSERT INTO clientes (cif, nombre, direccion, cp, poblacion, provincia, email, telefono, pais) VALUES ('$cif', '$nombre', '$direccion', '$cp', '$poblacion', '$provincia', '$email', '$telefono', '$pais')";
	$resultado = $conn->query($sql);
	header("Location: clientes.php?Creado_Con_Suceso");

}else{
	header("Location: clientes.php?Error");
}

//var_dump($_POST);

//echo $password;

?>