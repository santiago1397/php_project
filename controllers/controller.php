<?php

Class MvcController{
    public function plantilla(){

        //include se utiliza para abrir un archivo 
        include "views/template.php";

    }

    public function enlacesPaginasController(){



        if(isset($_GET["action"])){
            if ($_GET["action"]=="inicio"||
                $_GET["action"]=="usuarios"||
                $_GET["action"]=="registro"||
                $_GET["action"]=="modificar"||
                $_GET["action"]=="salir"){
                include "views/modules/".$_GET["action"].".php";
            }else{
                include "views/modules/404.php";
            }
        }else{
            include "views/modules/inicio.php";
        }
    }
}
?>