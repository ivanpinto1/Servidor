<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table{
        text-align: center;
        margin-left: 30%;
        margin-top: 5%;
    }
    td{
        border: blue solid;
    }
    th{
        border: blue solid;
        background-color: lightblue;
    }
</style>
<body>
<table>
    <tr>
        <th>Nombre</th>
        <th>Teléfono</th>
    </tr>

    <?php
    $archivo_csv = 'contacto.csv';
    if (($gestor = fopen($archivo_csv, 'r')) != false) {
        while (($datos = fgetcsv($gestor, 1000, ',')) != false) {
            $nombre = $datos[0];
            $telefono = $datos[1];

            echo "<tr>";
            echo "<td>$nombre</td>";
            echo "<td>$telefono</td>";
            echo "</tr>";
        }
        fclose($gestor);
    }
    ?>
</table>

</body>
</html>