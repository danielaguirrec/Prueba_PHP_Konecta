<?php

    require_once '../MODELO/productoModelo.php';
    $producto = new Productos_modelo();

   
     $nombre = $_POST['nombre'];
     $referencia = $_POST['referencia'];
     $precio = $_POST['precio']; 
     $peso = $_POST['peso'];
     $categoria = $_POST['categoria'];
     $stock = $_POST['stock'];
     $fecha = date('Y:m:d');
     
     echo $nombre;
    $producto->insertarRegistro($nombre, $referencia, $precio, $peso, $categoria,$stock,$fecha,$fecha);

     require_once '../VISTA/actualizarExitoso.php';
        echo"<h1>esta mierda no da</h1>";        
        header("Location: ../index.php");
        ?>