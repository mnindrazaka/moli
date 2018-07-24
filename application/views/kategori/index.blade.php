@extends('template')

@section('title', 'kategori')

@section('content')
  <div class="py-5 bg-light">
    <div class="container mt-4">
      <div class="row">
        @foreach($kategori as $row)
          <div class="col-md-4">
            <div class="card mb-4 box-shadow border-0">
              @if( $row->gambar )
                <img class="card-img-top" src="{{ base_url() .'uploads/'. $row->gambar }}" alt="Card image cap">
              @else
                <img class="card-img-top" src="http://via.placeholder.com/300x150" alt="Card image cap">
              @endif
              <div class="card-body">
                <h5 class="card-title">{{ $row->nama }}</h5>
                <p class="card-text">{{ $row->keterangan }}</p>
                <a href="{{ base_url(). 'produk/index/' . $row->id_kategori }}" class="btn btn-primary">Lihat</a>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
@endsection
