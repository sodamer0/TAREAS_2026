/*
EJERCICIO 07:
Crea un script PHP que,
 dada la calificación numérica (con posibles decimales) de un/a alumno/a,
  obtenga la calificación en formato de cadena de texto de acuerdo con la siguiente tabla.
   Utiliza una estructura switch de PHP.
*/

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
         <h1>Ejercicio 5</h1> 
    <?php 
    
    
        echo "Introduzca una calificación:\n";
        $nota = 0;
        fscanf(STDIN, "%f", $nota);

        $tipoDato = gettype($nota);

        if (is_float($nota)) {

        
    /*
        switch ($nota) {

            case ($nota == 10):
                echo "Matricula de Honor";
                break;
            case ($nota >= 9):

            default:
                # codigo
                break;

        }
    */
    
            $parteEnteraNota = floor($nota);

            switch ($parteEnteraNota) {

                case 10:
                    echo "Matricula";
                    break;

                case 9:
                    echo "Sobresaliente";
                    break;

                case 7:
                    echo "Notable";
                    break;

                case 6:
                    echo "Bien";
                    break;

                case 5:
                    echo "Suficiente";
                    break;
                
                default:
                    echo "Suspenso";
                    break;

            }

        }



    ?>


</body>
</html>