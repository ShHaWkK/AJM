<?php
// file: views/includes/header.php

// Définir la langue par défaut
$lang = isset($_GET['lang']) ? $_GET['lang'] : 'fr';

// Charger le fichier de langue approprié
$langFile = $_SERVER['DOCUMENT_ROOT'] . "/lang/lang_{$lang}.json";
if (file_exists($langFile)) {
    $lang_data = json_decode(file_get_contents($langFile), true);
} else {
    $lang_data = json_decode(file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/lang/lang_fr.json"), true); // Par défaut en français
}

?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $lang_data['title']; ?></title>
    <link rel="stylesheet" href="/front/CSS/styles.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>AJM Services</h1>
            <nav>
                <ul>
                    <li><a href="/HomePage?lang=<?php echo $lang; ?>"><?php echo $lang_data['home']; ?></a></li>
                    <li><a href="/Services?lang=<?php echo $lang; ?>"><?php echo $lang_data['services']; ?></a></li>
                    <li><a href="/Contact?lang=<?php echo $lang; ?>"><?php echo $lang_data['contact']; ?></a></li>
                    <li><a href="/Login?lang=<?php echo $lang; ?>"><?php echo $lang_data['login']; ?></a></li>
                </ul>
            </nav>
            <div class="language-selector">
                <a href="?lang=fr">FR</a> | <a href="?lang=en">EN</a>
            </div>
        </div>
    </header>