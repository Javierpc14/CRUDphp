<?php
    require_once("Database.php");
    $id=$_GET ['id'];
    $valores = [$_POST['marca'], $_POST['modelo'], $_POST['precio'], $_POST['descripcion']];
    $sql = "UPDATE ordenadores SET marca = '$valores[0]', modelo = '$valores[1]', precio = $valores[2], descripcion = '$valores[3]' WHERE id = $id;";
    $db =new Database();
    echo $sql;
    $db->modificacion($sql);
    header('Location: index.php ');
?>