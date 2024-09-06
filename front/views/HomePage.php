<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/views/includes/header.php'); ?>

<section class="hero">
    <div class="container">
        <h2><?php echo $lang_data['homepage']['title']; ?></h2>
        <p><?php echo $lang_data['homepage']['subtitle']; ?></p>
        <a href="/Contact?lang=<?php echo $lang; ?>" class="cta-button"><?php echo $lang_data['homepage']['cta']; ?></a>
    </div>
</section>

<section class="services">
    <div class="container">
        <h3><?php echo $lang_data['homepage']['our_services']; ?></h3>
        <div class="service">
            <h4><?php echo $lang_data['homepage']['web_creation']; ?></h4>
            <p><?php echo $lang_data['homepage']['web_creation_desc']; ?></p>
            <a href="/Services#creation?lang=<?php echo $lang; ?>" class="cta-button"><?php echo $lang_data['homepage']['learn_more']; ?></a>
        </div>
        <div class="service">
            <h4><?php echo $lang_data['homepage']['maintenance']; ?></h4>
            <p><?php echo $lang_data['homepage']['maintenance_desc']; ?></p>
            <a href="/Services#maintenance?lang=<?php echo $lang; ?>" class="cta-button"><?php echo $lang_data['homepage']['learn_more']; ?></a>
        </div>
        <div class="service">
            <h4><?php echo $lang_data['homepage']['security']; ?></h4>
            <p><?php echo $lang_data['homepage']['security_desc']; ?></p>
            <a href="/Services#securite?lang=<?php echo $lang; ?>" class="cta-button"><?php echo $lang_data['homepage']['learn_more']; ?></a>
        </div>
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

<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/views/includes/footer.php'); ?>
