<!DOCTYPE html>
<html lang="es">
<head>
    <title>JACKS PIO</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilos.css">
    <link rel="stylesheet" href="mostrar.css">
</head>
<body>

    <div class="contenedor1">
        <div class="navbar">


    <div class="div-titulo">
    <a href="Pagina.php"><h1>JACKS PIO</h1></a>

    </div>
    
    <div class="contenedor">

        <div class="div-formulario">
            <h2>Formulario</h2>


            <form name="form" action="cregistro.php" method="post">
                <input type="text" name="id" placeholder="Ingresa ID">
                <input type="text" name="nombre" placeholder="Ingresa nombre">
                <input type="text" name="apellido" placeholder="Ingresa tu apellido">
                <input type="text" name="documento" placeholder="Ingresa Documento">
                <input type="text" name="email" placeholder="Ingresa Email">
                <button type="submit" id="btnAgregar">Agregar</button>
            </form>

  


    </div>
    <div class="contenedor">
        <div class="div-listado">
                <h2>Listado Clientes</h2>
                <div class="div-empleados">
                <table class="table">
                    <div class="main-container">
      <thead>
        <tr>
          <th>ID</th>
          <th>nombre</th>
          <th>apellido</th>
          <th>documento</th>
          <th>email</th>
          <th>editar</th>


        </tr>
      </thead>
      <tbody>
        <?php 
        include "conexion.php";
        $sql = $conexion->query(" select * from clientes ");
  
        while($datos = $sql->fetch_object()) {
        ?>

        <tr>
                <td><?php echo $datos->id; ?></td>
                <td><?php echo $datos->nombre?></td>
                <td><?php echo $datos->apellido?></td>
                <td><?php echo $datos->documento?></td>
                <td><?php echo $datos->email?></td>
                <td>
                    <a href="actualizarclientes.php?id=<?= $datos->id;?>">Editar</a> 
                    <a href="eliminarclientes.php">Actualizar</a>
                </td>




        </tr>
    
    


        </div>
        <?php
    }
    ?>
      </tbody>
    </table>
                    
                </div>
            </div>
            </div>


</body>
</html>