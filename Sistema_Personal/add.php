<html>
<head>
	<title>Agreagar Dato</title>
	<link rel="stylesheet" href="bootstrap.css">
</head>

<body class="container">
<?php
//including the database connection file
include_once("database.php");


$database = new Database();


if(isset($_POST['Submit'])) {	
	$name = $database->sanitize($_POST['fname']);  //sanitize($var)
	$lastname = $database->sanitize($_POST['lname']);
	$email = $database->sanitize($_POST['email']);
	$gender = $database->sanitize($_POST['gender']);
	$age = $database->sanitize($_POST['age']);
	$profession = $database->sanitize($_POST['profession']);
	$address = $database->sanitize($_POST['address']);

    $database->create($name, $lastname, $email, $gender, $age, $profession, $address);	       
}
header("Location:view.php");
?>
</body>
</html>
