<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, td, th{
            border: black solid;
        }
        th{
            background:lightgreen;
        }
    </style>
</head>
<body>
    <?php
        $nombre=$_POST["nombre"];
        $matricula=$_POST["matricula"];
        $telefono=$_POST["telefono"];
        $email=$_POST["email"];
        $marca=$_POST["marca"];
        $seguro=$_POST["seguro"];
        $horario=$_POST["horario"];
        ?>

    <table>
        <tr>
            <th>Nombre</th>
            <td><?php echo $nombre?></td>
        </tr>
        <tr>
            <th>Matrícula</th>
            <td><?php echo $matricula?></td>
        </tr>
        <tr>
            <th>Telefono</th>
            <td><?php echo $telefono?></td>
        </tr>   
        <tr>
            <th>Email</th>
            <td><?php echo $email?></td>
        </tr>     
        <tr>
            <th>Marca</th>
            <td><?php echo $marca?></td>
        </tr>
        <tr>
            <th>Seguro</th>
            <td><?php echo $seguro?></td>
        </tr>
        <tr>
            <th>Horario</th>
            <td><?php 
            if(isset($_POST['submit'])){
                if(!empty($_POST['horario'])){
                    foreach($_POST['horario'] as $selected){
                        echo $selected;
                    }
                }
            }
            ?>
            </td>
        </tr>
    </table>

</body>
</html>