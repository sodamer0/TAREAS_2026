<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if (isset($_FILES["archivo"])) {

        echo "<pre>";
        print_r($_FILES["archivo"]);
        echo "</pre>";
        echo "Count" .count($_FILES["archivo"]);


    // if ($_FILES["archivo"]["error"] === UPLOAD_ERR_OK) {

    //     if (move_uploaded_file(
    //         $_FILES["archivo"]["tmp_name"],
    //         "uploads/" . $_FILES["archivo"]["name"]
    //     )) {
    //         echo "Fichero guardado correctamente.";
    //     } else {
    //         echo "No se ha podido guardar el fichero.";
    //     }

    // } else {
    //     echo "Se ha producido un error al subir el fichero.";
    // }

        for ($i = 0; $i < count($_FILES["archivo"]["name"]); $i++) {
            // echo "<p>Name: {$_FILES["archivo"]["name"][$i]}</p>";
            // echo "<p>Full path: {$_FILES["archivo"]["full_path"][$i]}</p>";


            foreach ($_FILES["archivo"] as $key => $arrayValue) {
                echo "<p>$key: {$_FILES["archivo"][$key][$i]}</p>";
            }
        }
    


    }
}

?>

<form action="" method="post" enctype="multipart/form-data">

    <label for="archivo">Selecciona un fichero:</label>
    <input type="file" name="ficheros[]" id="ficheros" multiple>

    <button type="submit">Subir fichero</button>

</form>
</body>
</html>

