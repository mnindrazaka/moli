@extends('template-tokoSaya')

@section('content-tokoSaya')

<a class="btn btn-primary mb-4" href="{{ base_url('tokoSaya/rekening/create') }}">Tambah</a>

<table class="table table-bordered table-striped table-hover" id="myTable">
  <thead class="thead-inverse|thead-default">
    <tr>
      <th>No</th>
      <th>Bank</th>
      <th>Nomor Rekening</th>
      <th>Atas Nama</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach($rekening as $key => $row)
    <tr>
      <td>{{ $key + 1 }}</td>
      <td>{{ $row->bank->nama }}</td>
      <td>{{ $row->no }}</td>
      <td>{{ $row->nama }}</td>
      <td>
        <a href="{{ base_url('tokoSaya/rekening/edit/' . $row->id_rekening) }}" class="btn btn-sm btn-warning">Edit</a>
        <a href="{{ base_url('tokoSaya/rekening/delete/' . $row->id_rekening) }}" class="btn btn-sm btn-danger">Hapus</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
