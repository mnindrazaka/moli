@extends('template')

@section('title', 'Keranjang')

@section('content')
<div class="py-5 bg-light">
    <div class="container mt-4">
      <div class="card">
        <div class="card-body">
          <table class="table table-hover table-stripped table-responsive">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Ikan</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Subtotal</th>
                <th>Aksi</th>  
              </tr>
            </thead>
            <tbody>
            @php $total = 0; @endphp
            @foreach ($keranjang as $key => $row)
              <tr>
                <td scope="row">{{ $key + 1 }}</td>
                <td><a href="{{ base_url('produk/show/' . $row->produk->id_produk) }}">{{ $row->produk->nama }}</a></td>
                <td>{{ $row->produk->harga }}</td>
                <td>
                  <form id="form{{ $row->id_keranjang }}" method="post" action="{{ base_url('keranjang/update/' . $row->id_keranjang) }}">
                    <input type="hidden" name="id_produk" value="{{ $row->produk->id_produk }}"/>
                    <input type="text" class="form-control" name="jumlah" value="{{ $row->jumlah }}" />
                  </form>
                </td>
                <td>{{ $row->subtotal }}</td>
                <td>
                  <div class="btn-group" role="group" aria-label="">
                    <button type="submit" class="btn btn-warning" form="form{{ $row->id_keranjang }}">Ubah</button>
                    <a href="{{ base_url('keranjang/delete/' . $row->id_keranjang) }}" class="btn btn-danger">Hapus</a>
                  </div>
                </td>
              </tr>
              @php $total += $row->subtotal @endphp
            @endforeach
            </tbody>
          </table>

          <h3>Total : {{ $total }}</h3>
        </div>
      </div>
    </div>
  </div>

@endsection