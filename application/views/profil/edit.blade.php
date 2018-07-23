@extends('template')

@section('title', 'Ubah Profil')

@section('content')
    <div class="container mt-5 mb-5">
        <form action="{{ base_url('profil/update/' . $user->id_pengguna) }}" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input id="nama" type="text" class="form-control" name="nama" value="{{ old('nama', $user->nama) }}" placeholder="Masukkan Nama">
                        @if($errors->has('nama'))
                            <small class="text-danger">{{ $errors->first('nama') }}</small>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="telp">Telpon</label>
                        <input id="telp" type="text" class="form-control" name="telp" value="{{ old('telp', $user->telp) }}" placeholder="Masukkan Telpon">
                        @if($errors->has('telp'))
                            <small class="text-danger">{{ $errors->first('telp') }}</small>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Masukkan Email">
                        <small class="text-muted">Biarkan kosong apabila tidak ingin merubah email</small>
                        @if($errors->has('email'))
                            <br>
                            <small class="text-danger">{{ $errors->first('email') }}</small>
                        @endif
                    </div>

                    <input class="btn btn-primary" type="submit" value="Simpan">
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="foto">Foto</label>
                        <input id="foto" type="file" class="form-control" name="foto">
                        <small class="text-muted">Biarkan kosong apabila tidak ingin merubah foto</small>
                        @if($errors->has('foto'))
                            <br>
                            <small class="text-danger">{{ $errors->first('foto') }}</small>
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