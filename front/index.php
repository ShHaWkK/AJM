<!-- file: index.php -->
<?php
ob_start(); // Start output buffering

require_once($_SERVER['DOCUMENT_ROOT'] . '/src/views/includes/lang.php'); // Inclusion de lang.php

// Fonction pour nettoyer l'URL
function cleanUrl($url) {
    return $url === '/' ? $url : rtrim($url, '/');
}

// Supprimer les paramètres de requête
$request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$request = cleanUrl($request);

switch ($request) {
    case '':
    case '/':
    case '/HomePage':
        require __DIR__ . '/src/views/HomePage.php';
        break;
    case '/Services':
        require __DIR__ . '/src/views/Services.php';
        break;
    case '/Contact':
        require __DIR__ . '/src/views/Contact.php';
        break;
    case '/Login':
        require __DIR__ . '/src/views/Login.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/src/views/includes/404.php';
        break;
}

ob_end_flush();
?>
