# TP 02 PHP : Programmation Web 2 (2026/2027)

- **Nom :** Sakhi
- **Prénom :** Meryem
- **Groupe :** G1

## Exécution

Depuis la racine du dépôt : `php -S localhost:8000`, puis ouvrir http://localhost:8000/index.php

## Exercices

1. ex01.php : balises, commentaires, echo
2. ex02.php : variables, concaténation
3. ex03.php : constantes, calculs
4. ex04.php : types et conversions
5. ex05.php : if / elseif / else
6. ex06.php : switch et date()
7. ex07.php : boucles for
8. ex08.php : while, do-while, break, continue
9. ex09.php : tableau associatif et foreach
10. ex10_get / ex10_post : formulaires GET et POST

## Réponses courtes

### Exercice 2
`$note` et `$Note` sont deux variables différentes car les noms de variables sont sensibles à la casse en PHP.
Noms valides : `$a`, `$_a`, `$a_a`, `$AAA`, `$a1`.
Noms invalides : `$a!` (symbole interdit) et `$1a` (ne peut pas commencer par un chiffre).

### Exercice 4
Avec `echo`, `false` n'affiche rien (chaîne vide) et `true` affiche `1`. Avec `var_dump`, on voit la vraie valeur et le type : `bool(false)` et `bool(true)`.

### Exercice 5
| Valeur testée | Message obtenu |
|---|---|
| -1 | Note invalide |
| 9 | Non validé |
| 10 | Passable |
| 12 | Assez bien |
| 14 | Bien |
| 16 | Très bien |
| 21 | Note invalide |

### Exercice 10
Avec GET, les valeurs apparaissent dans l'URL après le `?`. Avec POST, elles n'apparaissent pas dans l'URL : elles sont envoyées dans le corps de la requête.