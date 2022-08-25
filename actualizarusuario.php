<!DOCTYPE html>
<html lang="es">
<head>
    <title>CRUD MySQL, PHP y JS</title>
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
            <h2>Actualizar usuario</h2>


            <form  action="uactualizar.php" method="post">
                <input type="text" name="id" placeholder="Ingresa ID">
                <input type="text" name="nombre" placeholder="Ingresa nombre">
                <input type="text" name="apellido" placeholder="Ingresa tu apellido">
                <input type="text" name="documento" placeholder="Ingresa Documento">
                <input type="text" name="email" placeholder="Ingresa Email">
                <input type="text" name="contraseña" placeholder="Ingresa contraseña">
                <input type="text" name="telefono" placeholder="telefono">
                <button type="submit" id="btnAgregar" value="ok">Actualizar</button>
            </form>

  


    </div>
   
        
    </body>