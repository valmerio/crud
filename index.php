<!DOCTYPE html>
<html>
<head>
	<title>Bienvenido al sistema de login Flytour Viajes</title>
	     <!--Import Google Icon Font-->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<div class="container" align="center">
	<h3 class="light">Bienvenido a TravelSIS</h3>
	<div class="row">
		<div class="col s12 m6 push-m3">
			<form action="login.php" method="post">
				<div class="card">
					<div class="card-content">
					<input type="text" name="user" placeholder="Usuario" required=>
					<input type="password" name="password" placeholder="Password" required>
					<button type="submit" name="btlogin" class="btn waves-effect waves-light">Iniciar Sesión<i class="material-icons right">vpn_key</i></button>
					</div>					
				</div>
			</form>
		<h5 class="light">Kopfem Software - Copyright &copy; <?php echo date ('Y'); ?> </h5>

		</div>
	</div>
</div>
</script>
<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>
