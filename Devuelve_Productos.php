<?php
    //Clase 57
    require "Conexion_POO_Clases.php";

    class DevuelveProductos extends Conexion{
        public function __construct(){
            parent::__construct();
        }

        public function get_productos(){
            $resultado = $this->conexion_db->query('SELECT * FROM PRODUCTOS');
            $productos = $resultado->fetch_all(MYSQLI_ASSOC);

            return $productos;
        }
    }
?>