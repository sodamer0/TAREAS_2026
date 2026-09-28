<?php 

    echo "Introduzca su edad: ";

    fscanf(STDIN, "%d %f %s", $edad, $altura, $nombre);

    echo "Su edad es $edad, su altura es $altura y su nombre es $nombre";


    echo "Introduzca su nombre\n";

    $nombre = trim(fgets(STDIN));

    $nombre = "Su nombre es $nombre";

?>