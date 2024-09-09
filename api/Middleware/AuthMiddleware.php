<?php

include_once '../Models/User.php';

class AuthMiddleware {
    private $user;

    public function __construct() {
        $this->user = new User();
    }

    public function checkRole($requiredRole) {
        // Assurez-vous que l'utilisateur est connecté
        $token = $this->getBearerToken();
        if (!$token) {
            sendJsonResponse(['error' => 'Unauthorized'], 401);
        }

        // Vérifiez le rôle de l'utilisateur via le token JWT ou session
        $user = $this->user->getUserByToken($token);
        if (!$user) {
            sendJsonResponse(['error' => 'Invalid Token'], 403);
        }

        $role = $this->user->getUserRole($user['id']);
        if ($role['name'] !== $requiredRole) {
            sendJsonResponse(['error' => 'Forbidden'], 403); // Accès interdit
        }
    }

    private function getBearerToken() {
        $headers = apache_request_headers();
        if (!empty($headers['Authorization'])) {
            if (preg_match('/Bearer\s(\S+)/', $headers['Authorization'], $matches)) {
                return $matches[1];
            }
        }
        return null;
    }
}
?>
