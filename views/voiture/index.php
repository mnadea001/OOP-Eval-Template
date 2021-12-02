<h1> Concessionaire </h1>


<?php foreach ($this->cars as $car) : ?>
<div style="display: flex;flex-direction:column;border:2px solid black;margin:1rem 2rem 0 2rem;">
    <h2>Modèle : <?= $car->getBrand() ?></h2>
    <input type="color" value="<?= $car->getColor() ?>" />
    <h2>Année : <?= $car->getYear() ?></h2>
    <h2>Carburant : <?= $car->getFuel() ?></h2>
    <h2>Boite auto ? : <?= $car->getAuto() ? 'Oui' : 'Non'; ?></h2>
</div>

<? endforeach; ?>
<h3> Ajoutez votre véhicule </h3>