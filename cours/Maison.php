<?php

    declare(strict_types=1);

    class Maison
    {
        // public string $type;
        // public float $superficie;
        // public int $rooms;

        public function __construct(private string $type, private float $superficie, private int $rooms)
        {
        }

        public function getType(): string
        {
            return $this->type;
        }

        public function setType(string $type): Maison
        {
            $this->type = (string) $type;

            return $this;
        }

        public function getSuperficie(): float
        {
            return $this->superficie;
        }

        public function setSuperficie(float $superficie): Maison
        {
            $this->superficie = $superficie;

            return $this;
        }

        public function getRooms(): int
        {
            return $this->rooms;
        }

        public function setRooms(int $rooms): Maison
        {
            $this->rooms = $rooms;

            return $this;
        }

        //! Custom methods
        public function capitalizeType(): string
        {
            $this->type = ucfirst($this->type);

            return $this->type;
        }
    }