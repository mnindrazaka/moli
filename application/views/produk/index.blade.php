@extends('template')

@section('title', 'Produk')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3">
                <div class="card mb-3">
                  <div class="card-body">
                    <h4 class="card-title">Pilih Kategori</h4>
                      <div class="list-group">
                          @foreach($kategori as $row)
                          <a href="#" class="list-group-item list-group-item-action">{{ $row->nama }}</a>
                          @endforeach
                      </div>
                  </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body">
                        <h4 class="card-title">Pilih Kota</h4>
                        <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action active">Active item</a>
                            <a href="#" class="list-group-item list-group-item-action">Item</a>
                            <a href="#" class="list-group-item list-group-item-action disabled">Disabled item</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="input-group mb-3 m-auto" style="width: 50%">
                    <input type="text" class="form-control" placeholder="Cari ikan..." aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
                <div class="featured_slider slider">
                    @foreach($produk as $row)
                        <div class="featured_slider_item">
                            <a href="{{ base_url('produk/show/' . $row->id_produk) }}">
                                <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="product_image d-flex flex-column align-items-center justify-content-center">
                                        <img src="{{ base_url('assets/uploads/produk/' . $row->foto) }}" alt="">
                                    </div>
                                    <div class="product_content">
                                        <div class="product_price">
                                            Rp. {{ $row->harga }}
                                            <span class="text-muted ml-0"> / {{ $row->satuan }}</span>
                                        </div>
                                        <div class="product_name"><div class="text-dark">{{ $row->nama }}</div></div>
                                        <div class="product_extras">
                                            <div class="p-1">
                                                <i class="fa fa-map-marker"></i>
                                                <span>{{ $row->toko->kota }}</span>
                                            </div>
                                            <button class="product_cart_button">Beli</button>
                                        </div>
                                    </div>
                                    {{--<ul class="product_marks">--}}
                                    {{--<li class="product_mark product_discount">-25%</li>--}}
                                    {{--<li class="product_mark product_new">new</li>--}}
                                    {{--</ul>--}}
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection