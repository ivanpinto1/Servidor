<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Insertar</h2>
    <form method="POST">
        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name" required>
        <br>
        <label for="telefono">telefono:</label>
        <input type="text" name="telefono" id="telefono" required>
        <br>
        <input type="submit" value="Enviar" name="insertar">
    </form>
    <h2>Mostrar Agenda</h2>
    <form method="POST">
        <input type="submit" value="Ver Alumnos" name="mostrar"> 
    </form>
    <h2>Buscar Contacto</h2>
    <form method="POST">
        <label for="contacto">Nombre:</label>
        <input type="text" name="contacto" id="contacto" required>
        <br>
        <input type="submit" value="Buscar" name="buscar">
    </form>
    <?php
    include('accesomongo.php');
    include('funcionesmongo.php');
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST['insertar'])){
            insertar($collection,$_POST["name"],$_POST["telefono"]);
        }else if(isset($_POST['mostrar'])){
            $datos = mostrar($collection);
            echo "<table border='1'>
                <tr><th>Nombre</th><th>Telefono</th></tr>";
            foreach($datos as $dato){
                $nombre = $dato['nombre'];
                $telefono = $dato['telefono'];
                echo "<tr><td>$nombre</td><td>$telefono</td></tr>";
            }
            echo "</table>";
        }else if (isset($_POST['buscar'])) {
            $nombreBuscado = $_POST["contacto"];
            $datos = buscar($collection, $nombreBuscado);
            if (!empty($datos)) {
                foreach ($datos as $dato) {
                    echo"<h2>Datos Búsqueda</h2>";
                    $nombre = $dato['nombre'];
                    $telefono = $dato['telefono'];
                    echo "<p><b>Nombre:</b> $nombre</p>";
                    echo "<p><b>Teléfono:</b> $telefono</p>";
                }
            } else {
                echo "<p>No se encontró ningún contacto con ese nombre.</p>";
            }
        }
    }
    ?>
</body>
</html>