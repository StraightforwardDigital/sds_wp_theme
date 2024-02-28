<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SDS Website</title>

    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&family=Poppins:wght@400;500;600;700;800;900&family=Rosarivo&display=swap" rel="stylesheet">

    <!-- font awesome file link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

    <!-- custom header file link -->
    <?php wp_head(); ?>
</head>
<!------------------------------- header section start here ------------------------------->
<body <?php body_class(); ?>>
    <header class='header'>
        <div class="header-container">

                <a href="#" class="logo"><img id="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt=""></a>
                <!-- Mobile Menu Toggle Button -->
                <div id="mobile-menu-toggle" class="fas fa-bars"></div>

                <nav id="header-navbar" class="navbar">
                    <ul class="desktop-menu">
                        <li><a href="#home">home</a></li>
                        <li><a href="#services">services</a></li>
                        <li><a href="#past work">past work</a></li>
                        <li><a href="#about">about</a></li>
                        <li><a href="#blog">blog</a></li>
                        <!-- Add other navigation items here -->
                    </ul>
                </nav>
                
                <a href="#"><button id="header-button" class="wht-btn">book a call</button>  </a>  
       
        </div>
    </header>

    <!-- Mobile Menu -->
    <nav id="mobile-menu" class="mobile-menu">
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#past-work">Past Work</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#blog">Blog</a></li>
            <!-- Add other navigation items here -->
            <a href="#"><button id="header-button" class="orng-btn">Book a Call</button></a>  
        </ul>
    </nav>
    <script>
    jQuery(document).ready(function() {
        $('#mobile-menu-toggle').click(function() {
            $('#mobile-menu').slideToggle(500);
        });
    });


    </script>
    <!-- header section ends here -->