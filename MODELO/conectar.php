<?php
//require("config.php");
class Conectar{
    
    public static function conexion(){
        
        try{
           $conexion = new PDO('mysql:host=localhost; dbname=inventario', 'root','');
           
          // $conexion = new PDO('mysql:host='.DB_HOST.'; dbname='.DB_NOMBRE, DB_USUARIO,DB_CONTRA);


           $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           $conexion->exec("SET CHARACTER SET UTF8");
        }catch(Exception $e){
            
            die("Error ". $e->getMessage());
            echo "Linea del error ".$e->getLine();            
        }
        
        return $conexion;
    }  
}