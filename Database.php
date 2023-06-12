<?php
    class Database{
        /**
         * Funcion que realiza la configuracion de la
         * conexion a la base de datos
         */
        public static function conectar(){
            $driver = 'mysql';
            $host = '127.0.0.1';
            $port = '3306';
            $user = 'javi';
            $password = '123456';
            $bd = 'practicaordenadores';
        
            /* Conectar a una base de datos de MySQL invocando al controlador */
            $dsn = "$driver:dbname=$bd;host=$host;port=$port";
        
        
            try {
                $gbd = new PDO($dsn, $user, $password);
            } catch (PDOException $e) {
                echo 'Falló la conexión: ' . $e->getMessage();
            }

            return $gbd;
        }

        /**
         * Funcion que recoge todos los datos de una tabla
         * En este caso de la tabla ordenadores
         */
        public function getAll(){
            // Self comprueba que conectar() este en la misma clase
            $sql = "SELECT * FROM ordenadores";
            $resultados = self::conectar()->query($sql);
            return $resultados;
        }

        public function getElementById($tabla,$id){
            $conexion=self::conectar();
            $sql = "SELECT * FROM $tabla WHERE id = $id";
            $resultados = $conexion->query($sql);
    
         return $resultados->fetch(PDO::FETCH_ASSOC);
        }
    
        function modificacion($sql){
            $conexion =  self::conectar();
            $conexion->exec($sql);
        }
    }
?>