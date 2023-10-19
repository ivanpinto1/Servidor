<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    td{
        border: darkblue solid;
    }
    tr{
        background-color: lightgray;
    }
</style>
<body>
    <table>
        <?php
            $file = fopen("AccidentesBicicletas_2023.csv", "r");

            while (!feof($file)) {
                $palabra = fgets($file);
                $Arraypalabra = explode(";", $palabra);

                if (count($Arraypalabra) >= 15) {
                    echo "<tr>";
                    echo "<td>" . $Arraypalabra[1] . "</td>";
                    echo "<td>" . $Arraypalabra[9] . "</td>";
                    echo "<td>" . $Arraypalabra[14] . "</td>";
                    echo "</tr>";
                }
            }

            fclose($file);
        ?>
    </table>
</body>
</html>
