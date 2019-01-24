<?php
 require_once('database.php');
 if(isset($_POST) & !empty($_POST)){
	 $fname = $database->sanitize($_POST['fname']);
	 $lname = $database->sanitize($_POST['lname']);
	 $email = $database->sanitize($_POST['email']);
	 $gender = $_POST['gender'];
	 $age = $_POST['age'];
 
	 $res = $database->create($fname, $lname, $email, $gender, $age);
	 if($res){
	 	echo "Daros insertados";
	 }else{
	 	echo "Falló al insertar datos";
	 }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title> Molinera Tacna S.A.C. Control del Personal</title>
	<!-- Latest compiled and minified CSS -->
    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="assets/sticky-footer-navbar.css" rel="stylesheet">
    <script src="dist/js/bootstrap.min.js"></script>
		<style>
			
		</style>
</head>
<body>
<header> 
      <!-- menu Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark d-flex justify-content-between"> 
			<a class="navbar-brand" href="#">Control de Personal </a>
			<a class="navbar-brand" href="#">Molinera </a>

  		</nav>
    </header>
    <!-- Fin menu Fixed navbar --> 
<div class="container">
	<div class="row">
		<form method="post" class="form-horizontal col-md-6 col-md-offset-3" action="add.php">
			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Nombre</label>
			    <div class="col-sm-10">
			      <input type="text" name="fname"  class="form-control" id="input1" placeholder="Nombre" required/>
			    </div>
			</div>
 
			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Apellido</label>
			    <div class="col-sm-10">
			      <input type="text" name="lname"  class="form-control" id="input1" placeholder="Apellido" required/>
			    </div>
			</div>
 
			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">E-Mail</label>
			    <div class="col-sm-10">
			      <input type="email" name="email"  class="form-control" id="input1" placeholder="E-Mail" required/>
			    </div>
			</div>
 
			<div class="form-group" class="radio">
			<label for="input1" class="col-sm-2 control-label">Genero</label>
			<div class="col-sm-10">
			  <label>
			    <input type="radio" name="gender" id="optionsRadios1" value="masculino" checked> Masculino
			  </label>
			  	  <label>
			    <input type="radio" name="gender" id="optionsRadios1" value="femenino"> Femenino
			  </label>
			</div>
			</div>
 
			<div class="form-group">
			<label for="input1" class="col-sm-2 control-label">Edad</label>
				<div class="col-sm-10">
					<select name="age" class="form-control">
						<option>Selecciona tu edad</option>
						<option value="20">20</option>
						<option value="21">21</option>
						<option value="22">22</option>
						<option value="23">23</option>
						<option value="24">24</option>
						<option value="25">25</option>
					</select>
				</div>
			</div>
			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Profesión</label>
			    <div class="col-sm-10">
			      <input type="text" name="profession"  class="form-control" id="input1" placeholder="Ej. Ingeniero de sistemas" required/>
			    </div>
			</div>
			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Dirección</label>
			    <div class="col-sm-10">
			      <input type="text" name="address"  class="form-control" id="input1" placeholder="Ej. Av. Miraflores" />
			    </div>
			</div>
			<input type="submit" name="Submit" class="btn btn-primary col-md-2 col-md-offset-10" value="Guardar" />
		</form>
	</div>
</div>
</body>
</html>