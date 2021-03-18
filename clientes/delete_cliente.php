
<!DOCTYPE html>
<html>
<head>
	<title>Eliminar clientes</title>
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

if ($_SERVER['REQUEST_METHOD']==='GET' AND isset($_GET["codcliente"])){
	$id = isset($_GET["codcliente"]) ? filter_input(INPUT_GET, 'codcliente', FILTER_SANITIZE_SPECIAL_CHARS) : "";
	$sql = "DELETE FROM clientes WHERE codcliente='$id'";
	$resultado = $conn->query($sql);
	if (mysqli_affected_rows($conn)!=0){
		echo "Cliente nº ".$id." eliminado con suceso";
	}else{
		echo " Cliente no encontrado";
	}
}else{
	echo "Debe informar un Código de Cliente";
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