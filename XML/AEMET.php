<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
  body{
    text-align:center;
  }
  table{
    margin-left:37%;
    border-color:green;
  }
  th{
    background-color:lightgreen;
  }
</style>
<body>
  <h1>AEMET</h1>
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
      "Alcorcon"=>"alcorcon.xml",
      "Madrid"=>"madrid.xml",
      "Humanes"=>"humanes.xml"
    ];
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Obtener el valor seleccionado del municipio
      $selectedMunicipio = $_POST["municipio"];
  
      // Verificar si el municipio está en la lista
      if (array_key_exists($selectedMunicipio, $municipios)) {
          // Construir la ruta completa al archivo XML del municipio seleccionado
          $xmlFile = $municipios[$selectedMunicipio];
  
          // Verificar si el archivo XML existe
          if (file_exists($xmlFile)) {
              // Cargar el contenido del archivo XML
              $xml = simplexml_load_file($xmlFile);
  
              // Mostrar la tabla de temperaturas máximas y mínimas por día
              echo '<h3>Temperaturas para ' . $selectedMunicipio . '</h3>';
              echo '<table border="1">';
              echo '<tr><th>Día</th><th>Temperatura Máxima</th><th>Temperatura Mínima</th></tr>';
              
              foreach ($xml->prediccion->dia as $dia) {
                  echo '<tr>';
                  echo '<td>' . $dia['fecha']. '</td>';
                  echo "<td>".$dia->temperatura->maxima ."</td>";
                  echo "<td>".$dia->temperatura->minima ."</td>";
                  echo "</tr>";
              }
              
              echo '</table>';
          } else {
              echo 'El archivo XML para ' . $selectedMunicipio . ' no existe.';
          }
      } else {
          echo 'Municipio no válido.';
      }
  }
  ?>
</body>
</html>
