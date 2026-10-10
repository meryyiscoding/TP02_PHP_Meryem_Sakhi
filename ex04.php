<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 4</title>
</head>
<body>
<h1>Types et conversions</h1>
<?php
// Six variables
$a = 42;
$b = "42";
$c = 15.8;
$d = true;
$e = false;
$f = null;

echo "<h2>Types</h2><pre>";
var_dump($a, $b, $c, $d, $e, $f);
echo "</pre>";

echo "<h2>Conversions</h2><pre>";
var_dump((int) $b);
var_dump((int) $c);
var_dump((string) $a);
echo "</pre>";

echo "<h2>true et false avec echo</h2>";
echo "true : ";
echo $d;
echo "<br>false : ";
echo $e;

echo "<h2>true et false avec var_dump</h2><pre>";
var_dump($d);
var_dump($e);
echo "</pre>";

echo "<h2>Conversion en booléen</h2><pre>";
var_dump((bool) 0);
var_dump((bool) "0");
var_dump((bool) "PHP");
var_dump((bool) []);
echo "</pre>";
?>
</body>
</html>