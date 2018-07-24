@extends('template')

@section('title', 'Detail Transaksi')

@section('content')
<div class="py-5 bg-light">
    <div class="container mt-4">
      <div class="card">
        <div class="card-body">
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
        </div>
      </div>
    </div>
  </div>

@endsection