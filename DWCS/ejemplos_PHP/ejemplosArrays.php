<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php


    //Sintaxis larga array(...)
    $ciclos = array(
        0 => "DAM",
        1 => "DAW",
        2 => "ASIR"
    );

    print "<pre>";
    print_r($ciclos);
    print "</pre>";


    //sintaxis corta [...]
    $ciclos = [
        0 => "DAM",
        1 => "DAW",
        2 => "ASIR"
    ];

    print "<pre>";
    print_r($ciclos);
    print "</pre>";

    //Las claves son opcionales
    //Si no existen son numéricas consecutivas
    $ciclos = array("DAM", "DAW", "ASIR");
    print "<pre>";
    print_r($ciclos);
    print "</pre>";



    //Las claves son opcionales
    //Si no existen son numéricas consecutivas
    $ciclos = ["DAM", "DAW", "ASIR"];
    print "<pre>";
    print_r($ciclos);
    print "</pre>";



    //Arrays asociativos

    //Sintaxis larga array(...)
    $colores = array(
        "white"=> "0xFFFFFF",
        "black" => "0x000000",
        "red" => "0xFF0000"
    );

    print "<pre>";
    print_r($colores);
    print "</pre>";


    //Arrays con índices de dos tipos:

    $mixto = ["white" => "0xFFFFFF"];
    $mixto[] = "blanco";

    print "<pre>";
    print_r($mixto);
    print "</pre>";


    $colores = [
    "white" => "0xFFFFFF",
    "black" => "0x000000",
    "red"   => "0xFF0000"
    ];

    //var_dump(array_key_exists("red", $colores));   // true
    //var_dump(array_key_exists("blue", $colores));  // false


    print_r(array_keys($colores));

    print_r(array_values($colores));


    $primeraClave = array_key_first($colores);

    print $primeraClave; // white

    
    ?>
</body>
</html>