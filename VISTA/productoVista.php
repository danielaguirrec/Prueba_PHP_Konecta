

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            
            table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            }
            th, td {
              padding: 15px;
            }
        </style>
    </head>
    <body>
   
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
echo"<h2> Inventario Productos</h2> <br><br><br>";
echo"<table ><th>ID</th><th>Nombre del producto</th><th>Referencia</th><th>precio(\$)"
. "</th><th>Peso</th><th>Categoria</th><th>Stock</th><th>Fecha de creacion</th><th>Fecha de ultima Venta</th>";
foreach ($matrizProductos as $registro){
        echo '<tr><td>';
        echo $registro['id']."</td><td>";
        echo $registro['Nombre_de_producto']."</td><td>";
        echo $registro['Referencia']."</td><td>";
        echo $registro['Precio']."</td><td>";
        echo $registro['Peso']."</td><td>";
        echo $registro['Categoria']."</td><td>";
        echo $registro['Stock']."</td><td>";
        echo $registro['Fecha_de_Creacion']."</td><td>";
        echo $registro['Fecha_de_ultima_venta']."</td></tr>";

}
?>
   </body>
</html>
