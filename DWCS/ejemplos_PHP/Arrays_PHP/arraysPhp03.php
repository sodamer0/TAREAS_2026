    <?php 
    
        echo "Introduzca el rango del array: ";
        fscanf(STDIN, "%d", $rango);
    

        if ($rango < 0) {
            $array = range($rango, 0);
        }
        else {
            $array = range(0, $rango);
        }

        $array = ($rango<0) ? range($rango, 0): range(0, $rango);

        print_r($array);

    
    
    ?>
