
<?php



include_once ('cone.php');
$id=$_POST['id'];
$rut=$_POST['rut'];
$nombre=$_POST['nombre'];
$telefono=$_POST['telefono'];
$email=$_POST['email'];


echo "$id,$rut,$nombre,$telefono,$email";


$conectar=conn();
$sql="INSERT INTO proovedores (id,rut,nombre,telefono,email)
VALUES ('$id','$rut','$nombre','$telefono','$email')";
$resultado = mysqli_query($conectar , $sql)or trigger_error("query failed! SQL-Error:" .mysqli_error($conectar), E_USER_ERROR);

echo "sql";

