<!-- file: HomePage.php -->
<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/src/views/includes/lang.php'); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $lang_data['title']; ?></title>
    <link rel="stylesheet" href="/assets/CSS/styles.css">
    <link rel="stylesheet" href="/assets/CSS/carousel.css">
</head>

<?php require_once(__DIR__. 'includes/header.php'); ?>

<body>

<section class="hero">
    <div class="container">
        <h2><?php echo $lang_data['homepage']['title']; ?></h2>
        <p><?php echo $lang_data['homepage']['subtitle']; ?></p>
        <a href="/Contact?lang=<?php echo $userLanguage; ?>" class="cta-button"><?php echo $lang_data['homepage']['cta']; ?></a>
    </div>
</section>

<section class="services-carousel">
    <h3><?php echo $lang_data['homepage']['our_services']; ?></h3>
    <div class="carousel-container">
        <div class="carousel-slide">
            <!-- Service 1 -->
            <div class="carousel-item">
                <h4><?php echo $lang_data['homepage']['web_creation']; ?></h4>
                <p><?php echo $lang_data['homepage']['web_creation_desc']; ?></p>
                <a href="/Services#creation?lang=<?php echo $userLanguage; ?>" class="cta-button"><?php echo $lang_data['homepage']['learn_more']; ?></a>
            </div>
            <!-- Service 2 -->
            <div class="carousel-item">
                <h4><?php echo $lang_data['homepage']['maintenance']; ?></h4>
                <p><?php echo $lang_data['homepage']['maintenance_desc']; ?></p>
                <a href="/Services#maintenance?lang=<?php echo $userLanguage; ?>" class="cta-button"><?php echo $lang_data['homepage']['learn_more']; ?></a>
            </div>
            <!-- Service 3 -->
            <div class="carousel-item">
                <h4><?php echo $lang_data['homepage']['security']; ?></h4>
                <p><?php echo $lang_data['homepage']['security_desc']; ?></p>
                <a href="/Services#securite?lang=<?php echo $userLanguage; ?>" class="cta-button"><?php echo $lang_data['homepage']['learn_more']; ?></a>
            </div>
        </div>
        <!-- Carousel Navigation Buttons -->
        <button class="carousel-button prev" onclick="moveSlide(-1)">&#10094;</button>
        <button class="carousel-button next" onclick="moveSlide(1)">&#10095;</button>
    </div>
</section>

<section class="testimonials">
    <div class="container">
        <h3><?php echo $lang_data['homepage']['testimonials']; ?></h3>
        <blockquote>
            <p>"<?php echo $lang_data['homepage']['testimonial_1']; ?>"</p>
        </blockquote>
        <blockquote>
            <p>"<?php echo $lang_data['homepage']['testimonial_2']; ?>"</p>
        </blockquote>
    </div>
</section>

<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/src/views/includes/footer.php'); ?>

<script src="/assets/JS/carousel.js"></script>
</body>
</html>
