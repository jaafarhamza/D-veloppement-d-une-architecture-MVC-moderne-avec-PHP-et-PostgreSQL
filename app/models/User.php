<?php

namespace App\Models;

class User extends BaseModel
{
    protected $table = 'users';

    public function register($data)
    {
        $data['password'] = password_hash($data['password'], PASSWORD_BCRYPT);
        return $this->create($data);
    }

    public function findByEmail($email)
    {
        return $this->findByColumn('email', $email);
    }

    public function count()
    {
        return $this->countAll();
    }

    public function getRole($userId)
    {
        $query = "SELECT role FROM {$this->table} WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->execute(['id' => $userId]);
        return $stmt->fetchColumn();
    }

    public function hasPermission($userId, $permission)
    {
        $query = "SELECT COUNT(*) FROM user_permissions WHERE user_id = :user_id AND permission = :permission";
        $stmt = $this->db->prepare($query);
        $stmt->execute(['user_id' => $userId, 'permission' => $permission]);
        return $stmt->fetchColumn() > 0;
    }
}
