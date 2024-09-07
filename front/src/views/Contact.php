<!-- file: Contact.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - AJM Services</title>
    <link rel="stylesheet" href="/assets/CSS/styles.css">
    <link rel="stylesheet" href="/assets/CSS/contact.css">
</head>
<body>

<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/src/views/includes/header.php'); ?>

<section class="contact-section">
    <div class="container">
        <h2>Contactez-nous</h2>
        <form action="/api/contact" method="POST">
            <div class="input-group">
                <label for="name">Nom:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="input-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-group">
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="5" required></textarea>
            </div>
            <button type="submit" class="cta-button">Envoyer</button>
        </form>
    </div>
</section>

<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/src/views/includes/footer.php'); ?>

</body>
</html>
