@extends('template')

@section('title', 'Bukti Pembayaran')

@section('content')
<div class="py-5 bg-light">
    <div class="container mt-4">
      <div class="card">
        <div class="card-body">
          <form id="formUpload" method="post" action="{{ base_url('Transaksi/update/' . $transaksi->id_transaksi) }}" enctype="multipart/form-data">
            <div class="form-group">
              <label for="bukti">Bukti Pembayaran</label>
              <input id="bukti" type="file" class="form-control" name="bukti">
              @if($errors->has('bukti'))
                <br>
                <small class="text-danger">{{ $errors->first('bukti') }}</small>
              @endif
            </div>
          </form>
        </div>
      </div>
      
      <input form="formUpload" type="submit" class="btn btn-lg btn-success mt-3" value="Upload"  />
    </div>
  </div>

@endsection