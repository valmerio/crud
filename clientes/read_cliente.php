<!DOCTYPE html>
<html>
<head>
	<title>Ficha Cliente</title>
			     <!--Import Google Icon Font-->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<?php
include_once "../bd/bd.php";
$conn = Conectar();
session_start();
if($_SESSION["s_usuario"] === null){
    header("Location: ../index.php");
}
if ($_SERVER['REQUEST_METHOD']==='GET' AND isset($_GET["codcliente"])){
$codcliente = isset($_GET["codcliente"]) ? filter_input(INPUT_GET, 'codcliente', FILTER_SANITIZE_SPECIAL_CHARS) : "";
$sql = "SELECT * FROM clientes WHERE codcliente='$codcliente'";
$resultado = $conn->query($sql);
if ($resultado->num_rows == 0){
  header ("Location: clientes.php");
}else{
$row = mysqli_fetch_array($resultado);
}
}else{
  header ("Location: clientes.php");
}

?>
<div class="container" align="center" style="height: 100px;">
  <h3 class="light">Ficha Cliente</h3>
  <div class="row">
    <div class="col-16 col-md-6">
     
			<form action="create_cliente.php" method="post">
				<div class="card">
					<div class="card-content">
            <div class="row">
                  <div class="input-field col s2">
                  <input disabled id="codcliente" type="text" name="codcliente" class="validate" value="<?php echo $row['codcliente'];?>">
                  <label for="codcliente">Código</label>
                  </div>
						      <div class="input-field col s3">
          				<input disabled id="cif" type="text" name="cif" class="validate" value="<?php echo $row['cif'];?>" required>
          				<label for="cif">CIF</label>
        					</div>
						      <div class="input-field col s7">
         					<input disabled id="nombre" type="text" name="nombre" class="validate" value="<?php echo $row['nombre'];?>" required>
          				<label for="nombre">Nombre</label>
        				  </div>
						<div class="input-field col s12">
          					<input disabled id="direccion" type="text" name="direccion" class="validate" value="<?php echo $row['direccion'];?>">
          					<label for="direccion">Dirección</label>
          				</div>
          				</div>
						<div class="row">
							<div class="input-field col s3">
          					<input disabled id="cp" type="text" name="cp" class="validate" value="<?php echo $row['cp'];?>">
          					<label for="cp">CP</label>
        					</div>
        					<div class="input-field col s3">
          					<input disabled id="poblacion" type="text" name="poblacion" class="validate" value="<?php echo $row['poblacion'];?>">
          					<label for="poblacion">Población</label>
        					</div>
        					<div class="input-field col s3">
          					<input disabled id="provincia" type="text" name="provincia" class="validate" value="<?php echo $row['provincia'];?>">
          					<label for="provincia">Provincia</label>
          					</div>
          					<div class="input-field col s3">
          					<input disabled id="pais" type="text" name="pais" class="validate" value="<?php echo $row['pais'];?>">
          					<label for="pais">Pais</label>
          				</div>
        				<div class="row">
        					<div class="input-field col s6">
          					<i class="material-icons prefix">mail</i>
          					<input disabled id="email" type="text" name="email" class="validate" value="<?php echo $row['email'];?>">
          					<label for="email">Email</label>
        					</div>
        					<div class="input-field col s6">
          					<i class="material-icons prefix">phone</i>
          					<input disabled id="telefono" type="tel" name="telefono" class="validate" value="<?php echo $row['telefono'];?>">
          					<label for="telefono">Teléfono</label>
        					</div>      					   					
							<a href="edit_cliente.php?codcliente=<?php echo $row["codcliente"] ?>" class="waves-effect waves-light btn"><i class="material-icons left">edit</i>Editar</a>
              <a href="delete_cliente.php?codcliente=<?php echo $row["codcliente"] ?>" class="waves-effect waves-light btn"><i class="material-icons left">delete</i>Borrar</a>
							<a href="clientes.php" class="waves-effect waves-light btn"><i class="material-icons left">exit_to_app</i>Salir</a>
						</div>
					</div>					
				</div>
			</form>
		</div>
	</div>
</div>
</script>
<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="../js/materialize.min.js"></script>
</body>
</html>