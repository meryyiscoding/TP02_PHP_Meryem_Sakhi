<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 3</title>
</head>
<body>
<?php
// Constantes
define("TAUX_TVA", 20);
define("DEVISE", "MAD");

// Données
$prixUnitaireHT = 60;
$quantite = 3;

// Calculs
$totalHT = $prixUnitaireHT * $quantite;
$montantTVA = $totalHT * TAUX_TVA / 100;
$totalTTC = $totalHT + $montantTVA;

// Frais de livraison
$totalTTC += 15;

echo "<h1>Récapitulatif</h1>";
echo "Total HT : $totalHT " . DEVISE . "<br>";
echo "TVA (" . TAUX_TVA . "%) : $montantTVA " . DEVISE . "<br>";
echo "Montant final avec livraison : $totalTTC " . DEVISE . "<br><br>";

if (defined("TAUX_TVA")) {
    echo "La constante TAUX_TVA existe.";
}
?>
</body>
</html>