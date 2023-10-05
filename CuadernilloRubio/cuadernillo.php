<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="rubio.php">

        <?php
            $firstnumber = rand(1,50);
            $secondnumber = rand(1,50);
            $operacion = rand(1,4);
        ?>
            <label for="sum"><?php            
            if($operacion == 1){
                echo "$firstnumber + $secondnumber = ";
                $result = $firstnumber + $secondnumber;
            }
            else if($operacion == 2){
                echo "$firstnumber - $secondnumber = ";
                $result = $firstnumber - $secondnumber;

            }
            else if($operacion == 3){
                echo "$firstnumber * $secondnumber = ";
                $result = $firstnumber * $secondnumber;

            }
            else if($operacion == 4){
                echo "$firstnumber / $secondnumber = ";
                $result = $firstnumber / $secondnumber;
            } 
            ?></label>
            <input id="sum" type="hidden" name="firstnumber" value="<?php echo $firstnumber;?>">
            <input id="sum" type="hidden" name="secondnumber" value="<?php echo $secondnumber;?>">
            <input name="suma" type="number" id="sum" step="any">
            <br>
            <input type="submit">
    </form>  
</body>
</html>