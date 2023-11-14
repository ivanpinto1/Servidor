<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
    body {
      text-align: center;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    table {
      border-collapse: collapse;
      width: 40%; /* Puedes ajustar el ancho de la tabla según tus necesidades */
      margin: 0 auto; /* Esto centra la tabla horizontalmente */
    }

    th, td {
      border: 1px solid green;
      text-align: left;
      padding: 8px;
    }

    th {
      background-color: lightgreen;
    }
    select{
      height: 21px;
    }
</style>
<body>
  <h1><u>AEMET</u></h1>
  <h2>Ver temperatura</h2><br>
  <form method="POST">
    <select name="municipio" id="municipio">
      <option value="Alcorcon">Alcorcón</option>
      <option value="Madrid">Madrid</option>
      <option value="Humanes">Humanes</option>
    </select>
    <input type="submit" value="VER">
  </form>
  <?php
    $municipios = [
      "Alcorcon"=>"https://www.aemet.es/xml/municipios/localidad_28007.xml",
      "Madrid"=>"https://www.aemet.es/xml/municipios/localidad_28079.xml",
      "Humanes"=>"https://www.aemet.es/xml/municipios/localidad_28073.xml"
    ];
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Obtener el valor seleccionado del municipio
      $selectedMunicipio = $_POST["municipio"];
  
      // Verificar si el municipio está en la lista
      if (array_key_exists($selectedMunicipio, $municipios)) {
          // Construir la ruta completa al archivo XML del municipio seleccionado
          $xmlFile = $municipios[$selectedMunicipio];
          $xml = simplexml_load_file($xmlFile);
  
          // Mostrar la tabla de temperaturas máximas y mínimas por día
          echo '<h3>Temperaturas para ' . $selectedMunicipio . '</h3>';
          echo '<table border="1">';
          echo '<tr><th>Día</th><th>Temperatura Máxima</th><th>Temperatura Mínima</th></tr>';
          
          foreach ($xml->prediccion->dia as $dia) {
              echo '<tr>';
              echo '<td>' . $dia['fecha']. '</td>';
              echo "<td>".$dia->temperatura->maxima ." ºC </td>";
              echo "<td>".$dia->temperatura->minima ." ºC </td>";
              echo "</tr>";
          }
          
          echo '</table>';
      } else {
          echo 'Municipio no válido.';
      }
  }
  ?>
</body>
</html>
