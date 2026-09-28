<!DOCTYPE html>

<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi entorno de desarrollo</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>


<main class="card">

    <h1>Configuración de mi entorno de desarrollo</h1>

    <p class="nombre">
        <?php
        echo "Mi nombre es: \"Santiago\"";
        ?>
    </p>

    <?php
    echo "<p>Mis apellidos son: \"Pérez Carral\"</p>";
    ?>

    <div class="fecha">
        <span>Fecha y hora</span>
        <strong>
            <?php
            echo date("Y-m-d H:i:s");
            ?>
        </strong>
    </div>

</main>


</body>

</html>
