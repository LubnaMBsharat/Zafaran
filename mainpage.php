<?php
session_start();
if(isset($_SESSION['ismem'])) {
    if ($_SESSION['ismem'] == 1) {
        ?>

        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title> ZAFARAN </title>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
            <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" >
            --> <link rel="stylesheet" href="maincss.css">
        </head>
        <body>
        <!-- nav-bar  -->
        <section id="nav-bar" class="container">
            <header class="nav-bar">
                <div class="brand"><h1>Zafaran</h1></div>

                <div class="nav-list">

                    <div class="hamburger">
                        <div class="bar"></div>
                    </div>
                    <ul>
                        <li><a href="#about">About</a></li>
                        <li><a href="#types">Dishes</a></li>
                        <li><a href="#footer">contact us</a></li>
                        <li> <a href="signout.php" >sign Out</a></li>
                    </ul>
                </div>
            </header>
        </section>
        <!-- End nav-bar  -->

        <section id="hero" class="hero container">
            <div class="hero-info">
                <h1 class="hero-info-heading">  ZAFARAN </h1>
                <br>
                <p class=hero-info-subheading" style="color: saddlebrown; font-size: 2rem" > Your Best Choice </p>


            </div>
            <div class="hero-video">
                <div class="color-overlay"></div>
                <video autoplay loop muted>
                    <source src="video/web.mp4" type="video/mp4">
                </video>
            </div>
        </section>
        <!-- end of heading -->

        <section id="about" class="about container">
            <div class="about-info">
                <h1 class="about-info-heading">About Us</h1>
                <p class="about-info-desc">Zafaran is your way to happiness <br> As we all know the best road to the heart is the stomach <br> So we offer the best taste from professional hands for you.</p>
            </div>
            <div class="about-img">
                <div class="about-img-wrapper">
                    <img src="./images/info.jpg" alt="">
                </div>
            </div>
        </section>
        <!-- End About section  -->
        <section id="types" class="types container">
            <div class="types-header">
                <h1 class="types-header-heading">Dishes</h1>
                <p class="types-header-desc"> Here you can view our main delicious dishes</p>
            </div>

            <div class="types-info">
                <div class="type">
                    <div class="type-card">
                        <div class="type-front">

                        </div>
                        <div class="type-back">
                            <h1 class="type-back-heading">Main Meals</h1>
                            <br><br><br><br><br>
                            <div class="button">
                                <a href="menu.php" class="btn">See Menu</a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="type">
                    <div class="type-card">
                        <div class="type-front">
                        </div>
                        <div class="type-back">
                            <h1 class="type-back-heading">Soups</h1>
                            <br><br><br><br><br>
                            <div class="button">
                                <a href="menu4.php" class="btn">See Menu</a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="type">
                    <div class="type-card">
                        <div class="type-front">
                        </div>
                        <div class="type-back">
                            <h1 class="type-back-heading">Salads</h1>
                            <br><br><br><br><br>
                            <div class="button">
                                <a href="menu5.php" class="btn">See Menu</a>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="type">
                    <div class="type-card">
                        <div class="type-front">
                        </div>
                        <div class="type-back">
                            <h1 class="type-back-heading">Snacks</h1>
                            <br><br><br><br><br>
                            <div class="button">
                                <a href="menu3.php" class="btn">See Menu</a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="type">
                    <div class="type-card">
                        <div class="type-front">
                        </div>
                        <div class="type-back">
                            <h1 class="type-back-heading">Drinks</h1>
                            <br><br><br><br><br>
                            <div class="button">
                                <a href="menu6.php" class="btn">See Menu</a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="type">
                    <div class="type-card">
                        <div class="type-front">
                        </div>
                        <div class="type-back">
                            <h1 class="type-back-heading">Desserts</h1>
                            <br><br><br><br><br>
                            <div class="button">
                                <a href="menu2.php" class="btn">See Menu</a>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <footer id="footer" class="footer container">
                <div class="footer-contact">
                    <h1 class="footer-contact-heading">Contact Us :</h1>
                    <p class="footer-contact-info">Email: zafaran2022@gamil.com</p>
                    <p class="footer-contact-info">Mobile: +970 512 345 678</p>
                </div>
                <div class="footer-social-follow">
                    <h1 class="footer-social-follow-heading">Follow Me</h1>
                    <div class="footer-social-icon">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-instagram-square"></i></a>
                        <a href="#"><i class="fab fa-behance-square"></i></a>
                        <a href="#"><i class="fab fa-dribbble-square"></i></a>
                    </div>
                </div>
            </footer>




        </section>
        <div class="pocket">


        </div>

        <script src="./mainjs.js"></script>

        </body>
        </html>
        <?php
    }
}
?>