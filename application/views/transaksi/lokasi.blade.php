@extends('template')

@section('title', 'Pilih Lokasi')

@section('content')
<div class="py-5 bg-light">
    <div class="container mt-4">
      <div class="card">
        <div class="card-body">
          <form id="formLokasi" method="post" action="{{ base_url('Transaksi/store') }}">
            <div class="form-group">
              <input id="latitude" type="hidden" class="form-control" name="latitude" value="{{ old('latitude', $user->latitude) }}" placeholder="Masukkan Latitude">
              <input id="longitude" type="hidden" class="form-control" name="longitude" value="{{ old('longitude', $user->longitude) }}" placeholder="Masukkan Longitude">
              <div id="googleMap" style="width:100%;height:300px;"></div>
              <small class="text-muted">klik pada peta untuk merubah lokasi</small>
              @if($errors->has('latitude'))
                <small class="text-danger">{{ $errors->first('latitude') }}</small>
              @endif
              @if($errors->has('longitude'))
                <small class="text-danger">{{ $errors->first('longitude') }}</small>
              @endif
            </div>
          </form>
        </div>
      </div>
      
      <input form="formLokasi" type="submit" class="btn btn-lg btn-success mt-3" value="Selesai"  />
    </div>
  </div>

@endsection

@section('script')
    <script>
        function myMap() {
            // Make Maps
            var myCenter = new google.maps.LatLng({{ old('latitude', $user->latitude) }}, {{ old('longitude', $user->longitude) }});
            var mapProp = {
                center: myCenter,
                zoom: 15
            };
            var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
            var marker = new google.maps.Marker({
                position: myCenter,
                map: map
            });

            // Add Click Event
            google.maps.event.addListener(map, 'click', function (event) {
                placeMarker(map, event.latLng);
                document.getElementById("latitude").value = event.latLng.lat();
                document.getElementById("longitude").value = event.latLng.lng();
            });

            // Place Marker
            function placeMarker(map, location) {
                // drop previous marker
                if(marker) {
                    marker.setMap(null)
                }

                marker = new google.maps.Marker({
                    position: location,
                    map: map
                })
            }
        }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB-0iUmT6UROU_Hx4RJtY32o2vSxS6PQS4&callback=myMap"></script>
@endsection