<?php

    declare(strict_types=1);

namespace App\Models;

use App\DB;

class Container
{
    //! ====================================== PROPERTIES =====================================
    protected int $id;
    protected string $name;
    protected string $server;
    protected string $db;
    protected string $language;

    //! ====================================== GETTERS & SETTERS ==============================

    public function getLanguage(): string
    {
        return $this->language;
    }

    public function setLanguage(string $newLanguage): self
    {
        $this->language = $newLanguage;

        return $this;
    }

    /**
     * Get the value of server.
     */
    public function getServer(): string
    {
        return $this->server;
    }

    /**
     * Set the value of server.
     */
    public function setServer(string $server): self
    {
        $this->server = $server;

        return $this;
    }

    /**
     * Get the value of db.
     */
    public function getDb(): string
    {
        return $this->db;
    }

    /**
     * Set the value of db.
     */
    public function setDb($db): self
    {
        $this->db = $db;

        return $this;
    }

    /**
     * Get the value of id.
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set the value of id.
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of name.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the value of name.
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    //! ============================================ METHODS ============================================

    public function getContainers(): array
    {
        $db = new DB();

        $data = $db->getStaticPdo()->query('SELECT * FROM containers');
        $results = $data->fetchAll(\PDO::FETCH_CLASS, 'App\Models\Container');

        return $results ?? [];
    }

    public function getContainerById(int $id): ?Container
    {
        $db = new DB();
        $data = $db->getStaticPdo()->query("SELECT * FROM containers WHERE id = $id");
        $result = $data->fetch(\PDO::FETCH_CLASS, 'App\Models\Container');

        return $result ?? null;
    }

    public function createContainer(string $name, string $server, string $db, string $language): bool
    {
        try {
            $db = new DB();
            $data = $db->getStaticPdo()->query("INSERT INTO containers (name, server, db, language) VALUES ($name, $server, $db, $language)");

            return $data->execute();
        } catch (\PDOException $th) {
            throw new \PDOException($th->getMessage(), $th->getCode());
        }
    }
}