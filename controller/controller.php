<?php
    class ControllerRegistros{
                /* funcion para insertar als contraseña */
                public function crtInsertarCliente(
                $cedula,
                $nombre,
                $tipo,
                $direccion,
                $fechaDeNaci){
                    $ojbDtoCliente = new Registros($cedula,$nombre,$tipo,$direccion,$fechaDeNaci);
                    $ojbDaoCliente = new ModelRegistros($ojbDtoCliente);
                    if ($ojbDaoCliente -> mldInsertarCliente() == true){
                        echo"
                        <script>
                         alert('insertado');
                        </script>
                        ";
        
                    }else{
                        echo "cliente no insertado";
                    }
                    
        
        
                }/* fin de la funcion */
                public function ctrMostrarRol(){ 
                    $lista = false;
                    try {
                        $ojbDtoCliente = new Registros(NULL,NULL,NULL,NULL,NULL);
                        $ojbDaoCliente = new ModelRegistros( $ojbDtoCliente );
                        $lista = $ojbDaoCliente -> mdlMostrarRol() -> fetchAll();
        
                    } catch (PDOException $e) {
                        echo "error al mostrar los Roles de usuarios" . $e -> getMessage();
                    }
                    return $lista;
                }/* fin de la funcion */
                public function ctrListarUsuario(){
                    $array = false; 
                    try {
                        $objDtoUsuario = new Registros(null,null,null,null,null,null);
                        $objDaoUsuario = new ModelRegistros($objDtoUsuario);
                        $array =  $objDaoUsuario -> mdlListarUsuario() -> fetchALL();
                    } catch (\Throwable $e) {
                        echo"Error en el controlador $e";
                    }
                    return $array;
        
                }/* fin de la funcion */

    }
?>