/*
Algoritmo 5.10 Dado un numero natural, n, imprimir la lista de sus divisores, en orden
decreciente.
Inicio
LEER n
IMPRIMIR 'Lista de divisores del numero: ', n
Para i=ParteEntera(n/2) hasta 2 (incremento -1)
Si resto(n/i)=0
IMPRIMIR i
Fin Si
Fin Para
IMPRIMIR 1
Fin
*/

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 10</title>
</head>
<body>
    <H1>EJERCICIO 10</H1>

    <?php 
    
        echo "Introduzca un valor n: \n";
        fscanf(STDIN, "%d", $n);
        echo "<p>Lista de divisores del número: $n </p>";

        $resultado = (int)($n / 2);
        echo $resultado;

        echo 

        for ($n = floor($n  / 2); $i <= 2; $i--) {

            if (($n % $i) == 0) {

                echo "$i";

            }
        }
        echo "1";
    
    
    
    
    ?>

</body>
</html>