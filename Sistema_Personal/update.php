<?php
 require_once('database.php');
 $id = $_GET['id'];
 $res = $database->read($id);
 $r = mysqli_fetch_assoc($res);
 if(isset($_POST) & !empty($_POST)){
	 $fname = $database->sanitize($_POST['fname']);
	 $lname = $database->sanitize($_POST['lname']);
	 $email = $database->sanitize($_POST['email']);
	 $gender = $database->sanitize($_POST['gender']);
	 $age = $database->sanitize($_POST['age']);
	 $profession = $database->sanitize($_POST['profession']);
	 $address = $database->sanitize($_POST['address']);
	 
	 
	$res = $database->update($fname,$lname,$email,$gender,$age, $id, $profession, $address);
	if($res){
		 echo "Successfully updated data";
		 header("Location:view.php");
	}else{
	 	echo "failed to update data";
	}
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Actualizar</title>
	<!-- Latest compiled and minified CSS -->
    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="assets/sticky-footer-navbar.css" rel="stylesheet">
    <script src="dist/js/bootstrap.min.js"></script> 
		<style>
			* {
				padding:0;
				margin:0;
				border:0;
			}
		</style>
</head>
<body>
	<div id="title" class="bg-dark text-white h3 p-3 text-center">Personal || Molinera Tacna S.A.C. </div>
<div class="container">
	<div class="row">
<form method="post" class="form-horizontal col-md-6 col-md-offset-3">
	<div class="form-group">
	    <label for="input1" class="col-sm-2 control-label">Nombre</label>
	    <div class="col-sm-10">
	      <input type="text" name="fname"  class="form-control" id="input1" value="<?php echo $r['nombre'] ?>" placeholder="First Name" />
	    </div>
	</div>
 
	<div class="form-group">
	    <label for="input1" class="col-sm-2 control-label">Apellido</label>
	    <div class="col-sm-10">
	      <input type="text" name="lname"  class="form-control" id="input1" value="<?php echo $r['apellido'] ?>" placeholder="Last Name" />
	    </div>
	</div>
 
	<div class="form-group">
	    <label for="input1" class="col-sm-2 control-label">E-Mail</label>
	    <div class="col-sm-10">
	      <input type="email" name="email"  class="form-control" id="input1" value="<?php echo $r['email'] ?>" placeholder="E-Mail" />
	    </div>
	</div>
 
	<div class="form-group" class="radio">
		<label for="input1" class="col-sm-2 control-label">Género</label>
		<div class="col-sm-10">
			<label>
				<input type="radio" name="gender" id="optionsRadios1" value="masculino" <?php if($r['genero'] == 'masculino'){ echo "checked";} ?>> Masculino
			</label>
					<label>
				<input type="radio" name="gender" id="optionsRadios1" value="femenino" <?php if($r['genero'] == 'femenino'){ echo "checked";} ?>> Femenino
			</label>
		</div>
	</div>
 
	<div class="form-group">
	<label for="input1" class="col-sm-2 control-label">Edad</label>
	<div class="col-sm-10">
		<select name="age" class="form-control">
			<option>Selecciona tu edad</option>
			<option value="20" <?php if($r['edad'] == '20'){ echo "selected";} ?>>20</option>
			<option value="21" <?php if($r['edad'] == '21'){ echo "selected";} ?>>21</option>
			<option value="22" <?php if($r['edad'] == '22'){ echo "selected";} ?>>22</option>
			<option value="23" <?php if($r['edad'] == '23'){ echo "selected";} ?> >23</option>
			<option value="24" <?php if($r['edad'] == '24'){ echo "selected";} ?>>24</option>
			<option value="25" <?php if($r['edad'] == '25'){ echo "selected";} ?>>25</option>
		</select>
	</div>
	</div>
	<div class="form-group">
	    <label for="input1" class="col-sm-2 control-label">Profesión</label>
	    <div class="col-sm-10">
	      <input type="text" name="profession"  class="form-control" id="input1" value="<?php echo $r['profesion'] ?>" placeholder="Ej. Ingeniero Informatico" />
	    </div>
	</div>
	<div class="form-group">
	    <label for="input1" class="col-sm-2 control-label">Dirección</label>
	    <div class="col-sm-10">
	      <input type="text" name="address"  class="form-control" id="input1" value="<?php echo $r['direccion'] ?>" placeholder="Ej. Av Industrial" />
	    </div>
	</div>
	<input type="submit" name="Update" class="btn btn-primary col-md-2 col-md-offset-10" value="Acualizar" />
</form>
	</div>
</div>
</body>
</html>
<?php
// header("Location:view.php");

?>