<?php 
if(!empty($_POST["btningresa"])){
    if (empty($_POST["nombre"]) and empty($_POST["contraseña"])) {
        echo "LOS CAMPOS ESTAN VACIOS";
    } else {
        $nombre=$_POST["nombre"];
        $contraseña=$_POST["contraseña"];
        $sql=$conexion->query("select * from usuarios where nombre='$nombre' and contraseña='$contraseña'" );
        if ($datos=$sql->fetch_object()) {
           header("location:pagina.php");
        } else {
            echo "ACCESO DENEGADO";
        }
        
    }
    

}

?>