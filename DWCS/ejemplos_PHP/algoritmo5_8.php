/*
Algoritmo 5.8 Dado un entero, n, calcular la suma de los n primeros numeros impares.
Inicio
LEER n
HACER suma=0
Para i= 1, 3, 5, ..., 2*n-1
HACER suma=suma+i
Fin Para
IMPRIMIR ’La suma vale : ’, suma
Fin
*/

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 03</title>
</head>
<body>
    <h1>EJERCICIO 03</h1>

    <?php 
    
        echo "Introduzca un número entero cualquiera: ";
        fscanf(STDIN, "%d", $n);
        $suma = 0;
        for($i = 0; $i <= 2 * $n - 1; $i += 2 ) {

            $suma += $i;

        }
        echo "<p>La suma vale: $suma</p><br>\n";
        printf("La suma vale: %d", $suma);
    
    
    
    ?>
</body>
</html>