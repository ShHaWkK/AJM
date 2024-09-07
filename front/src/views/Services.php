<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/src/views/includes/lang.php'); ?>

<!DOCTYPE html>
<html lang="<?php echo strtolower($lang); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos Services - AJM Services</title>
    <link rel="stylesheet" href="/assets/CSS/styles.css">
</head>
<body>

<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/src/views/includes/header.php'); ?>

<section class="services-page">
    <div class="container">
        <h2><?php echo $lang_data['services']; ?></h2>
        <div class="service-item">
            <h3><?php echo $lang_data['homepage']['web_creation']; ?></h3>
            <p><?php echo $lang_data['homepage']['web_creation_desc']; ?></p>
        </div>
        <div class="service-item">
            <h3><?php echo $lang_data['homepage']['maintenance']; ?></h3>
            <p><?php echo $lang_data['homepage']['maintenance_desc']; ?></p>
        </div>
        <div class="service-item">
            <h3><?php echo $lang_data['homepage']['security']; ?></h3>
            <p><?php echo $lang_data['homepage']['security_desc']; ?></p>
        </div>
    </div>
</section>

<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/src/views/includes/footer.php'); ?>

</body>
</html>
