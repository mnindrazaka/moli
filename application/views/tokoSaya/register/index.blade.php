@extends('template')

@section('title', 'Buat Toko')

@section('content')

    <div class="container mt-5">
        <form action="{{ base_url('tokoSaya/register/registerProcess') }}" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Nama Toko</label>
                        <input type="text" name="nama" class="form-control" value="{{ old('nama') }}">
                        @if($errors->has('nama'))
                            <small class="text-danger">{{ $errors->first('nama') }}</small>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="">Slogan</label>
                        <input type="text" name="slogan" class="form-control" value="{{ old('slogan') }}">
                        @if($errors->has('slogan'))
                            <small class="text-danger">{{ $errors->first('slogan') }}</small>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="">Deskripsi</label>
                        <input type="text" name="deskripsi" class="form-control" value="{{ old('deskripsi') }}">
                        @if($errors->has('deskripsi'))
                            <small class="text-danger">{{ $errors->first('deskripsi') }}</small>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="">Telpon</label>
                        <input type="tel" name="telp" class="form-control" value="{{ old('telp') }}">
                        @if($errors->has('telp'))
                            <small class="text-danger">{{ $errors->first('telp') }}</small>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="">Logo Toko</label>
                        <input type="file" name="logo" class="form-control">
                        @if($errors->has('logo'))
                            <small class="text-danger">{{ $errors->first('logo') }}</small>
                        @endif
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">
                            Simpan
                        </button>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Kota</label>
                        <input type="text" name="kota" class="form-control" value="{{ old('kota') }}">
                        @if($errors->has('kota'))
                            <small class="text-danger">{{ $errors->first('kota') }}</small>
                        @endif
                    </div>

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
                </div>

            </div>
        </form>
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
