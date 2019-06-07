<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
	<?php 
			$server="localhost";
			$username = "root";
			$pass = "";
			$db= "lamborghini";

			$conexion = new mysqli ($server, $username, $pass, $db);

			if($conexion->connect_error){
					die("Error en la conexión: " . $conexion->connect_error);
			}
			$ID=$_GET['ID'];

			$sql = "DELETE FROM automoviles WHERE ID=$ID";
			$data = $conexion->query($sql); 

			if ($conexion->query($sql) === TRUE) {
			    header("Location:index.php");
			} else {
			    echo "Error deleting record: " . $conn->error;
			}
			
	 ?> 
</body>
</html>











