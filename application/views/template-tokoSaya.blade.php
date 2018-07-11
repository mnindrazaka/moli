@extends('template')

@section('title', 'Toko Saya')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3">
                <div class="list-group">
                    <a href="{{ base_url('tokoSaya') }}" class="list-group-item list-group-item-action">Beranda</a>
                    <a href="{{ base_url('tokoSaya/profil') }}" class="list-group-item list-group-item-action">Profil Toko</a>
                    <a href="{{ base_url('tokoSaya/produk') }}" class="list-group-item list-group-item-action">Produk Toko</a>
                    <a href="{{ base_url('tokoSaya/rekening') }}" class="list-group-item list-group-item-action">Rekening</a>
                    <a href="{{ base_url('tokoSaya/toko') }}" class="list-group-item list-group-item-action">Upgrade</a>
                </div>
            </div>

            <div class="col-md-9">
                @yield('content-tokoSaya')
            </div>
        </div>
    </div>
@endsection
