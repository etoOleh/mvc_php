<?php

namespace App\Application\Database;

class Model extends Connection
{
    protected array $fields = [];
    protected int $id;
    protected string $created_at;
    protected string $updated_at;
    protected string $table;

    public function store(): void
    {
        $columns = implode(', ', array_map(function ($field) {
            return "`$field`";
        }, $this->fields));

        $bins = implode(', ', array_map(function ($field) {
            return ":$field";
        }, $this->fields));


        $query = "INSERT INTO `$this->table` ($columns) VALUES ($bins)";

        $params = [];
        $stmt = $this->connect()->prepare($query);
        foreach ($this->fields as $field) {
            $params[$field] = $this->$field;
        }
        $stmt->execute($params);
    }
}