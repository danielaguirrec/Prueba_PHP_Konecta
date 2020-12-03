<?php


class Productos_modelo{
    
    private $db;
    private $productos;
    
    public function __construct(){
        
        require_once '../MODELO/conectar.php';
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
     
                                                           //  $consulta=$this->db->query("SELECT * FROM inventario.productos");
                                                             
     /*$sql ="INSERT INTO inventario.productos (Nombre_de_producto, Referencia, Precio, Peso, Categoria, Stock, Fecha_de_Creacion, Fecha_de_ultima_venta)".
             "VALUES (:nombre, :referencia, :precio, :peso, :categoria, :stock, :fecha1, :fecha2)";*/
     
       $sql ="INSERT INTO inventario.productos (Nombre_de_producto, Referencia, Precio, Peso, Categoria, Stock,Fecha_de_Creacion, Fecha_de_ultima_venta)".
             "VALUES ( $nombre, $referencia, $precio, $peso, $categoria, $stock, $fecha, $fecha)";
       
       
       $consulta=$this->db->query($sql);
       
      // $conn->exec($sql);
     
     
   //   $resultado=$base->prepare($sql);
      
      
     
     
     //$base= conectarPDO();
       // $base = new PDO('mysql:host=localhost; dbname=asesorkonecta','root','');
      /* if($base){
      //$base = new PDO('mysql:host=localhost; dbname=asesorkonecta','root','');
            $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $base->exec("SET CHARACTER SET utf8");*/
             
            /* $sql="INSERT INTO contactoscelular (nombre, cedula, celular)"
                     . "VALUES (:nombre, :cedula, :celular)";*/
           //$sql="SELECT * FROM contactoscelular";
         /*   
            $resultado = $base->prepare($sql);
            $valores = array(":nombre"=>$nombre,
                 ":cedula"=>$cedula,
                ":celular"=>$celular);
            $resultado->execute($valores);
            
            echo "El registro perteneciente a \n Nombre: ".$valores[':nombre']. ", fue registrado en la base de datos";
            }*/
            // $base = NULL; //Cierro la conexion ara evitar futuros errores
         
        /*  else{
              echo"no se pudo conectar a la BDD";
              return NULL;
          } 
          } */
    
    
    
    
    }
    
    
    
    
}

echo "hola";