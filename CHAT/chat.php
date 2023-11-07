<!DOCTYPE html>
<html>
<head>
    <title>Comentarios</title>
</head>
<style>
    body{
        text-align:center;
        background-color: yellowgreen;
    }
    input{
        background-color: lightgreen;
    }
    textarea{
        width: 350px;
        height: 100px;
    }
</style>
<body>
    <h2>Bienvenido, <?php 
    session_start(); 
    echo $_SESSION['usuario']; 
    ?></h2>

    <form method="post">
        <h3>Comentario:</h3> <textarea name="comentario"></textarea><br><br>
        <input type="submit" name="guardar" value="Guardar Comentario"><br><br>
    </form>

    <?php
    if (isset($_POST['guardar'])) {
        $usuario = $_SESSION['usuario'];
        $comentario = $_POST['comentario'];
        $hora = date('Y-m-d H:i:s');

        $csv_data = "$usuario,$hora,$comentario\n";
        $csv_file = 'comentarios.csv';

        if (file_put_contents($csv_file, $csv_data, FILE_APPEND | LOCK_EX)) {
            echo "Comentario guardado con éxito.";
        } else {
            echo "Error al guardar el comentario.";
        }
    }
    ?>
    <div>
        <?php
        $csv_file = 'comentarios.csv';

        if (file_exists($csv_file)) {
            $fichero = fopen($csv_file, "r");

            while (($datos = fgetcsv($fichero, 1000, ",")) !== false) {
                $usuario = isset($datos[0]) ? $datos[0] : '';
                $hora = isset($datos[1]) ? $datos[1] : '';
                $comentario = isset($datos[2]) ? $datos[2] : '';

                echo "<p><strong>Usuario:</strong> $usuario<br><strong>Hora:</strong> $hora<br><strong>Comentario:</strong> $comentario</p>";
            }

            fclose($fichero);
        }
        ?>
    </div>
    <br>
    <form action ="login.php" method="post">
        <input type="submit" name="cerrar" value="Cerrar Sesión">
    </form>
</body>
</html>
