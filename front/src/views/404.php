<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/front/src/views/includes/lang.php'); ?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo $lang_data['404']['title']; ?></title>
    <link rel="stylesheet" href="/front/CSS/404.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHq6N2PRSDjH4rLWTv/f8K68jjg5mZDA5tNEgHf54RBIBp0/5WnZv7g0j7NJn/w3OqAtM2sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="error-container">
       <h1>404</h1>

       <p>Error - Page not found</p>
         <a href="/HomePage" class="cta-button"><?php echo $lang_data['404']['cta']; ?></a>
         
    </div>
</body>
</html>
