<?php

declare(strict_types=1);

    class Voiture extends Vehicule
    {
        public function __construct(protected string $name, protected string $propulsion)
        {
            $this->field = 'Terrestre';
        }

        public function defineWheels(int $wheels): Voiture
        {
            return $this;
        }
    }