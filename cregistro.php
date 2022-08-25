
<?php



include_once ('cone.php');
$id=$_POST['id'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$documento=$_POST['documento'];
$email=$_POST['email'];


echo "$id,$nombre,$apellido,$documento,$email";


$conectar=conn();
$sql="INSERT INTO clientes (id,nombre,apellido,documento,email)
VALUES ('$id','$nombre','$apellido','$documento','$email')";
$resultado = mysqli_query($conectar , $sql)or trigger_error("query failed! SQL-Error:" .mysqli_error($conectar), E_USER_ERROR);

echo "sql";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<a href="clientes.php">Volver</a>
</body>
</html>


