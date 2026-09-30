<!--
2. Valores del IBEX

Crear un array asociativo que contenga los cinco valores siguientes y su variación porcentual durante la jornada:

Iberdrola  =>  1,85
Inditex    =>  1,42
Santander  =>  0,97
BBVA       =>  0,76
Repsol     =>  0,51

Recorrer el array mostrando el nombre de cada empresa y su porcentaje de variación.

Finalmente, calcular y mostrar la variación porcentual media de los cinco valores.

-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
        $arrayIBEX = [

            "Iberdrola" => 1.85,
            "InditeX" => 1.42,
            "Santader" => 0.97,
            "BBVA" => 0.76,
            "Repsol" => 0.51

        ];
    
        foreach ($arrayIBEX as $empresa => $variacion) {

            print $empresa . ": " . $variacion . "<br>";

        }    
    ?>
</body>
</html>

