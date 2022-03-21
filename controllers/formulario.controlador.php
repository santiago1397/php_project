<?php


    Class ControladorFormularios{

        public static function ctrRegistro(){
            if (isset($_POST["name"])){
                if (isset($_POST["password"])){
                    if ($_POST["password"]==$_POST["repassword"]){

                        $tabla="usuarios";

                        $datos= array("nombre" => $_POST["name"],
                                      "contrasena" => $_POST["password"]);

                        $respuesta = ModeloFormularios::mdlRegistro($tabla,$datos);
                        
                        return $respuesta;

                    }
                }
            }
        }
        public static function ctrSeleccionarRegistro(){
            $tabla = "usuarios";

            $repuesta = ModeloFormularios::mdlSeleccionarRegistro($tabla);
            return $repuesta;
        }

        public static function ctrIngreso(){
            $tabla = "usuarios";

            $respuesta = ModeloFormularios::mdlIngresar($tabla,$_POST["Iname"]);


            if (isset($respuesta["nombre"])&&($respuesta["nombre"]==$_POST["Iname"])&&($respuesta["contrasena"]==$_POST["Ipassword"])){
                return 1;
            }
            else {
                return -1;
            }


        }

    }


?>