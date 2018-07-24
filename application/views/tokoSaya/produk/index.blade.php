@extends('template-tokoSaya')

@section('content-tokoSaya')

<a class="btn btn-primary mb-4" href="{{ base_url('tokoSaya/produk/create') }}">Tambah</a>

<table class="table table-bordered table-striped table-hover">
  <thead>
    <tr>
      <th>Nama</th>
      <th>Kategori</th>
      <th>Harga</th>
      <th>Satuan</th>
      <th>Status</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach($produk as $key => $row)
    <tr>
      <td>{{ $row->nama }}</td>
      <td>{{ $row->kategori->nama }}</td>
      <td>{{ $row->harga }}</td>
      <td>{{ $row->satuan }}</td>
      <td>{{ $row->status ? 'Tampilkan' : 'Sembunyikan' }}</td>
      <td>
        <a href="{{ base_url('produk/show/' . $row->id_produk) }}" class="btn btn-sm btn-primary">Detail</a>
        <a href="{{ base_url('tokoSaya/produk/edit/' . $row->id_produk) }}" class="btn btn-sm btn-warning">Edit</a>
        <a href="{{ base_url('tokoSaya/produk/delete/' . $row->id_produk) }}" class="btn btn-sm btn-danger">Hapus</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

{!! $pagination !!}
@endsection
