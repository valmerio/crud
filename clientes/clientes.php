<!DOCTYPE html>
<html>
<head>
	<title>Clientes</title>
		     <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<div class="container">
<?php
include_once "../bd/bd.php";
$conn = Conectar();
session_start();
if($_SESSION["s_usuario"] === null){
    header("Location: ../index.php");
}
?>
<div class="container" align="right">
<?php
echo "Bienvenido: ".$_SESSION["s_usuario"];
echo "<br>";
$sql = "SELECT * FROM clientes";
$resultado = $conn->query($sql);
if ($resultado->num_rows == 0){
	echo "No hay resultados";
}
?>
<a href="../logout.php" class="waves-effect waves-light btn"><i class="material-icons left">exit_to_app</i>Salir</a>
</div>
<div class="row" style="height: 100px;">
    <div class="col s12">
        <table class="striped">
        <h3 class="light">Clientes</h3>
        <div>
        <a href="form_alta_cliente.php" class="waves-effect waves-light btn"><i class="material-icons left">add</i>Nuevo Cliente</a>
        </div>
            <thead>
              <tr>
              <th>Código</th>
              <th>CIF</th>
              <th>Nombre</th>
              <th>Teléfono</th>
              <th>Email</th>
              <th>Población</th>
              <th>Ver</th>
              <th>Editar</th>
              </tr>
            </thead>
            <tbody>
            <tr>
            <?php foreach($resultado as $cliente): ?>
            <td><?php echo $cliente["codcliente"] ?></td>
            <td><?php echo $cliente["cif"] ?></td>
            <td><?php echo $cliente["nombre"] ?></td>
            <td><?php echo $cliente["telefono"] ?></td>
            <td><?php echo $cliente["email"] ?></td>
            <td><?php echo $cliente["poblacion"] ?></td>
            <td><a href="read_cliente.php?codcliente=<?php echo $cliente["codcliente"] ?>" class="btn-floating orange"><i class="material-icons">visibility</i></a></td>
            <td><a href="edit_cliente.php?codcliente=<?php echo $cliente["codcliente"] ?>" class="btn-floating blue"><i class="material-icons">edit</i></a></td>
            </tr>
			<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>
</script>
<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="../js/materialize.min.js"></script>
</body>
</html>
