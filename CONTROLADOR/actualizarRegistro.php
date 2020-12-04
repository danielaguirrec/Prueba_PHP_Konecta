<?php

require_once '../MODELO/productoModelo.php';



     $id = $_POST['id'];

     $nombre = $_POST['nombre'];
     $referencia = $_POST['referencia'];
     $precio = $_POST['precio']; 
     $peso = $_POST['peso'];
     $categoria = $_POST['categoria'];
     $stock = $_POST['stock'];
     $fecha = date('Y:m:d');
     
     echo $nombre;
     
//require_once 'MODELO/productoModelo.php';
     $producto = new Productos_modelo();
  // $matrizProductos = $producto->get_productos();
    

    $producto->actualizarRegistro($id, $nombre, $referencia, $precio, $peso, $categoria,$stock,$fecha,$fecha);