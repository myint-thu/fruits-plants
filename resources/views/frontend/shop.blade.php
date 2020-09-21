<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->

    <title>Fruits And Plants Management System</title>


    <!-- Favicon -->
    <link rel="icon" href="{{asset('frontend/img/core-img/favicon.ico')}}">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="{{asset('frontend/style.css')}}">

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
                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="infodeercreative@gmail.com"><i class="fa fa-envelope-o" aria-hidden="true"></i> <span>Email: soethuwin@ucsmgy.edu.mm</span>
                               
                                </a>
                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="+1 234 122 122"><i class="fa fa-phone" aria-hidden="true"></i> <span>Call Us: 09-791552059</span>
                                
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
                        <a href="index.html" class="nav-brand"><img src="{{asset('frontend/img/core-img/logo.png')}}" alt=""></a>

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
        <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url({{asset('frontend/img/bg-img/24.jpg')}});">
            <h2>Shop</h2>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('masterpage')}}"><i class="fa fa-home"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Shop</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Shop Area Start ##### -->
    <section class="shop-page section-padding-0-100">
        <div class="container">
            {{-- <div class="row">
                <! Shop Sorting Data >
                <div class="col-12">
                    <div class="shop-sorting-data d-flex flex-wrap align-items-center justify-content-between">
                        <! Shop Page Count >
                        <div class="shop-page-count">
                            <p>Showing 1–9 of 72 results</p>
                        </div>
                        <! Search by Terms >
                        <div class="search_by_terms">
                            <form action="#" method="post" class="form-inline">
                                <select class="custom-select widget-title">
                                  <option selected>Short by Popularity</option>
                                  <option value="1">Short by Newest</option>
                                  <option value="2">Short by Sales</option>
                                  <option value="3">Short by Ratings</option>
                                </select>
                                <select class="custom-select widget-title">
                                  <option selected>Show: 9</option>
                                  <option value="1">12</option>
                                  <option value="2">18</option>
                                  <option value="3">24</option>
                                </select>
                            </form>
                        </div>
                    </div>
                </div>
            </div> --}}

            <div class="row">
                <!-- Sidebar Area -->
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="shop-sidebar-area">

                        <!-- Shop Widget -->
                        <div class="shop-widget price mb-50">
                            <h4 class="widget-title">Prices</h4>
                            <div class="widget-desc">
                                <div class="slider-range">
                                    <div data-min="1000" data-max="6000" data-unit="Ks" class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-value-min="1000" data-value-max="6000" data-label-result="Price:">
                                        <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                        <span class="ui-slider-handle ui-state-default ui-corner-all first-handle" tabindex="0"></span>
                                        <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                    </div>
                                    <div class="range-price">Price: 1000 Ks - 6000 Ks</div>
                                </div>
                            </div>
                        </div>

                        <!-- Shop Widget -->
                        <div class="shop-widget catagory mb-50">
                            <h4 class="widget-title">Categories</h4>
                            <div class="widget-desc">
                                <!-- Single Checkbox -->
                                <div class="custom-control custom-checkbox d-flex align-items-center mb-2">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">All plants <span class="text-muted">(45)</span></label>
                                </div>
                                <!-- Single Checkbox -->
                                <div class="custom-control custom-checkbox d-flex align-items-center mb-2">
                                    <input type="checkbox" class="custom-control-input" id="customCheck2">
                                    <label class="custom-control-label" for="customCheck2">Outdoor plants <span class="text-muted">(10)</span></label>
                                </div>
                                <!-- Single Checkbox -->
                                <div class="custom-control custom-checkbox d-flex align-items-center mb-2">
                                    <input type="checkbox" class="custom-control-input" id="customCheck3">
                                    <label class="custom-control-label" for="customCheck3">Indoor plants <span class="text-muted">(10)</span></label>
                                </div>
                                <!-- Single Checkbox -->
                                <div class="custom-control custom-checkbox d-flex align-items-center mb-2">
                                    <input type="checkbox" class="custom-control-input" id="customCheck4">
                                    <label class="custom-control-label" for="customCheck4">Office Plants <span class="text-muted">(10)</span></label>
                                </div>
                                <!-- Single Checkbox -->
                                <div class="custom-control custom-checkbox d-flex align-items-center mb-2">
                                    <input type="checkbox" class="custom-control-input" id="customCheck5">
                                    <label class="custom-control-label" for="customCheck5">Potted <span class="text-muted">(10)</span></label>
                                </div>
                                <!-- Single Checkbox -->
                                <div class="custom-control custom-checkbox d-flex align-items-center mb-2">
                                    <input type="checkbox" class="custom-control-input" id="customCheck6">
                                    <label class="custom-control-label" for="customCheck6">Others <span class="text-muted">(5)</span></label>
                                </div>
                            </div>
                        </div>

                        <!-- Shop Widget -->
                        <div class="shop-widget sort-by mb-50">
                            <h4 class="widget-title">Sort by</h4>
                            <div class="widget-desc">
                                <!-- Single Checkbox -->
                               {{--  <div class="custom-control custom-checkbox d-flex align-items-center mb-2">
                                    <input type="checkbox" class="custom-control-input" id="customCheck7">
                                    <label class="custom-control-label" for="customCheck7">New arrivals</label>
                                </div> --}}
                                <!-- Single Checkbox -->
                              {{--   <div class="custom-control custom-checkbox d-flex align-items-center mb-2">
                                    <input type="checkbox" class="custom-control-input" id="customCheck8">
                                    <label class="custom-control-label" for="customCheck8">Alphabetically, A-Z</label>
                                </div> --}}
                                <!-- Single Checkbox -->
                                <div class="custom-control custom-checkbox d-flex align-items-center mb-2">
                                    <input type="checkbox" class="custom-control-input" id="customCheck9">
                                    <label class="custom-control-label" for="customCheck9">Alphabetically, Z-A</label>
                                </div>
                                <!-- Single Checkbox -->
                                <div class="custom-control custom-checkbox d-flex align-items-center mb-2">
                                    <input type="checkbox" class="custom-control-input" id="customCheck10">
                                    <label class="custom-control-label" for="customCheck10">Price: low to high</label>
                                </div>
                                <!-- Single Checkbox -->
                                <div class="custom-control custom-checkbox d-flex align-items-center">
                                    <input type="checkbox" class="custom-control-input" id="customCheck11">
                                    <label class="custom-control-label" for="customCheck11">Price: high to low</label>
                                </div>
                            </div>
                        </div>

                        <!-- Shop Widget -->
                        <div class="shop-widget best-seller mb-50">
                            <h4 class="widget-title">Best Seller</h4>
                            <div class="widget-desc">

                                <!-- Single Best Seller Products -->
                                <div class="single-best-seller-product d-flex align-items-center">
                                    <div class="product-thumbnail">
                                        <a href="shop-details.html"><img src="{{asset('frontend/img/bg-img/j1.jpeg')}}" alt=""></a>
                                    </div>
                                    <div class="product-info">
                                        <a href="shop-details.html">June Flower</a>
                                        <p>2000 Ks</p>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Best Seller Products -->
                                <div class="single-best-seller-product d-flex align-items-center">
                                    <div class="product-thumbnail">
                                        <a href="shop-details.html"><img src="{{asset('frontend/img/bg-img/ja5.jpeg')}}" alt=""></a>
                                    </div>
                                    <div class="product-info">
                                        <a href="shop-details.html">Jasmine Flower</a>
                                        <p>4000 Ks</p>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Best Seller Products -->
                                <div class="single-best-seller-product d-flex align-items-center">
                                    <div class="product-thumbnail">
                                        <a href="shop-details.html"><img src="{{asset('frontend/img/bg-img/og3.jpeg')}}" alt=""></a>
                                    </div>
                                    <div class="product-info">
                                        <a href="shop-details.html">Orange Fruit</a>
                                        <p>1500 Ks</p>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-best-seller-product d-flex align-items-center">
                                    <div class="product-thumbnail">
                                        <a href="shop-details.html"><img src="{{asset('frontend/img/bg-img/AP2.jpeg')}}" alt=""></a>
                                    </div>
                                    <div class="product-info">
                                        <a href="shop-details.html">Apple Fruit</a>
                                        <p>1500 Ks</p>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-best-seller-product d-flex align-items-center">
                                    <div class="product-thumbnail">
                                        <a href="shop-details.html"><img src="{{asset('frontend/img/bg-img/ro4.jpeg')}}" alt=""></a>
                                    </div>
                                    <div class="product-info">
                                        <a href="shop-details.html">Rose Flower</a>
                                        <p>5000 Ks</p>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-best-seller-product d-flex align-items-center">
                                    <div class="product-thumbnail">
                                        <a href="shop-details.html"><img src="{{asset('frontend/img/bg-img/mango1.jpeg')}}" alt=""></a>
                                    </div>
                                    <div class="product-info">
                                        <a href="shop-details.html">Mango Fruit</a>
                                        <p>1000 Ks</p>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- All Products Area -->
                <div class="col-12 col-md-8 col-lg-9">
                    <div class="shop-products-area">
                        <div class="row">

                            <!-- Single Product Area -->
                            @foreach($items as $item)
                            <div class="col-12 col-sm-6 col-lg-4">
                                
                                <div class="single-product-area mb-50">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                         <a href="shop-details.html"> 
                                            <img src="{{asset($item->photo)}}" style="width: 200px;height: 200px;" alt="">
                                        </a> 
                                        <!-- Product Tag -->
                                        <div class="product-tag">
                                            <a href="#">Hot</a>
                                        </div>
                                        <div class="product-meta d-flex">
                                              
                                            <a href="{{route('cartpage')}}" class="addtocartbtn text-decoration-none" data-id="{{$item->id}}" data-name="{{$item->name}}" data-photo="{{$item->photo}}" data-price="{{$item->price}}">
                                            Addtocart</a>
                                            
                                        </div>
                                    </div>
                                    <!-- Product Info -->
                                    <div class="product-info mt-15 text-center">
                                        <a href="shop-details.html">
                                            
                                        </a>
                                        
                                    </div>
                                     <a href="{{url("shopdetail/$item->id")}}" class="btn btn-primary" id="detail">Detail</a>
                                </div>
                                
                            </div>

                            @endforeach

                            </div>



                            <!-- Single Product Area -->
                            

                        

                        <!-- Pagination -->
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Shop Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area bg-img" style="background-image: url({{asset('frontend/img/bg-img/3.jpg')}};">
        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
                <div class="row">

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget">
                            <div class="footer-logo mb-30">
                                <a href="#"><img src="{{asset('frontend/img/core-img/logo.png')}}" alt=""></a>
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
                                    <p>5000 ks</p>
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
                                <p><span>Address:</span>Magway,Padauk street</p>
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

    {{-- <script src="{{asset('frontend/js/jquery/jquery-3.3.1.min.js')}}"></script> --}}

    <script src="{{asset('frontend/js/jquery/jquery-2.2.4.min.js')}}"></script>

    <!-- Popper js -->
    <script src="{{asset('frontend/js/bootstrap/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('frontend/js/bootstrap/bootstrap.min.js')}}"></script>
    <!-- All Plugins js -->
    <script src="{{asset('frontend/js/plugins/plugins.js')}}"></script>
    <!-- Active js -->
    <script src="{{asset('frontend/js/active.js')}}"></script>
    <script type="text/javascript" src="{{asset('fruitplant.js')}}"></script>
    

</body>

</html>