<?php
    //Clase 57
    require("Config.php");
    
    class Conexion{
        protected $conexion_db;

        public function __construct(){
            $this->conexion_db = new mysqli(DB_HOST, DB_USUARIO, DB_CONTRA, DB_NOMBRE);
            if($this->conexion_db->connect_errno){
                echo "Falló al conectar a MySQL: " . $this->conexion_db->connect_errno;
            }

            $this->conexion_db->set_charset(DB_CHARSET);
        }
    }

?>