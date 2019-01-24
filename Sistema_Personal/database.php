<?php

class Database{
	
	private $connection;

	function __construct()
	{
		$this->connect_db();
	}

	public function connect_db(){
		$this->connection = mysqli_connect('localhost', 'root', '', 'base_de_datos');
		if(mysqli_connect_error()){
			die("Falló al conectar la base de datos" . mysqli_connect_error() . mysqli_connect_errno());
		}
	}

	public function create($fname,$lname,$email,$gender,$age,$profession,$address){
		$sql = "INSERT INTO `crud` (nombre, apellido, email, genero, edad, profesion, direccion) VALUES ('$fname', '$lname', '$email', '$gender', '$age', '$profession', '$address')";
		$res = mysqli_query($this->connection, $sql);
		if($res){
	 		return true;
		}else{
			return false;
		}
	}

	public function read($id=null){
		$sql = "SELECT * FROM `crud`";
		if($id){ $sql .= " WHERE id=$id";}
 		$res = mysqli_query($this->connection, $sql);
 		return $res;
	}

	public function update($fname,$lname,$email,$gender,$age, $id, $profession, $address){
		$sql = "UPDATE `crud` SET nombre='$fname', apellido='$lname', email='$email', genero='$gender', edad='$age', profesion='$profession', direccion='$address' WHERE id=$id";
		$res = mysqli_query($this->connection, $sql);
		if($res){
			return true;
		}else{
			return false;
		}
	}

	public function delete($id){
		$sql = "DELETE FROM `crud` WHERE id=$id";
 		$res = mysqli_query($this->connection, $sql);
 		if($res){
 			return true;
 		}else{
 			return false;
 		}
	}

	public function sanitize($var){
		$return = mysqli_real_escape_string($this->connection, $var);
		return $return;
	}

}

$database = new Database();

?>