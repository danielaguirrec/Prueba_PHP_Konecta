<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            input.text, select.text, textarea.text {
   background: silver;
   border: 1px solid #393939;
   border-radius: 5px 5px 5px 5px;
   color: #393939;
   font-size: 12px;
   padding: 5px;
}
            
        </style>
    </head>
    <body>
        
        <h1>CRUD MVC</h1>
        
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <input type = "submit" name ="crear" value ="Crear Registro"></form> <br>
            
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
           <input type = "submit" name ="actualizar" value ="Actualizar Registro"></form> <br>
            
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
           <input type = "submit" name ="eliminar" value ="Eliminar Registro"></form> <br>
           
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type = "submit" name ="listar" value ="Listar Registro"></form> <br>
    
        <?php
             if(isset($_POST['listar'])){              
                require_once("./CONTROLADOR/productosControlador.php");
            }
            
            if(isset($_POST['crear'])){              
                require_once("./VISTA/formCrear.html");
            }
            
            // require_once("./CONTROLADOR/productosControlador.php");
            
            if(isset($_POST['actualizar'])){              
                require_once("./VISTA/formActualizar.html");

            }
            
            if(isset($_POST['eliminar'])){              
                require_once("./VISTA/formEliminar.html");
            }
            if(isset($_GET['crear'])){
                echo "<h2>Registro creado!</h2>";
            }
            
              if(isset($_GET['eliminar'])){
                echo "<h2>Registro eliminado!</h2>";
            }
            
              if(isset($_GET['actualizar'])){
                echo "<h2>Registro actualizado!</h2>";
            }
        ?>
    </body>
</html>
