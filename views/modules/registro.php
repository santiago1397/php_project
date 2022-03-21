<h1>Registro</h1>

<form action="" method="post">
            <div>
                <input type="text" name="name" id="name" autocomplete="off" required> 
                <label name="name" class= "label-name">
                    <span class= "content-name">Nuevo Usuario</span>
                </label>  
            </div>
            <div>
                <input type="password" name="password" id="password" autocomplete="off" required> 
                <label name="password" class= "label-name">
                    <span class= "content-name">Nueva Contraseña</span>
                </label>   
            </div>
            <div>
                <input type="password" name="repassword" id="password" autocomplete="off" required> 
                <label name="repassword" class= "label-name">
                    <span class= "content-name">Repetir Contraseña</span>
                </label>   
            </div>
            <button>Actualizar</button>
        
</form>

<?php if (ControladorFormularios::ctrRegistro()==1): ?>
    <p class= "success">Usuario registrado exitosamente</p>
<?php endif ?>

<?php

    echo "<script>
        if (window.history.replaceState){
            window.history.replaceState(null,null,window.location.href);
        }
    </script>";
?>
