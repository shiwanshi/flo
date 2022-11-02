
<?php
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.php');
	exit;
}
else
{
echo'
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Flo</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">


    <link href="img/favicon.ico" rel="icon">


    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">


    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">


    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

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
                        <a href="index.php" class="nav-item nav-link active">Home</a>
                        <a href="about.php" class="nav-item nav-link">About</a>

                    </div>
                    <a href="index.php" class="navbar-brand mx-5 d-none d-lg-block">
                        <h1 class="m-0 display-4 text-primary"><span class="text-secondary">f</span>LO!</h1>
                    </a>
                    <div class="navbar-nav mr-auto py-0">

                        <a href="gallery.php" class="nav-item nav-link">Gallery</a>
                        <a href="logout.php" class="nav-item nav-link">Logout</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 pb-5">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" height="700px" src="img/Period.jpeg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3"> Welcome Back!</h4>
                            <h1 class="display-3 text-white mb-md-4">Hello ' .$_SESSION["name"];
                            echo ' :)</h1>
                            <form action="search.php" method="POST">
                                <input type="text" class="py-md-3 px-md-5 mt-2" style="border-radius: 30px 30px 30px 30px; " name="search" placeholder="Looking for Someone?" /> <br/>
                                <input type="submit" class="btn btn-primary py-md-3 px-md-5 mt-2" value="Let&apos;s Go" />
                            </form>

                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" height="700px" src="img/Cycle.jpeg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Symptoms? </h4>
                            <h1 class="display-3 text-white mb-md-4">Log your Symptoms and check what it means</h1>
                            <a href="#section1" class="btn btn-primary py-md-3 px-md-5 mt-2">Click Here!</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-secondary px-0" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n1"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-secondary px-0" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n1"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <h1 class="section-title position-relative text-center mb-5">Cramps? Aches? Bloating?</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 py-5">
                    <h4 class="font-weight-bold mb-3">Causes</h4>
                    <h5 class="text-muted mb-3">Menstrual cramps (dysmenorrhea) are throbbing or cramping pains in the lower abdomen. Many women have menstrual cramps just before and during their menstrual periods.</h5>
                    <p>As well as causing menstrual bleeding, research suggests that changes in progesterone and estrogen levels cause the body to retain more water and salt. The bodys cells become swollen with water, causing the feeling of bloating.</p>              
                    <a href="https://www.mayoclinic.org/diseases-conditions/menstrual-cramps/symptoms-causes/syc-20374938" class="btn btn-secondary mt-2">Learn More</a>
                </div>
                <div class="col-lg-4" style="min-height: 400px;">
                    <div class="position-relative h-100 rounded overflow-hidden">
                        <img class="position-absolute w-100 h-100" src="img/Pad2.jpeg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4 py-5">
                    <h4 class="font-weight-bold mb-3">Solutions</h4>
                    <p>Dealing with menstrual cramps every month can be as frustrating as it is painful. The good news is there are many remedies that might help you relieve period cramps.</p>
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>Drink more water</h5>
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>Eat anti-inflammatory foods</h5>
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>Apply heat</h5>
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>Exercise</h5>
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>Reduce Stress</h5>
                    <a href="https://www.healthpartners.com/blog/13-ways-to-stop-period-pain/#:~:text=Eat%20anti%2Dinflammatory%20foods,like%20turmeric%2C%20ginger%20or%20garlic." class="btn btn-primary mt-2">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- YT Start -->
    <div class="container-fluid my-5 py-5 px-0">
        <div class="row bg-primary m-0">
            <div class="col-md-6 px-0" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100" src="img/Hotbag.jpeg" style="object-fit: cover;">
                    <button type="button" class="btn-play" data-toggle="modal" data-src="https://youtu.be/Fq7F2bOQ0u0" data-target="#videoModal">
                        <span></span>
                    </button>
                </div>
            </div>
            <div class="col-md-6 py-5 py-md-0 px-0">
                <div class="h-100 d-flex flex-column align-items-center justify-content-center text-center p-5">
                    <div class="d-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 100px; height: 100px;">
                        <h3 class="font-weight-bold text-secondary mb-0">YT</h3>
                    </div>
                    <h3 class="font-weight-bold text-white mt-3 mb-4">YOGA POSES FOR YOU</h3>
                    <p class="text-white mb-4">That time of the month is not only uncomfortable but also painful. Here are a few easy yoga poses to relieve period and reduce menstrual cramps.</p>
                    <a href="" class="btn btn-secondary py-3 px-5 mt-2">Get your report</a>
                </div>
            </div>
        </div>
    </div>
    <!-- YT End -->


    <!-- Video Modal Start -->
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/516wWsO7Rzs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


    <!-- TOPIC Start -->
    <div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-6">
                <h1 class="section-title position-relative mb-5">Topics to Discover</h1>
            </div>
            <div class="col-lg-6 mb-5 mb-lg-0 pb-5 pb-lg-0"></div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="owl-carousel service-carousel">
                    <div class="service-item">
                        <div class="service-img mx-auto">
                            <img class="rounded-circle w-100 h-100 bg-light p-3" src="img/Pad.jpeg" style="object-fit: cover;">
                        </div>
                        <div class="position-relative text-center bg-light rounded p-4 pb-5" style="margin-top: -75px;">
                            <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">PMS or Pregnancy?</h5>
                            <p>The key difference between the two, however, is that with pregnancy, your period does not occur. Nausea is also a symptom that can accompany pregnancy and is often not experienced with PMS.</p>
                            <a href="https://www.bannerhealth.com/healthcareblog/teach-me/pms-or-pregnant-how-you-can-tell-the-difference#:~:text=%E2%80%9CThe%20key%20difference%20between%20the,of%20gestation%2C%20%E2%80%9CGiles%20said." class="border-bottom border-secondary text-decoration-none text-secondary">Learn More</a>
                        </div>
                    </div>
                    <div class="service-item">
                        <div class="service-img mx-auto">
                            <img class="rounded-circle w-100 h-100 bg-light p-3" src="img/Cramps.jpeg" style="object-fit: cover;">
                        </div>
                        <div class="position-relative text-center bg-light rounded p-4 pb-5" style="margin-top: -75px;">
                            <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">Pain Relief</h5>
                            <p>Dysmenorrhea is thought to be caused by compounds in the body known as prostaglandins.As your period progresses and the lining of the uterus is shed, your prostaglandin level decreases and pain gets better.</p>
                            <a href="https://www.everydayhealth.com/treatment/womens-health/ways-to-relieve-period-cramps/" class="border-bottom border-secondary text-decoration-none text-secondary">Learn More</a>
                        </div>
                    </div>
                    <div class="service-item">
                        <div class="service-img mx-auto">
                            <img class="rounded-circle w-100 h-100 bg-light p-3" src="img/Tampon.jpeg" style="object-fit: cover;">
                        </div>
                        <div class="position-relative text-center bg-light rounded p-4 pb-5" style="margin-top: -75px;">
                            <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">Ovulation</h5>
                            <p>Ovulation is the process in which a mature egg is released from the ovary. After its released, the egg moves down the fallopian tube and stays there for 12 to 24 hours, where it can be fertilized.</p>
                            <a href="https://www.mayoclinic.org/healthy-lifestyle/getting-pregnant/expert-answers/ovulation-signs/faq-20058000#:~:text=Ovulation%20is%20the%20process%20in,where%20it%20can%20be%20fertilized." class="border-bottom border-secondary text-decoration-none text-secondary">Learn More</a>
                        </div>
                    </div>
                    <div class="service-item">
                        <div class="service-img mx-auto">
                            <img class="rounded-circle w-100 h-100 bg-light p-3" src="img/Pain.jpeg" style="object-fit: cover;">
                        </div>
                        <div class="position-relative text-center bg-light rounded p-4 pb-5" style="margin-top: -75px;">
                            <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">Health and Exercise</h5>
                            <p>Exercise during menstruation may help relieve symptoms and is also beneficial for overall health. People do not need to restrict any particular physical activities unless they experience any kind of discomfort.</p>
                            <a href="https://www.medicalnewstoday.com/articles/326364#:~:text=Exercise%20during%20menstruation%20may%20help,suggests%20they%20should%20slow%20down." class="border-bottom border-secondary text-decoration-none text-secondary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- TOPIC End -->


    <!-- TIPS Start -->
    <div class="container-fluid my-5 py-5 px-0">
        <div class="row justify-content-center m-0">
            <div class="col-lg-5">
                <h1 class="section-title position-relative text-center mb-5">Tips and Tricks</h1>
            </div>
        </div>
        <div class="row m-0 portfolio-container">
            <div class="col-lg-4 col-md-6 p-0 portfolio-item">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/colour.jpeg" alt="">
                    <a class="portfolio-btn" href="img/colour.jpeg" data-lightbox="portfolio">
                        <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-0 portfolio-item">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/blood.jpeg" alt="">
                    <a class="portfolio-btn" href="img/blood.jpeg" data-lightbox="portfolio">
                        <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-0 portfolio-item">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/perself.jpeg" alt="">
                    <a class="portfolio-btn" href="img/perself.jpeg" data-lightbox="portfolio">
                        <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-0 portfolio-item">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/selfcare.jpeg" alt="">
                    <a class="portfolio-btn" href="img/selfcare.jpeg" data-lightbox="portfolio">
                        <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-0 portfolio-item">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/periodblood.jpeg" alt="">
                    <a class="portfolio-btn" href="img/periodblood.jpeg" data-lightbox="portfolio">
                        <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-0 portfolio-item">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/colour.jpeg" alt="">
                    <a class="portfolio-btn" href="img/colour.jpeg" data-lightbox="portfolio">
                        <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- TIPS End -->


    <!-- SYMPTOMS Start -->
    <div class="container-fluid py-5" id="section1">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative mb-5">YOUR SYMPTOMS</h1>
                </div>
                <div class="col-lg-6 mb-5 mb-lg-0 pb-5 pb-lg-0"></div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel product-carousel">
                        <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                            <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                                <h4 class="font-weight-bold text-white mb-0">LOG?</h4>
                            </div>
                            <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">
                                <img class="rounded-circle w-100 h-100" src="img/head.jpeg" style="object-fit: cover;">
                            </div>
                            <h5 class="font-weight-bold mb-4">Headache</h5>
                            <a href="" class="btn btn-sm btn-secondary" onClick="alert(\'Symptom Logged\')"><b>+</b></a>
                        </div>
                        <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                            <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                                <h4 class="font-weight-bold text-white mb-0">LOG?</h4>
                            </div>
                            <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">
                                <img class="rounded-circle w-100 h-100" src="img/nausea.jpeg" style="object-fit: cover;">
                            </div>
                            <h5 class="font-weight-bold mb-4">Nausea</h5>
                            <a href="" class="btn btn-sm btn-secondary" onClick="alert(\'Symptom Logged\')"><b>+</b></a>
                        </div>
                        <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                            <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                                <h4 class="font-weight-bold text-white mb-0">LOG?</h4>
                            </div>
                            <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">
                                <img class="rounded-circle w-100 h-100" src="img/insomnia.jpeg" style="object-fit: cover;">
                            </div>
                            <h5 class="font-weight-bold mb-4">Insomnia</h5>
                            <a href="" class="btn btn-sm btn-secondary" onClick="alert(\'Symptom Logged\')"><b>+</b></a>
                        </div>
                        <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                            <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                                <h4 class="font-weight-bold text-white mb-0">LOG?</h4>
                            </div>
                            <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">
                                <img class="rounded-circle w-100 h-100" src="img/const.jpeg" style="object-fit: cover;">
                            </div>
                            <h5 class="font-weight-bold mb-4">Constipation</h5>
                            <a href="" class="btn btn-sm btn-secondary" onClick="alert(\'Symptom Logged\')"><b>+</b></a>
                        </div>
                        <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                            <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                                <h4 class="font-weight-bold text-white mb-0">LOG?</h4>
                            </div>
                            <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">
                                <img class="rounded-circle w-100 h-100" src="img/fatigue.jpeg" style="object-fit: cover;">
                            </div>
                            <h5 class="font-weight-bold mb-4">Fatigue</h5>
                            <a href="" class="btn btn-sm btn-secondary" onClick="alert(\'Symptom Logged\')"><b>+</b></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SYMPTOMS End -->
    </section>



    <!-- Footer Start -->
    <div class="container-fluid footer bg-light py-5" style="margin-top: 90px;">
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
                    Copyright &copy; Shiwanshi
                </div>
            </div>

        </div>
    </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-secondary px-2 back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>';
                        }
?>
