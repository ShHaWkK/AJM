<?php

include_once '../Repository/BDD.php';

class User {
    private $db;
    private $table = 'users';

    public function __construct() {
        $this->db = new BDD();
    }

    public function getAllUsers() {
        return $this->db->selectDB($this->table, "*");
    }

     // Récupère un utilisateur par son email
     public function getUserByEmail($email) {
        return $this->db->selectDB($this->table, "*", "email='$email'");
    }


    public function getUserById($id) {
        return $this->db->selectDB($this->table, "*", "id=$id");
    }

    public function createUser($name, $email, $password) {
        return $this->db->insertDB($this->table, ['name', 'email', 'password'], [$name, $email, $password]);
    }

    public function updateUser($id, $name, $email) {
        return $this->db->updateDB($this->table, ['name', 'email'], [$name, $email], "id=$id");
    }

    public function emailExists($email) {
        $user = $this->db->selectDB($this->table, "*", "email='$email'");
        return !empty($user); // Retourne vrai si l'email existe déjà
    }

    // Attribuer un rôle à un utilisateur
    public function assignRole($userId, $roleId) {
        return $this->db->insertDB('role_user', ['user_id', 'role_id'], [$userId, $roleId]);
    }

    public function getLastInsertId() {
        return $this->db->getLastInsertId();
    }

    public function approvedUser($id) {
        return $this->db->updateDB($this->table, ['approved'], [1], "id=$id");
    }

    public function rejectUser($id) {
        return $this->db->updateDB($this->table, ['rejected'], [1], "id=$id");
    }

    private function checkAdmin($userId) {
        $role = $this->user->getUserRole($userId);
        return $role['name'] === 'admin';
    }
    
    private function deleteUser($id) {
        $user = $this->user->getUserById($id);
    
        if (!$this->checkAdmin($user['id'])) {
            sendJsonResponse(['error' => 'Unauthorized'], 403);
            return;
        }
    
        if ($this->user->deleteUser($id)) {
            sendJsonResponse(['message' => 'User deleted successfully']);
        } else {
            sendJsonResponse(['message' => 'Failed to delete user'], 500);
        }
    }
    
}
?>
