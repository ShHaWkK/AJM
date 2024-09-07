<!-- file: Services.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos Services - AJM Services</title>
    <link rel="stylesheet" href="/assets/CSS/styles.css">
    <link rel="stylesheet" href="/assets/CSS/services.css">
</head>
<body>

<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/src/views/includes/header.php'); ?>

<section class="services-page">
    <div class="container">
        <h2>Nos Services</h2>
        <div class="service-item">
            <h3>Création de Sites Web</h3>
            <p>Nous créons des sites web modernes, rapides et optimisés pour tous les types d'entreprises, des boutiques en ligne aux blogs.</p>
        </div>
        <div class="service-item">
            <h3>Maintenance de Sites Web</h3>
            <p>Assurez la stabilité, la sécurité et la mise à jour continue de votre site avec notre service de maintenance.</p>
        </div>
        <div class="service-item">
            <h3>Sécurité Web</h3>
            <p>Nous mettons en place des systèmes de sécurité pour protéger votre site contre les cyberattaques et les vulnérabilités.</p>
        </div>
    </div>
</section>

<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/src/views/includes/footer.php'); ?>

</body>
</html>
