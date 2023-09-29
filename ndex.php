<?php
    //VIDEO 57
    require "Devuelve_Productos.php";

    $seccion=$_GET["buscar"];
    $productos = new DevuelveProductos();
    $array_productos = $productos->get_productos($seccion);
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            foreach($array_productos as $e){
                echo "<table><tr><td>";
                echo $e['CODIGO_ARTICULO'] . "</td><td>";
                echo $e['NOMBRE_ARTICULO'] . "</td><td>";
                echo $e['SECCION'] . "</td><td></tr></table";
                echo "<br><br>";
            }
        ?>
    </body>
</html>