<nav class = "navbar">
    <ul>
        <?php if (isset($_GET["action"])): ?>
            <?php if ($_GET["action"]=="inicio"): ?>
                <li class="active"><a href="index.php?action=inicio">Inicio</a></li>
            <?php else: ?>
                <li ><a href="index.php?action=inicio">Inicio</a></li>
            <?php endif ?>

            <?php if ($_GET["action"]=="registro"): ?>
                <li class="active"><a href="index.php?action=registro">Registro</a></li>
            <?php else: ?>
                <li ><a href="index.php?action=registro">Registro</a></li>
            <?php endif ?>

            <?php if ($_GET["action"]=="usuarios"): ?>
                <li class="active"><a href="index.php?action=usuarios">Usuarios</a></li>
            <?php else: ?>
                <li ><a href="index.php?action=usuarios">Usuarios</a></li>
            <?php endif ?>

            <?php if ($_GET["action"]=="salir"): ?>
                <li class="active"><a href="index.php?action=salir">Salir</a></li>
            <?php else: ?>
                <li ><a href="index.php?action=salir">Salir</a></li>
            <?php endif ?>

        <?php else: ?>
            <li class="active"><a href="index.php?action=inicio">Inicio</a></li>
            <li><a href="index.php?action=registro">Registro</a></li>
            <li><a href="index.php?action=usuarios">Usuarios</a></li>
            <li><a href="index.php?action=contactenos">Salir</a></li>
        <?php endif ?>    
        
    </ul> 
</nav>