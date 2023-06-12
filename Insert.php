<?php
class Insert
{

    public function conectar()
    {
        $driver = "mysql";
        $host = 'localhost';
        $port = '3306';
        $bd = 'practicaordenadores';
        $user = 'javi';
        $password = '123456';

        $dsn = "$driver:dbname=$bd;host=$host;port=$port";
        $gbd = null;
        try {
            $gbd = new PDO($dsn, $user, $password);
        } catch (PDOException $e) {
        }
        return $gbd;
    }



    public function insertar($marca, $modelo, $precio, $descripcion)
    {
        // Esta es la consulta sql que inserta en la base de datos segun los id que se les pase por parametro
        $sql = "INSERT INTO ordenadores VALUES(null, :marca, :modelo, :precio, :descripcion)";
        $conexion = self::conectar();
        $stmt = $conexion->prepare($sql);
        $stmt->bindParam(':marca', $marca);
        $stmt->bindParam(':modelo', $modelo);
        $stmt->bindParam(':precio', $precio);
        $stmt->bindParam(':descripcion', $descripcion);
        $resultado = $stmt->execute();
        if ($resultado !== false) {
            echo "<script>alert('Registro insertado correctamente');</script>";
        } else {
            echo "<script>alert('No se pudo insertar el registro');</script>";
        }
    }
}