<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
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


</head>
<!------------------------------- header section start here ------------------------------->
<body>
    <header class='header'>
        <div class="header-container">

                <a href="#" class="logo"><img id="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt=""></a>

                <div class="fas fa-bars"></div>

                <nav id="header-navbar" class="navbar">
                    <ul>
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
    <!-- header section ends here -->