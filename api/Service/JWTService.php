<?php

namespace Service;

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class JWTService
{
    private $secretKey;

    public function __construct($secretKey)
    {
        $this->secretKey = $secretKey;
    }

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

    public function verifyToken($token)
    {
        try {
            $decoded = JWT::decode($token, new Key($this->secretKey, 'HS256'));
            return (array) $decoded;
        } catch (\Exception $e) {
            return false; // Si la vérification échoue
        }
    }

    public function getUserIdFromToken($token) {
        $decoded = $this->verifyJWT($token);
        if ($decoded) {
            return $decoded->userId;
        }
        return null;
    }
}
?>
