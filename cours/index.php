<?php

    // Inheritance (Héritage)

    require 'Vehicule.php';
    require 'Voiture.php';

    $voiture = new Voiture('Audi R8', 'Diesel');
    $bateau = new Vehicule('Zodiac', 'Essence', 'Aquatique');
    $avion = new Vehicule('Mirage', 'Kerosen', 'Aérien');

    echo '<pre>';
    var_dump($voiture, $bateau, $avion);
    echo '</pre>';