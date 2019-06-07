<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title></title>
</head>
<body>
		<?php

$server= "localhost";
$username = "root";
$pass = "";
$db = "lamborghini";

$conexion = new mysqli ( $server, $username, $pass, $db);

if ($conexion->connect_error) {
    die("Error en la conexion:" . $conexion->connect_error);
}

$ID = $_POST["ID"];
$Nombre =$_POST["Nombre"];
$Precio = $_POST["Precio"];
$Nacionalidad =$_POST["Nacionalidad"];
$HP =$_POST["HP"];

$sql = "UPDATE automoviles SET Nombre='$Nombre', Precio='$Precio', Nacionalidad='$Nacionalidad', HP=$HP WHERE ID=$ID";
echo $sql;
 if ($conexion->query($sql)== TRUE){
 	header("Location:index.php");
}else{
	echo "OCURRIO UN ERROR :((((((((";
}
$conexion->close();
?>
</body>
</html>