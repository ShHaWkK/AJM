<?php

namespace Service;

use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Exception;

class JWTService
{
    private $secretKey;

    public function __construct($secretKey)
    {
        $this->secretKey = $secretKey;
    }

    // Génère un token JWT avec un ID utilisateur et un rôle
    public function generateToken($userId, $role)
    {
        $issuedAt = time();
        $expirationTime = $issuedAt + 3600; // Token valable pour 1 heure
        $payload = [
            'iat' => $issuedAt,
            'exp' => $expirationTime,
            'userId' => $userId,
            'role' => $role
        ];

        return JWT::encode($payload, $this->secretKey, 'HS256');
    }

    // Vérifie le token et renvoie les données décodées
    public function verifyToken($token)
    {
        try {
            $decoded = JWT::decode($token, new Key($this->secretKey, 'HS256'));
            return (array) $decoded;
        } catch (Exception $e) {
            // Gestion des exceptions possibles lors de la vérification du token
            return false;
        }
    }

    // Récupère l'ID utilisateur depuis un token valide
    public function getUserIdFromToken($token)
    {
        $decoded = $this->verifyToken($token);
        if ($decoded) {
            return $decoded['userId'];
        }
        return null;
    }

    // Récupère le rôle de l'utilisateur depuis un token valide
    public function getRoleFromToken($token)
    {
        $decoded = $this->verifyToken($token);
        if ($decoded) {
            return $decoded['role'];
        }
        return null;
    }
}
