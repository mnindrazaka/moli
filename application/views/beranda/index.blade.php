@extends('template')

@section('content')
    <!-- Main Navigation -->

    <nav class="main_nav">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="main_nav_content d-flex flex-row">

                        <!-- Categories Menu -->

                        <div class="cat_menu_container">
                            <div class="cat_menu_title d-flex flex-row align-items-center justify-content-start">
                                <div class="cat_burger"><span></span><span></span><span></span></div>
                                <div class="cat_menu_text">kategori</div>
                            </div>

                            <ul class="cat_menu">
                                @foreach($kategori as $row)
                                    <li><a href="#">{{ $row->nama }} <i class="fas fa-chevron-right ml-auto"></i></a></li>
                                @endforeach
                            </ul>
                        </div>

                        <!-- Main Nav Menu -->

                        <div class="main_nav_menu ml-auto">
                            {{--<ul class="standard_dropdown main_nav_dropdown">--}}
                            {{--<li><a href="#">Home<i class="fas fa-chevron-down"></i></a></li>--}}
                            {{--<li class="hassubs">--}}
                            {{--<a href="#">Super Deals<i class="fas fa-chevron-down"></i></a>--}}
                            {{--<ul>--}}
                            {{--<li>--}}
                            {{--<a href="#">Menu Item<i class="fas fa-chevron-down"></i></a>--}}
                            {{--<ul>--}}
                            {{--<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>--}}
                            {{--<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>--}}
                            {{--<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>--}}
                            {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>--}}
                            {{--<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>--}}
                            {{--<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>--}}
                            {{--</ul>--}}
                            {{--</li>--}}
                            {{--</ul>--}}
                        </div>

                        <!-- Menu Trigger -->

                        <div class="menu_trigger_container ml-auto">
                            <div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
                                <div class="menu_burger">
                                    <div class="menu_trigger_text">menu</div>
                                    <div class="cat_burger menu_burger_inner"><span></span><span></span><span></span></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Menu -->

    <div class="page_menu">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="page_menu_content">

                        <div class="page_menu_search">
                            <form action="#">
                                <input type="search" required="required" class="page_menu_search_input" placeholder="Search for products...">
                            </form>
                        </div>
                        <ul class="page_menu_nav">
                            <li class="page_menu_item has-children">
                                <a href="#">Language<i class="fa fa-angle-down"></i></a>
                                <ul class="page_menu_selection">
                                    <li><a href="#">English<i class="fa fa-angle-down"></i></a></li>
                                    <li><a href="#">Italian<i class="fa fa-angle-down"></i></a></li>
                                    <li><a href="#">Spanish<i class="fa fa-angle-down"></i></a></li>
                                    <li><a href="#">Japanese<i class="fa fa-angle-down"></i></a></li>
                                </ul>
                            </li>
                            <li class="page_menu_item has-children">
                                <a href="#">Currency<i class="fa fa-angle-down"></i></a>
                                <ul class="page_menu_selection">
                                    <li><a href="#">US Dollar<i class="fa fa-angle-down"></i></a></li>
                                    <li><a href="#">EUR Euro<i class="fa fa-angle-down"></i></a></li>
                                    <li><a href="#">GBP British Pound<i class="fa fa-angle-down"></i></a></li>
                                    <li><a href="#">JPY Japanese Yen<i class="fa fa-angle-down"></i></a></li>
                                </ul>
                            </li>
                            <li class="page_menu_item">
                                <a href="#">Home<i class="fa fa-angle-down"></i></a>
                            </li>
                            <li class="page_menu_item has-children">
                                <a href="#">Super Deals<i class="fa fa-angle-down"></i></a>
                                <ul class="page_menu_selection">
                                    <li><a href="#">Super Deals<i class="fa fa-angle-down"></i></a></li>
                                    <li class="page_menu_item has-children">
                                        <a href="#">Menu Item<i class="fa fa-angle-down"></i></a>
                                        <ul class="page_menu_selection">
                                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                    <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                    <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                </ul>
                            </li>
                            <li class="page_menu_item has-children">
                                <a href="#">Featured Brands<i class="fa fa-angle-down"></i></a>
                                <ul class="page_menu_selection">
                                    <li><a href="#">Featured Brands<i class="fa fa-angle-down"></i></a></li>
                                    <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                    <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                    <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                </ul>
                            </li>
                            <li class="page_menu_item has-children">
                                <a href="#">Trending Styles<i class="fa fa-angle-down"></i></a>
                                <ul class="page_menu_selection">
                                    <li><a href="#">Trending Styles<i class="fa fa-angle-down"></i></a></li>
                                    <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                    <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                    <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                </ul>
                            </li>
                            <li class="page_menu_item"><a href="blog.html">blog<i class="fa fa-angle-down"></i></a></li>
                            <li class="page_menu_item"><a href="contact.html">contact<i class="fa fa-angle-down"></i></a></li>
                        </ul>

                        <div class="menu_contact">
                            <div class="menu_contact_item"><div class="menu_contact_icon"><img src="<?= base_url() ?>assets/vendors/onetech/images/phone_white.png" alt=""></div>+38 068 005 3570</div>
                            <div class="menu_contact_item"><div class="menu_contact_icon"><img src="<?= base_url() ?>assets/vendors/onetech/images/mail_white.png" alt=""></div><a href="mailto:fastsales@gmail.com">fastsales@gmail.com</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Banner -->
    <div class="banner">
        <div class="banner_background" style="background-image:url(assets/vendors/onetech/images/banner_background.jpg)"></div>
        <div class="container fill_height">
            <div class="row fill_height">
                <div class="banner_product_image"><img src="assets/vendors/onetech/images/banner_product.png" alt="" class="img-fluid"></div>
                <div class="col-lg-5 offset-lg-4 fill_height">
                    <div class="banner_content">
                        <h1 class="banner_text">Cara Baru</h1>
                        <h1 class="banner_text">Belanja Ikan</h1>
                        <div class="button banner_button"><a href="#">Belanja Sekarang</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Characteristics -->

    <div class="characteristics">
        <div class="container">
            <div class="row">

                <!-- Char. Item -->
                <div class="col-lg-3 col-md-6 char_col">

                    <div class="char_item d-flex flex-row align-items-center justify-content-start">
                        <div class="char_icon"><img src="assets/vendors/onetech/images/char_1.png" alt=""></div>
                        <div class="char_content">
                            <div class="char_title">Free Delivery</div>
                            <div class="char_subtitle">from $50</div>
                        </div>
                    </div>
                </div>

                <!-- Char. Item -->
                <div class="col-lg-3 col-md-6 char_col">

                    <div class="char_item d-flex flex-row align-items-center justify-content-start">
                        <div class="char_icon"><img src="assets/vendors/onetech/images/char_2.png" alt=""></div>
                        <div class="char_content">
                            <div class="char_title">Free Delivery</div>
                            <div class="char_subtitle">from $50</div>
                        </div>
                    </div>
                </div>

                <!-- Char. Item -->
                <div class="col-lg-3 col-md-6 char_col">

                    <div class="char_item d-flex flex-row align-items-center justify-content-start">
                        <div class="char_icon"><img src="assets/vendors/onetech/images/char_3.png" alt=""></div>
                        <div class="char_content">
                            <div class="char_title">Free Delivery</div>
                            <div class="char_subtitle">from $50</div>
                        </div>
                    </div>
                </div>

                <!-- Char. Item -->
                <div class="col-lg-3 col-md-6 char_col">

                    <div class="char_item d-flex flex-row align-items-center justify-content-start">
                        <div class="char_icon"><img src="assets/vendors/onetech/images/char_4.png" alt=""></div>
                        <div class="char_content">
                            <div class="char_title">Free Delivery</div>
                            <div class="char_subtitle">from $50</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Deals of the week -->

    <div class="deals_featured">
        <div class="container">
            <div class="row">
                <div class="col d-flex flex-lg-row flex-column align-items-center justify-content-start">

                    <!-- Deals -->

                    <div class="deals">
                        <div class="deals_title">Ikan Segar Terbaru</div>
                        <div class="deals_slider_container">

                            <!-- Deals Slider -->
                            <div class="owl-carousel owl-theme deals_slider">

                                <!-- Deals Item -->
                                @foreach($produk as $key => $row)
                                    <div class="owl-item deals_item">
                                        <div class="deals_image"><img src="{{ base_url('assets/uploads/produk/' . $row->foto) }}" alt=""></div>
                                        <div class="deals_content">
                                            <div class="deals_info_line d-flex flex-row justify-content-start">
                                                <div class="deals_item_category"><a href="#">{{ $row->kategori->nama }}</a></div>
                                                <div class="deals_item_price_a ml-auto">Per {{ $row->satuan }}</div>
                                            </div>
                                            <div class="deals_info_line d-flex flex-row justify-content-start">
                                                <div class="deals_item_name">{{ $row->nama }}</div>
                                                <div class="deals_item_price ml-auto">Rp. {{ $row->harga }}</div>
                                            </div>
                                            <hr>
                                            <div class="deals_info_line d-flex flex-row justify-content-start">
                                                <div class="deals_item_category">
                                                    <a href="#">
                                                        <i class="fa fa-building mr-2 d-inline-block"></i>
                                                        {{ $row->toko->nama }}
                                                    </a>
                                                </div>
                                                <div class="deals_item_price_a ml-auto">
                                                    <i class="fa fa-map-marker mr-2 d-inline-block"></i>
                                                    {{ $row->toko->kota }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                        </div>

                        <div class="deals_slider_nav_container">
                            <div class="deals_slider_prev deals_slider_nav"><i class="fas fa-chevron-left ml-auto"></i></div>
                            <div class="deals_slider_next deals_slider_nav"><i class="fas fa-chevron-right ml-auto"></i></div>
                        </div>
                    </div>

                    <!-- Featured -->
                    <div class="featured">
                        <div class="tabbed_container">
                            <!-- Product Panel -->
                            <div class="product_panel panel active">
                                <div class="featured_slider slider">
                                    @foreach($produk as $row)
                                        <div class="featured_slider_item">
                                            <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                <div class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <img src="{{ base_url('assets/uploads/produk/' . $row->foto) }}" alt="">
                                                </div>
                                                <div class="product_content">
                                                    <div class="product_price">Rp. {{ $row->harga }}</div>
                                                    <div class="product_name"><div><a href="product.html">Huawei MediaPad...</a></div></div>
                                                    <div class="product_extras">
                                                        <button class="product_cart_button">Beli</button>
                                                    </div>
                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                {{--<ul class="product_marks">--}}
                                                {{--<li class="product_mark product_discount">-25%</li>--}}
                                                {{--<li class="product_mark product_new">new</li>--}}
                                                {{--</ul>--}}
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="featured_slider_dots_cover"></div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Popular Categories -->

    <div class="popular_categories">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="popular_categories_content">
                        <div class="popular_categories_title">Kategori Populer</div>
                        <div class="popular_categories_slider_nav">
                            <div class="popular_categories_prev popular_categories_nav"><i class="fas fa-angle-left ml-auto"></i></div>
                            <div class="popular_categories_next popular_categories_nav"><i class="fas fa-angle-right ml-auto"></i></div>
                        </div>
                        <div class="popular_categories_link"><a href="#">Semua Kategori</a></div>
                    </div>
                </div>

                <!-- Popular Categories Slider -->

                <div class="col-lg-9">
                    <div class="popular_categories_slider_container">
                        <div class="owl-carousel owl-theme popular_categories_slider">

                            <!-- Popular Categories Item -->
                            <div class="owl-item">
                                <div class="popular_category d-flex flex-column align-items-center justify-content-center">
                                    <div class="popular_category_image"><img src="assets/vendors/onetech/images/popular_1.png" alt=""></div>
                                    <div class="popular_category_text">Smartphones & Tablets</div>
                                </div>
                            </div>

                            <!-- Popular Categories Item -->
                            <div class="owl-item">
                                <div class="popular_category d-flex flex-column align-items-center justify-content-center">
                                    <div class="popular_category_image"><img src="assets/vendors/onetech/images/popular_2.png" alt=""></div>
                                    <div class="popular_category_text">Computers & Laptops</div>
                                </div>
                            </div>

                            <!-- Popular Categories Item -->
                            <div class="owl-item">
                                <div class="popular_category d-flex flex-column align-items-center justify-content-center">
                                    <div class="popular_category_image"><img src="assets/vendors/onetech/images/popular_3.png" alt=""></div>
                                    <div class="popular_category_text">Gadgets</div>
                                </div>
                            </div>

                            <!-- Popular Categories Item -->
                            <div class="owl-item">
                                <div class="popular_category d-flex flex-column align-items-center justify-content-center">
                                    <div class="popular_category_image"><img src="assets/vendors/onetech/images/popular_4.png" alt=""></div>
                                    <div class="popular_category_text">Video Games & Consoles</div>
                                </div>
                            </div>

                            <!-- Popular Categories Item -->
                            <div class="owl-item">
                                <div class="popular_category d-flex flex-column align-items-center justify-content-center">
                                    <div class="popular_category_image"><img src="assets/vendors/onetech/images/popular_5.png" alt=""></div>
                                    <div class="popular_category_text">Accessories</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Reviews -->

    <div class="reviews">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="reviews_title_container">
                        <h3 class="reviews_title">Ulasan Terbaru</h3>
                    </div>

                    <div class="reviews_slider_container">

                        <!-- Reviews Slider -->
                        <div class="owl-carousel owl-theme reviews_slider">

                            <!-- Reviews Slider Item -->
                            @foreach($ulasan as $row)
                                <div class="owl-item">
                                    <div class="review d-flex flex-row align-items-start justify-content-start">
                                        <div>
                                            <div class="review_image">
                                                <h6 align="center" class="mb-3">{{ $row->produk->nama }}</h6>
                                                <img src="{{ base_url('assets/uploads/produk/' . $row->produk->foto) }}" alt="">
                                            </div>
                                        </div>
                                        <div class="review_content">
                                            <div class="review_name">{{ $row->pengguna->nama }}</div>
                                            <div class="review_rating_container">
                                                <div class="rating_r rating_r_4 review_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                                <div class="review_time">2 day ago</div>
                                            </div>
                                            <div class="review_text"><p>{{ $row->keterangan }}</p></div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                        <div class="reviews_dots"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection