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
    </head>
    <body>
        
        <h1>MVC</h1>
        
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <input type = "submit" name ="crear" value ="Crear Registro"></form> <br>
            
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
           <input type = "submit" name ="actualizar" value ="Actualizar Registro"></form> <br>
            
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
           <input type = "submit" name ="eliminar" value ="Eliminar Registro"></form> <br>

        <a href="formActualizar.php"><button> Actualizar registro</button></a><br><br>

        
        <?php
            require_once("./CONTROLADOR/productosControlador.php");
            
            if(isset($_POST['crear'])){              
                require_once("./VISTA/formCrear.html");
            }
            
             require_once("./CONTROLADOR/productosControlador.php");
            
            if(isset($_POST['actualizar'])){              
                require_once("./VISTA/formActualizar.html");
            }
            
       
       
        ?>
    </body>
</html>
