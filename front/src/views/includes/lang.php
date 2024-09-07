<?php
ob_start(); // Start output buffering

// Vérification si les headers ont déjà été envoyés
if (headers_sent($filename, $linenum)) {
    echo "Headers already sent in $filename on line $linenum\n";
    exit;
}

$supportedLanguages = ['EN', 'FR', 'ES', 'DE']; // Supported languages
$languageDirectory = $_SERVER['DOCUMENT_ROOT'] . '/src/lang/';

$userLanguage = 'EN'; // Default language

// Detect language from request, cookie, or browser
if (isset($_GET["lang"]) && in_array(strtoupper($_GET['lang']), $supportedLanguages)) {
    $userLanguage = strtoupper($_GET['lang']);
    setcookie("lang", $userLanguage, time() + 365 * 24 * 3600, "/"); 
} elseif (isset($_COOKIE["lang"]) && in_array(strtoupper($_COOKIE["lang"]), $supportedLanguages)) {
    $userLanguage = strtoupper($_COOKIE['lang']);
} else {
    $browserLang = strtoupper(substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2));
    if (in_array($browserLang, $supportedLanguages)) {
        $userLanguage = $browserLang;
    }
    setcookie("lang", $userLanguage, time() + 365 * 24 * 3600, "/");
}

// Load corresponding language file
$userLanguageFile = $languageDirectory . "lang_" . $userLanguage . ".json";

if (file_exists($userLanguageFile)) {
    $file = file_get_contents($userLanguageFile);
    $lang_data = json_decode($file, true); // Assign language data to $lang_data
    
    if (json_last_error() !== JSON_ERROR_NONE) {
        echo "JSON Error: " . json_last_error_msg();
        exit;
    }
} else {
    echo "Language file not found: " . htmlspecialchars($userLanguageFile);
    exit;
}
?>
