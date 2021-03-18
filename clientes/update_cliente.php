
<!DOCTYPE html>
<html>
<head>
	<title>Actualizar cliente</title>
			     <!--Import Google Icon Font-->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<div class="container" align="center">
<div class="row">
<?php
include_once "../bd/bd.php";
$conn = Conectar();
session_start();
if($_SESSION["s_usuario"] === null){
    header("Location: ../index.php");
}

if ($_SERVER['REQUEST_METHOD']==='POST' AND isset($_POST["update"])){
	$id = isset($_POST["codcliente"]) ? filter_input(INPUT_POST, 'codcliente', FILTER_SANITIZE_SPECIAL_CHARS) : "";
	$cif = isset($_POST["cif"]) ? filter_input(INPUT_POST, 'cif', FILTER_SANITIZE_SPECIAL_CHARS) : "";
	$nombre = isset($_POST["nombre"]) ? filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_SPECIAL_CHARS) : "";
	$direccion = isset($_POST["direccion"]) ? filter_input(INPUT_POST, 'direccion', FILTER_SANITIZE_SPECIAL_CHARS) : "";
	$cp = isset($_POST["cp"]) ? filter_input(INPUT_POST, 'cp', FILTER_SANITIZE_SPECIAL_CHARS) : "";
	$poblacion = isset($_POST["poblacion"]) ? filter_input(INPUT_POST, 'poblacion', FILTER_SANITIZE_SPECIAL_CHARS) : "";
	$provincia = isset($_POST["provincia"]) ? filter_input(INPUT_POST, 'provincia', FILTER_SANITIZE_SPECIAL_CHARS) : "";
	$pais = isset($_POST["pais"]) ? filter_input(INPUT_POST, 'pais', FILTER_SANITIZE_SPECIAL_CHARS) : "";
	$email = isset($_POST["email"]) ? filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS) : "";
	$telefono = isset($_POST["telefono"]) ? filter_input(INPUT_POST, 'telefono', FILTER_SANITIZE_SPECIAL_CHARS) : "";	
	$sql = "UPDATE clientes SET cif='$cif', nombre='$nombre',  direccion='$direccion', cp='$cp', poblacion='$poblacion', provincia='$provincia', pais='$pais', email='$email', telefono='$telefono' WHERE codcliente='$id'";
	$resultado = $conn->query($sql);

	header("Location: edit_cliente.php?codcliente=$id");

}else{
	//header("Location: clientes.php?Error");
	echo $conn->error;
}

?>
</div>
<div class="row">
<a href="clientes.php" class="waves-effect waves-light btn"><i class="material-icons left">fast_rewind</i>Volver</a>
</dir>
</div>
</script>
<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="../js/materialize.min.js"></script>
</body>
</html>