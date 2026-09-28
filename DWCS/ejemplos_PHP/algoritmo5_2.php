/*
CAlgoritmo 5.2 Calcular una altura en pulgadas (1 pulgada=2.54 cm) y pies (1 pie=12
pulgadas), a partir de la altura en cent´ımetros, que se introduce por el teclado.
Inicio
1- IMPRIMIR ’Introduce la altura en centimetros: ’
2- LEER: altura
3- CALCULAR pulgadas=altura/2.54
4- CALCULAR pies=pulgadas/12
5- IMPRIMIR ’La altura en pulgadas es: ’, pulgadas
6- IMPRIMIR ’La altura en pies es : ’, pies
Fin
*/

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <h1>Ejercicio 01</h1>
    <?php 
        const CM_PULGADAS_RATIO = 2.54;
        const PULGADAS_PIES_RATIO = 12;
        echo "Introduzca la altura en cm: ";
        fscanf(STDIN, "%f", $altura);
        $pulgadas = $altura / CM_PULGADAS_RATIO;
        $pies = $pulgadas / PULGADAS_PIES_RATIO;
        printf("<p> La altura en pulgadas es %.2f </p><br>", $pulgadas);
        printf("<p> La altura en pies es %.2f </p>", $pies);
        ?>
</body>
</html>