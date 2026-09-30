<!--
Crear un array con las horas extra realizadas durante los cinco días laborables de una semana.
 Cada posición del array representa las horas extra realizadas en uno de los días.

Suponiendo que cada hora extra se paga a 12,50 €, recorrer el array y calcular:

El número total de horas extra realizadas.
El importe total correspondiente a esas horas.
Mostrar ambos resultados por pantalla.
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
    
        const HORAS_EXTRA = 12.5;

        $horasExtra = [

            "Lunes" => 1,
            
            "Martes" => 2,
            
            "Miércoles" => 0,
            
            "Jueves" => 2,

            "Viernes" => 1.5,

        ];
    
        $numTotal = array_sum($horasExtra);

        $sumaHorasExtraSemana = 0;

        foreach ($horasExtra as $horas) {

            $sumaHorasExtraSemana += $horas;
        }

        print "La cantidad total de horas extra semanales es de: ". $sumaHorasExtraSemana ." horas.<br>";

        $importeSemanalHorasExtra = $sumaHorasExtraSemana * HORAS_EXTRA;

        print "El importe total de las horas extra semanales es de: ". $importeSemanalHorasExtra ." horas.<br>";



    
    ?>
</body>
</html>