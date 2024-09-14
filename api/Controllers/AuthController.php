<?php
include_once '../Models/User.php';
include_once '../Service/EmailService.php';

class AuthController {
    private $user;
    private $emailService;

    public function __construct() {
        $this->user = new User();
        $this->emailService = new EmailService();
    }

    public function register($name, $email, $password) {
        if ($this->user->emailExists($email)) {
            sendJsonResponse(['message' => 'Email already exists'], 400);
            return;
        }

        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        $verificationToken = bin2hex(random_bytes(50)); // Génère un token de vérification

        if ($this->user->createUser($name, $email, $hashedPassword, $verificationToken)) {
            $this->emailService->sendVerificationEmail($email, $verificationToken);
            sendJsonResponse(['message' => 'User registered. Please verify your email.'], 201);
        } else {
            sendJsonResponse(['message' => 'Failed to register user'], 500);
        }
    }

    public function verifyEmail($token) {
        $user = $this->user->getUserByVerificationToken($token);

        if ($user) {
            $this->user->markEmailVerified($user['id']);
            sendJsonResponse(['message' => 'Email verified successfully'], 200);
        } else {
            sendJsonResponse(['message' => 'Invalid or expired token'], 400);
        }
    }
}
