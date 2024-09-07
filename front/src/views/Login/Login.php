<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/src/views/includes/lang.php'); ?>

<!DOCTYPE html>
<html lang="<?php echo $language; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($langData['login']) ? $langData['login'] : 'Login'; ?> - AJM Services</title>
    <link rel="stylesheet" href="/assets/CSS/styles.css">
    <link rel="stylesheet" href="/assets/CSS/login.css">
</head>

<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'] . '/src/views/includes/header.php'); ?>

    <div class="wrapper">  <!-- Ajout du wrapper ici -->
        <section class="login-section">
            <div class="container">
                <h2><?php echo isset($langData['login2']) ? $langData['login2'] : 'Login'; ?></h2>
                <?php if (isset($error_message)): ?>
                    <div class="error-message"><?php echo $error_message; ?></div>
                <?php endif; ?>
                <form action="/api/login" method="POST">
                    <div class="input-group">
                        <label for="email"><?php echo isset($langData['email']) ? $langData['email'] : 'Email'; ?></label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="input-group">
                        <label for="password"><?php echo isset($langData['password']) ? $langData['password'] : 'Password'; ?></label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <button type="submit" class="cta-button"><?php echo isset($langData['login3']) ? $langData['login3'] : 'Login'; ?></button>
                </form>
                <p>
                    <?php 
                    if (isset($langData['forgot_password'])) {
                        echo $langData['forgot_password'];
                    } else {
                        echo "Forgot your password?";
                    }
                    ?>
                </p>
            </div>
        </section>
    </div> <!-- Fin du wrapper -->

    <?php require_once($_SERVER['DOCUMENT_ROOT'] . '/src/views/includes/footer.php'); ?>
</body>
</html>
