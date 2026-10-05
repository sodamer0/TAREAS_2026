<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo con Get</title>

</head>
<body>
    <h1>EJEMPLO CON GET</h1>
    <form action="procesar.php" method="get">
        <label>Nombre:
            <input type="text" name="nombre">
        </label>

        <label>Edad:
            <input type="number" name="edad">
        </label>

        <button type="submit">Enviar</button>
    </form>

    <?php  
        if (isset($_GET["nombre"])) {
            $nombre = $_GET["nombre"];
            echo "<br>Nombre: " . $nombre . "<br>";
        }

        if (isset($_GET["edad"])) {
            $edad = $_GET["edad"];
            echo "<br>Edad: " . $edad;
        }
    ?>



</body>
</html>