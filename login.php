<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JACKS PIO</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="formulario">
                            <h1>Inicio de sesion</h1>
                            <form method="post">
                            <?php   
                            include("conexion.php");
                            include("logincontrolador.php");
                            ?>
                            <div class="username">

                                            <input id="nombre" type="text" name="nombre">
                                              <label>Nombre </label>

                            </div>

                            <div class="username">

                                            <input id="contraseña" type="text" name="contraseña">
                                              <label>Contraseña</label>

                            </div>


                            <input name="btningresa" type="submit" value="Iniciar">

                            <div class="registrarse">
                                Quiero hacer el <a href="registrarusuario.php">Registro</a>

                            </div>



        </form>



    </div>
</body>
</html>