@extends('template') 

@section('title', 'Detail Ikan') 

@section('header')
<link rel="stylesheet" type="text/css" href="{{ base_url() }}assets/vendors/onetech/styles/product_styles.css">
<link rel="stylesheet" type="text/css" href="{{ base_url() }}assets/vendors/onetech/styles/product_responsive.css"> @endsection @section('content')
<!-- Single Product -->
<div class="single_product">
    <div class="container">
        <div class="row">
            <!-- Selected Image -->
            <div class="col-lg-5">
                <div class="image_selected">
                    <img src="{{ base_url('assets/uploads/produk/' . $produk->foto) }}" alt="">
                </div>
            </div>

            <!-- Description -->
            <div class="col-lg-4">
                <div class="product_description">
                    <div class="product_category">{{ $produk->kategori->nama }}</div>
                    <div class="product_name">{{ $produk->nama }}</div>

                    @php $rating = 0; foreach($ulasan as $row) { $rating += $row->rating; } @endphp

                    <div class="rating_r rating_r_4 product_rating" style="text-align =">
                        @if(count($ulasan) > 0) 
                            @for($i = 1; $i <= $rating / count($ulasan); $i++) 
                                <span class="fa fa-star text-primary"></span>
                            @endfor 
                        @else
                            <div class="fa fa-star"></div> Belum ada rating 
                        @endif
                    </div>

                    <div class="product_text">
                        <p>{{ $produk->deskripsi }}</p>
                    </div>
                    <div class="order_info d-flex flex-row">
                        <form action="{{ base_url('keranjang/store') }}" method="post">
                            <div class="clearfix" style="z-index: 1000;">
                                <!-- Product Quantity -->
                                <div class="product_quantity clearfix">
                                    <span>Jumlah: </span>
                                    <input type="hidden" name="id_produk" value="{{ $produk->id_produk }}" />
                                    <input id="quantity_input" type="text" pattern="[0-9]*" value="1" name="jumlah">
                                    <div class="quantity_buttons">
                                        <div id="quantity_inc_button" class="quantity_inc quantity_control">
                                            <i class="fas fa-chevron-up"></i>
                                        </div>
                                        <div id="quantity_dec_button" class="quantity_dec quantity_control">
                                            <i class="fas fa-chevron-down"></i>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="product_price">Rp. {{ $produk->harga }} / {{ $produk->satuan }}</div>
                            <div class="button_container">
                                <button type="submit" class="button cart_button">Tambah ke keranjang</button>
                                <div class="product_fav">
                                    <i class="fas fa-heart"></i>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            {{-- Toko --}}
            <div class="col-lg-3" style="border-left: 1px solid #eee">
                <div>
                    <img class="card-img-top" src="{{ base_url('assets/uploads/toko/' . $produk->toko->logo) }}" alt="Card image cap">
                    <div class="card-body">
                        @php $rating = 0; foreach($produk->toko->rating as $row) { $rating += $row->rating; } @endphp

                        <div class="rating_r rating_r_4 product_rating" style="text-align: center;">
                            @for($i = 1; $i <= $rating / count($produk->toko->rating); $i++)
                                <span class="fa fa-star text-primary"></span>
                            @endfor
                        </div>
                        <h4 class="card-title" align="center">{{ $produk->toko->nama }}</h4>
                        <p class="card-text" align="center">{{ $produk->toko->slogan }}</p>
                        <p align="center">
                            <span class="fa fa-map-marker"></span>
                            <span>{{ $produk->toko->kota }}</span>
                        </p>
                        <a href="{{ base_url('toko/show/' . $produk->toko->id_toko) }}" class="btn btn-primary btn-block">Detail</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-12">
                <div class="text-center">
                    <div class="row">
                        <div class="col">

                            <div class="reviews_title_container">
                                <h3 class="reviews_title">Ulasan Pelanggan</h3>

                                @if(!isset($_SESSION['user']))
                                    <p class="text-muted">Silahkan login untuk memberikan ulasan</p>
                                @elseif($_SESSION['user']->id_toko == $produk->id_toko)
                                    Anda tidak bisa memberikan ulasan terhadap produk anda sendiri    
                                @else
                                    <form method="post" action="{{ base_url('ulasan/store') }}">
                                        
                                        <input type="hidden" name="id_produk" value="{{ $produk->id_produk }}" />
                                        <input type="hidden" name="id_pengguna" value="{{ $_SESSION['user']->id_pengguna }}" />
                                        
                                        <div class="form-group">
                                            <label for="rating">Jumlah Bintang</label>
                                            <select class="form-control" name="rating">
                                                <option selected value="">Pilih Jumlah Bintang</option>
                                                @for($i = 1; $i <= 5; $i++)
                                                    <option value="{{ $i }}" {{ old('rating') == $i ? 'selected' : '' }}>{{ $i }}</option>
                                                @endfor
                                            </select>
                                            @if($errors->has('rating'))
                                                <small class="text-danger">{{ $errors->first('rating') }}</small>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="keterangan">Keterangan</label>
                                            <textarea id="keterangan" type="text" class="form-control" name="keterangan" placeholder="Keterangan anda...">{{ old('keterangan') }}</textarea>
                                            @if($errors->has('keterangan'))
                                                <small class="text-danger">{{ $errors->first('keterangan') }}</small>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </form>
                                @endif 
                            </div>

                            <div class="reviews_slider_container">

                                <!-- Reviews Slider -->
                                <div class="owl-carousel owl-theme reviews_slider">

                                    <!-- Reviews Slider Item -->
                                    @foreach($ulasan as $row)
                                    <div class="owl-item">
                                        <div class="review d-flex flex-row align-items-start justify-content-start">
                                            <div class="review_content">
                                                <div class="review_name">{{ $row->pengguna->nama }}</div>
                                                <div class="review_rating_container">
                                                    <div class="rating_r rating_r_4 product_rating">
                                                        @for($i = 1; $i <= $row->rating; $i++)
                                                            <span class="fa fa-star text-primary"></span>
                                                        @endfor
                                                    </div>
                                                    <div class="review_time">{{ date_format(date_create($row->tanggal), "d/m/Y") }}</div>
                                                </div>
                                                <div class="review_text">
                                                    <p>{{ $row->keterangan }}</p>
                                                </div>
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
        </div>
    </div>
</div>
@endsection