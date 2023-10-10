<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <form method="post" action="Taller2.php">
        <label for="nombre">Nombre</label>
        <input name="nombre" type="text" id="nombre">
        <br>
        <label for="matricula">Matricula</label>
        <input name="matricula" type="text" id="matricula">
        <br>
        <label for="telefono">telefono</label>
        <input name="telefono" type="number" id="telefono">
        <br>
        <label for="email">Email</label>
        <input name="email" type="email" id="email">
        <br>
        <label for="marca">Marca</label>
        <select name="marca" id="marca">
            <option value="SE">Seat</option>
            <option value="CI">Citroen</option>
            <option value="ME">Mercedes</option>
        </select>
        <br>
        <input type="radio" id="siseguro" name="seguro" value="Si usa seguro">
        <label for="siseguro">Si usa seguro</label><br>
        <input type="radio" id="noseguro" name="seguro" value="No usa seguro">
        <label for="noseguro">No usa seguro</label>
        <br>
        <input type="checkbox" id="mañana" name="horario[]" value="Mañana">
        <label for="mañana">Mañana</label><br>
        <input type="checkbox" id="tarde" name="horario[]" value="Tarde">
        <label for="tarde">Tarde</label><br>
        <input type="checkbox" id="noche" name="horario[]" value="Noche">
        <label for="noche">Noche</label><br>
        <input type="submit" name="submit">
    </form>
</body>
</html>
