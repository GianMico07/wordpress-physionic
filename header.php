<?php wp_head(); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Physionic Website</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        .bannerBg {
        background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url("<?php echo get_template_directory_uri() ?>./img/hero-cover.jpg");
        background-position: 30%;
        background-repeat: no-repeat;
        background-size: cover;
}
    </style>
</head>
    <body> 
        <div class="bannerBg">

            <header class="header py--2">
                <div class="container">
                    <div class="header__wrapper d--flex align--center justify--between">
                        <h2 class="text--light">Physionic</h2>

                        <nav class="nav">
                            <ul>
                                <!-- <li><a href="#">Home</a></li>
                                <li><a href="#">Product</a></li>
                                <li><a href="#">Pricing</a></li>
                                <li><a href="#">Contact</a></li> -->
                                <?php wp_menu_li()?>
                            </ul>
                        </nav>

                        <div class="toggle__menu">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
        
                    </div>
                </div>
            </header>