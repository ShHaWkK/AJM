<!-- file: index.php -->
<?php
ob_start(); 

require_once($_SERVER['DOCUMENT_ROOT'] . '/views/includes/header.php'); 

$request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); 

switch ($request) {
    case '/':
    case '/HomePage':
        require __DIR__ . '/views/HomePage.php';
        break;
    case '/Services':
        require __DIR__ . '/views/Services.php';
        break;
    case '/Contact':
        require __DIR__ . '/views/Contact.php';
        break;
    case '/Login':
        require __DIR__ . '/views/Login/Login.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/views/404.php'; 
        break;
}

require_once($_SERVER['DOCUMENT_ROOT'] . '/views/includes/footer.php');

ob_end_flush(); 
