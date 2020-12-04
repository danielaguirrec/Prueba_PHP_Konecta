
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
     
     if(isset($_POST['actualizar'])){
         
         echo"<h1> Registro Actualizado</h1>";
     }


 
    $producto->actualizarRegistro($id, $nombre, $referencia, $precio, $peso, $categoria,$stock,$fecha,$fecha);

        //require_once '../VISTA/actualizarExitoso.php?actualizar=1';
        echo"<h1>esta mierda no da</h1>";        
        header("Location: ../index.php?actualizar=1");
        ?>
