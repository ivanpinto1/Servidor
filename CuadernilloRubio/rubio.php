<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $firstnumber =$_POST["firstnumber"];
        $secondnumber =$_POST["secondnumber"];
        $operacion = $_POST["suma"];
        $suma = $firstnumber + $secondnumber;
        $multiplicacion = $firstnumber * $secondnumber;
        $division = $firstnumber / $secondnumber;
        $resta = $firstnumber - $secondnumber;
        if($operacion == $suma || $operacion ==$resta || $operacion == $division || $operacion ==$multiplicacion){
            echo "El resultado es correcto";
            echo"<br><a href='cuadernillo.php'><input type='submit' value='Volver'></a>";

        }
        else
        {
            echo"incorrecto";
            echo"<br><input type='submit' value='volver' onClick='history.go(-1);'>";
        }
    ?>
    <br>
    </body>
</html>