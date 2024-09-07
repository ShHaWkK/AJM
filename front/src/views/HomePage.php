<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJM Services - Création de sites web, Maintenance, Sécurité</title>
    <link rel="stylesheet" href="./assets/CSS/styles.css">
</head>
<body>

<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/views/includes/header.php'); ?>

<section class="hero">
    <div class="container">
        <h2>AJM Services - Création de sites web, Maintenance, Sécurité</h2>
        <p>Des services professionnels pour développer, sécuriser et maintenir votre présence en ligne.</p>
        <a href="/Contact" class="cta-button">Demander un devis</a>
    </div>
</section>

<section class="services">
    <div class="container">
        <h3>Nos Services</h3>
        <div class="service">
            <h4>Création de Sites Web</h4>
            <p>Des sites web modernes et performants adaptés à vos besoins.</p>
            <a href="/Services#creation" class="cta-button">En savoir plus</a>
        </div>
        <div class="service">
            <h4>Maintenance Web</h4>
            <p>Assurez la stabilité et la sécurité de votre site web.</p>
            <a href="/Services#maintenance" class="cta-button">En savoir plus</a>
        </div>
        <div class="service">
            <h4>Sécurité Web</h4>
            <p>Nous mettons en place des solutions de sécurité pour protéger vos données.</p>
            <a href="/Services#securite" class="cta-button">En savoir plus</a>
        </div>
    </div>
</section>

<section class="testimonials">
    <div class="container">
        <h3>Témoignages</h3>
        <blockquote>
            <p>"AJM Services a créé un site web incroyable pour notre entreprise."</p>
        </blockquote>
        <blockquote>
            <p>"Leur équipe de sécurité a protégé notre site contre les attaques."</p>
        </blockquote>
    </div>
</section>

<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/views/includes/footer.php'); ?>

</body>
</html>
