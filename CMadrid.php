<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contaminacion</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <table>
        <?php
        $file = fopen("horario.csv", "r") or die("No se ha podido abrir");

        $estaciones = [
            4 => "Plaza de España",
            8 => "Escuelas Aguirre",
            11 => "Avenida Ramón y Cajal",
            16 => "Arturo Soria",
            17 => "Villaverde Alto",
            18 => "C/ Farolillo",
            24 => "Casa de Campo",
            27 => "Barajas",
            47 => "Mendez Alvaro",
            48 => "Pº Castellana",
            49 => "Retiro",
            50 => "Plaza Castilla",
            54 => "Ensanche Vallecas",
            55 => "Urb Embajada (Barajas)",
            56 => "Plaza Elíptica",
            57 => "Sanchinarro",
            58 => "El Pardo",
            59 => "Juan Carlos I",
            60 => "Tres Olivos",
        ];

        $nombreMagnitud = "magnitudes";

        $magnitudes = [
            1 => "Dióxido de Azufre",
            6 => "Monóxido de Nitrógeno",
            7 => "Monóxido de Nitrógeno",
            8 => "Dióxido de Nitrógeno",
            9 => "Partículas < 2.5 µm",
            10 => "Partículas < 10 µm",
            12 => "Óxidos de Nitrógeno",
            14 => "Ozono",
            20 => "Tolueno",
            30 => "Benceno",
            35 => "Etilbenceno",
            37 => "Metaxileno",
            38 => "Paraxileno",
            39 => "Ortoxileno",
            42 => "Hidrocarburos totales (hexano)",
            43 => "Metano",
            44 => "Hidrocarburos no metánicos (hexano)",
        ];
        $nombreEstaciones = "estaciones";
       
        while (!feof($file)) {
            $palabra = fgets($file);
            $palabra = explode(";", $palabra);
            
            if(count($palabra)>=2)
            {
                $est = isset($estaciones[$palabra[2]]) ? $estaciones[$palabra[2]]:$nombreEstaciones;
                $mg = isset($magnitudes[$palabra[3]]) ? $magnitudes[$palabra[3]]:$nombreMagnitud;
                echo "<tr>";
                echo "<td>$est</td>";
                echo "<td>$mg</td>";
            }
            
            for ($i = 8; $i < count($palabra); $i += 2) {
                echo "<td>{$palabra[$i]}</td>";
            }

            echo "</tr>";
         
        }

        fclose($file);

        ?>


    </table>
</body>


</html>