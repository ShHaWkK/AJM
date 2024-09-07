<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/src/views/includes/lang.php'); ?>

<!DOCTYPE html>
<html lang="<?php echo strtolower($lang); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $lang_data['login']; ?> - AJM Services</title>
    <link rel="stylesheet" href="/assets/CSS/styles.css">
</head>
<body>

<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/src/views/includes/header.php'); ?>

<section class="login-form">
    <div class="container">
        <h2><?php echo $lang_data['login']; ?></h2>
        <form action="/api/login" method="POST">
            <div class="form-group">
                <label for="email"><?php echo $lang_data['email']; ?> :</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password"><?php echo $lang_data['password']; ?> :</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="cta-button"><?php echo $lang_data['login']; ?></button>
        </form>
    </div>
</section>

<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/src/views/includes/footer.php'); ?>

</body>
</html>
