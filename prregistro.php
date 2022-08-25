
<?php



include_once ('cone.php');
$id=$_POST['id'];

$nombre=$_POST['nombre'];
$codigo=$_POST['codigo'];
$stock=$_POST['stock'];
$precio=$_POST['precio'];


echo "$id,$nombre,$codigo,$stock,$precio";


$conectar=conn();
$sql="INSERT INTO productos (id,nombre,stock,precio)
VALUES ('$id','$nombre','$stock','$precio')";
$resultado = mysqli_query($conectar , $sql)or trigger_error("query failed! SQL-Error:" .mysqli_error($conectar), E_USER_ERROR);

echo "sql";
