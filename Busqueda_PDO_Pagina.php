<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //VIDEO 53, 54

        $busqueda_nom = $_GET["nombre"];
        $busqueda_sec = $_GET["seccion"];

        try{
            $base = new PDO("mysql:host=localhost; dbname=pruebas", "root", "");
            $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $base->exec("SET CHARACTER SET UTF8");
            $sql="SELECT * FROM PRODUCTOS WHERE NOMBRE_ARTICULO=:n_art AND SECCION=:SECC";
            $resultado=$base->prepare($sql);
            $resultado->execute(array(":n_art"=>$busqueda_nom, ":SECC"=>$busqueda_sec));

            while($registro = $resultado->fetch(PDO::FETCH_ASSOC)){
                echo "Nombre Articulo: " . $registro['NOMBRE_ARTICULO'] . "<br>";
                echo "Código: " . $registro['CODIGO_ARTICULO'] . "<br>";
                echo "Sección: " . $registro['SECCION'] . "<br><br>";

            }

            $resultado->closeCursor();
        }
        catch(Exception $e){
            die("Error: " . $e->GetMessage());
        }
        finally{
            $base = null;
        }
    ?>
</body>
</html>