<?php

    require_once '../MODELO/productoModelo.php';
    $producto = new Productos_modelo();
    $id = $_POST['id'];
    
    
    $producto->eliminarRegistro($id);
     header("Location: ../index.php?eliminar=1");
     ?>