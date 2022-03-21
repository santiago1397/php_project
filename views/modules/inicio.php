<h1>Pagina de Inicio</h1>

<form action="" method="post">
            <div>
                <input type="text" name="Iname" id="name" autocomplete="off" required> 
                <label name="name" class= "label-name">
                    <span class= "content-name">Usuario</span>
                </label>  
            </div>
            <div>
                <input type="password" name="Ipassword" id="password" autocomplete="off" required> 
                <label name="password" class= "label-name">
                    <span class= "content-name">Contraseña</span>
                </label>   
            </div>
            <button>login</button>
        
</form>
<?php 
    if (isset($_POST["Iname"])&&isset($_POST["Ipassword"])){
        if (ControladorFormularios::ctrIngreso()==1){
            $_SESSION["validarIngreso"] = "ok";

           echo "<p class= \"success\">Usuario encontrado</p>"; 
           echo '<script>
            if (window.history.replaceState){
                window.history.replaceState(null,null,window.location.href);

                window.location = "index.php?action=usuarios"
            }
            </script>';
        }else{
            echo "<p class= \"fail\">Usuario o Contraseña no coinciden</p>";

            echo "<script>
            if (window.history.replaceState){
                window.history.replaceState(null,null,window.location.href);
            }
            </script>";
        }
        
    }
?>