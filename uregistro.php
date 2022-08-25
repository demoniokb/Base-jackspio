
<?php



include_once ('cone.php');
$id=$_POST['id'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$documento=$_POST['documento'];
$email=$_POST['email'];
$contraseña=$_POST['contraseña'];
$telefono=$_POST['telefono'];


echo "Usuario Agregado correctamente";


$conectar=conn();
$sql="INSERT INTO usuarios (id,nombre,apellido,documento,email,contraseña,telefono)
VALUES ('$id','$nombre','$apellido','$documento','$email','$contraseña','$telefono')";
$resultado = mysqli_query($conectar , $sql)or trigger_error("query failed! SQL-Error:" .mysqli_error($conectar), E_USER_ERROR);



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