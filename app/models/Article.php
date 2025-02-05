<?php

namespace App\Models;

class Article extends BaseModel
{
    protected $table = 'articles';

    public function count()
    {
        return $this->countAll();
    }

    public function findLatest($limit)
    {
        $query = "SELECT * FROM {$this->table} ORDER BY published_at DESC LIMIT :limit";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':limit', $limit, \PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
