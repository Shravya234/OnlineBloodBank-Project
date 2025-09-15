<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Blood bank Website |bloodbanksupport@gmail.com</title>
    <link rel="shortcut icon" href="assets/images/bloodbank.jpg" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" href="assets/plugins/grid-gallery/css/grid-gallery.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <style>
        .about-us {
            font-family: 'Merriweather', serif;
            font-size: 24px;
            line-height: 1.6;
            color: #333333;
            font-weight: bold;
        }
        

        .contact-details {
            font-family: 'Merriweather', serif;
            font-size: 16px;
        }

        .contact-details .icon {
            font-size: 20px;
            margin-right: 10px;
            vertical-align: middle;
        }

        .contact-details .address-row {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .gallery .gg-box {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .gallery .gg-element {
            width: 30%;
            margin-bottom: 15px;
        }

        .footer-form .form-control {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <header class="container-fluid">
        <div class="header-top">
            <div class="container">
                <div class="row col-det">
                    <div class="col-lg-6 d-none d-lg-block">
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <ul class="ulright">
                            <li>
                                <i class="fas fa-user"></i>
                                <a href="reg.html"style="color: white;">Register</a>
                                <span>|</span></li>
                            <li>
                                <i class="fas fa-user"></i>
                                <a href="login.php"style="color: white;">Login</a></li>
                                <div id="logoutBtnContainer">
                               <?php include 'check_login.php'; ?>
                              </div>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="menu-jk" class="header-bottom">
            <div class="container">
                <div class="row nav-row">
                    <div class="col-md-3 logo">
                        <img src="assets/images/bloodbank.jpg" alt="there is an image here">
                    </div>
                    <div class="col-md-9 nav-col">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="#">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#about">About Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#gallery">Gallery</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#process">Process</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#blog">Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="req.html">Request</a>
                                    </li>
                                   
                                    <li class="nav-item">
                                        <a class="nav-link" href="#contact">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- ################# Slider Starts Here#######################--->

    <div class="slider-detail">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="assets\images\slider\bd1.jpg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="bounceInDown" style="color: white;">Donate Blood & Save a Life</h5>
                        <p class="bounceInLeft"style="color: white;">Welcome to our homepage, where compassion meets action. <br>Join us in making a profound impact by donating blood and saving lives.<br> With just a simple act of kindness, you can be a hero to someone in need. <br>Explore how you can make a difference today.</p>
                        <div class="vbh">
                            <div class="btn btn-danger bounceInUp"><a href="reg.html"style="color: white;">Donate Now</div>
                            <div class="btn btn-success bounceInUp"><a href="available.php"style="color: white;">Available</div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="assets\images\slider\bd2.jpg" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="bounceInDown"style="color: white; ">Donate Blood & Save a Life</h5>
                        <p class="bounceInLeft" style="color: white;">Discover the power of giving on our homepage, where every drop of blood donated has the potential to save a <br>life. Join our community of lifesavers and be a beacon of hope for those in need.<br> Take the first step towards making a meaningful impact and changing lives for the better.<br> Explore how you can contribute to this noble cause today.</p>
                        <div class="vbh">
                            <div class="btn btn-danger bounceInUp"><a href="reg.html.html"style="color: white;">Donate Now</div>
                            <div class="btn btn-danger bounceInUp"><a href="available.php"style="color: white;">Available</div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <!--*************** About Us Starts Here ***************-->
    <section id="about" class="container-fluid about-us">
        <div class="container">
            <div class="row session-title">
                <h2>About Us</h2>
                <p></p>
            </div>
            <div class="row">
                <div class="col-md-6 text">
                    <h2>About Blood Bank Service System</h2>
                    <p>Welcome to our Blood Bank Service System website. We are dedicated to providing reliable blood donation services to communities in need.</p>
                    <p>Our mission is to ensure a safe and efficient blood supply chain, saving lives through timely blood transfusions.</p>
                    <p>For more information about our services and how you can contribute, please contact us or visit our donation centers.</p>
                </div>
                <div class="col-md-6 image">
                    <img src="blood_about_img.jpeg" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- ################# Gallery Start Here #######################--->
    <div id="gallery" class="gallery container-fluid">
        <div class="container">
            <div class="row session-title">
                <h2>Checkout Our Gallery</h2>
            </div>
            <div class="gallery-row row">
                <div id="gg-screen"></div>
                <div class="gg-box">
                    <div class="gg-element">
                        <img src="assets/images/gallery/g1.jpg">
                    </div>
                    <div class="gg-element">
                        <img src="assets/images/gallery/g2.jpg">
                    </div>
                    <div class="gg-element">
                        <img src="assets/images/gallery/g3.jpg">
                    </div>
                    <div class="gg-element">
                        <img src="assets/images/gallery/g4.jpg">
                    </div>
                    <div class="gg-element">
                        <img src="assets/images/gallery/g6.jpg">
                    </div>
                    <div class="gg-element">
                        <img src="assets/images/gallery/g7.jpg">
                    </div>
                    <div class="gg-element">
                        <img src="assets/images/gallery/g8.jpg">
                    </div>
                    <div class="gg-element">
                        <img src="assets/images/gallery/g9.jpg">
                    </div>
                    <div class="gg-element">
                        <img src="assets/images/gallery/g10.jpg">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ################# Donation Process Start Here #######################--->
    <section id="process" class="donation-care">
        <div class="container">
            <div class="row session-title">
                <h2>Donation Process</h2>
                <p>The blood donation process  involves registering, undergoing a brief health screening, donating blood (which takes about 10-15 minutes), and then resting with refreshments to ensure well-being before leaving.</p>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 vd">
                    <div class="bkjiu">
                        <img src="assets/images/gallery/g1.jpg" alt="">
                        <h4><b>1 - </b>Registration</h4>
                        <p>Donor as well receiver both first have to register in the blood bank offline center.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 vd">
                    <div class="bkjiu">
                        <img src="assets/images/gallery/g3.jpg" alt="">
                        <h4><b>2 - </b>Testing</h4>
                        <p>Before donating tests will be conducted of donor whether he is healthy or not.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 vd">
                    <div class="bkjiu">
                        <img src="assets/images/gallery/g4.jpg" alt="">
                        <h4><b>3 - </b>Donation</h4>
                        <p>Once tests are conducted and found that donor is healthy, donor can donate the blood.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--################### Our Blog Starts Here #######################--->
    <div id="blog" class="blog-container contaienr-fluid">
        <div class="container">
            <div class="session-title row">
                <h2>Blog</h2>
            </div>
            <div class="row news-row">
                <div class="col-md-6">
                    <div class="news-card">
                        <div class="image">
                            <img src="assets/images/blog/blog_01.jpg" alt="">
                        </div>
                        <div class="detail">
                            <h3 style="font-weight: bold; color: #000;">Latest News about recent Blood Camp-</h3>
                            <p>"In recent blood donation camp at Central Community Hall successfully collected over 150 units of blood and providing much-needed support to local hospitals." </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="news-card">
                        <div class="image">
                            <img src="assets/images/blog/blog_02.jpg" alt="">
                        </div>
                        <div class="detail">
                            <h3 style="font-weight: bold; color: #000;">Donar Test-</h3>
                            <p>"A new rapid screening test for blood donors has been introduced, ensuring faster and more accurate detection of infectious diseases to enhance blood safety." </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="news-card">
                        <div class="image">
                            <img src="assets/images/blog/blog_03.jpg" alt="">
                        </div>
                        <div class="detail">
                            <h3 style="font-weight: bold; color: #000;">Blood Donation Technology-</h3>
                            <p>"Recent advancements in blood donation technology now allow the use of advanced pathogen reduction techniques, improving the safety and shelf-life of donated blood."</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="news-card">
                        <div class="image">
                            <img src="assets/images/blog/blog_04.jpg" alt="">
                        </div>
                        <div class="detail">
                            <h3 style="font-weight: bold; color: #000;">Donation camp in major accident place-</h3>
                            <p>"In response to the major accident on Highway 5, a mobile blood donation camp has been set up on-site to urgently collect blood for the injured and was helpfull."</p>
                        </div>
                    </div>
                </div>-
            </div>
        </div>
    </div>

    <!--*************** Footer  Starts Here *************** -->
    <footer id="contact" class="container-fluid">
        <div class="container">
            <div class="row content-ro">
                <div class="col-lg-4 col-md-12 footer-contact contact-details">
                    <h2>Contact Us</h2>
                    <div class="address-row">
                        <div class="icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="detail">
                            <p>Kodialbail, Mangalore-575001</p>
                        </div>
                    </div>
                    <div class="address-row">
                        <div class="icon">
                            <i class="far fa-envelope"></i>
                        </div>
                        <div class="detail">
                            <p>bloodbanksupport@gmail.com</p>
                        </div>
                    </div>
                    <div class="address-row">
                        <div class="icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="detail">
                            <p>+91 8073924665,+91 9019383640 <br> +91 7026962363,+91 7510791833 <p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 footer-form">
                    <div class="form-card">
                        <div class="form-title">
                            <h4>Feedback</h4>
                            <form action="feedback.php">
                                <input type="text" placeholder="Enter Name" class="form-control">
                                <input type="text" placeholder="Enter Mobile no" class="form-control">
                                <input type="text" placeholder="Enter Email Address" class="form-control">
                                <input type="text" placeholder="Your Message" class="form-control">
                                <button class="btn btn-sm btn-primary w-100" onclick="feedback()"><a href="feedback.html">Send Feedback</a></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <script>
function feedback() {
    alert('Feedback successful!');
    window.location.href = 'home.php'; 
}
</script>
            <div class="footer-copy">
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <p>Copyright © <a href="https://www.bloodbank.com">bloodbank.com</a> | All right reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/plugins/grid-gallery/js/grid-gallery.min.js"></script>
    <script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>