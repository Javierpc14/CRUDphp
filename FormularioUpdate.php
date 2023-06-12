<?php
require_once("Database.php");
$id = $_GET['id'];
$db = new Database();
$admin = $db->getElementById("ordenadores", $id);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url(formularioStyle.css);
        @import url(fontawesome/css/all.min.css);
    </style>
</head>

<body>
    <h1>Actualizar Ordenadores</h1>
    <form method="POST" action="Update.php?id=<?php echo $id?>">
        <label for="marca">Marca:</label>
        <input type="text" name="marca" value="<?php echo $admin['marca'] ?>"><br>

        <label for="modelo">Modelo:</label>
        <input type="text" name="modelo" value="<?php echo $admin['modelo'] ?>"><br>

        <label for="precio">Precio:</label>
        <input type="number" name="precio" value="<?php echo $admin['precio'] ?>"><br>

        <label for="descripcion">Descripcion:</label>
        <input type="text" name="descripcion" value="<?php echo $admin['descripcion']?>"><br>

        <div class="enlace">
            <i class="fas fa-arrow-left" onclick="history.back()"></i>
        </div>

        <input type="submit" value="Actualizar">
    </form>
</body>

</html>