<?php
    if(isset($_POST['send'])) {
        $name = $_POST["name"];
        $email =  $_POST["email"];
        $grad_year =  $_POST["grad_year"];
        $degree = $_POST["degree"];
        $resume = $_POST["resume"];
        $contact_number = $_POST["contact_number"];

        $to = "inquiry@outoftheboxeng.com";
        $subject = "New Resume!";
        $txt = "Hello Admin, There is a new Resume for you" . "\r\n" . "Name : $name" . "\r\n" . "email : $email" . "\r\n" . "Contact No. : $contact_number" . "\r\n" 
                . "Graduation Year : $grad_year" . "\r\n" . "Degree : $degree" . "\r\n" . "Resume is in Attachment, do check that out";
        // mail($to,$subject,$txt);

    $strTo = "inquiry@outoftheboxeng.com"
    $strSubject = "New Resume!!"
    $strMessage = $txt

    //*** Uniqid Session ***//
    // $strSid = md5(uniqid(time()));


    //from name you can replace it
    $from_name = $name;

    //from email
    $from_email = $email;


    $strHeader = "";
    $strHeader .= "From: " . $from_name . "<" . $from_email . ">\nReply-To: " . $from_email . "";

    $strHeader .= "MIME-Version: 1.0\n";
    $strHeader .= "Content-Type: multipart/mixed; boundary=\"" . $strSid . "\"\n\n";
    $strHeader .= "This is a multi-part message in MIME format.\n";

    $strHeader .= "--" . $strSid . "\n";
    $strHeader .= "Content-type: text/html; charset=utf-8\n";
    $strHeader .= "Content-Transfer-Encoding: 7bit\n\n";
    $strHeader .= $strMessage . "\n\n";

    //*** Attachment ***//
    if ($_FILES["file"]["name"] != "") {
        $strFilesName = $_FILES["file"]["name"];
        $strContent = chunk_split(base64_encode(file_get_contents($_FILES["file"]["tmp_name"])));
        // $strHeader .= "--" . $strSid . "\n";
        $strHeader .= "Content-Type: application/octet-stream; name=\"" . $strFilesName . "\"\n";
        $strHeader .= "Content-Transfer-Encoding: base64\n";
        $strHeader .= "Content-Disposition: attachment; filename=\"" . $strFilesName . "\"\n\n";
        $strHeader .= $strContent . "\n\n";
    }

    mail($strTo, $strSubject, null, $strHeader);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/hiring.css">
    <link rel="stylesheet" href="./styles/navbar.css">
    <link rel="stylesheet" href="./styles/footer.css">

    <title>Website | About</title>
</head>

<body>

    <!-- nav code starts-->

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
   <!-- nav code starts-->

    <!-- hiring page code starts -->
    <div id="main-container">
        <div id="left-section">
            <div class="title">
                <h4>
                    Join Us
                </h4>
            </div>
            <div class="line">
            </div>
        </div>
        <div id="right-section">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="input">
                    <img src="./images/icons8-name-96.png" height="20px">
                    <input type="text" required placeholder="Enter Your Name" name="name">
                </div>
                <div class="input">
                    <img src="./images/icons8-mail.svg" height="20px">
                    <input type="email" required placeholder="Enter Your Email" name="email">
                </div>
                <div class="input">
                    <img src="./images/icons8-phone.svg" height="20px">
                    <input type="text" required placeholder="Enter your Contact Number" name="contact_number">
                </div>
                <div class="input">
                    <img src="./images/icons8-graduation-cap-90.png" height="20px">
                    <input type="text" required placeholder="Enter your Graduation Year" name="grad_year">
                </div>
                <div class="input">
                    <img src="./images/icons8-graduation-cap-90.png" height="20px">
                    <input type="text" required placeholder="Enter Your Degree" name="degree">
                </div>
                <div class="file">
                    <img src="./images/icons8-file-96.png" height="20px">
                    <input type="file" required placeholder="Attach Your Resume" name="resume">
                </div>
                <div class="input">
                    <button type="submit" name="send">Join Us</button>
                </div>
            </form>
        </div>
    </div>
    <!-- hiring page code ends -->


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

    <!-- js section starts -->
    <script src="./scripts/script.js"></script>
    <!-- js section ends -->
</body>

</html>