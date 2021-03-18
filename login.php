<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
			     <!--Import Google Icon Font-->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<div class="container" align="center">
<div class="row">
<?php
include_once "bd/bd.php";
$conn = Conectar();
session_start();
if (isset($_POST["btlogin"])){
$user = isset($_POST["user"])? $_POST["user"] : "";
$password = isset($_POST["password"]) ? $_POST["password"] : "";
$sql = "SELECT * FROM login WHERE user='$user' AND password='$password' ";
$resultado = $conn->query($sql);
echo $conn->error;
if ($resultado->num_rows == 0){
	echo "Usuário o password incorrectos!";
}else{
	$_SESSION["s_usuario"] = $user;
	header("Location: clientes/clientes.php");
}
}else{
	echo "Acesso restricto a usuário con login";
}

/*var_dump($_POST);
echo "<br>";
echo $user;
echo "<br>";
echo $password;
*/
?>
</div>
<div class="row">
<a href="index.php" class="waves-effect waves-light btn"><i class="material-icons left">fast_rewind</i>Volver</a>
</dir>
</div>
</script>
<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>
