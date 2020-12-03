<?php

require_once 'MODELO/productoModelo.php';
$producto = new Productos_modelo();
$matrizProductos = $producto->get_productos();


require_once 'VISTA/productoVista.php';



