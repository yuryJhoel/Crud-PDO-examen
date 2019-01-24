<?php
require_once('database.php');
$res = $database->read();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Simple CRUD Application in PHP & MySQL - Read</title>
		<!-- Latest compiled and minified CSS -->
    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="assets/sticky-footer-navbar.css" rel="stylesheet">
    <script src="dist/js/bootstrap.min.js"></script> 
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

</head>
<body>
<div class="container">
		<a href="index.php" class="text-light p-2"><button class="btn btn-primary">Agregar datos</button></a>
	<div class="row pt-2 table-responsive">
		<table class="table">
			<thead class="thead-dark">
				<th>#</th>
				<th>Nombre completo</th>
				<th>E-Mail</th>
				<th>Genero</th>
				<th>Edad</th>
				<th>Profesión</th>
				<th>Dirección</th>
				<th>Extras</th>
			</thead>
			<?php 
			while($r = mysqli_fetch_assoc($res)){
			?>
			<tr>
				<td><?php echo $r['id']; ?></td>
				<td><?php echo $r['nombre'] . " " . $r['apellido']; ?></td>
				<td><?php echo $r['email']; ?></td>
				<td><?php echo $r['genero']; ?></td>
				<td><?php echo $r['edad']; ?></td>
				<td><?php echo $r['profesion']; ?></td>
				<td><?php echo $r['direccion']; ?></td>
				<td><a href="update.php?id=<?php echo $r['id']; ?>"><i title="editar" class="fas fa-edit text-success mr-2"></i></a> <a href="delete.php?id=<?php echo $r['id']; ?>"><i title="eliminar" class="fas fa-trash text-danger ml-2"></i></a></td>
			</tr>
			<?php } ?>
		</table>
	</div>
</div>
</body>
</html>