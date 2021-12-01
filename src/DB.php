<?php

declare(strict_types=1);

namespace App;

use PDO;

    class DB
    {
        private PDO $pdo;

        public function __construct(array $config)
        {
            $config = 'mysql:host=localhost;dbname=oop,root,root';
            try {
                $this->pdo = new PDO($config);
            } catch (\PDOException $e) {
                echo 'Error: '.$e->getMessage();
            }
        }
    }