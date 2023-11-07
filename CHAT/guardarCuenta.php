<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();
        $usuario=$_POST["usuario"];
        $contrasenya =$_POST["contraseña"];
        $comprobador = true;
        $archivo = fopen("datos.csv","r");
        if($archivo){
            while(($datos = fgets($archivo)) != false){
                $apartados = explode(",", $datos);
                if(count($apartados) == 2){
                    $usuarioExistente = $apartados[0];
                    if($usuario==$usuarioExistente){
                        $comprobador = false;
                        break;
                    }
                }
            }
        }
        fclose($archivo); 
        if($comprobador){
            $archivo2 = fopen("datos.csv","a");
            fwrite($archivo2, "$usuario, $contrasenya \n");
            fclose($archivo2);
            $_SESSION['guardar'] = "Cuenta creada correctamente.";
            header('Location: login.php');
        }
        else{
            $_SESSION['guardar'] = "Ya existe.";
            header('Location: CrearCuenta.php');
        }
    ?>
</body>
</html>