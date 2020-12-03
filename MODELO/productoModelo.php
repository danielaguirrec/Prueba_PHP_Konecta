<?php


class Productos_modelo{
    
    private $db;
    private $productos;
    
    public function __construct(){
        
        require_once 'MODELO/conectar.php';
        $this->db= Conectar::conexion();
        $this->productos = array();
        
    }
    
    public function get_productos(){
       
        $consulta=$this->db->query("SELECT * FROM inventario.productos");
        
        while($fila =$consulta->fetch(PDO::FETCH_ASSOC)){
            $this->productos[]=$fila;
        }
    //    echo $this->productos[0];
        return $this->productos;   
    }   
}
