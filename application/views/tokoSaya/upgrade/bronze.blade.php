@extends('template-tokoSaya')

@section('content-tokoSaya')
<div class="">
  <h2 class="title">Bronze <img src="{{ base_url() }}assets/vendors/icon/bronze-shield.png" alt="Card image cap" style="width: 27px; height: 33px;" alt=""></h2>
  <p class="text text-muted">
    Moli merupakan salah satu online marketplace yang fokus pada ikan di Indonesia. Seperti halnya situs layanan jual-beli menyediakan sarana jual-beli dari konsumen ke konsumen. Siapa pun dapat membuka toko online di Moli dan melayani pembeli dari seluruh Indonesia untuk transaksi satuan maupun banyak. Moli memiliki slogan jual-beli online mudah dan terpercay.
  </p>
  <h4>Kelebihan : </h4>
  <p class="text text-muted">
    Menjadi online marketplace penjual ikan terbaik di Indonesia.
  </p>
  <form action="{{ base_url('tokoSaya/Toko/update/' . $id_toko) }}" method="post">
    <input type="hidden" name="id_jenis_toko" value="3">
  <button type="submit" class="btn btn-outline-danger">Upgrade</button>
</form>
</div>
@endsection
