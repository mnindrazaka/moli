<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mall Ikan</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ base_url() }}assets/vendors/onetech/styles/bootstrap4/bootstrap.min.css">
    <link href="{{ base_url() }}assets/vendors/onetech/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ base_url() }}assets/vendors/onetech/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="{{ base_url() }}assets/vendors/onetech/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="{{ base_url() }}assets/vendors/onetech/plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="{{ base_url() }}assets/vendors/onetech/plugins/slick-1.8.0/slick.css">
    <link rel="stylesheet" type="text/css" href="{{ base_url() }}assets/vendors/onetech/styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="{{ base_url() }}assets/vendors/onetech/styles/responsive.css">

</head>

<body>

<div class="super_container">

    <!-- Header -->
    <header class="header">

        <!-- Header Main -->

        <div class="header_main">
            <div class="container">
                <div class="row">

                    <!-- Logo -->
                    <div class="col-lg-2 col-sm-3 col-3 order-1">
                        <div class="logo_container">
                            <div class="logo">
                                <a href="#">Mall Ikan</a>
                                <span class="text-muted">Cara mudah cari ikan</span>
                            </div>
                        </div>
                    </div>

                    <!-- Search -->
                    <div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
                        <div class="header_search">
                            <div class="header_search_content">
                                <div class="header_search_form_container">
                                    <form action="#" class="header_search_form clearfix">
                                        <input type="search" required="required" class="header_search_input" placeholder="Cari ikan..." style="width: 100%">
                                        <button type="submit" class="header_search_button trans_300" value="Submit"><img src="{{ base_url() }}assets/vendors/onetech/images/search.png" alt=""></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--  -->
                    <div class="col-lg-4 col-9 order-lg-3 order-2 text-lg-left text-right">
                        <div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
                            <div class="wishlist d-flex flex-row align-items-center justify-content-end">
                                <div class="wishlist_icon">
                                    <h3 class="fa fa-building"></h3>
                                </div>
                                <div class="wishlist_content">
                                    <div class="wishlist_text"><a href="#">Toko</a></div>
                                </div>
                            </div>

                            <!-- Cart -->
                            <div class="cart">
                                <div class="cart_container d-flex flex-row align-items-center justify-content-end">
                                    <div class="cart_icon">
                                        <img src="{{ base_url() }}assets/vendors/onetech/images/cart.png" alt="">
                                        <div class="cart_count"><span>10</span></div>
                                    </div>
                                    <div class="cart_content">
                                        <div class="cart_text"><a href="#">Keranjang</a></div>
                                        <div class="cart_price">Rp. 100.000</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>

    <!-- Content -->
    @yield('content')

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 footer_col">
                    <div class="footer_column footer_contact">
                        <div class="logo_container">
                            <div class="logo">
                                <a href="#">Mall Ikan</a>
                                <p class="text-muted">Cara mudah cari ikan</p>
                            </div>
                        </div>
                        <div class="footer_social">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-google"></i></a></li>
                                <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 offset-lg-2">
                    <div class="footer_column">
                        <div class="footer_title">Find it Fast</div>
                        <ul class="footer_list">
                            <li><a href="#">Computers & Laptops</a></li>
                            <li><a href="#">Cameras & Photos</a></li>
                            <li><a href="#">Hardware</a></li>
                            <li><a href="#">Smartphones & Tablets</a></li>
                            <li><a href="#">TV & Audio</a></li>
                        </ul>
                        <div class="footer_subtitle">Gadgets</div>
                        <ul class="footer_list">
                            <li><a href="#">Car Electronics</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="footer_column">
                        <ul class="footer_list footer_list_2">
                            <li><a href="#">Video Games & Consoles</a></li>
                            <li><a href="#">Accessories</a></li>
                            <li><a href="#">Cameras & Photos</a></li>
                            <li><a href="#">Hardware</a></li>
                            <li><a href="#">Computers & Laptops</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="footer_column">
                        <div class="footer_title">Customer Care</div>
                        <ul class="footer_list">
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Order Tracking</a></li>
                            <li><a href="#">Wish List</a></li>
                            <li><a href="#">Customer Services</a></li>
                            <li><a href="#">Returns / Exchange</a></li>
                            <li><a href="#">FAQs</a></li>
                            <li><a href="#">Product Support</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </footer>

    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="copyright_container d-flex flex-sm-row flex-column align-items-center justify-content-start">
                        <div class="copyright_content">
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
                        </div>
                        <div class="logos ml-sm-auto">
                            <ul class="logos_list">
                                <li><a href="#"><img src="{{ base_url() }}assets/vendors/onetech/images/logos_1.png" alt=""></a></li>
                                <li><a href="#"><img src="{{ base_url() }}assets/vendors/onetech/images/logos_2.png" alt=""></a></li>
                                <li><a href="#"><img src="{{ base_url() }}assets/vendors/onetech/images/logos_3.png" alt=""></a></li>
                                <li><a href="#"><img src="{{ base_url() }}assets/vendors/onetech/images/logos_4.png" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ base_url() }}assets/vendors/onetech/js/jquery-3.3.1.min.js"></script>
<script src="{{ base_url() }}assets/vendors/onetech/styles/bootstrap4/popper.js"></script>
<script src="{{ base_url() }}assets/vendors/onetech/styles/bootstrap4/bootstrap.min.js"></script>
<script src="{{ base_url() }}assets/vendors/onetech/plugins/greensock/TweenMax.min.js"></script>
<script src="{{ base_url() }}assets/vendors/onetech/plugins/greensock/TimelineMax.min.js"></script>
<script src="{{ base_url() }}assets/vendors/onetech/plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="{{ base_url() }}assets/vendors/onetech/plugins/greensock/animation.gsap.min.js"></script>
<script src="{{ base_url() }}assets/vendors/onetech/plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="{{ base_url() }}assets/vendors/onetech/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="{{ base_url() }}assets/vendors/onetech/plugins/slick-1.8.0/slick.js"></script>
<script src="{{ base_url() }}assets/vendors/onetech/plugins/easing/easing.js"></script>
<script src="{{ base_url() }}assets/vendors/onetech/js/custom.js"></script>
</body>

</html>
