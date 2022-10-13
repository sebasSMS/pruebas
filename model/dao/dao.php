<?php
    class ModelRegistros{


        private $cedula;
        private $nombre;
        private $tipo;
        private $direccion;
        private $fechaDeNaci;
        private $estado;
    
        public function __construct($objDtoCliente){
            $this-> cedula = $objDtoCliente-> getCedula();
            $this-> nombre  =  $objDtoCliente-> getNombre() ;
            $this-> tipo  =  $objDtoCliente-> getTipo() ;
            $this-> direccion =  $objDtoCliente-> getDireccion() ;
            $this-> fechaDeNaci =  $objDtoCliente->  getFechaDeNaci () ;
            
        }


        public function mldInsertarCliente(){
            /* creamos la sentecia */
            $sql="INSERT INTO `clientes`(`CEDULA`, `nombre`, `tipoDeDocumeto`, `direccion`, `fechaDeNaci`) VALUES (?,?,?,?,?)";
            $this -> estado = false;
            /* creamos el try catch  */
            try {
                /* llamamos a la conexion */
                $con = new Conexion();
                $stmt = $con -> conexion() -> prepare($sql);
                $stmt -> bindParam(1, $this->cedula, PDO::PARAM_INT );
                $stmt -> bindParam(2, $this->nombre, PDO::PARAM_STR );
                $stmt -> bindParam(3, $this->tipo, PDO::PARAM_STR );
                $stmt -> bindParam(4, $this->direccion, PDO::PARAM_STR );
                $stmt -> bindParam(5, $this->fechaDeNaci, PDO::PARAM_STR );
                $stmt -> execute();
                $this -> estado = true;
                


            } catch (PDOException $ex) {
                echo "Hay un error en el dao al isertar  el cliente " . $ex -> getMessage();
            }
            return $this -> estado;


        }/* fin de insertar cliente */
        public function mdlMostrarRol(){             #Funcion utilizada para visualizar a todos los tipos de rol registrados
            $sql = "SELECT `idTD`, `TD` FROM `tipodocumeto`";  //Procedimiento almacenado
            try {
                $con = new Conexion();
                $stmt = $con -> conexion() -> prepare($sql);
                $stmt -> execute();
                $resulset = $stmt;
                
            } catch (PDOException $e) {
                echo "Error en el metodo consultar usuario " . $e -> getMessage();
            }
            return $resulset;
        }
        public function mdlListarUsuario(){
            $sql="SELECT `CEDULA`, `nombre`, `tipoDeDocumeto`, `direccion`, `fechaDeNaci` FROM `clientes` ";
            $resultset= false;
            try {
                $con = new Conexion();
                $stmt = $con -> conexion() -> prepare($sql);
                $stmt -> execute();
                $resultset = $stmt;
     
            } catch (PDOException $ex) {
                echo "Hay un error en el DAO al listar usuario " . $ex -> getMessage();
            }
            return $resultset;  
        
        }
    }
?>