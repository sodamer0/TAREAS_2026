<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO02</title>
</head>

<body>
    <form action="" method="post">
        <div>
            <label for="fecha">Fecha</label>
            <input type="date" id="fecha" required>
        </div>
        <div>
            <label for="hora">Hora</label>
            <input type="time" id="hora" value="13:00" min="13:00" max="15:00" required>
        </div>
        <div>
            <span>Ubicación</span>
            <div>
                <input type="radio" id="interior" name="ubicacion" value="interior">
                <label for="interior">Interior</label>
            </div>
            <div>
                <input type="radio" id="terraza" name="ubicacion" value="terraza" checked>
                <label for="terraza">Terraza</label>
            </div>
        </div>
        <div>
            <label for="alergenos">Alérgenos</label>
            <select id="alergenos" name="alergenos[]" multiple>
                <option value="" disabled>Seleccionar alérgenos</option>
                <option value="gluten">Gluten</option>
                <option value="lactosa">Lactosa</option>
                <option value="frutos_secos">Frutos secos</option>
                <option value="huevo">Huevo</option>
            </select>
        </div>
        <button type="submit">Enviar reserva</button>

    </form>

    <?php

    if (isset($_POST["alergenos"])) {
        foreach ($_POST["alergenos"] as $alergeno) {
            echo $alergeno . "<br>";
        }
    }

    if (isset($POST["ubicacion"])) {
        $ubicacion = $_POST["ubicacion"];
        echo "<p> El ubicacion seleccionada es <span>$ubicacion<s/span></p>";
    }

    ?>


</body>

</html>