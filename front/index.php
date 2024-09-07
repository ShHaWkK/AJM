<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

ob_start(); // Start output buffering

$request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Fonction pour nettoyer l'URL
function cleanUrl($url) {
    return $url === '/' ? $url : rtrim($url, '/');
}

$request = cleanUrl($request);

// Redirection des différentes pages
switch ($request) {
    case '':
    case '/':
    case '/HomePage':
        require __DIR__ . '/src/views/HomePage.php';  // Updated path
        break;
    case '/Services':
        require __DIR__ . '/src/views/Services.php';  // Ensure Services.php exists
        break;
    case '/Contact':
        require __DIR__ . '/src/views/Contact.php';  // Ensure Contact.php exists
        break;
    case '/login':
        require __DIR__ . '/src/views/Login/Login.php';  // Ensure Login.php exists
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/src/views/404.php';  // Ensure 404.php exists
        break;
}

require_once(__DIR__ . '/src/views/includes/footer.php');  // Updated path

ob_end_flush(); 
