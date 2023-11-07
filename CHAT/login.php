<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        text-align: center;
        background-color:yellowgreen;
    }
    div{
        background-color: lightgreen;
        margin-left:40%;
        margin-right:40%;
        border: green solid;
        margin-top:10%;
    }
</style>
<body>
    <?php
            session_start();
            if(isset($_SESSION['guardar'])){
                $guardar = $_SESSION['guardar'];
                unset($_SESSION['guardar']);
            }else{
                $guardar="";
            }
    ?>
    <div>
        <h1>Iniciar Sesión</h1>
        <form action="ComprobarContraseña.php" method="post">
            <label for="usuario">usuario</label><br>
            <input type="text" name="usuario" id="usuario" required><br>
            <br>
            <label for="contraseña">contraseña</label><br>
            <input type="password" name="contraseña" id="contraseña" required><br><br>
            <input type="submit" name="iniciar" id="iniciar">
        </form>
        <br>
        <a href="CrearCuenta.php">¿No tienes cuenta? Crear cuenta</a>
        <br><br><br>
    </div>
    <?php
        if($guardar != ""){
            echo "<p>$guardar</p>";
        }
    ?>
</body>
</html>