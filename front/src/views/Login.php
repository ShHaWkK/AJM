<!-- file: Login.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - AJM Services</title>
    <link rel="stylesheet" href="/assets/CSS/styles.css">
    <link rel="stylesheet" href="/assets/CSS/login.css">
</head>
<body>

<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/src/views/includes/header.php'); ?>

<section class="login-section">
    <div class="container">
        <h2>Connexion</h2>
        <form action="/api/login" method="POST">
            <div class="input-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-group">
                <label for="password">Mot de passe:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="cta-button">Connexion</button>
        </form>
        <p>Pas encore de compte ? <a href="/SignUp">Inscrivez-vous</a></p>
    </div>
</section>

<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/src/views/includes/footer.php'); ?>

</body>
</html>
