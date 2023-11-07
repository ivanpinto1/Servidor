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
    p{
        color: red;
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
        <h1>Crear Usuario</h1>
        <form method ="POST" action="guardarCuenta.php">
            <label for="usuario">Usuario</label>
            <br>
            <input type="text" name="usuario" id="usuario" required>
            <br>
            <br>
            <label for="contraseña">Contraseña</label>
            <br>
            <input type="password" name="contraseña" id="contraseña" required>
            <br>
            <br>
            <input type="submit" name="crear" id="crear">
        </form>
        <br>
        <a href="login.php">Ya tengo cuenta, iniciar sesión</a>
        <br><br><br>
    </div>
    <?php
        if($guardar != ""){
            echo "<p>$guardar</p>";
        }
    ?>
</body>
</html>