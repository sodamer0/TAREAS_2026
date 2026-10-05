<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo con POST</title>

</head>
<body>
    <h1>EJEMPLO CON POST</h1>
    <form action="procesar.php" method="post">
        <label>Nombre:
            <input type="text" name="nombre">
        </label>

        <label>Edad:
            <input type="number" name="edad">
        </label>

        <button type="submit">Enviar</button>
    </form>

    <?php  
        if (isset($_POST["nombre"])) {
            $nombre = $_POST["nombre"];
            echo "Nombre: " . $nombre . "<br>";
        }

        if (isset($_POST["edad"])) {
            $edad = $_POST["edad"];
            echo "Edad: " . $edad;
        }
    ?>



</body>
</html>