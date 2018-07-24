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
              <td>{{ number_format($row->produk->harga) }}</td>
              <td>
                <form id="form{{ $row->id_keranjang }}" method="post" action="{{ base_url('keranjang/update/' . $row->id_keranjang) }}">
                  <input type="hidden" name="id_produk" value="{{ $row->produk->id_produk }}"/>
                  <input type="text" class="form-control" name="jumlah" value="{{ $row->jumlah }}" />
                </form>
              </td>
              <td>{{ number_format($row->subtotal) }}</td>
              <td>
                <button type="submit" class="btn btn-sm btn-warning" form="form{{ $row->id_keranjang }}">Ubah</button>
                <a href="{{ base_url('keranjang/delete/' . $row->id_keranjang) }}" class="btn btn-sm btn-danger">Hapus</a>
              </td>
            </tr>
            @php $total += $row->subtotal @endphp
            @endforeach
          </tbody>
        </table>

        <h3>Total : {{ number_format($total) }}</h3>
      </div>
    </div>

    <a class="btn btn-success mt-3" href="{{ base_url('transaksi/selectLocation') }}" role="button">Selesai</a>

  </div>
</div>

@endsection
