<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 8</title>
</head>
<body>
<h1>Boucles et contrôle</h1>

<section>
<h2>Partie 1 : nombres pairs de 0 à 20</h2>
<?php
$n = 0;
while ($n <= 20) {
    if ($n == 10) {
        echo "<strong>$n</strong> ";
    } else {
        echo "$n ";
    }
    $n += 2;
}
?>
</section>

<section>
<h2>Partie 2 : while contre do-while</h2>
<?php
$compteur = 5;
$executionsWhile = 0;
while ($compteur < 5) {
    $executionsWhile++;
}
echo "while : $executionsWhile exécution(s)<br>";

$compteur = 5;
$executionsDoWhile = 0;
do {
    $executionsDoWhile++;
} while ($compteur < 5);
echo "do-while : $executionsDoWhile exécution(s)";
?>
</section>

<section>
<h2>Partie 3 : continue et break</h2>
<?php
for ($i = 1; $i <= 20; $i++) {
    if ($i % 3 == 0) {
        continue; // ignore les multiples de 3
    }
    if ($i >= 16) {
        break; // arrête la boucle avant l'affichage
    }
    echo "$i ";
}
?>
</section>
</body>
</html>