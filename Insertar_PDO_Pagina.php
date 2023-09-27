<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            //VIDEO 56

            $busqueda_nom = $_POST["n_art"];
            $busqueda_sec = $_POST["seccion"];
            $busqueda_cod = $_POST["c_art"];

            try{
                $base = new PDO("mysql:host=localhost; dbname=pruebas", "root", "");
                $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $base->exec("SET CHARACTER SET UTF8");
                $sql="INSERT INTO PRODUCTOS (CODIGO_ARTICULO, SECCION, NOMBRE_ARTICULO) VALUES (:c_art, :sec, :n_art);";
                $resultado=$base->prepare($sql);
                $resultado->execute(array(":n_art"=>$busqueda_nom, ":sec"=>$busqueda_sec, ":c_art"=>$busqueda_cod));

                echo "Registro insertado";

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