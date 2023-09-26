<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //VIDEO 51
        $conexion = new mysqli("localhost", "root", "", "pruebas");
        if($conexion->connect_errno){
            echo "Falló la conexión " . $conexion->connect_errno;
        }
        $conexion->set_charset("utf8");
        
        $sql = "SELECT * FROM PRODUCTOS";

        $resultado = $conexion->query($sql);
        if($conexion->errno){
            die($conexion->erorr);
        }

        while($fila = $resultado->fetch_assoc()){
            echo "<table><tr><td>";
            echo $fila['CODIGO_ARTICULO'] . "</td><td>";
            echo $fila['NOMBRE_ARTICULO'] . "</td><td>";
            echo $fila['SECCION'] . "</td><td></tr></table>";

            echo "<br><br>";

        }

        $conexion->close();

    ?>
</body>
</html>