<?php
require 'vendor/autoload.php';

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

function generateJWT($userId) {
    $secretKey = 'your_super_secret_key';  // Clé secrète pour signer le JWT
    $issuedAt = time();
    $expirationTime = $issuedAt + 3600;  // Le token expirera dans 1 heure
    $payload = [
        'iss' => 'your-domain.com',   // Émetteur du JWT
        'iat' => $issuedAt,           // Date d'émission du token
        'exp' => $expirationTime,     // Date d'expiration
        'userId' => $userId           // Données utilisateur dans le token
    ];

    return JWT::encode($payload, $secretKey, 'HS256');
}

// Exemple de génération de JWT pour l'utilisateur avec l'ID 123
$jwt = generateJWT(123);
echo "Generated JWT: " . $jwt;
?>
