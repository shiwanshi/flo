<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-primary py-3 d-none d-md-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-white pr-3" href="">FAQs</a>
                        <span class="text-white">|</span>
                        <a class="text-white px-3" href="">Help</a>
                        <span class="text-white">|</span>
                        <a class="text-white pl-3" href="">Support</a>
                    </div>
                </div>
                <div class="col-md-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-white px-3" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-white pl-3" href="">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-white navbar-light shadow p-lg-0">
                <a href="index.php" class="navbar-brand d-block d-lg-none">
                    <h1 class="m-0 display-4 text-primary"><span class="text-secondary">f</span>LO!</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="index.php" class="nav-item nav-link">Home</a>
                        <a href="about.php" class="nav-item nav-link">About</a>

                    </div>
                    <a href="index.php" class="navbar-brand mx-5 d-none d-lg-block">
                        <h1 class="m-0 display-4 text-primary"><span class="text-secondary">f</span>LO!</h1>
                    </a>
                    <div class="navbar-nav mr-auto py-0">

                        <a href="gallery.php" class="nav-item nav-link">Gallery</a>
                        <a href="contact.html" class="nav-item nav-link active">Contact</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid p-0 mb-5 pb-5">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" height="450px" src="img/Period.jpeg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">

                            <h1 class="display-3 text-white mb-md-4">Get in Touch</h1>


                        </div>
                    </div>
                </div>
            </div>
            <!-- Header End -->


</div>
     <!-- Contact Start -->
     <div class="container-fluid py-5">
      <div class="container py-5">
          <div class="row justify-content-center">
              <div class="col-lg-6">
                  <h1 class="section-title position-relative text-center mb-5">Login!!!</h1>
                  <?php
                    if(isset($_SESSION["error"])){
                        $error = $_SESSION["error"];
                        echo "<span>$error</span>";
                    }
                ?>  
              </div>
          </div>
          <div class="row justify-content-center">
              <div class="col-lg-9">
                  <div class="contact-form bg-light rounded p-5">
                      <div id="success"></div>
                      <!-----Form Submission-->
                      <form action="logins.php" method="post" id="contactForm">
                          
                            <div class="control-group">
                              <p style="margin-left:3%">Username:</p>
                              <input type="text"style="width:100%" class="form-control p-sm-4" id="username"
                                  placeholder="Enter your username"
                                  required="required" name="username"
                                  data-validation-required-message="Please enter username" />
                              <p class="help-block text-danger"></p>
                            </div>
                        
                          <div class="control-group">
                            <p style="margin-left:3%">Password:</p>
                              <input type="password" class="form-control p-sm-4" id="password_new"
                                  placeholder="Enter your password"
                                  required="required" name="password_new"
                                  data-validation-required-message="Please enter your password" />
                              <p class="help-block text-danger"></p>
                          </div>
                          
                      
                          <div>
                            <button class="btn btn-primary btn-block py-2 px-3" type="submit"
                                id="sendMessageButton">Sign In!</button>
                        </div>
                      </form>
                  </div>
              </div>
              <br>
              
          </div>
          <div class="row justify-content-center">
          <div class="col-lg-6" style="margin-top:5%">
            <h5 class="section-title position-relative text-center mb-5">New User?   <a href="contact.html">Create an account here</a></h5>
        </div>
      </div>
      </div>
  </div>
  <!-- Contact End -->
  </div>
  <div class="container text-center py-5">
    <div class="row">
        <div class="col-12 mb-4">
            <a href="index.html" class="navbar-brand m-0">
                <h1 class="m-0 mt-n2 display-4 text-primary"><span class="text-secondary">f</span>LO!</h1>
            </a>
        </div>
        <div class="col-12 mb-4">
            <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
            <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
            <a class="btn btn-outline-secondary btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
            <a class="btn btn-outline-secondary btn-social" href="#"><i class="fab fa-instagram"></i></a>
        </div>
        <div class="col-12 mt-2 mb-4">
            Copyright &copy; Shiwanshi Jha
        </div>
    </div>

</div>
</div>
</div>
<!-- Footer End -->

<?php
    unset($_SESSION["error"]);
?>

<!-- Back to Top -->
<a href="#" class="btn btn-secondary px-2 back-to-top"><i class="fa fa-angle-double-up"></i></a>


<!-- JavaScript Libraries 
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/isotope/isotope.pkgd.min.js"></script>
<script src="lib/lightbox/js/lightbox.min.js"></script>-->

<!-- Contact Javascript File -->
<!--<script src="mail/jqBootstrapValidation.min.js"></script>
<script src="mail/contact.js"></script>-->

<!-- Template Javascript 
<script src="js/main.js"></script>-->
</body>

</html>
  </body>
</html>