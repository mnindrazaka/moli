@extends('template-tokoSaya')

@section('content-tokoSaya')
<div class="row">
  @foreach ($jenis_toko as $key => $value)
    @if ($key!=0 && $value->id_jenis_toko > $toko->id_jenis_toko)
    <div class="col-md-4">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{ base_url() .'assets/vendors/icon/'. $value->gambar }}" alt="Card image cap" style="width: 100%; height: 100%;">
        <div class="card-body">
          <h3 class="card-title">{{ $value->nama }}</h3>
          <p class="card-text">{{ $value->keterangan }}</p>
          @php
          $color = "";
          if ($value->id_jenis_toko == 1)
            $color = "danger";
          else if ($value->id_jenis_toko == 2)
            $color = "primary";
          else if ($value->id_jenis_toko == 3)
            $color = "warning";
          @endphp
          <a href="{{ base_url('tokoSaya/upgrade/viewBronze') }}" class="btn btn-outline-{{ $color }}">Lihat detail</a>

        </div>
      </div>
    </div>
    @endif
  @endforeach
@endsection
