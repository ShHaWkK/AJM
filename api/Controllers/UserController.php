<?php

include_once '../Models/User.php';
include_once '../Middleware/AuthMiddleware.php';

class UserController {
    private $user;
    private $authMiddleware;

    public function __construct() {
        $this->user = new User();
        $this->authMiddleware = new AuthMiddleware();
    }


    public function processRequest($method, $uri) {
        $input = json_decode(file_get_contents('php://input'), true);
        switch ($method) {
            case 'GET':
                // Seuls les administrateurs peuvent accéder à tous les utilisateurs
                $this->authMiddleware->checkRole('admin');
                if (isset($uri[3])) {
                    $this->getUserById($uri[3]);
                } else {
                    $this->getAllUsers();
                }
                break;

                case 'POST':
                    if (isset($uri[3]) && $uri[3] === 'approve') {
                        $this->authMiddleware->checkRole('admin'); // Seuls les admins approuvent
                        $this->approveUser($uri[4]);
                    } elseif (isset($uri[3]) && $uri[3] === 'reject') {
                        $this->authMiddleware->checkRole('admin'); // Seuls les admins rejettent
                        $this->rejectUser($uri[4]);
                    } else {
                        $this->createUser($input['name'], $input['email'], $input['password'], $input['role_id']);
                    }
                    break;

            case 'PUT':
                if (isset($uri[3])) {
                    $id = $uri[3];
                    $this->updateUser($id, $input['name'], $input['email']);
                } else {
                    sendJsonResponse(['error' => 'User ID not provided'], 400);
                }
                break;

            case 'DELETE':
                if (isset($uri[3])) {
                    $this->deleteUser($uri[3]);
                } else {
                    sendJsonResponse(['error' => 'User ID not provided'], 400);
                }
                break;

            default:
                sendJsonResponse(['error' => 'Method not allowed'], 405);
                break;
        }
    }

    private function getAllUsers() {
        $users = $this->user->getAllUsers();
        if (!$users) {
            sendJsonResponse(['message' => 'No users found'], 404);
        } else {
            sendJsonResponse($users);
        }
    }

    private function getUserById($id) {
        $user = $this->user->getUserById($id);
        if (!$user) {
            sendJsonResponse(['message' => 'User not found'], 404);
        } else {
            sendJsonResponse($user);
        }
    }

    private function createUser($name, $email, $password, $roleId) {
        if ($this->user->emailExists($email)) {
            sendJsonResponse(['message' => 'Email already exists'], 400);
            return;
        }

        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        if ($this->user->createUser($name, $email, $hashedPassword)) {
            $userId = $this->user->getLastInsertId();
            $this->user->assignRole($userId, $roleId);
            sendJsonResponse(['message' => 'User created successfully'], 201);
        } else {
            sendJsonResponse(['message' => 'Failed to create user'], 500);
        }
    }

    private function updateUser($id, $name, $email) {
        if ($this->user->updateUser($id, $name, $email)) {
            sendJsonResponse(['message' => 'User updated successfully']);
        } else {
            sendJsonResponse(['message' => 'Failed to update user'], 500);
        }
    }

    private function deleteUser($id) {
        if ($this->user->deleteUser($id)) {
            sendJsonResponse(['message' => 'User deleted successfully']);
        } else {
            sendJsonResponse(['message' => 'Failed to delete user'], 500);
        }
    }

    private function approveUser($id) {
        if ($this->user->approvedUser($id)) {
            sendJsonResponse(['message' => 'User approved successfully']);
        } else {
            sendJsonResponse(['message' => 'Failed to approve user'], 500);
        }
    }

    private function rejectUser($id) {
        if ($this->user->rejectUser($id)) {
            sendJsonResponse(['message' => 'User rejected successfully']);
        } else {
            sendJsonResponse(['message' => 'Failed to reject user'], 500);
        }
    }
}

?>
