<?php

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class JWTService {
    private $secretKey;
    private $expiration;

    public function __construct() {
        $config = json_decode(file_get_contents('/var/www/html/env.json'), true);
        $this->secretKey = $config['JWT_SECRET'];
        $this->expiration = $config['JWT_EXPIRATION'];
    }

    // Génère un JWT sécurisé
    public function generateJWT($userId) {
        $issuedAt = time();
        $expirationTime = $issuedAt + $this->expiration; 
        $payload = [
            'iss' => 'your-domain.com', 
            'iat' => $issuedAt,         
            'exp' => $expirationTime,   
            'userId' => $userId        
        ];

        return JWT::encode($payload, $this->secretKey, 'HS256');
    }

    // Vérifie et décode un JWT
    public function verifyJWT($token) {
        try {
            return JWT::decode($token, new Key($this->secretKey, 'HS256'));
        } catch (Exception $e) {
            return null; 
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
