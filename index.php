<?php
    $msg="";


    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    //Load Composer's autoloader
    require('PHPMailer/Exception.php');
    require('PHPMailer/SMTP.php');
    require('PHPMailer/PHPMailer.php');

    if (isset($_POST['submit'])) {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $message = $_POST['message'];
      $phone = $_POST['mobile'];
      //Create an instance; passing `true` enables exceptions
      $mail = new PHPMailer(true);

          //Server settings
         // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
         // $mail->isSMTP();                                            //Send using SMTP
          $mail->Host       = 'localhost';                     //Set the SMTP server to send through
          $mail->SMTPAuth   = false;                                   //Enable SMTP authentication
          $mail->Username   = 'info@mountaingroup-eg.com';                     //SMTP username
          $mail->Password   = 'Mountaingroup10';                               //SMTP password
          $mail->SMTPSecure = None;            //Enable implicit TLS encryption
          $mail->Port       = 25;                                   //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

          //Recipients
          $mail->setFrom($email, $name);
          $mail->addAddress('marwanellsayed@gmail.com');     //Add a recipient

          //Content
          $mail->isHTML(true);                                  //Set email format to HTML
          $mail->Subject = 'WebSite Contact Us Form';
          $mail->Body    = "Name: $name <br> Email: $email <br> Phone: $phone <br> Message: $message";

          if (!$mail->send()) {
            $msg = '<div class="error">Please Try Again Later!</div>';
            echo "Error" . $mail-> ErrorInfo;
          }
          else {
            $msg = '<div class="success">Thanks For Contact Us</div>';
          }

      }
  // "<script>alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}')</script>";

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Mountain Group was established to become the mother company of some companies in various industrial and service fields">
    <link rel="icon" href="imgs/group .png">
    <title>Mountain Group | The mother company of some companies</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- bootStrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- fontAwesome -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- googleFonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap" rel="stylesheet">
  </head>
  <body class="home-page">
    <!-- start header -->
      <div class="header">
        <div class="overlay"></div>
        <!-- start navbar -->
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="imgs\group .png" alt="company logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <i class="fas fa-bars navbar-toggler-icon"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#our-values">Our Values</a>
                </li>
                <li class="nav-item mega">
                  <a class="nav-link" href="">Our Groups <i class="fas fa-sort-down"></i></a>
                  <div class="">
                    <div class="mega-menu row">
                      <div class="mega-menu-img col-lg-6">
                        <img src="imgs/group .png" alt="company logo">
                      </div>
                      <div class="mega-links col-lg-6">
                        <ul class="links">
                          <li><a href="pages/hr-consultancy.html">HR Consultancy</a></li>
                          <li><a href="pages/mining-services.html">Mining Services</a></li>
                          <li><a href="pages/advertising.html">Advertising</a></li>
                          <li><a href="pages/facilitymanagment.html">Facility Management</a></li>
                          <li><a href="pages/generalsupplies.html">General Supplies</a></li>
                          <li><a href="pages/generalcontraction.html">General Contraction</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#contact">Contact Us</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- end navbar -->
        <!-- start header content -->
          <div class="header-content">
              <div class="title">
                <h1>Mountain Group</h1>
                <p>Mountain Group was established to become the mother company of some companies in various industrial and service fields, Mountain Group seeks to provide the best quality of services provided to the Egyptian market and the Middle East at the most appropriate prices commensurate with the needs of the market and we seek the best teamwork to achieve the group's future vision.</p>
                <!-- <button type="button" name="button"><a href="#about-us">Read More</a></button> -->
              </div>
          </div>
          <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,96L120,128C240,160,480,224,720,208C960,192,1200,96,1320,48L1440,0L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path></svg>
          <div class="groups">
            <div class="group g1">
              <a href="pages/hr-consultancy.html"><img src="imgs\HR.png" alt="HR-consultaion-logo"></a>
            </div>
            <div class="group g2">
              <a href="pages/mining-services.html"><img src="imgs\Mining Services.png" alt="Mining-Services-logo"></a>
            </div>
            <div class="group g3">
              <a href="pages/advertising.html"><img src="imgs\AD.png" alt="Advertising-logo"></a>
            </div>
            <div class="group g4">
              <a href="pages/facilitymanagment.html"><img src="imgs\Facility Management.png" alt="Facility-Managment"></a>
            </div>
            <div class="group g5">
              <a href="pages/generalsupplies.html"><img src="imgs\General Supplies.png" alt="General-Supplies"></a>
            </div>
            <div class="group g6">
              <a href="pages/generalcontraction.html"><img src="imgs\General Construction.png" alt="General-Contraction"></a>
            </div>
          </div>
      </div>
    <!-- end header -->
    <!-- start our values -->
    <div class="our-values-container">
      <div class="our-values" id="our-values">
          <div class="container" >
            <h2 class="main-title">Our Values</h2>
            <div class="row" style="justify-content: space-between;">
              <div class="col-lg-2">
                <div class="value">
                  <i class="fas fa-balance-scale"></i>
                  <h3>Integrity</h3>
                  <p>Carry out our business with honesty</p>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="value">
                  <i class="far fa-handshake"></i>
                  <h3>Respect</h3>
                  <p>We treat all customers with respect and dignity</p>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="value">
                  <i class="fas fa-users"></i>
                  <h3>Team Work</h3>
                  <p>We are one team with one mission and one vision</p>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="value">
                  <i class="fas fa-shield-alt"></i>
                  <h3>Supporting</h3>
                  <p>We never stop learning and sharing experiences</p>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="value">
                  <i class="far fa-lightbulb"></i>
                  <h3>Innovation</h3>
                  <p>Our approach is creating sustainable value for our clients</p>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
    <!-- end our values -->
    <!-- start contact -->
    <div class="contact-container">
      <div class="contact" id="contact">
        <div class="container">
          <h2 class="main-title">Contact Us</h2>
          <form class="contact-us" action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
            <div class="form-group required-field">
              <i class="far fa-user"></i>
              <input class="user-name" type="text" name="name" placeholder="Enter Your Name" value="">
              <span>*</span>
              <div class="custom-alert">
                <p>User name must be larger than <strong>3</strong> characters.</p>
              </div>
            </div>
            <div class="form-group required-field">
              <i class="fas fa-at"></i>
              <input class="email" type="email" name="email" placeholder="Enter Your E-mail" value="">
              <span>*</span>
              <div class="custom-alert">
                <p>E-mail can not be <strong>Empty</strong>.</p>
              </div>
            </div>
            <div class="form-group">
              <i class="fas fa-mobile-alt"></i>
              <input type="text" name="mobile" placeholder="Enter Your Mobile Number" value="">
            </div>
            <div class="form-group area required-field">
              <i class="far fa-comment-alt text-area"></i>
              <textarea class="textarea" name="message" rows="8" cols="80" placeholder="Enter Your Message"></textarea>
              <span>*</span>
              <div class="custom-alert">
                <p>Message can not be less than <strong>10</strong> characters.</p>
              </div>
            </div>
            <?php if ($msg != "") echo "$msg";  ?>
            <input class="submit" type="submit" name="submit" value="Send">
          </form>
        </div>
      </div>
    </div>
    <!-- end contact -->
    <!-- start footer -->
    <div class="footer">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4">
            <div class="breif">
              <img src="imgs/group-f.png" alt="mountaingroups-logo">
              <p> the mother company of some companies in various industrial.</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="contacts">
              <div class="get-touch">
                <i class="fas fa-map-marked-alt"></i>
                <p>ibrahim abou-elnaga street - front of Enppi company - 3rd floor</p>
              </div>
              <div class="get-touch">
                <i class="fas fa-phone-alt"></i>
                <p>02-22701710</p>
                <p>01008017046</p>
              </div>
              <div class="get-touch">
                <i class="far fa-envelope"></i>
                <p>info@mountaingroup-eg.com</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="our-groups">
              <a href="pages/hr-consultancy.html"><img src="imgs/HR.png" alt="HR-consultaion-logo"></a>
              <a href="pages/mining-services.html"><img src="imgs/Mining Services.png" alt="Mining-Services-logo"></a>
              <a href="pages/advertising.html"><img src="imgs/AD.png" alt="Advertising-logo"></a>
            </div>
            <div class="our-groups">
              <a href="pages/facilitymanagment.html"><img src="imgs/Facility Management.png" alt="Facility-Managment"></a>
              <a href="pages/generalsupplies.html"><img src="imgs/General Supplies.png" alt="General-Supplies"></a>
              <a href="pages/generalcontraction.html"><img src="imgs/General Construction.png" alt="General-Contraction"></a>
            </div>
          </div>
        </div>
      </div>
      <div class="made-by">
        <p>&copy2022 All rights reserved. <!-- Made-By <span><a target="_blank" href="https://www.linkedin.com/in/marwanellsayed/">Perfection</a></span> With <i class="far fa-heart"></i>.</p>-->
      </div>
    </div>
    <!-- end footer -->
    <i class="fas fa-sort-up up"></i>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>
