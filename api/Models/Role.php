<?php

include_once '../Repository/BDD.php';

class Role {
    private $db;
    private $table = 'roles';

    public function __construct() {
        $this->db = new BDD();
    }

    public function getRoleByName($roleName) {
        return $this->db->selectDB($this->table, "*", "name='$roleName'");
    }

    public function getRoleById($roleId) {
        return $this->db->selectDB($this->table, "*", "id=$roleId");
    }
}
?>
