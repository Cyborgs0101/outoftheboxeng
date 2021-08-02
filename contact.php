<?php
    if(isset($_POST['send'])) {
        $name = $_POST["name"];
        $email =  $_POST["email"];
        $msg =  $_POST["msg"];

        $to = "inquiry@outoftheboxeng.com";
        $subject = "New Inquiry!";
        $txt = "Hello Admin, There is a new Inquiry for you" . "\r\n" . "Name : $name" . "\r\n" . "email : $email" . "\r\n" . "Message : $msg" ;
        mail($to,$subject,$txt);
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./styles/contact.css">
    <link rel="stylesheet" href="./styles/navbar.css">
    <link rel="stylesheet" href="./styles/footer.css">

    <title>Website | Contact</title>
</head>

<body>
    <div class=header>
        <div class="logo"></div>
        <div class="burger" id="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
        <nav class="nav">
            <ul>
                <li><a href="./Home.html">Home</a></li>
                <li> <a href="./about.html">About Us</a></li>
                <li> <a href="./services.html">Our Services</a></li>
                <li><a href="./gallery.html">Gallery</a></li>
                <li><a href="#">Pricing</a></li>
                <li><a href="./contact.php">Contact</a></li>
                <li><a href="hiring.html">Hiring</a></li>
            </ul>
        </nav>
    </div>
    <div id="contact">
        <div class="container">
            <div class="left-section">
                <div class="main-title">
                    <h4>
                        Contact Us
                    </h4>
                </div>
                <form action="" method="POST">
                    <div class="name">
                        <input type="text" placeholder="Enter Your Name" name="name">
                    </div>
                    <div class="name">
                        <input type="email" placeholder="Enter Your Email" name="email">
                    </div>
                    <div class="name">
                        <textarea name="msg" id="msg" cols="30" rows="10" placeholder="Leave a message"
                            name="msg"></textarea>
                    </div>
                    <div class="name">
                        <button type="submit" name="send">SEND</button>
                    </div>
                </form>
            </div>
            <div class="right-container">
                <div class="right-section">
                    <div class="main-title">
                        <h4>
                            Information
                        </h4>
                    </div>
                    <div class="right-section-box">

                        <div class="info-div">
                            <div><img src="./images/phone-call.svg" height="20px" width="20px"></div>
                            <a href="tel:+1 416 835 6620">+1 416 835 6620</a>
                        </div>
                        <div class="info-div">
                            <div><img src="./images/EMAIL.svg" height="20px" width="20px"></div>
                            <a href="mailto:inquiry@outoftheboxeng.com">inquiry@outoftheboxeng.com</a>
                        </div>
                        <div class="info-div">
                            <div><img src="./images/home-address.svg" height="20px" width="20px"></div>
                            <a href="https://goo.gl/maps/pfDAfhBivT2WsPir9">92 Education Road, Brampton, ON, Canada, L6P
                                3W3</a>
                        </div>
                        <div class="info-div">
                            <div><img src="./images/linkedin.svg" height="20px" width="20px"></div>
                            <a href="https://www.linkedin.com/">ootbe/linkedin/ootbe</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2880.017559193257!2d-79.67108288462863!3d43.79324867911672!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b2346c3f0f459%3A0x5cfb5103122584bc!2s92%20Education%20Rd%2C%20Brampton%2C%20ON%2C%20Canada!5e0!3m2!1sen!2sin!4v1627711482044!5m2!1sen!2sin"
            allowfullscreen="" loading="lazy">
        </iframe>
    </div>

    <!-- contact button code start -->

    <div class="contact-links" id="contact-links">
        <div class="phone">
            <a href="tel:+1 416 835 6620"><img src="./images/icons8-phone.svg" height="30px"></a>
        </div>
        <div class="message">
            <a href="sms:+1 416 835 6620"><img src="./images/icons8-comments.svg" height="30px"></a>
        </div>
        <div class="email">
            <a href="mailto:inquiry@outoftheboxeng.com"><img src="./images/icons8-mail.svg" height="30px"></a>
        </div>
        <div class="whatsapp">
            <a href="https://wa.me/+1 416 835 6620"><img src="./images/icons8-whatsapp.svg" height="30px"></a>
        </div>
    </div>
    <div class="Contact-button">
        <img src="./images/icons8-phone.svg" height="30px" id="phone-image">
    </div>
    <!-- contact button ends here -->

    <!-- footer starts  -->
    <div class="footer">

        <div class="footer-grid">

            <div id="item1" class="contact-us list">
                <h3>Contact Us</h3>
                <ul>
                    <li><img src="#" alt=""><a href="tel:+1 416 835 6620">+1 416 835 6620</a></li>
                    <li><a href="mailto:inquiry@outoftheboxeng.com">inquiry@outoftheboxeng.com</a></li>
                    <li><a href="https://goo.gl/maps/pfDAfhBivT2WsPir9">Location</a>
                    </li>
                    <li><a href="https://www.linkedin.com/in/bhaskar-joshi-p-eng-13b1691/">Linkedin</a></li>
                </ul>
            </div>


            <div id="item2" class="home list">
                <h3>Home</h3>
                <ul>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Porjects Done</a></li>
                    <li><a href="#">Testimonies</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>


            <div id="item3" class="about-us list">
                <h3>About-Us</h3>
                <ul>
                    <li><a href="">Lorem</a></li>
                    <li><a href="">Our mission</a></li>
                    <li><a href="">Out vision</a></li>
                    <li><a href="">Why to choose us</a></li>
                </ul>
            </div>

        </div>

        <div class="footer-grid-end">
            <div class="social-handles">
                <!-- provide links to social handles -->
                <a href="#"><img src="./images/facebok-01.png" alt="f" id="facebook"></a>
                <a href="#"><img src="./images/twitter-01.png" alt="t" id="twitter"></a>
                <a href="#"><img src="./images/instagram-01.png" alt="i" id="instagram"></a>
            </div>
            <div class="copy-rights">
                <p>Copy rights reserved</p>
            </div>
        </div>

    </div>


    <!-- footer ends -->
    <script src="./scripts/script.js"></script>
</body>

</html>