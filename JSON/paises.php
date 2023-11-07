<!DOCTYPE html>
<html>
<head>
    <title>Información de Países</title>
</head>
<style>
    table{
        border: black solid;
    }
</style>
<body>
    <?php
    $url = 'https://restcountries.com/v3.1/all';
    $json_data = file_get_contents($url);
    $data = json_decode($json_data, true);
    ?>

    <h1>Información de Países</h1>
    <table>
        <tr>
            <th>Nombre del País</th>
            <th>Nombre de la Capital</th>
            <th>Link a Google Maps</th>
        </tr>
        <?php
        foreach ($data as $country) {
            $countryName = $country['name']['common'];
            $capitalName = isset($country['capital'][0]) ? $country['capital'][0]:'no tiene';
            $googleMapsLink = "https://www.google.com/maps/place/" . urlencode($capitalName);

            echo "<tr>";
            echo "<td>$countryName</td>";
            echo "<td>$capitalName</td>";
            echo "<td><a href='$googleMapsLink' target='_blank'>Ver en Google Maps</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>

