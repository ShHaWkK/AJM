<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/src/views/includes/lang.php'); ?>

<!DOCTYPE html>
<html lang="<?php echo strtolower($lang); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - AJM Services</title>
    <link rel="stylesheet" href="/assets/CSS/styles.css">
</head>
<body>

<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/src/views/includes/header.php'); ?>

<section class="contact-form">
    <div class="container">
        <h2><?php echo $lang_data['contact']; ?></h2>
        <form action="/api/contact" method="POST">
            <div class="form-group">
                <label for="name"><?php echo $lang_data['name']; ?></label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email"><?php echo $lang_data['email']; ?></label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message"><?php echo $lang_data['message']; ?></label>
                <textarea id="message" name="message" required></textarea>
            </div>
            <button type="submit" class="cta-button"><?php echo $lang_data['cta']; ?></button>
        </form>
    </div>
</section>

<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/src/views/includes/footer.php'); ?>

</body>
</html>
