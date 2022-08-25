<?php 
$server = "localhost";
$usuario = "root";
$contraseña = "";
$bd = "basedatos";

$conexion = mysqli_connect($server,$usuario,$contraseña,$bd) or die ("error en la conexion");

$id=$_POST["id"];

mysqli_query($conexion,"DELETE from usuarios where id='$id'") or die ("error al eliminar los datos");
mysqli_close($conexion);
echo "datos eliminados correctamente";



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar usuario</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<a href="index.php">Volver</a>
</body>
</html>