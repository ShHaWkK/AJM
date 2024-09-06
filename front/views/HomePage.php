<!-- file: views/HomePage.php -->
<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/views/includes/header.php'); ?>

<section class="hero">
    <div class="container">
        <h2>AJM Services - Création de sites web, Maintenance, Sécurité</h2>
        <p>Des services professionnels pour vous aider à développer, sécuriser et maintenir votre présence en ligne.</p>
        <a href="/Contact" class="cta-button">Demander un devis</a>
    </div>
</section>

<section class="services">
    <div class="container">
        <h3>Nos Services</h3>
        <div class="service">
            <h4>Création de Sites Web</h4>
            <p>Des sites web modernes et performants adaptés à vos besoins. E-commerce, vitrines, blogs, nous faisons tout !</p>
            <a href="/Services#creation" class="cta-button">En savoir plus</a>
        </div>
        <div class="service">
            <h4>Maintenance Web</h4>
            <p>Assurez la stabilité et la sécurité de votre site web avec nos services de maintenance continue.</p>
            <a href="/Services#maintenance" class="cta-button">En savoir plus</a>
        </div>
        <div class="service">
            <h4>Sécurité Web</h4>
            <p>Nous mettons en place des solutions de sécurité pour protéger votre site et vos données des cyberattaques.</p>
            <a href="/Services#securite" class="cta-button">En savoir plus</a>
        </div>
    </div>
</section>

<section class="testimonials">
    <div class="container">
        <h3>Témoignages</h3>
        <blockquote>
            <p>"AJM Services a créé un site web incroyable pour notre entreprise. Leur support est exceptionnel !" - Client satisfait</p>
        </blockquote>
        <blockquote>
            <p>"Leur équipe de sécurité a protégé notre site contre les attaques. Nous sommes très satisfaits." - Client entreprise</p>
        </blockquote>
    </div>
</section>

<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/views/includes/footer.php'); ?>
