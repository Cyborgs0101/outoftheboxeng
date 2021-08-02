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

        $tmp_name    = $_FILES['file']['tmp_name']; // get the temporary file name of the file on the server
        $file_name   = $_FILES['file']['name'];  // get the name of the file
        $size        = $_FILES['file']['size'];  // get size of the file for size validation
        $type        = $_FILES['file']['type'];  // get type of the file
        $error       = $_FILES['file']['error']; // get the error (if any)
    
        //validate form field for attaching the file
        if($file_error > 0)
        {
            die('Upload error or No files uploaded');
        }
    
        //read from the uploaded file & base64_encode content
        $handle = fopen($tmp_name, "r");  // set the file handle only for reading the file
        $content = fread($handle, $size); // reading the file
        fclose($handle);                  // close upon completion
    
        $encoded_content = chunk_split(base64_encode($content));
    
        $boundary = md5("random"); // define boundary with a md5 hashed value
    
        //header
        $headers = "MIME-Version: 1.0\r\n"; // Defining the MIME version
        $headers .= "From:".$email."\r\n"; // Sender Email
        $headers .= "Reply-To: ".$email."\r\n"; // Email addrress to reach back
        $headers .= "Content-Type: multipart/mixed;"; // Defining Content-Type
        $headers .= "boundary = $boundary\r\n"; //Defining the Boundary
            
        //plain text 
        $body = "--$boundary\r\n";
        $body .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
        $body .= "Content-Transfer-Encoding: base64\r\n\r\n"; 
        $body .= chunk_split(base64_encode($txt)); 
            
        //attachment
        $body .= "--$boundary\r\n";
        $body .="Content-Type: $type; name=".$file_name."\r\n";
        $body .="Content-Disposition: attachment; filename=".$file_name."\r\n";
        $body .="Content-Transfer-Encoding: base64\r\n";
        $body .="X-Attachment-Id: ".rand(1000, 99999)."\r\n\r\n"; 
        $body .= $encoded_content; // Attaching the encoded file with email
        
        mail($to, $subject, $body, $headers);
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
                <div class="input-section">
                    <div>
                        <img src="./images/icons8-name-96.png" height="20px">
                    </div>
                    <div class="input">
                        <input type="text" required placeholder="Enter Your Name" name="name">
                    </div>
                </div>
                <div class="input-section">
                    <div>
                        <img src="./images/icons8-mail.svg" height="20px">
                    </div>
                    <div class="input">
                        <input type="email" required placeholder="Enter Your Email" name="email">                        
                    </div>
                </div>
                <div class="input-section">
                    <div>
                        <img src="./images/icons8-phone.svg" height="20px">
                    </div>
                    <div class="input">
                        <input type="text" required placeholder="Enter your Contact Number" name="contact_number">
                    </div>
                </div>
                <div class="input-section">
                    <div>
                        <img src="./images/icons8-graduation-cap-90.png" height="20px">
                    </div>                    
                    <div class="input">
                        <input type="text" required placeholder="Enter your Graduation Year" name="grad_year">
                    </div>
                </div>
                <div class="input-section">
                    <div>
                        <img src="./images/icons8-graduation-cap-90.png" height="20px">
                    </div>
                    <div class="input">
                        <input type="text" required placeholder="Enter Your Degree" name="degree">                        
                    </div>
                </div>
                <div class="file">
                    <div>
                        <img src="./images/icons8-file-96.png" height="20px">
                    </div>
                    <div class="input">
                        <input type="file" required placeholder="Attach Your Resume" name="file">
                    </div>
                </div>
                <div class="submit-button">
                    <div>
                        <button type="submit" name="send">Join Us</button>
                    </div>
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