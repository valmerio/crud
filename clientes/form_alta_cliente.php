<!DOCTYPE html>
<html>
<head>
	<title>Nuevo Cliente</title>
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
$sql = "SELECT * FROM provincias";
$resultado = $conn->query($sql);
echo $conn->error;
?>
<div class="container" align="center" style="height: 100px;">
  <h3 class="light">Alta Cliente</h3>
  <div class="row">
    <div class="col-16 col-md-6">
			<form action="create_cliente.php" method="post">
				<div class="card">
					<div class="card-content">
						<div class="row">
						<div class="input-field col s4">
          					<input id="cif" type="text" name="cif" class="validate" required>
          					<label for="cif">CIF</label>
        					</div>
						<div class="input-field col s8">
         					<input id="nombre" type="text" name="nombre" class="validate" required>
          					<label for="nombre">Nombre</label>
        				</div>
						<div class="input-field col s12">
          					<input id="direccion" type="text" name="direccion" class="validate">
          					<label for="direccion">Dirección</label>
          				</div>
          				</div>
						<div class="row">
							<div class="input-field col s2">
          					<input id="cp" type="text" name="cp" class="validate">
          					<label for="cp">CP</label>
        					</div>
        					<div class="input-field col s4">
          					<input id="poblacion" type="text" name="poblacion" class="validate" >
          					<label for="poblacion">Población</label>
        					  </div>
        					  <div class="input-field col s3">
                    <select name="provincia" class="browser-default">
                    <option value="" selected>Provincia</option>
                    <?php foreach($resultado as $provincia): 
                    echo '<option value="'.$provincia['provincia'].'">'.$provincia['provincia'].'</option>';
                    endforeach;
                    ?>
                    <label>Provincia</label>
                    </select>
                    </div>
          					<div class="input-field col s3">
          					<input id="pais" type="text" name="pais" class="validate">
          					<label for="pais">Pais</label>
          				  </div>
        				    <div class="row">
        					   <div class="input-field col s6">
          					<i class="material-icons prefix">mail</i>
          					<input id="email" type="text" name="email" class="validate">
          					<label for="email">Email</label>
        					</div>
        					<div class="input-field col s6">
          					<i class="material-icons prefix">phone</i>
          					<input id="telefono" type="tel" name="telefono" class="validate">
          					<label for="telefono">Teléfono</label>
        					</div>      					   					
							<button type="submit" name="create" class="btn waves-effect waves-light">Guardar<i class="material-icons right">add</i></button>
							<a href="clientes.php" class="waves-effect waves-light btn"><i class="material-icons left">exit_to_app</i>Cancelar</a>
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