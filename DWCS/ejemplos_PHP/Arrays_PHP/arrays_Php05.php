<!--
Actividade 2.4- Ejercicio con array multidimensional (26-27)
Requisitos do completado
Ejercicio: crear una matriz

Crear un programa que pida por teclado el número de filas y el número de columnas de una matriz.
El programa deberá:
    Leer el número de filas y de columnas mediante fscanf().
    Crear un array multidimensional con las dimensiones indicadas.
    Rellenar cada posición de la matriz con un número entero aleatorio entre 1 y 10.
    Recorrer la matriz y mostrar todos sus valores, manteniendo la distribución por filas.
Por ejemplo, si se introducen:
3 4
Una posible salida sería:
7 2 9 4
1 8 3 6
10 5 2 7
Pista: para generar un número aleatorio entre 1 y 10 puede utilizarse rand(1, 10).
-->

<?php 

    echo "Introduzca el número de filas de la matriz: ";
    fscanf(STDIN, "%d", $rows);

    echo "Introduzca el número de columnas de la matriz: ";
    fscanf(STDIN, "%d", $columns);


    $matriz = [];


    for ($i = 0; $i < $rows; $i++) {

        for ($j = 0; $j < $columns; $j++) {

            $matriz[$i][$j] = random_int(1, 10);
        }

    }
    //print_r($matriz);

    foreach ($matriz as $fila) {
        foreach ($fila as $valor) {
            echo $valor . "  ";
        }
        echo "\n";
    }

    for ($i = 1; $j <= $rows; $i++) {

        for ($j = 1; $j <= $columns; $j++) {

            echo $matriz[$i][$j] . " ";
        }
    }
    echo "\n"

?>