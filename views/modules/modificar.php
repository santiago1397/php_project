<form action="" method="post">
            <div>
                <input type="text" name="Nname" id="name" autocomplete="off" required> 
                <label name="name" class= "label-name">
                    <span class= "content-name">Usuario</span>
                </label>  
            </div>
            <div>
                <input type="password" name="Npassword" id="password" autocomplete="off" required> 
                <label name="password" class= "label-name">
                    <span class= "content-name">Contraseña</span>
                </label>   
            </div>
            <div>
                <input type="password" name="Nrepassword" id="password" autocomplete="off" required> 
                <label name="repassword" class= "label-name">
                    <span class= "content-name">Repetir Contraseña</span>
                </label>   
            </div>
            <button>Registrar</button>
        
</form>

<?php

    echo "<script>
        if (window.history.replaceState){
            window.history.replaceState(null,null,window.location.href);
        }
    </script>";
?>