<?php
require_once "conexion.php";

class ModeloFormularios{

    public static function mdlRegistro($tabla, $datos){

        $stmt = Conexion::conectar() -> prepare("INSERT INTO $tabla(nombre,contrasena,fecha) 
                                                values(:nombre,:contrasena, CURRENT_TIMESTAMP)");
        //esto se hace para ocultar los valores, mayor seguridad
        $stmt-> bindParam(":nombre",$datos["nombre"], PDO::PARAM_STR);
        $stmt-> bindParam(":contrasena",$datos["contrasena"], PDO::PARAM_STR);

        try{
            if ($stmt->execute()){
                return 1;
            }else{
                        //$stmt->errorInfo();
                print_r(Conexion::conectar()->errorInfo());
            }
            $stmt -> close();

            $stmt = null;
        }catch(PDOException $e){
            echo 'Falló la conexión: ' . $e->getMessage();
        }
    }

    public static function mdlSeleccionarRegistro($tabla){
        $stmt = Conexion::conectar() -> prepare("SELECT * FROM $tabla");
        $stmt-> execute();

        return $stmt->fetchAll();

        $stmt -> close();
        $stmt = null;

    }

    public static function mdlIngresar($tabla,$usuario){
        try{
            $stmt = Conexion::conectar() -> prepare("SELECT * FROM $tabla WHERE nombre=:nombre");
            $stmt-> bindParam(":nombre",$usuario, PDO::PARAM_STR);
            $stmt-> execute();
            
            return $stmt->fetch();

            $stmt -> close();
            $stmt = null;
        }catch(PDOException $e){
            echo 'Falló la conexión: ' . $e->getMessage();
        }
        
    }

}