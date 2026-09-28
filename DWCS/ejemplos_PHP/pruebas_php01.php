<?php $nombre = "Ana";?>

<p>Hola, <?=  $nombre ?>!</p>

<p>Hola, <?php echo $nombre; ?>!</p>

<?php
$a = 4;

$resultado = $a++;

echo "\$a = $a<br>";

echo "\$resultado = $resultado";

$a = 2;

$b = 0;

$c = $b ?: $a;

echo "<br>$c<br>";

echo "<br>";

for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <=  10; $j++) {

    if ($i == 5) {
        continue;
    }

}
    echo $j . "_" . $i . "<br>";
}



?>