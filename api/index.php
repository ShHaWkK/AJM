<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

header('Access-Control-Allow-Methods: GET,POST,PUT,DELETE,OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Authorization');
header('Access-Control-Allow-Origin: *');

include_once './Controllers/UserController.php';

$uri = explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$requestMethod = $_SERVER['REQUEST_METHOD'];

function sendJsonResponse($data, $statusCode = 200) {
    header('Content-Type: application/json');
    http_response_code($statusCode);
    echo json_encode($data);
}

if ($requestMethod === 'OPTIONS') {
    http_response_code(200);
    exit();
}

$controller = null;

switch ($uri[2]) {
    case 'users':
        $controller = new UserController();
        break;
    default:
        sendJsonResponse(['error' => 'Route not found'], 404);
        exit();
}

if ($controller) {
    $controller->processRequest($requestMethod, $uri);
}

?>
