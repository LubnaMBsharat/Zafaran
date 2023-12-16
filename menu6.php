<?php
session_start();
if(isset($_SESSION['ismem'])) {
    if ($_SESSION['ismem'] == 1) {
        ?>


        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title>Drinks Menu</title>
            <link rel="stylesheet" href="menu1.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
            <link rel="stylesheet" href="tcss.css">
        </head>
        <body>
        <section id="nav-bar" class="container">
            <header class="nav-bar">
                <div class="brand"><h1>Zafaran</h1></div>
                <div class="nav-list">
                    <div class="pocket>">
                        <a href="" > <img style="left: 80%" class="catr-img" src="./images/cart.png"></a>
                    </div>
                    <pre>    </pre>
                    <div class="hamburger">
                        <div class="bar"></div>
                    </div>
                    <ul>
                        <li><a href="mainpage.php">Home Page</a></li>
                        <li><a href="#footer">contact us</a></li>
                        <li> <a href="signout.php" >Sign out</a></li>
                    </ul>
                </div>
            </header>
        </section>

        <section class="dish" id="dish">

            <h1 class="heading"> Our Drinks Dishes </h1>
            <div class="box-container">

                <div class="box">
                    <span class="price"id="p1"> 6$ </span>
                    <img src="images/icenescafelatte.jpg" alt="">
                    <h3 id="h1">Ice Nescafe Latte</h3>
                    <button class="btn" id="1" onclick="addtocart('25')"> order now </button>
                </div>

                <div class="box">
                    <span class="price"id="p2"> 4$ </span>
                    <img src="images/bananaoats.jpg" alt="">
                    <h3 id="h2">Banana and Oats</h3>
                    <button class="btn" id="2" onclick="addtocart('26')"> order now </button>
                </div>

                <div class="box">
                    <span class="price"id="p3"> 5$ </span>
                    <img src="images/caramelfrappuccino.jpg" alt="">
                    <h3 id="h3">Caramel Frappuccino</h3>
                    <button class="btn" id="3" onclick="addtocart('27')"> order now </button>
                </div>

            </div>
            <div class="box-container">

                <div class="box">
                    <span class="price"id="p4"> 5$ </span>
                    <img src="images/gingerhoney.jpg" alt="">
                    <h3 id="h4">Ginger with Honey</h3>
                    <button class="btn" id="4" onclick="addtocart('28')"> order now </button>
                </div>



                <div class="box">
                    <span class="price"id="p5"> 4$ </span>
                    <img src="images/kiwilemon.jpg" alt="">
                    <h3 id="h5">Kiwi and Lemon</h3>
                    <button class="btn" id="5" onclick="addtocart('29')"> order now </button>
                </div>

                <div class="box">
                    <span class="price"id="p6"> 5$  </span>
                    <img src="images/figberries.jpg" alt="">
                    <h3 id="h6">Fig and Berries</h3>
                    <button class="btn" id="6" onclick="addtocart('30')"> order now </button>
                </div>
            </div>
        </section>
        <section class="table_responsive">

            <h1 class="text">Shopping Cart:</h1>
            <table class="table" id="carttable">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total Price</th>
                    <th>Remove</th>
                </tr>
                </thead>
                <tbody>

                </tbody>



            </table>

            <button  class="btnn" name="sbut" id="sbut" onclick="gjfddfsoprejfv()" > Submit Order</button></section>

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
        <script src="./mainjs.js"></script>
        <script src="jcss6.js"></script>
        </body>
        </html>

        <?php
    }
}
?>