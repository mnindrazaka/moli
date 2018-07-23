<div class="row">
  <div class="col-md-6">
    <img src="{{ base_url() .'assets/uploads/toko/'. $toko->logo }}" alt="" style="width:100%;">
  </div>
  <div class="col-md-6">
    <table class="table table-striped table-bordered">
      <div class="">
        <label for="title" style="border-bottom: 2px solid currentColor;">Nama Toko :</label>
        <h5>{{ $toko->nama }}</h5>
      </div>
      <div class="">
        <label for="title" style="border-bottom: 2px solid currentColor;">Telepon</label>
        <h5>{{ $toko->telp }}</h5>
      </div>
      <div class="">
        <label for="title" style="border-bottom: 2px solid currentColor;">Kota</label>
        <h5>{{ $toko->kota }}</h5>
      </div>
      <div class="">
        <label for="title" style="border-bottom: 2px solid currentColor;">Deskripsi</label>
        <h5>{{ $toko->deskripsi }}</h5>
      </div>
    </table>
  </div>
</div>
