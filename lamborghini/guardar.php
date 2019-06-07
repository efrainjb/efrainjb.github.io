<?php

$server= "localhost";
$username = "root";
$pass = "";
$db = "lamborghini";

$conexion = new mysqli ( $server, $username, $pass, $db);

if ($conexion->connect_error) {
    die("Error en la conexion:" . $conexion->connect_error);
}
$Nombre =$_POST["Nombre"];
$Precio = $_POST["Precio"];
$Nacionalidad =$_POST["Nacionalidad"];
$HP =$_POST["HP"];

$sql = "INSERT INTO automoviles (Nombre, Precio, Nacionalidad, HP)
VALUES('$Nombre', '$Precio', '$Nacionalidad', $HP)";

if ($conexion->query($sql) === TRUE){
	header("Location:index.php");
} else {
	echo "Error: " .$sql. "<br>" . $conexion->error;

}

?>