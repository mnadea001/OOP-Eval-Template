<?php

    declare(strict_types=1);

namespace App\Models;

use App\DB;

class Voiture
{
    /**
     * Brand of the car.
     */
    protected string $brand;

    /**
     * Color of the car.
     */
    protected string $color;

    /**
     * Fuel used to create propulsion.
     */
    protected string $fuel;

    /**
     * Year of manufucture;.
     */
    protected int $year;

    /**
     * Whether it's auto or not.
     */
    protected bool $auto;

    //! ===GETTERS & SETTERS===

    /**
     * Get brand of the car.
     */
    public function getBrand(): string
    {
        return $this->brand;
    }

    /**
     * Set brand of the car.
     *
     * @param string $brand Brand of the car
     */
    public function setBrand(string $brand): self
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get color of the car.
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * Set color of the car.
     *
     * @param string $color Color of the car
     */
    public function setColor(string $color): self
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get fuel used to create propulsion.
     */
    public function getFuel(): string
    {
        return $this->fuel;
    }

    /**
     * Set fuel used to create propulsion.
     *
     * @param string $fuel Fuel used to create propulsion
     */
    public function setFuel(string $fuel): self
    {
        $this->fuel = $fuel;

        return $this;
    }

    /**
     * Get year of manufucture;.
     */
    public function getYear(): int
    {
        return $this->year;
    }

    /**
     * Set year of manufucture;.
     *
     * @param int $year Year of manufucture;
     */
    public function setYear($year): self
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get whether it's auto or not.
     */
    public function getAuto(): bool
    {
        return $this->auto;
    }

    /**
     * Set whether it's auto or not.
     *
     * @param bool $auto Whether it's auto or not
     */
    public function setAuto(bool $auto): self
    {
        $this->auto = $auto;

        return $this;
    }

    //! === METHODS ===

    public function getCars(): array
    {
        try {
            $db = (new DB())->getStaticPdo();

            $sql = $db->query('SELECT * FROM cars');

            $result = $sql->fetchAll(\PDO::FETCH_CLASS, '\App\Models\Voiture');

            return $result ?? [];
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int) $e->getCode());
        }
    }

    public function createCar(string $brand, string $color, int $year, string $fuel, bool $auto = false): bool
    {
        try {
            $db = (new DB())->getStaticPdo();

            $sql = 'INSERT INTO cars (brand,color,year,fuel,auto) VALUES (:brand,:color,:year,:fuel,:auto)';
            $req = $db->prepare($sql);
            $req->bindValue(':brand', $brand, \PDO::PARAM_STR);
            $req->bindValue(':color', $color, \PDO::PARAM_STR);
            $req->bindValue(':year', $year, \PDO::PARAM_INT);
            $req->bindValue(':fuel', $fuel, \PDO::PARAM_STR);
            $req->bindValue(':auto', $auto, \PDO::PARAM_BOOL);

            return $req->execute();
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int) $e->getCode());
        }
    }
}