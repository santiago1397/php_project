<?php 
    if(!isset($_SESSION["validarIngreso"])){
        echo '<script>window.location = "index.php?action=inicio"</script>';
    }else{
        if($_SESSION["validarIngreso"]!="ok"){
            echo '<script>window.location = "index.php?action=inicio"</script>';
        }
    }
?>
<h1>Usuarios Registrados</h1>
<?php $usuarios = ControladorFormularios::ctrSeleccionarRegistro() ?>
<table class= "users-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Fecha de ingreso</th>
            <th>a</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($usuarios as $key => $value): ?>
            <tr>
                <td><?php echo $value["id"];  ?></td>
                <td><?php echo $value["nombre"]; ?></td>
                <td><?php echo $value["fecha"]; ?></td>
                <td class = "btn-container"><div >
                    <a class = "pencil" href = "index.php?action=modificar&id=<?php echo $value["id"] ?>">  
                        <i class="fas fa-pen-square fa-2x"></i>  
                    </a>
                    <button><i class="fas fa-trash-alt fa-2x"></i></button>
                </div></td>
            </tr>
        <?php endforeach ?>
        
    </tbody>
</table>