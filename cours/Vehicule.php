<?php

    // Parent class

    declare(strict_types=1);

    class Vehicule
    {
        // private string $name;//Nom du véhiculee
        // private string $propulsion; // Charbon/Eau/Pétrole
        // private string $field; //Terrestre/Aquatique/Aérien

        public function __construct(protected string $name, protected string $propulsion, protected string $field)
        {
        }

        public function travel(string $destination): string
        {
            return "Joined $destination via ".$this->field;
        }

        // public function defineWheels(int $wheels): Vehicule
        // {
        //     return $this;
        // }

        /**
         * Get the value of propulsion.
         */
        public function getPropulsion()
        {
            return $this->propulsion;
        }

        /**
         * Set the value of propulsion.
         *
         * @return self
         */
        public function setPropulsion($propulsion)
        {
            $this->propulsion = $propulsion;

            return $this;
        }

        /**
         * Get the value of field.
         */
        public function getField()
        {
            return $this->field;
        }

        /**
         * Set the value of field.
         *
         * @return self
         */
        public function setField($field)
        {
            $this->field = $field;

            return $this;
        }

        /**
         * Get the value of name.
         */
        public function getName()
        {
            return $this->name;
        }

        /**
         * Set the value of name.
         *
         * @return self
         */
        public function setName($name)
        {
            $this->name = $name;

            return $this;
        }
    }