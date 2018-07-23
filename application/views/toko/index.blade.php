@extends('template')

@section('title', 'kategori')

@section('content')
  <div class="py-5 bg-light">
    <div class="container mt-4">
      <div class="row">
        @foreach($toko as $row)
          <div class="col-md-3">
            <div class="card mb-4 box-shadow border-0">
              @if( $row->logo )
                <img class="card-img-top" src="{{ base_url() .'assets/uploads/toko/'. $row->logo }}" alt="Card image cap">
              @else
                <img class="card-img-top" src="http://via.placeholder.com/300x150" alt="Card image cap">
              @endif
              <div class="card-body">
                <h5 class="card-title">{{ $row->nama }}</h5>
                {{ $row->kota }}
                <p class="card-text">{{ $row->slogan }}</p>
                <a href="{{ base_url(). 'toko/show/' . $row->id_toko }}" class="btn btn-primary">Kunjungi</a>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
@endsection
