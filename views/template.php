<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programa php</title>
    <meta name="description" contente="primera practica de php">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
</head>
<body>
    <header>
        <a class= "logo" href="#">hola</a>
    </header>

    <?php
        include "modules/navegacion.php";
    ?>
    
    <section >
        <?php
            $mvc = new MvcController();
            $mvc -> enlacesPaginasController();
        ?>
    </section>
</body>
</html>