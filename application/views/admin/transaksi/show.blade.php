@extends('admin/template')

@section('content')
<div class="page-wrapper">
  <div class="container-fluid">
    <div class="row page-titles">
      <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor">Detail Transaksi</h3>
        {{-- <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol> --}}
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-block">
            <table id="myTable" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Produk</th>
                  <th>Harga</th>  
                  <th>Jumlah</th>
                  <th>Subtotal</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($transaksi->detailTransaksi as $key => $value)
                <tr>
                  <td>{{ $key+1 }}</td>
                  <td><a href="{{ base_url('produk/show/' . $value->produk->id_produk) }}">{{ $value->produk->nama }}</a></td>
                  <td>{{ $value->produk->harga }}</td>
                  <td>{{ $value->jumlah }}</td>
                  <td>{{ number_format($value->subtotal) }}</td>
                </tr>
                @endforeach
              </tbody>
            </table>

            <h5 class="mt-5">Lokasi Pengiriman</h5>
            <div class="border">
              <div id="googleMap" style="width:100%;height:300px;"></div>            
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="footer"> © 2017 MOLI | Admin </footer>
</div>
@endsection

@section('script')
    <script>
        function myMap() {
            var myCenter = new google.maps.LatLng({{ $transaksi->latitude }}, {{ $transaksi->longitude }});

            var mapProp = {
                center: myCenter,
                zoom: 15
            };

            var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
            var marker = new google.maps.Marker({
                position: myCenter,
                animation:google.maps.Animation.BOUNCE
            });
            marker.setMap(map);
        }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB-0iUmT6UROU_Hx4RJtY32o2vSxS6PQS4&callback=myMap"></script>
@endsection