<?php

// Exercice 1 : Créer une classe et l'instancier.

declare(strict_types=1);

require 'Maison.php';

// $maison = new Maison();

// Exercice 2 :
// Instancier une nouvelle fois la classe
// $villa = new Maison();
//Modification des propriétés
// $maison->rooms = 3;
// $maison->superficie = 75.5;
// $maison->type = 't3';
// $villa->rooms = 6;
// $villa->superficie = 120;
// $villa->type = 'villa';

// Exercice 3: Utilisation du constructeur pour créer des objets

//* Utilisation d'arguments nommés ici.
$maison = new Maison(superficie: 75.5, type: 't3', rooms: 3);
$villa = new Maison('villa', 120.2, 6);
$villa->capitalizeType();
//############################# NE PAS MODIFIER ICI ################

echo '<pre>';
var_dump($maison);
echo '</pre>';

echo '<pre>';
var_dump($villa);
echo '</pre>';