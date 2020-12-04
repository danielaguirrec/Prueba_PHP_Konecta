
<?php

   require_once '../MODELO/productoModelo.php';
   $producto = new Productos_modelo();



     $id = $_POST['id'];
     $nombre = $_POST['nombre'];
     $referencia = $_POST['referencia'];
     $precio = $_POST['precio']; 
     $peso = $_POST['peso'];
     $categoria = $_POST['categoria'];
     $stock = $_POST['stock'];
     $fecha = date('Y:m:d');


 
    $producto->actualizarRegistro($id, $nombre, $referencia, $precio, $peso, $categoria,$stock,$fecha,$fecha);
       sleep(3);
        require_once '../VISTA/actualizarExitoso.php';
        echo"<h1>esta mierda no da</h1>";        
        header("Location: ../index.php");
        ?>
