<!--
4. Tabla de multiplicar

Dado un número entero entre 1 y 10, crear un array asociativo que contenga su tabla
 de multiplicar del 0 al 10.
Las claves del array deben tener el formato "2x0", "2x1", "2x2", etc., y los valores deben
 contener el resultado de cada multiplicación.
Para el número 2, por ejemplo, el array debería contener:

[
"2x0" => 0,
"2x1" => 2,
"2x2" => 4,
...
"2x10" => 20

]

Finalmente, recorrer el array y mostrar cada clave junto con su resultado.
Pista: puede utilizarse un bucle for y la sintaxis avanzada de interpolación en PHP de
 variables para construir las claves.

-->

<?php 

    echo "Introduzca un número entre 1 y 10: ";
    fscanf(STDIN, "%d", $n);


    $tabla = [];

    for($i = 0; $i <= 10; $i++) {
        //$tabla[$i] . " x " . $n . " = ". ($n * $i);

        $tabla["{$n}x$i"] = $n*$i;

    }


    //print_r($tabla);
    foreach ($tabla as $key => $value) {

        echo "$key => $value\n";
        //Buscar como jusficar por la derecha
    }
?>