

<?php include('config_db.php'); ?>
<?php 
if(isset($_POST['submit'])){
    $name= $_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];

    $sql = "INSERT INTO contactus(`name`,`email`,`subject`,`message`) values('$name','$email', '$subject','$message')";


    if( mysqli_query($conn , $sql)){
        echo 'send';
    }
    else {
        echo mysqli_error($conn);
    }


}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>HR HOSPITAL-Good Health</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    </head>
    <body>
        <section class="Sub-header">
            <nav>
                <a href="Hospital.html"><img src="Images/1200px-HR_Logo.svg.png" alt="logo"></a>
                <div class="nav-links">
                    <ul>
                        <li><a href="index.html">HOME</a></li>
                    <li><a href="http://hrhospital.great-site.net/aBOUT%20-%20Copy.html">ABOUT</a></li>
                    <li><a href="http://hrhospital.great-site.net/faci.html">FACILITIES</a></li>
                    <li><a href="./contact.php">CONTACT US</a></li>
                    </ul>
                </div>
            </nav>
            <h1>Contact Us</h1>
            </section>
            <section class="location">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15022.432577718657!2d79.1632747292386!3d19.729300437462037!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd2c5c36114b243%3A0x71a543179768642b!2sGadchandur%2C%20Maharashtra%20442908!5e0!3m2!1sen!2sin!4v1626268447079!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </section>
            <section class="contact-us">
                <div class="row">
                    <div class="contact-col">
                        <div>
                            <i class="fa fa-home"></i>
                            <span>
                                <h5>XYZ Road, Abc Building</h5>
                                <p>Banglore,Karnataka,In</p>
                            </span>
                        </div>
                        <div>
                            <i class="fa fa-phone"></i>
                            <span>
                                <h5>+1 098765432</h5>
                                <p>Monday to Saturday, 10AM to 6PM</p>
                            </span>
                        </div>
                        <div>
                            <i class="fa fa-envelop-o"></i>
                            <span>
                                <h5>rajsinghaditya512@gmail.com</h5>
                                <p>Email us your querry</p>
                            </span>
                        </div>
                    </div>
                    <div class="contact-col">
                    <form action="contact.php" method="POST">
                        <input type="text" name="name" placeholder="Enter your name" required>
                        <input type="text"  name="email" placeholder="Enter Email address" required>
                        <input type="text"  name="subject" placeholder="Enter your problem" required>
                        <textarea rows="8"  name="message" placeholder="Message" required></textarea>
                        <input type="submit" name="submit" class="hero-btn red-btn" value="Send Message">
                 
                    </form>
                </div>
                </div>
            </section>



        <!--footer-->

        <section class="footer">
            <h4>About Us</h4>
            <p>Home   |   About HR   |   Our Consultants   |   Career   |   Official e-mails   |   Office Access   |   Terms and conditions   |   Privacy Policy   |   Contact
               <br> © 2021 HR Multi-Speciality Hospital. All rights reserved</br></p>
        </section>




    </body>
</html>