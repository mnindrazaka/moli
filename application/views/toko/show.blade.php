@extends('template')

@section('title', 'Detail Toko')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3">
                        <img src="{{ base_url('assets/uploads/toko/' . $toko->logo) }}" class="img-fluid">
                    </div>
                    <div class="col-md-4">
                        <h3>{{ $toko->nama }}</h3>
                        <p class="text-muted">{{ $toko->slogan }}</p>
                        @php
                            $rating = 0;
                            foreach($toko->rating as $row) {
                                $rating += $row->rating;
                            }
                        @endphp

                        <div class="rating_r rating_r_4 product_rating mb-2">
                            @if(count($toko->rating) > 0)
                                @for($i = 1; $i <= $rating / count($toko->rating); $i++)
                                    <span class="fa fa-star text-primary"></span>
                                @endfor
                            @else
                                <div class="fa fa-star text-muted mb-3">Tidak ada rating</div>
                            @endif
                        </div>

                        <div>
                            <i class="fa fa-phone"></i>
                            <span>{{ $toko->telp }}</span>
                        </div>

                        <p class="text-dark mt-2">{{ $toko->deskripsi }}</p>
                    </div>
                    <div class="col-md-5">
                        <div id="googleMap" style="width:100%;height:300px;"></div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-12" style="text-align: center">
                        <hr>

                        <h4 class="mt-4">Rekening</h4>
                        <p class="text-muted">Silahkan transfer uang ke rekening berikut</p>
                        <table class="table table-bordered table-striped table-hover">
                            <thead class="thead-inverse|thead-default">
                            <tr>
                                <th>No</th>
                                <th>Bank</th>
                                <th>Nomor Rekening</th>
                                <th>Atas Nama</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($toko->rekening as $key => $row)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $row->bank->nama }}</td>
                                    <td>{{ $row->no }}</td>
                                    <td>{{ $row->nama }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="row text-center mb-5 mt-3">
                    <div class="col">
                        <hr>
                        <h4 class="mt-4">Ulasan Pelanggan</h4>
                        <p class="text-muted">Silahkan login untuk memberikan ulasan</p>
                        <div class="reviews_slider_container">
                            <!-- Reviews Slider -->
                            <div class="owl-carousel owl-theme reviews_slider">

                                <!-- Reviews Slider Item -->
                                @foreach($toko->rating as $row)
                                    <div class="owl-item">
                                        <div class="review d-flex flex-row align-items-start justify-content-start">
                                            <div class="review_content">
                                                <div class="review_name">{{ $row->pengguna->nama }}</div>
                                                <div class="review_rating_container">
                                                    <div class="rating_r rating_r_4 product_rating">
                                                        @for($i = 1; $i <= $row->rating; $i++)
                                                            <span class="fa fa-star text-primary"></span>
                                                        @endfor
                                                    </div>
                                                    <div class="review_time">2 day ago</div>
                                                </div>
                                                <div class="review_text"><p>{{ $row->keterangan }}</p></div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                            <div class="reviews_dots"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        function myMap() {
            var myCenter = new google.maps.LatLng({{ $toko->latitude }}, {{ $toko->longitude }});

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
