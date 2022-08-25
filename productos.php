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


            <form action="prregistro.php" method="post">
                <input type="text" name="id" placeholder="Ingresa ID">
                <input type="text" name="proovedor" placeholder="Ingresa ID proovedor">
                <input type="text" name="nombre" placeholder="Ingresa nombre">
                <input type="text" name="codigo" placeholder="Ingresa codigo">
                <input type="text" name="stock" placeholder="Ingresa stock">
                <input type="text" name="precio" placeholder="Ingresa precio">
                <button type="submit" id="btnregistrar" value="ok">Agregar</button>
            </form>

  


    </div>
    <div class="contenedor">
        <div class="div-listado">
                <h2>Listado Productos</h2>
                <div class="div-empleados">
                <table class="table">
                    <div class="main-container">
      <thead>
        <tr>
          <th>ID</th>
          <th>Proovedor</th>
          <th>nombre</th>
          <th>Codigo</th>
          <th>Stock</th>
          <th>Precio</th>
          <th>Editar</th>


        </tr>
      </thead>
      <tbody>
        <?php 
        include "conexion.php";
        $sql = $conexion->query(" select * from productos ");
        while($datos = $sql->fetch_object()) {
        ?>

        <tr>
                <td><?php echo $datos->id; ?></td>
                <td><?php echo $datos->proovedor?></td>
                <td><?php echo $datos->nombre?></td>
                <td><?php echo $datos->codigo?></td>
                <td><?php echo $datos->stock?></td>
                <td><?php echo $datos->precio?></td>
                <td>
                    <a href="">Editar</a>
                    <a href="">Elimnar</a>
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