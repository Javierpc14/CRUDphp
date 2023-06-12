<?php
require_once 'insert.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $precio = $_POST['precio'];
    $descripcion = $_POST['descripcion'];

    $insert = new Insert();
    $resultado = $insert->insertar($marca, $modelo, $precio, $descripcion);
    header('Location: index.php');
}
?>

<html>

<head>
    <title>Insertar un Ordenador</title>
    <style>
        @import url(formularioStyle.css);
        @import url(fontawesome/css/all.min.css);
    </style>
</head>

<body>
    <h1>Insertar un Ordenador</h1>
    <form method="POST" action="">
        <label for="marca">Marca:</label>
        <input type="text" name="marca"><br>

        <label for="modelo">Modelo:</label>
        <input type="text" name="modelo"><br>

        <label for="precio">Precio:</label>
        <input type="text" name="precio"><br>

        <label for="descripcion">Descripcion:</label>
        <input type="text" name="descripcion"><br>

        <div class="enlace">
            <i class="fas fa-arrow-left" onclick="history.back()"></i>
        </div>

        <input type="submit" value="Insertar">
    </form>
</body>

</html>