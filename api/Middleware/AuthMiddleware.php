<?php

include_once '../Models/User.php';
include_once '../Service/JWTService.php';

class AuthMiddleware
{
    private $jwtService;
    private $user;

    public function __construct($secretKey)
    {
        $this->jwtService = new JWTService($secretKey);
        $this->user = new User();
    }

    // Vérifie si l'utilisateur a le rôle requis
    public function checkRole($requiredRole)
    {
        // Assurez-vous que l'utilisateur est connecté
        $token = $this->getBearerToken();
        if (!$token) {
            sendJsonResponse(['error' => 'Unauthorized'], 401);
            exit(); // Stopper l'exécution
        }

        // Vérifiez le token JWT
        $decoded = $this->jwtService->verifyToken($token);
        if (!$decoded) {
            sendJsonResponse(['error' => 'Invalid Token'], 403);
            exit(); // Stopper l'exécution
        }

        // Vérifiez si l'utilisateur a le rôle requis
        if ($decoded['role'] !== $requiredRole) {
            sendJsonResponse(['error' => 'Forbidden'], 403);
            exit(); // Stopper l'exécution
        }
    }

    // Récupère le token Bearer depuis les en-têtes de la requête
    private function getBearerToken()
    {
        $headers = apache_request_headers();
        if (!empty($headers['Authorization'])) {
            if (preg_match('/Bearer\s(\S+)/', $headers['Authorization'], $matches)) {
                return $matches[1];
            }
        }
        return null;
    }
}

// Fonction utilitaire pour renvoyer une réponse JSON
function sendJsonResponse($data, $statusCode = 200)
{
    header('Content-Type: application/json');
    http_response_code($statusCode);
    echo json_encode($data);
}
