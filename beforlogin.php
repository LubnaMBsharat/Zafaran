<?php

if(isset($_POST['register'])) {
    echo "hi";
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "zafaran";
    session_start();
// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO member (fname, lname, email,password, phone )
VALUES ('$firstname','$lastname','$email','$pass','$phone')";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['ismem'] = 1;
        echo "New record created successfully";
        header('Location:mainpage.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
else {
    echo'<script>
document.getElementById("login-form").style.display="inline";
</script>
';
}
?>
<?php
if(isset($_POST['login'])) {

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "zafaran";

    $iemail = $_POST['iemail'];
    $ipass = $_POST['ipass'];

    session_start();

    $connn = new mysqli($servername, $username, $password, $dbname);
    $sql = "SELECT * FROM member ";



    $res=$connn->query($sql);
    for($i=0; $i< $res->num_rows;$i++){
        $row=$res->fetch_object();
        if( $row->email == $iemail && $row->password == $ipass){

            $_SESSION['ismem']=1;
            header('Location:mainpage.php');
        }
        else {
            echo'<script>
document.getElementById("login-form").style.display="inline";
</script>
';
        }

    }
    $connn->close();

}
else {
    echo'<script>
document.getElementById("login-form").style.display="inline";
</script>
';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> ZAFARAN </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />

    <link rel="stylesheet" href="maincss.css">

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
                <li> <a href="#login-form" onclick="show_hide()">sign up</a></li>
            </ul>
        </div>
    </header>
</section>
<!-- End nav-bar  -->

<!-- php log in form -->



<!-- End php log in form -->


<!-- log in form -->

<div id='login-form' class='login-page'>
    <div class="form-box" >
        <div class='button-box'>
            <div id='btn'></div>
            <button type='button'onclick='login()'class='toggle-btn'>Log In</button>
            <button type='button'onclick='register()'class='toggle-btn'>Register</button>
        </div>
        <form id='login' class='input-group-login' method="post" >
            <input type='text'class='input-field'placeholder='Email Id' id='iemail' name='iemail' required >
            <input type='password'class='input-field'placeholder='Enter Password' id='ipass' name='ipass' required>
            <input type='checkbox'class='check-box'><span>Remember Password</span>
            <button type="submit" class='submit-btn' name="login">Log in</button>
        </form>
        <form id='register' class='input-group-register' method="post" >
            <input type='text'class='input-field'placeholder='First Name' name='firstname' id='firstname' required >
            <input type='text'class='input-field'placeholder='Last Name ' name='lastname' id='lastname' required>
            <input type='text'class='input-field'placeholder='Phone Number' name='phone' id='phone' required >
            <input type='email'class='input-field'placeholder='Email Id' name='email' id='email' required>
            <input type='password'class='input-field'placeholder='Enter Password' name='pass' id='pass' required>
            <button type="submit" class='submit-btn' name="register"   >Register</button>

        </form>
    </div>
</div>

<!--    end of log in form-->
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

<!-- starts types section  -->
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
                    <br><br><br> <h2> Sing Up / Sign In <br> to see the menu </h2>
                    <br><br><br><br><br>

                </div>
            </div>
        </div>
        <div class="type">
            <div class="type-card">
                <div class="type-front">
                </div>
                <div class="type-back">
                    <h1 class="type-back-heading">Soups</h1>
                    <br><br><br> <h2> Sing Up / Sign In <br> to see the menu </h2>
                    <br><br><br><br><br>

                </div>
            </div>
        </div>
        <div class="type">
            <div class="type-card">
                <div class="type-front">
                </div>
                <div class="type-back">
                    <h1 class="type-back-heading">Salads</h1>
                    <br><br><br> <h2> Sing Up / Sign In <br> to see the menu </h2>
                    <br><br><br><br><br>


                </div>
            </div>
        </div>

        <div class="type">
            <div class="type-card">
                <div class="type-front">
                </div>
                <div class="type-back">
                    <h1 class="type-back-heading">Snacks</h1>
                    <br><br><br> <h2> Sing Up / Sign In <br> to see the menu </h2>
                    <br><br><br><br><br>


                </div>
            </div>
        </div>
        <div class="type">
            <div class="type-card">
                <div class="type-front">
                </div>
                <div class="type-back">
                    <h1 class="type-back-heading">Drinks</h1>
                    <br><br><br> <h2> Sing Up / Sign In <br> to see the menu </h2>
                    <br><br><br><br><br>


                </div>
            </div>
        </div>
        <div class="type">
            <div class="type-card">
                <div class="type-front">
                </div>
                <div class="type-back">
                    <h1 class="type-back-heading">Desserts</h1>
                    <br><br><br> <h2> Sing Up / Sign In <br> to see the menu </h2>
                    <br><br><br><br><br>




                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Types section  -->
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

</body>
</html>