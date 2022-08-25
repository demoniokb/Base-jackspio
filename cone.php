<?php
function conn() {
    
$hostname = "localhost";
$usuariodb = "root";
$passworddb = "";

$dbname = "basedatos";

$conectar = mysqli_connect($hostname,$usuariodb,$passworddb,$dbname);
return $conectar;

if($conectar->connect_errno) {
    die("LA CONEXION HA FALLADO"  .  $conectar->connect_errno);
}
}