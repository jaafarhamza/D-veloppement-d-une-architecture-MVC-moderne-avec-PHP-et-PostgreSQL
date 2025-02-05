<?php

namespace App\Models;

require_once __DIR__ . '/../../vendor/autoload.php';

use App\Core\Database;

abstract class BaseModel
{
    protected $db;
    protected $table;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public function findAll()
    {
        $query = "SELECT * FROM {$this->table}";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function findById($id)
    {
        $query = "SELECT * FROM {$this->table} WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->execute(['id' => $id]);
        return $stmt->fetch();
    }

    public function create(array $data)
    {
        $columns = implode(", ", array_keys($data));
        $placeholders = ":" . implode(", :", array_keys($data));
        $query = "INSERT INTO {$this->table} ({$columns}) VALUES ({$placeholders})";
        $stmt = $this->db->prepare($query);
        return $stmt->execute($data);
    }

    public function update($id, array $data)
    {
        $set = "";
        foreach ($data as $column => $value) {
            $set .= "{$column} = :{$column}, ";
        }
        $set = rtrim($set, ", ");
        $query = "UPDATE {$this->table} SET {$set} WHERE id = :id";
        $data['id'] = $id;
        $stmt = $this->db->prepare($query);
        return $stmt->execute($data);
    }

    public function delete($id)
    {
        $query = "DELETE FROM {$this->table} WHERE id = :id";
        $stmt = $this->db->prepare($query);
        return $stmt->execute(['id' => $id]);
    }

    public function findByColumn($column, $value)
    {
        $query = "SELECT * FROM {$this->table} WHERE {$column} = :value";
        $stmt = $this->db->prepare($query);
        $stmt->execute(['value' => $value]);
        return $stmt->fetch();
    }

    public function countAll()
    {
        $query = "SELECT COUNT(*) as count FROM {$this->table}";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetch()['count'];
    }
}
