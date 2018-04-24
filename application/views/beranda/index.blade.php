@extends('template')

@section('title', 'Beranda')

@section('content')
    <!-- Banner -->
    <div class="banner">
        <div class="banner_background" style="background-image:url(assets/vendors/onetech/images/banner_background.jpg)"></div>
        <div class="container fill_height">
            <div class="row fill_height">
                <div class="banner_product_image"><img src="{{ base_url() }}assets/vendors/onetech/images/banner_product.png" alt="" class="img-fluid"></div>
                <div class="col-lg-5 offset-lg-4 fill_height">
                    <div class="banner_content">
                        <h1 class="banner_text">Cara Baru</h1>
                        <h1 class="banner_text">Belanja Ikan</h1>
                        <div class="button banner_button"><a href="{{ base_url('produk') }}">Belanja Sekarang</a></div>
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
                        <div class="char_icon"><img src="{{ base_url() }}assets/vendors/onetech/images/char_1.png" alt=""></div>
                        <div class="char_content">
                            <div class="char_title">Gratis Ongkos Kirim</div>
                            <div class="char_subtitle">Seluruh indonesia</div>
                        </div>
                    </div>
                </div>

                <!-- Char. Item -->
                <div class="col-lg-3 col-md-6 char_col">

                    <div class="char_item d-flex flex-row align-items-center justify-content-start">
                        <div class="char_icon"><img src="{{ base_url() }}assets/vendors/onetech/images/char_2.png" alt=""></div>
                        <div class="char_content">
                            <div class="char_title">Proses Cepat</div>
                            <div class="char_subtitle">kami mengutamakan pelayanan</div>
                        </div>
                    </div>
                </div>

                <!-- Char. Item -->
                <div class="col-lg-3 col-md-6 char_col">

                    <div class="char_item d-flex flex-row align-items-center justify-content-start">
                        <div class="char_icon"><img src="{{ base_url() }}assets/vendors/onetech/images/char_3.png" alt=""></div>
                        <div class="char_content">
                            <div class="char_title">Harga Terjangkau</div>
                            <div class="char_subtitle">Pas di kantong anda</div>
                        </div>
                    </div>
                </div>

                <!-- Char. Item -->
                <div class="col-lg-3 col-md-6 char_col">

                    <div class="char_item d-flex flex-row align-items-center justify-content-start">
                        <div class="char_icon"><img src="{{ base_url() }}assets/vendors/onetech/images/char_4.png" alt=""></div>
                        <div class="char_content">
                            <div class="char_title">Banyak Pilihan</div>
                            <div class="char_subtitle">temukan ikan yang anda inginkan</div>
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
                                            <a href="{{ base_url('produk/show/' . $row->id_produk) }}">
                                                <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div class="product_image d-flex flex-column align-items-center justify-content-center">
                                                        <img src="{{ base_url('assets/uploads/produk/' . $row->foto) }}" alt="">
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="product_price">Rp. {{ $row->harga }}</div>
                                                        <div class="product_name"><div class="text-dark">{{ $row->nama }}</div></div>
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
                                            </a>
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
                                    <div class="popular_category_image"><img src="{{ base_url() }}assets/vendors/onetech/images/popular_1.png" alt=""></div>
                                    <div class="popular_category_text">Smartphones & Tablets</div>
                                </div>
                            </div>

                            <!-- Popular Categories Item -->
                            <div class="owl-item">
                                <div class="popular_category d-flex flex-column align-items-center justify-content-center">
                                    <div class="popular_category_image"><img src="{{ base_url() }}assets/vendors/onetech/images/popular_2.png" alt=""></div>
                                    <div class="popular_category_text">Computers & Laptops</div>
                                </div>
                            </div>

                            <!-- Popular Categories Item -->
                            <div class="owl-item">
                                <div class="popular_category d-flex flex-column align-items-center justify-content-center">
                                    <div class="popular_category_image"><img src="{{ base_url() }}assets/vendors/onetech/images/popular_3.png" alt=""></div>
                                    <div class="popular_category_text">Gadgets</div>
                                </div>
                            </div>

                            <!-- Popular Categories Item -->
                            <div class="owl-item">
                                <div class="popular_category d-flex flex-column align-items-center justify-content-center">
                                    <div class="popular_category_image"><img src="{{ base_url() }}assets/vendors/onetech/images/popular_4.png" alt=""></div>
                                    <div class="popular_category_text">Video Games & Consoles</div>
                                </div>
                            </div>

                            <!-- Popular Categories Item -->
                            <div class="owl-item">
                                <div class="popular_category d-flex flex-column align-items-center justify-content-center">
                                    <div class="popular_category_image"><img src="{{ base_url() }}assets/vendors/onetech/images/popular_5.png" alt=""></div>
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