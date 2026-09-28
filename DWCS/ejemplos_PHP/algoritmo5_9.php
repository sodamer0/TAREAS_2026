/*
Algoritmo 5.9 Dado un entero, n, calcular
Xn
k=0
µ
1
2
¶k
= 1 +
1
2
+
1
2
2
+ · · · +
1
2
n
Inicio
LEER n
HACER suma=1
HACER ter=1
Para k= 1, 2, ..., n
HACER ter=ter/2
HACER suma=suma+ter
Fin Para
IMPRIMIR ’La suma vale : ’, suma
Fin
*/

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 04</title>
</head>
<body>
    <H1>EJERCICIO 04</H1>
    <?php 
    
        echo "Introduzca un número entero cualquiera: ";
        fscanf(STDIN, "%d", $n);
        $suma = 1;
        $ter = 1;
    
        for ($k = 1; $k <= $n; $k++) {

            $ter = $ter / 2;
            $suma += $ter;

        }
        printf("La suma vale %.2f", $suma);
    ?>
</body>
</html>