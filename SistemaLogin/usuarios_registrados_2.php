<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    if(!isset($_SESSION["usuario"])){
        header("location:login.php");
    }
    ?>
    <h1>Bienvenidos Usuarios</h1>
    <br>
    <a href="cierre.php">Cerrar Sesión</a>
    <br><br>
    <?php
        echo "Usuario: " . $_SESSION["usuario"] . "<br><br>";
    ?>

    <p>Esto es información solo para usuarios registrados</p>

    <a href="usuarios_registrados_1.php">Volver</a>
</body>
</html>