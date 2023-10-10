<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table, td, tr{
        border: green solid;
    }
</style>
<body>
    <?php
    $nombre=$_POST["nombre"];
    $apellido=$_POST["apellido"];
    $telefono=$_POST["telefono"];
    $fichero = fopen("agenda.csv", "a");
    $contacto = "$nombre, $apellido, $telefono\n";
    fwrite($fichero, $contacto);
    fclose($fichero);
    ?>
    <table>
        <tr>
            <td>
                <?php
                $fichero = fopen("agenda.csv", "r");
                while(($datos = fgetcsv($fichero, 1000, ","))){
                    echo"<tr>";
                    foreach($datos as $dato){
                        echo"<td>$dato</td>";
                    }
                    echo"</tr>";
                }
                fclose($fichero);
                ?>
            </td>
        </tr>
    </table>
</body>
</html>