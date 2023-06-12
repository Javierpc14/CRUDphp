<?php
require_once('Database.php');
$database = new Database();
$resultados = $database->getAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url(style.css);
    </style>
</head>

<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Precio</th>
            <th>Descripcion</th>
        </tr>
        <?php
        foreach ($resultados as $row) {
            print "<tr>";
            print "<td>" . $row['id'] . "</td>";
            print "<td>" . $row['marca'] . "</td>";
            print "<td>" . $row['modelo'] . "</td>";
            print "<td>" . $row['precio'] . "</td>";
            print "<td>" . $row['descripcion'] . "</td>";
            echo "<td>";
            echo " <a href='Delete.php?id=" . $row["id"] . "&pagina=index.php&tabla=ordenadores'><button class='borrar'>Borrar</button></a>";
            echo "</td>";
            echo "<td>";
            echo " <a href='FormularioUpdate.php?id=".$row["id"]."'><button class='actualizar'>Actualizar</button></a>";
            echo "</td>";
            print "</tr>";
        }
        ?>
        <tr>
          <td colspan=7>
            <a href='create.php'><button class='insertar'>Insertar</button></a>
          </td>
        </tr>
    </table>
</body>

</html>