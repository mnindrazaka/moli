@extends('template')

@section('title', 'Halaman Profil')

@section('content')
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3">
                        <img src="{{ $user->foto ? base_url('assets/uploads/pengguna/' . $user->foto) : 'http://via.placeholder.com/350x350' }}" class="img-fluid">
                    </div>
                    <div class="col-md-4">
                        <h3>{{ $user->nama }}</h3>
                        <p class="text-muted">{{ $user->email }}</p>

                        @if(isset($user->telp))
                        <div class="mb-3">
                            <i class="fa fa-phone"></i>
                            <span>{{ $user->telp }}</span>
                        </div>
                        @endif

                        <a class="btn btn-primary" href="{{ base_url('profil/edit') }}">Ubah Profil</a>
                        <a class="btn btn-danger" href="{{ base_url('profil/editPassword') }}">Ubah Password</a>
                    </div>
                    
                    <div class="col-md-5">
                        <div id="googleMap" style="width:100%;height:300px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        function myMap() {
            var myCenter = new google.maps.LatLng({{ $user->latitude }}, {{ $user->longitude }});

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