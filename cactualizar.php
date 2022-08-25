<?php
$server = "localhost";
$usuario = "root";
$contraseña = "";
$bd = "basedatos";

$conexion = mysqli_connect($server,$usuario,$contraseña,$bd) or die ("error en la conexion");
$id=$_POST["id"];
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$documento=$_POST["documento"];
$email=$_POST["email"];

mysqli_query($conexion,"UPDATE clientes set nombre='$nombre', apellido='$apellido',documento='$documento',email='$email' where id='$id'") or die ("error al actualizar");
mysqli_close($conexion);
echo "Datos actualizados correctamente"


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<a href="clientes.php">Volver</a>
</body>
</html>
