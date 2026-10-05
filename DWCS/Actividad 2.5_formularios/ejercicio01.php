
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio01.php" method="get">
    <h4>Prendas</h4>
    <div>
        <input type="checkbox" id="camiseta" name="prendas[]" value="camiseta">
        <label for="camiseta">Camiseta</label>
    </div>
    <div>
        <input type="checkbox" id="pantalon" name="prendas[]" value="pantalon">
        <label for="pantalon">Pantalón</label>
    </div>
    <div>
        <input type="checkbox" id="chaqueta" name="prendas[]" value="chaqueta">
        <label for="chaqueta">Chaqueta</label>
    </div>
    <div>
        <input type="checkbox" id="falda" name="prendas[]" value="falda">
        <label for="falda">Falda</label>
    </div>
    <h4>Color</h4>
    <div>
      <input type="color" id="color" value="#ff0000">
    </div>
    <button type="submit">Enviar</button>

</form>

<?php

    if (isset($_GET["prendas"])) {
        foreach ($_GET["prendas"] as $prenda) {
            echo $prenda . "<br>";
        }

    }

    if (isset($GET["color"])) {
        $color = $_GET["color"];
        echo "<p> El color seleccionado es <span>$color<s/span></p>";
    }


    



?>





</body>

</html>



