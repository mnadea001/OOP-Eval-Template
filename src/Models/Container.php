<?php

    declare(strict_types=1);

namespace App\Models;

class Container
{
    protected string $name;
    protected string $server;
    protected string $database;
    protected string $language;

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
     * Get the value of database.
     */
    public function getDatabase()
    {
        return $this->database;
    }

    /**
     * Set the value of database.
     *
     * @return self
     */
    public function setDatabase($database)
    {
        $this->database = $database;

        return $this;
    }

    /**
     * Get the value of server.
     */
    public function getServer()
    {
        return $this->server;
    }

    /**
     * Set the value of server.
     *
     * @return self
     */
    public function setServer($server)
    {
        $this->server = $server;

        return $this;
    }
}