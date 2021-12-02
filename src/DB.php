<?php

declare(strict_types=1);

namespace App;

use PDO;

    class DB
    {
        //? Création d'une propriété liée à la BDD, elle va contenir ma connexion. Elle sera statique afin de pouvoir récupérer la même instance de la BDD.

        private static PDO $pdo;

        public function __construct(string $config = 'mysql:host=db;dbname=poo;', string $user = 'root', string $password = 'root')
        {
            // $config = 'mysql:host=db;dbname=poo,root,root';
            try {
                static::$pdo = new PDO($config, $user, $password);
            } catch (\PDOException $e) {
                throw new \PDOException($e->getMessage(), $e->getCode());
            }
        }

        public function getStaticPdo(): PDO
        {
            return static::$pdo;
        }
    }