/*
Algoritmo 5.3 Calculo del valor de la funcion f(x) = 0 si x ≤ 0, f(x) = x
2
si x > 0.
Inicio
1- LEER x
2- HACER f=0
3- Si x>0
HACER f=x2
Fin Si
4- IMPRIMIR 'El valor de la funcion es: '', f
Fin
*/

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
        echo "Introduzca el valor de x: ";
        fscanf(STDIN, "%d", $x);
        $f = 0;
        if ($x > 0) {
            $f = $x**2;
        }
    
        printf("<p>El valor de la función es %.2f</p>", $f)
    
    
    
    ?>
</body>
</html>