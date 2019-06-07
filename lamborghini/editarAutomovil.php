<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
	<nav class="navbar navbar-default" style="height: 90px;">
        <div class="container-fluid">
         <!-- Brand and toggle get grouped for better mobile display -->
             <div class="navbar-header">
             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"  aria-expanded="false">
           <span class="sr-only">Toggle navigation</span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
         </button>
          <a  class="navbar-brand" href="#"><img style="width: 5%" src="Logo.jpg"></a>
          </div>

           <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
        <li  class="dropdown">
          <a style="color: white; margin-left: 25px; margin-top: -10px" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">MODELOS <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Urus</a></li>
            <li><a href="huracan.html">Huracan</a></li>
            <li><a href="#">Aventador</a></li>
            <li><a href="#">Few Off</a></li>
            <li><a href="#">Concept</a></li>
            <li><a href="#">Ad Personam</a></li>
            </ul>
             </li>
          </ul>
           <ul class="nav navbar-nav navbar-left">
           <li class="dropdown">
          <a style="color: white; margin-top: -10px" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">MARCA <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Personas</a></li>
            <li><a href="#">Historia</a></li>
            <li><a href="#">Obras Maestras</a></li>
            <li><a href="#">Diseño</a></li>
            <li><a href="#">Innovacion y Excelencia</a></li>
             </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav">
        <li  class="dropdown">
          <a style="color: white; margin-top: -10px" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">SERVICIOS AL CLIENTE <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Localizador</a></li>
            <li><a href="#">Segunda Mano</a></li>
            <li><a href="accesorios.html">Accesorio Original</a></li>
            <li><a href="repuesto.html">Repuestos Originales</a></li>
            <li><a href="#">Polo Storico</a></li>
            <li><a href="#">Financial Services</a></li>
            </ul>
             </li>
          </ul>
          <ul class="nav navbar-nav">
        <li  class="dropdown">
          <a style="color: white; margin-top: -10px" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">EXPERIENCIA <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Noticias</a></li>
            <li><a href="#">Eventos</a></li>
            <li><a href="#">Museo</a></li>
            <li><a href="#">Academia</a></li>
            <li><a href="#">Experiencia</a></li>
            <li><a href="#">Lamborghini Lounge</a></li>
            <li><a href="#">App Movil</a></li>
            </ul>
             </li>
          </ul>
          <ul class="nav navbar-nav">
        <li  class="dropdown">
          <a style="color: white; margin-top: -10px" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">MOTORSPORT <span class="caret"></span></a>
             </li>
          </ul>
          <ul class="nav navbar-nav">
        <li  class="dropdown">
          <a style="color: white; margin-top: -10px" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">STORE <span class="caret"></span></a>
             </li>
          </ul>
           <span style="margin-top: 62px; " class="glyphicon glyphicon-cog" aria-hidden="true"></span>
           <span style="margin-top: 62px " class="glyphicon glyphicon-bullhorn" aria-hidden="true"></span>
           <span style="margin-top: 62px" class="glyphicon glyphicon-search" aria-hidden="true"></span>
           <span style="margin-top: 62px" class="glyphicon glyphicon-globe" aria-hidden="true"></span>

         </div><!-- /.navbar-collapse -->
         </div><!-- /.container-fluid -->
 </nav>
	<?php 
$server= "localhost";
$username = "root";
$pass = "";
$db = "lamborghini";

$conexion = new mysqli ( $server, $username, $pass, $db);

if ($conexion->connect_error) {
    die("Error en la conexion:" . $conexion->connect_error);
} 
$id_auto = $_GET['ID'];
$sql = "SELECT * FROM automoviles WHERE ID=$id_auto LIMIT 1";
$auto = $conexion->query($sql)->fetch_object();
?>

<div class="container">
<div class="row well">
<div class="col-md-6 col-md-offset-3">
<form action="update.php" method="POST">
<input type="hidden" name="ID" value="<?php echo $id_auto; ?>">

<div class="form-group">
<label for="Nombre">Nombre:</label>
<input type="text" name="Nombre" class="form-control"
value="<?php echo $auto->Nombre; ?>">

</div>
<div class="form-group">
<label for="Precio">Precio:</label>
<input type="text" name="Precio" class="form-control" 
value="<?php echo $auto->Precio; ?>">
</div>
<div class="form-group">
<label for="Nacionalidad">Nacionalidad:</label>
<input type="text" name="Nacionalidad" class="form-control" 
value="<?php echo $auto->Nacionalidad; ?>">
</div>
<div class="form-group">
  <label for="HP">HP:</label>
<input type="text" name="HP" class="form-control" 
value="<?php echo $auto->HP; ?>">

</div>
<div class="form-group text-center">
<input type="submit" name="btn btn-primary" value="Guardar">
</div>
</form>
</div>
</div>
</div>

</body>
</html>