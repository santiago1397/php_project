<?php

class Conexion {

    public static function conectar(){
        try{
            $link = new PDO("mysql:dbname=usuariosphp1;host=localhost",
                            "root",
                            "sanmax1397");

            $link->exec("set names utf8");

            return $link;

        }catch(PDOException $e){
            echo 'Falló la conexión: ' . $e->getMessage();
        }

    }
}


?>