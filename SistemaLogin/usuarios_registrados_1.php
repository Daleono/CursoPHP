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
        echo "Hola: " . $_SESSION["usuario"] . "<br><br>";
    ?>

    <p>Esto es información solo para usuarios registrados</p>

    <table>
        <tr>
            <td align="center"><h1>Zona usuarios registrados</h1></td>
        </tr>
        <tr>
            <td><a href="usuarios_registrados_2.php">Página 2</a></td>
            <td><a href="usuarios_registrados_3.php">Página 3</a></td>
            <td><a href="usuarios_registrados_4.php">Página 4</a></td>
        </tr>
    </table>
</body>
</html>