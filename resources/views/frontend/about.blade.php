<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->

    <title>Fruits &Plants Management System</title>

    <!-- Favicon -->
    <link rel="icon" href="frontend/img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="frontend/style.css">

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-circle"></div>
        <div class="preloader-img">
            <img src="frontend/img/core-img/leaf.png" alt="">
        </div>
    </div>

   <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- ***** Top Header Area ***** -->
        <div class="top-header-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="top-header-content d-flex align-items-center justify-content-between">
                            <!-- Top Header Content -->
                            <div class="top-header-meta">
                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="infodeercreative@gmail.com"><i class="fa fa-envelope-o" aria-hidden="true"></i> <span>Email: soethuwin@ucsmgy.edu.mm</span></a>
                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="+1 234 122 122"><i class="fa fa-phone" aria-hidden="true"></i> <span>Call Us: 09-791552059</span><br>
                                
                                </a>
                            </div>

                            <!-- Top Header Content -->
                            <div class="top-header-meta d-flex">
                                <!-- Language Dropdown -->
                                <div class="language-dropdown">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle mr-30" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Language</button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                             <a class="dropdown-item" href="#">MYANMAR</a>
                                            <a class="dropdown-item" href="#">ENGLISH</a>
                                             <a class="dropdown-item" href="#">USA</a>
                                            <a class="dropdown-item" href="#">UK</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Login -->
                                <div class="login">
                                    <a href="{{route('registerpage')}}"><i class="fa fa-user" aria-hidden="true"></i> <span>Login</span></a>
                                </div>
                                <!-- Cart -->
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ***** Navbar Area ***** -->
        <div class="alazea-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="alazeaNav">

                        <!-- Nav Brand -->
                        <a href="index.html" class="nav-brand"><img src="frontend/img/core-img/logo.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Navbar Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="{{route('masterpage')}}">Home</a></li>
                                    <li><a href="{{route('aboutpage')}}">About</a></li>
                                    
                                    <li><a href="{{route('shoppage')}}">Shop</a></li>
                                    <li><a href="{{route('portfoliopage')}}">Portfolio</a></li>
                                    <li><a href="{{route('contactpage')}}">Contact</a></li>
                                </ul>
                                 <div class="cart">
                                    <a href="{{route('cartpage')}}"><i class="fa fa-shopping-cart" aria-hidden="true" style="color: white"></i> <span style="color: white">Cart <span class="cart-quantity"><small class="cartNoti"></small></span></span></a>
                                </div>

                                <!-- Search Icon -->
                                <div id="searchIcon">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </div>

                            </div>
                            <!-- Navbar End -->
                        </div>
                    </nav>

                    <!-- Search Form -->
                    <div class="search-form">
                        <form action="#" method="get">
                            <input type="search" name="search" id="search" placeholder="Type keywords &amp; press enter...">
                            <button type="submit" class="d-none"></button>
                        </form>
                        <!-- Close Icon -->
                        <div class="closeIcon"><i class="fa fa-times" aria-hidden="true"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="breadcrumb-area">
        <!-- Top Breadcrumb Area -->
        <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(frontend/img/bg-img/24.jpg);">
            <h2>ABOUT US</h2>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('masterpage')}}"><i class="fa fa-home"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">About</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### About Area Start ##### -->
    <section class="about-us-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-12 col-lg-5">
                    <!-- Section Heading -->
                    <div class="section-heading">
                        <h2>ABOUT US</h2>
                        <p>We are leading in the plants service fields.</p>
                    </div>
                    <p>Plants are mainly multicellular organisms,predominantly photosynthetic eukaryotes of the kingdom Plantae.Historically,plants were treated as one of two Kingdoms including all living things.</p>

                    <!-- Progress Bar Content Area -->
                    <div class="alazea-progress-bar mb-50">
                        <!-- Single Progress Bar -->
                        <div class="single_progress_bar">
                            <p>Office plants</p>
                            <div id="bar1" class="barfiller">
                                <div class="tipWrap">
                                    <span class="tip"></span>
                                </div>
                                <span class="fill" data-percentage="80"></span>
                            </div>
                        </div>

                        <!-- Single Progress Bar -->
                        <div class="single_progress_bar">
                            <p>Field manager</p>
                            <div id="bar2" class="barfiller">
                                <div class="tipWrap">
                                    <span class="tip"></span>
                                </div>
                                <span class="fill" data-percentage="70"></span>
                            </div>
                        </div>

                        <!-- Single Progress Bar -->
                        <div class="single_progress_bar">
                            <p>Landscape design</p>
                            <div id="bar3" class="barfiller">
                                <div class="tipWrap">
                                    <span class="tip"></span>
                                </div>
                                <span class="fill" data-percentage="85"></span>
                            </div>
                        </div>

                        <!-- Single Progress Bar -->
                        <div class="single_progress_bar">
                            <p>Garden Care</p>
                            <div id="bar4" class="barfiller">
                                <div class="tipWrap">
                                    <span class="tip"></span>
                                </div>
                                <span class="fill" data-percentage="65"></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="alazea-benefits-area">
                        <div class="row">
                            <!-- Single Benefits Area -->
                            <div class="col-12 col-sm-6">
                                <div class="single-benefits-area">
                                    <img src="frontend/img/core-img/b1.png" alt="">
                                    <h5>Quality Products</h5>
                                    <p>Many plants have colorful and so beautiful.Fruits contain important vitamins,minerals and plant chemicals.A diet high in fruit can help protect you against cancer.</p>
                                </div>
                            </div>

                            <!-- Single Benefits Area -->
                            <div class="col-12 col-sm-6">
                                <div class="single-benefits-area">
                                    <img src="frontend/img/core-img/b2.png" alt="">
                                    <h5>Perfect Service</h5>
                                    <p>Produce for Better Health Foundation is a organization whose mission is to achieve increased daily consumption of fruits and plants.</p>
                                </div>
                            </div>

                            <!-- Single Benefits Area -->
                            <div class="col-12 col-sm-6">
                                <div class="single-benefits-area">
                                    <img src="frontend/img/core-img/b3.png" alt="">
                                    <h5>100% Natural</h5>
                                    <p>Plants are the fabric which covers the soil. They hold the soil in place to reduce erosion and improve water quality. Plants provide our food, materials for shelter.</p>
                                </div>
                            </div>

                            <!-- Single Benefits Area -->
                            <div class="col-12 col-sm-6">
                                <div class="single-benefits-area">
                                    <img src="frontend/img/core-img/b4.png" alt="">
                                    <h5>Environmentally friendly</h5>
                                    <p>Environment friendly processes, or environmental-friendly processes, are sustainability and marketing terms referring to goods and services.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="border-line"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### About Area End ##### -->

    <!-- ##### Service Area Start ##### -->
    <section class="our-services-area bg-gray section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center">
                        <h2>OUR SERVICES</h2>
                        <p>We provide the perfect service for you.</p>
                    </div>
                </div>
            </div>

            <div class="row align-items-center justify-content-between">
                <div class="col-12 col-lg-5">
                    <div class="alazea-service-area mb-100">

                        <!-- Single Service Area -->
                        <div class="single-service-area d-flex align-items-center">
                            <!-- Icon -->
                            <div class="service-icon mr-30">
                                <img src="frontend/img/core-img/s1.png" alt="">
                            </div>
                            <!-- Content -->
                            <div class="service-content">
                                <h5>Plants Care</h5>
                                <p>Through the process of photosynthesis, plants transform solar radiation into the energy they need to grow and thrive. Plants that require full sun must grow outdoors and receive many hours of direct sunlight each day.</p>
                            </div>
                        </div>

                        <!-- Single Service Area -->
                        <div class="single-service-area d-flex align-items-center">
                            <!-- Icon -->
                            <div class="service-icon mr-30">
                                <img src="frontend/img/core-img/s2.png" alt="">
                            </div>
                            <!-- Content -->
                            <div class="service-content">
                                <h5>Pressure Washing</h5>
                                <p>A detergent-based pressure wash is more environmentally-friendly than bleach as it is typically diluted to a 10:1 water-to-detergent ratio. This makes it less harsh on plants. Caution is required when using detergent as well.</p>
                            </div>
                        </div>

                        <!-- Single Service Area -->
                        <div class="single-service-area d-flex align-items-center">
                            <!-- Icon -->
                            <div class="service-icon mr-30">
                                <img src="frontend/img/core-img/s3.png" alt="">
                            </div>
                            <!-- Content -->
                            <div class="service-content">
                                <h5>Tree Service &amp; Trimming</h5>
                                <p>In Aenean purus, pretium sito amet sapien denim moste consectet sedoni urna placerat sodales.service its.</p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="alazea-video-area bg-overlay mb-100">
                        
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/5vem9fyWuss" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <i class="fa fa-play" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Service Area End ##### -->

    <!-- ##### Testimonial Area Start ##### -->

    


    <!-- ##### Testimonial Area End ##### -->

    <!-- ##### Cool Facts Area Start ##### -->
    <section class="cool-facts-area bg-img section-padding-100-0" style="background-image: url(frontend/img/bg-img/cool-facts.png);">
        <div class="container">
            <div class="row">

                <!-- Single Cool Facts Area -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="single-cool-fact d-flex align-items-center justify-content-center mb-100">
                        <div class="cf-icon">
                            <img src="frontend/img/core-img/cf1.png" alt="">
                        </div>
                        <div class="cf-content">
                            <h2><span class="counter">20</span></h2>
                            <h6>AWARDS</h6>
                        </div>
                    </div>
                </div>

                <!-- Single Cool Facts Area -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="single-cool-fact d-flex align-items-center justify-content-center mb-100">
                        <div class="cf-icon">
                            <img src="frontend/img/core-img/cf2.png" alt="">
                        </div>
                        <div class="cf-content">
                            <h2><span class="counter">70</span></h2>
                            <h6>PROJECTS</h6>
                        </div>
                    </div>
                </div>

                <!-- Single Cool Facts Area -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="single-cool-fact d-flex align-items-center justify-content-center mb-100">
                        <div class="cf-icon">
                            <img src="frontend/img/core-img/cf3.png" alt="">
                        </div>
                        <div class="cf-content">
                            <h2><span class="counter">30</span>+</h2>
                            <h6>HAPPY CLIENTS</h6>
                        </div>
                    </div>
                </div>

                <!-- Single Cool Facts Area -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="single-cool-fact d-flex align-items-center justify-content-center mb-100">
                        <div class="cf-icon">
                            <img src="frontend/img/core-img/cf4.png" alt="">
                        </div>
                        <div class="cf-content">
                            <h2><span class="counter">80</span>K+</h2>
                            <h6>REVENUE</h6>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Side Image -->
        <div class="side-img wow fadeInUp" data-wow-delay="500ms">
            <img src="img/core-img/pot.png" alt="">
        </div>
    </section>
    <!-- ##### Cool Facts Area End ##### -->

    <!-- ##### Team Area Start ##### -->
    <section class="team-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center">
                        <h2>OUR TEAM</h2>
                        <p>A team of dedicated experienced professionals.</p>
                    </div>
                </div>
            </div>

            <div class="row img-fluid justify-content-center">

                <!-- Single Team Member Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-team-member text-center mb-100">
                        <!-- Team Member Thumb -->

                        <div class="team-member-thumb img-fluid">
                            <img src="frontend/img/bg-img/team1.jpg" style="width: 200px;height:200px; " alt="">

                    

                            <!-- Social Info -->
                            <div class="team-member-social-info">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <!-- Team Member Info -->
                        <div class="team-member-info mt-30">
                            <h5>Myint Thu</h5>
                            {{-- <p>CEO &amp; Founder</p> --}}
                        </div>
                    </div>
                </div>

                <!-- Single Team Member Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-team-member text-center mb-100">
                        <!-- Team Member Thumb -->

                        <div class="team-member-thumb img-fluid">
                            <img src="frontend/img/bg-img/team2.jpg" style="width: 200px;height:200px; " alt="">

                        

                            <!-- Social Info -->
                            <div class="team-member-social-info">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <!-- Team Member Info -->
                        <div class="team-member-info mt-30">
                            <h5>Soe Thu Win</h5>
                           
                        </div>
                    </div>
                </div>

                <!-- Single Team Member Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-team-member text-center mb-100">
                        <!-- Team Member Thumb -->

                        <div class="team-member-thumb img-fluid">
                            <img src="frontend/img/bg-img/team3.jpg" style="width: 200px;height:200px; " alt="">

                        

                            <!-- Social Info -->
                            <div class="team-member-social-info">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <!-- Team Member Info -->
                        <div class="team-member-info mt-30">
                            <h5>Shine Htet Wai</h5>
                            {{-- <p>Plan Manager</p> --}}
                        </div>
                    </div>
                </div>

                <!-- Single Team Member Area -->

                

                


            </div>
        </div>
    </section>
    <!-- ##### Team Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area bg-img" style="background-image: url(frontend/img/bg-img/3.jpg);">
        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
                <div class="row">

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget">
                            <div class="footer-logo mb-30">
                                <a href="#"><img src="frontend/img/core-img/logo.png" alt=""></a>
                            </div>
                            <p>Our system is useful to buy easily fresh fruits and plants.If you want to buy fruits and plants,you can contact our system.</p>
                            <div class="social-info">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget">
                            <div class="widget-title">
                                <h5>QUICK LINK</h5>
                            </div>
                            <nav class="widget-nav">
                                <ul>
                                    <li><a href="#">Purchase</a></li>
                                    <li><a href="#">FAQs</a></li>
                                    <li><a href="#">Payment</a></li>
                                    <li><a href="#">News</a></li>
                                    <li><a href="#">Return</a></li>
                                    <li><a href="#">Advertise</a></li>
                                    <li><a href="#">Shipping</a></li>
                                    <li><a href="#">Career</a></li>
                                    <li><a href="#">Orders</a></li>
                                    <li><a href="#">Policities</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget">
                            <div class="widget-title">
                                <h5>BEST SELLER</h5>
                            </div>

                            <!-- Single Best Seller Products -->
                            <div class="single-best-seller-product d-flex align-items-center">
                                <div class="product-thumbnail">
                                    <a href="shop-details.html"><img src="frontend/img/bg-img/ja5.jpeg" alt=""></a>
                                </div>
                                <div class="product-info">
                                    <a href="shop-details.html">Jasmine Flower</a>
                                    <p>4000 Ks</p>
                                </div>
                            </div>

                            <!-- Single Best Seller Products -->
                            <div class="single-best-seller-product d-flex align-items-center">
                                <div class="product-thumbnail">
                                    <a href="shop-details.html"><img src="frontend/img/bg-img/ro4.jpeg" alt=""></a>
                                </div>
                                <div class="product-info">
                                    <a href="shop-details.html">Rose Flower</a>
                                    <p>5000 Ks</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget">
                            <div class="widget-title">
                                <h5>CONTACT</h5>
                            </div>

                            <div class="contact-information">
                                <p><span>Address:</span> Magway, padauk street</p>
                                <p><span>Phone:</span> 09-789726113</p>
                                <p><span>Email:</span> myintthu32094@gmail.com</p>
                                <p><span>Open hours:</span> Mon - Sun: 8 AM to 9 PM</p>
                                <p><span>Happy hours:</span> Sat: 2 PM to 4 PM</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Bottom Area -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="border-line"></div>
                    </div>
                    <!-- Copywrite Text -->
                    <div class="col-12 col-md-6">
                        <div class="copywrite-text">
                            <p>&copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
                        </div>
                    </div>
                    <!-- Footer Nav -->
                    <div class="col-12 col-md-6">
                        <div class="footer-nav">
                            <nav>
                                <ul>
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Service</a></li>
                                    <li><a href="#">Portfolio</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Files ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="frontend/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="frontend/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="frontend/js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="frontend/js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="frontend/js/active.js"></script>
    <script type="text/javascript" src="{{asset('fruitplant.js')}}"></script>
</body>

</html>