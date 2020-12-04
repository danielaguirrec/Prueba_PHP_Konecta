<?php


class Productos_modelo{
    
    private $db;
    private $productos;
    
    public function __construct(){
        
        require_once 'conectar.php';
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
    
    
    
    
    ////
    
    public function insertarRegistro($nombre1, $referencia1, $precio1, $peso1, $categoria1,$stock1,$fecha1,$fecha2){  

     $nombre = $nombre1;
     $referencia =$referencia1;
     $precio = $precio1; 
     $peso = $peso1;
     $categoria = $categoria1;
     $stock = $stock1;
     $fecha = $fecha1;
     $fecha = $fecha2;
     $id = 2; 
     $fecha = date('Y-m-d', strtotime(str_replace('-', '/', $fecha)));
     $sql ="INSERT INTO inventario.productos (Nombre_de_producto, Referencia, Precio, Peso, Categoria, Stock,Fecha_de_Creacion, Fecha_de_ultima_venta)"
     ."VALUES ($nombre, $referencia, $precio, $peso, $categoria, $stock, $fecha, $fecha)";
 
       $consulta=$this->db->query($sql);
        $this->db = null;
       echo "INSERCION EXITOSA";
 
    
    }
    
       public function actualizarRegistro($id1,$nombre1, $referencia1, $precio1, $peso1, $categoria1,$stock1,$fecha1,$fecha2){  

     $nombre = $nombre1;
     $referencia =$referencia1;
     $precio = $precio1; 
     $peso = $peso1;
     $categoria = $categoria1;
     $stock = $stock1;
     
     $fecha = $fecha1;
     $fecha = $fecha2;
     $id = $id1;
        echo $fecha;
        $fecha = date('Y-m-d', strtotime(str_replace('-', '/', $fecha)));
        
        
        $sql = "UPDATE inventario.productos SET Nombre_de_producto = $nombre, Referencia=$referencia, Precio=$precio, Peso=$peso, Categoria= $categoria, Stock=$stock,Fecha_de_Creacion=$fecha,Fecha_de_ultima_venta=$fecha   WHERE id = $id";
          $consulta=$this->db->query($sql);
          
          $this->db = null;
          
        
 
    
    }
    
    
    
    
}

