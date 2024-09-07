<!-- file: index.php -->
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

ob_start(); // Start output buffering

require_once($_SERVER['DOCUMENT_ROOT'] . '/views/includes/lang.php'); // Inclusion de lang.php

$jwtToken = isset($_COOKIE['jwt']) ? $_COOKIE['jwt'] : null;

// Fonction pour nettoyer l'URL
function cleanUrl($url) {
    return $url === '/' ? $url : rtrim($url, '/');
}

// Supprimer les paramètres de requête
$request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$request = cleanUrl($request);
// // Fonction pour vérifier l'authentification
// function requireAuth($jwtToken, $role) {
//     try {
//         require_once($_SERVER['DOCUMENT_ROOT'] . '/assets/js/modules/env.php');
//         // Appeler la fonction JavaScript authenticate
//         $authResponse = "<script type='module'>
//                             import { authenticate } from '/assets/js/api/Login.js';
//                             authenticate('{$jwtToken}', '{$role}').then(response => {
//                                 if (!response.valid) {
//                                       alert(response.json());
//                                     window.location.href = '/Login'; 
//                                 }
//                             }).catch(error => {
//                                 console.error('Erreur : ', error.message);
//                                 alert(error.message);
//                                 window.location.href = '/Login'; 
//                             });
//                         </script>";
//         echo $authResponse;
//     } catch (Exception $e) {
//         echo "<script type='text/javascript'>console.error('PHP error : {$e->getMessage()}');</script>";
//         http_response_code(500);
//         exit;
//     }
// }


$request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); 

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
    case '/login':
        require __DIR__ . '/src/views/Login/Login.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/src/views/404.php';  
        break;
}

require_once($_SERVER['DOCUMENT_ROOT'] . '/views/includes/footer.php');

ob_end_flush(); 
