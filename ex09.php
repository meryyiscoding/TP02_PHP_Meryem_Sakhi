<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 9</title>
</head>
<body>
<h1>Notes de la classe</h1>
<?php
$notes = [
    "Amine" => 12,
    "Sara" => 16,
    "Youssef" => 8,
    "Lina" => 14,
    "Adam" => 10
];

$somme = 0;
$nbValides = 0;
$meilleureNote = -1;
$meilleurNom = "";

echo "<table border='1' cellpadding='6'>";
echo "<tr><th>Étudiant</th><th>Note</th><th>Validé</th></tr>";

foreach ($notes as $nom => $note) {
    if ($note >= 10) {
        $statut = "Validé";
        $nbValides++;
    } else {
        $statut = "Non validé";
    }

    $somme += $note;

    if ($note > $meilleureNote) {
        $meilleureNote = $note;
        $meilleurNom = $nom;
    }

    echo "<tr><td>$nom</td><td>$note</td><td>$statut</td></tr>";
}
echo "</table>";

$moyenne = $somme / count($notes);

echo "<p>Somme des notes : $somme</p>";
echo "<p>Moyenne de la classe : $moyenne</p>";
echo "<p>Étudiants ayant validé : $nbValides</p>";
echo "<p>Meilleure note : $meilleureNote ($meilleurNom)</p>";
?>
</body>
</html>