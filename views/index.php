<?php

echo '<pre>';
var_dump($this->containers);
echo '</pre>';

foreach ($this->containers as $container) {
    echo "<h2>Nom du container : {$container->getName()} </h2>";
}