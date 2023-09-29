<?php
    //VIDEO 57
    require "Conexion_POO_Clases.php";

    class DevuelveProductos extends Conexion{
        public function __construct(){
            parent::__construct();
        }

        public function get_productos($dato){
            $sql = 'SELECT * FROM PRODUCTOS WHERE SECCION="' . $dato . '"';
            $setencia = $this->conexion_db->prepare($sql);
            $setencia->execute(array());
            $resultado=$setencia->fetchAll(PDO::FETCH_ASSOC);
            $setencia->closeCursor();
            return $resultado;
            $this->conexion_db=null;
            /*
            $resultado = $this->conexion_db->query('SELECT * FROM PRODUCTOS WHERE SECCION="' . $dato . '"');
            $productos = $resultado->fetch_all(MYSQLI_ASSOC);
            return $productos;*/
        }
    }
?>