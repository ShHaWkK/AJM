<?php

include_once '../Models/User.php';
include_once '../Service/JWTService.php';

class LoginController {
    private $user;
    private $jwtService;

    public function __construct() {
        $this->user = new User();
        $this->jwtService = new JWTService();
    }

    public function processRequest($method, $uri) {
        $input = json_decode(file_get_contents('php://input'), true);

        switch ($method) {
            case 'POST':
                if ($uri[3] === 'login') {
                    $this->login($input['email'], $input['password']); 
                } elseif ($uri[3] === 'register') {
                    $this->register($input['name'], $input['email'], $input['password'], $input['role_id']);
                } else {
                    sendJsonResponse(['error' => 'Invalid endpoint'], 404);
                }
                break;

            default:
                sendJsonResponse(['error' => 'Method not allowed'], 405);
                break;
        }
    }

    // Méthode pour l'inscription 
    private function register($name, $email, $password, $roleId) {
        if ($this->user->emailExists($email)) {
            sendJsonResponse(['message' => 'Email already exists'], 400);
            return;
        }

        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        if ($this->user->createUser($name, $email, $hashedPassword)) {
            $userId = $this->user->getLastInsertId();
            $this->user->assignRole($userId, $roleId); 
            sendJsonResponse(['message' => 'User registered successfully'], 201);
        } else {
            sendJsonResponse(['message' => 'Failed to register user'], 500);
        }
    }

    // Méthode pour la connexion des utilisateurs
    private function login($email, $password) {
        $user = $this->user->getUserByEmail($email);

        if ($user && password_verify($password, $user['password'])) {
            $token = $this->jwtService->generateJWT($user['id']); // Générer un jeton JWT
            sendJsonResponse(['message' => 'Login successful', 'token' => $token]);
        } else {
            sendJsonResponse(['message' => 'Invalid email or password'], 401);
        }
    }
}

?>
