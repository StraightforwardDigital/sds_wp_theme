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

    <!-- custom header file link -->
    <?php wp_head(); ?>
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
    <!-- Hero section starts here -->
    <section id="hero" class="hero">
        <div class="flex-container">
 
                <div class="left-column">
                    <h1 class="sds-h1">we make <br> compelling <br> websites</h1>
                    <span class="slogan">for your small business</span>
                    <p class="description">your online marketing journey starts here </p>
                    <a href="#"><button class="orng-btn">book a call</button></a>
                </div>

                <div class="right-column">
                   <img src="<?php echo get_template_directory_uri(); ?>/images/hero-image.png" alt="" class="hero-image">

                </div>

        </div>

        <div id="chevronButton" class="chevron-arrow flex-container">
            <i class="fa-solid fa-chevron-down"></i>
        </div>
    </section>
    <!-- Hero section ends here -->
    <!-- Value Stack section starts here -->
    <section class="value-stack">
        <div class="flex-container">
            <div class="card card-1">
                <img class="icon" src="<?php echo get_template_directory_uri(); ?>/images/web-dev-icon.png" alt="">
                <h2>web development</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                <a href="#"><button class="arrow-btn"><i class="fa-solid fa-arrow-right"></i></button>  </a>  
            </div>
            <div class="card card-2">
                <img class="icon" src="<?php echo get_template_directory_uri(); ?>/images/website-icon.png" alt="">
                <h2>web development</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                <a href="#"><button class="arrow-btn"><i class="fa-solid fa-arrow-right"></i></button>  </a>  
            </div>
            <div class="card card-3">
                <img class="icon" src="<?php echo get_template_directory_uri(); ?>/images/e-commerce-icon.png" alt="">
                <h2>web development</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                <a href="#"><button class="arrow-btn"><i class="fa-solid fa-arrow-right"></i></button>  </a>  
            </div>
        </div>
    </section>
    <!-- Value Stack section ends here -->
    <!-- The Stakes section starts here -->
    <section class="the-stakes">

        <div class="flex-container">

                <div id="element-1" class="left-column">

                    <div class="image-1"></div>

                    <div class="image-2"></div>

                </div>

                <div id="element-2" class="right-column">

                    <span>why choose us</span>
                    <h3>why we are the best from others</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing, elit. Magnam labore veritatis at vitae, est tempore, natus voluptas, provident pariatur accusantium iusto consequatur ut quod voluptatibus omnis, harum! Dolorem, quaerat, illum!</p>


                </div>

        </div>
    </section>
    <!-- The Stakes section ends here -->
    <!-- Value Proposition section starts here -->
    <section class="value-proposition">
        <div class="flex-container">
            <div class="card card-1">
                <img class="icon" src="<?php echo get_template_directory_uri(); ?>/images/spedometer-in-gear-icon.png" alt="">
                <h2>web development</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae quis officia molestiae deleniti, soluta alias. </p>
                <a href="#"><button class="orng-btn">book a call</button>  </a>  
            </div>
            <div class="card card-2">
                <img class="icon" src="<?php echo get_template_directory_uri(); ?>/images/hand-holding-puzzle-piece-icon.png" alt="">
                <h2>web development</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae quis officia molestiae deleniti, soluta alias. </p>
                <a href="#"><button class="orng-btn">book a call</button>  </a>  
            </div>
            <div class="card card-3">
                <img class="icon" src="<?php echo get_template_directory_uri(); ?>/images/spedometer-in-gear-icon.png" alt="">
                <h2>web development</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae quis officia molestiae deleniti, soluta alias. </p>
                <a href="#"><button class="orng-btn">book a call</button>  </a>  
            </div>
        </div>
    </section>
    <!-- Value Proposition section ends here -->
    <!-- The Guide section starts here -->
    <section class="the-guide">
        <div class="flex-container">

                <div class="left-column">

                    <span>why choose us</span>
                    <h3>why we are the best from others</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing, elit. Magnam labore veritatis at vitae, est tempore, natus voluptas, provident pariatur accusantium iusto consequatur ut quod voluptatibus omnis, harum! Dolorem, quaerat, illum!</p>


                </div>

                <div class="right-column">

                    <div class="image-1"></div>

                </div>

        </div>
    </section>
    <!-- The Guide section ends here -->
    <!-- Package Pricing section starts here -->
    <section class="package-pricing">
        <div class="flex-container">
      
                <div id="targetSection" class="heading">
                    <span>our pricing plan</span>
                    <h2>our best pricing plans</h2>
                </div>

                <div class="card-section">

                    <div class="card white-card card-1">

                        <span>website</span>
                        <h3>development</h3>
                        <p>start targeting and attracting customers</p>

                        <ul>
                            <li><i class="fa-solid fa-circle-check"></i>5-10 pages</li>
                            <li><i class="fa-solid fa-circle-check"></i>detailed social analytics</li>
                            <li><i class="fa-solid fa-circle-check"></i>homepage designing</li>
                            <li><i class="fa-solid fa-circle-check"></i>1 jquery banner</li>
                            <li><i class="fa-solid fa-circle-check"></i>1 contact form</li>
                        </ul>

                        <span class="payment-price">$400</span>
                        <span class="payment-term">yearly</span>

                        <a href="#"><button class="orng-btn">book a call</button>  </a> 

                    </div>   

                    <div class="card orange-card card-2">

                        <span>website</span>
                        <h3>designing</h3>
                        <p>start targeting and attracting customers</p>

                        <ul>
                            <li><i class="fa-solid fa-circle-check"></i>5-10 pages</li>
                            <li><i class="fa-solid fa-circle-check"></i>detailed social analytics</li>
                            <li><i class="fa-solid fa-circle-check"></i>homepage designing</li>
                            <li><i class="fa-solid fa-circle-check"></i>1 jquery banner</li>
                            <li><i class="fa-solid fa-circle-check"></i>1 contact form</li>
                        </ul>

                        <span class="payment-price">$200</span>
                        <span class="payment-term">yearly</span>

                        <a href="#"><button class="wht-btn">book a call</button>  </a>  

                    </div>   

                    <div class="card white-card card-3">

                        <span>ecommerce</span>
                        <h3>store</h3>
                        <p>start targeting and attracting customers</p>

                        <ul>
                            <li><i class="fa-solid fa-circle-check"></i>5-10 pages</li>
                            <li><i class="fa-solid fa-circle-check"></i>detailed social analytics</li>
                            <li><i class="fa-solid fa-circle-check"></i>homepage designing</li>
                            <li><i class="fa-solid fa-circle-check"></i>1 jquery banner</li>
                            <li><i class="fa-solid fa-circle-check"></i>1 contact form</li>
                        </ul>

                        <span class="payment-price">$400</span>
                        <span class="payment-term">yearly</span>

                        <a href="#"><button class="orng-btn">book a call</button>  </a>  

                    </div>   

                </div>


        </div>
    </section>
    <!-- Packages & Pricing section ends here -->
    <!-- The Plan section starts here -->
    <section class="the-plan">
        <div class="flex-container">
            
                <div class="heading">
                    <span>plan of action</span>
                    <h2>our process of work</h2>
                </div>

                <div class="card-section">

                    <div class="card card-1">
                        <span>01</span>
                        <h3>project introduction</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p> 

                        <div class="icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/arrow-icon-the-plan.png" alt="">
                        </div>
                    </div>   



                    <div class="card card-2">
                        <span>02</span>
                        <h3>research</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p> 

                        <div id="icon-arrow-removed" class="icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/arrow-icon-the-plan.png" alt="">
                        </div>
                    </div>  

                    <div class="card card-3">
                        <span>03</span>
                        <h3>concept</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p> 

                        <div class="icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/arrow-icon-the-plan.png" alt="">
                        </div>
                    </div>  

                    <div class="card card-4">
                        <span>04</span>
                        <h3>project termination</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p> 
                    </div>  

                </div>

            
        </div>
    </section>

    <!-- The Plan section ends here -->
    <!-- Call To Action section starts here -->
    <section class="call-to-action-banner">
        <div class="flex-container">
   
                <div class="heading">
                    <h2>why we are the best from others</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est alias atque nesciunt magnam delectus quod?</p>
                    <a href="#"><button class="wht-btn">book a call</button>  </a>  
                </div>

        </div>
    </section>

    <!-- Call To Action section ends here -->
    <!-- Explainer section starts here -->
    <section class="explainer">
        <div class="flex-container">

            <div id="element-1" class="left-column">

                <div class="image-1"></div>

                <div class="image-2"></div>

            </div>

            <div id="element-2" class="right-column">

                <span>why choose us</span>
                <h3>why we are the best from others</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing, elit. Magnam labore veritatis at vitae, est tempore, natus voluptas, provident pariatur accusantium iusto consequatur ut quod voluptatibus omnis, harum! Dolorem, quaerat, illum!</p>
                <a href="#"><button class="orng-btn">book a call</button>  </a>
            </div>

        </div>
    </section>
    <!-- Explainer section ends here -->
    <!-- Lead Magnet section starts here -->
    <section class="lead-magnet">
        <div class="heading">
            <span>contact us</span>
            <h2>contact for perfect quotation</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi dignissimos quis tempora animi reprehenderit. Reiciendis eius distinctio magnam amet accusantium!</p>
        </div>

        <div class="form-submition">

           
                <form action="submit" id="form-field"><input type="text" placeholder="email address"></form>
                <a href="#"><button class="orng-btn">submit</button>  </a>
            
        </div>
    </section>
    <!-- Lead Magnet section ends here -->
    <!-- Footer section starts here -->
    <footer>
        <div class="flex-container">

            <div class="about-us">
                <h3>about us</h3>
                <p>Lorem ipsum dolor, sit amet, consectetur adipisicing elit. Officia nostrum, placeat ex corporis explicabo.</p>

                <div class="subscription-form">
                    <form action="submit" id="form-field"><input type="text" placeholder="your email address"></form>
                    <a href="#"><button id="subscribe-button" class="orng-btn">subscribe</button></a> 
                </div>
              
            </div>

            <div class="right-column">
                <div class="menu">
                    <h4>menu</h4>
                    <ul>
                        <li>about us</li>
                        <li>careers</li>
                        <li>blog</li>
                        <li>pricing</li>
                    </ul>
                </div>

                <div class="sub-menu">
                    <h4>sub menu</h4>
                    <ul>
                        <li>about us</li>
                        <li>careers</li>
                        <li>blog</li>
                        <li>pricing</li>
                    </ul>
                </div>

                <div class="company">
                    <h4>company</h4>
                    <ul>
                        <li class="identifier">tel:</li>
                        <li class="info">(506) 800-0580</li>
                        <li class="identifier">email:</li>
                        <li class="info" id="email">straightforwardds@gmail.com</li>
                        <li class="identifier">address</li>
                        <li class="info">Fredericton N.B. Canada</li>
                    </ul>

                    <h4>connect with us</h4>
                    <div class="flex-icons">
                        <a href="#"><i class="fa-brands fa-x-twitter"></i></i></a> 
                        <a href="#"><i class="fa-brands fa-instagram"></i></a> 
                        <a href="#"><i class="fa-brands fa-facebook"></i></a> 
                        <a href="#"><i class="fa-brands fa-linkedin"></i></a> 
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-message">
            <div class="flex-container">
                <p>2024 straightforward Digital Strategy <i class="fa-regular fa-copyright"></i> All Rights Reserved.</p>
            </div>
        </div>

    </footer>
    <!-- Footer section ends here -->

    <!-- custom footer file link -->
    <?php wp_footer(); ?>

    <!-- jquery file link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- custom js file link -->
    <script src="<?php echo get_template_directory_uri(); ?>/main.js"></script>
</body>
</html>