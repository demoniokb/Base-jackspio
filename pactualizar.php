<?php
$server = "localhost";
$usuario = "root";
$contraseña = "";
$bd = "basedatos";

$conexion = mysqli_connect($server,$usuario,$contraseña,$bd) or die ("error en la conexion");
$id=$_POST["id"];
$rut=$_POST["rut"];
$nombre=$_POST["nombre"];
$telefono=$_POST["telefono"];
$email=$_POST["email"];


mysqli_query($conexion,"UPDATE proovedores set nombre='$nombre', rut='$rut',nombre='$nombre',telefono='$telefono',email='$email' where id='$id'") or die ("error al actualizar");
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
<a href="proovedores.php">Volver</a>
</body>
</html>