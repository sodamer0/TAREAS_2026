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

        if (isset($_POST["hora"])) {
            foreach ($_POST as $key => $value) {
                if (is_array($value)) {
                    $value_string = implode (", ", $value);
                    echo "<p>Clave: " $key => Valor: htmlspecialchars($value)." </p>";
                } else {
                    echo "<p>Clase: " $key => Valor: htmlspecialchars($value)." </p>";
                }
            }
        }

        if (isset($POST["fecha"])) {
            echo "<p> La fecha es: " . htmlspecialchars($_POST['fecha'])." </p>";
            
        }

        if (isset($POST["hora"])) {
            echo "<p> La hora es: " . htmlspecialchars($_POST['hora'])." </p>";
            
        }

        if (isset($POST["ubicacion"])) {
            echo "<p> La ubicación es: " . htmlspecialchars($_POST['ubicacion'])." </p>";
            
        }

        if (isset($_POST["alergenos"])) {
            //$alergenosString = implode(", ",  $_POST["alergenos"]);
            echo "<ul>";
            var_dump($_POST["alergenos"]);
            foreach ($_POST["alergenos"] as $alergeno) {
                //var_dump($alergeno);
                echo "<li>$alergeno</li>";
            }
        }



    ?>


</body>

</html>