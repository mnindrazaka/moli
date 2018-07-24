@extends('template')

@section('title', 'Transaksi Saya')

@section('content')
<div class="py-5 bg-light">
    <div class="container mt-4">
      <div class="card">
        <div class="card-body">
          <table id="myTable" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nomor Transaksi</th>
                  <th>Tanggal</th>
                  <th>Total</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($transaksi as $key => $value)
                <tr>
                  <td>{{ $key+1 }}</td>
                  <td>{{ $value->id_transaksi }}</td>
                  <td>{{ date_format(date_create($value->tanggal), "d/m/Y") }}</td>
                  <td>{{ number_format($value->total) }}</td>
                  <td>{{ $value->status ? 'Sudah Dikonfirmasi' : 'Belum Dikonfirmasi' }}</td>
                  <td>
                    <a href="{{ base_url('transaksi/show/' . $value->id_transaksi) }}" class="btn btn-sm btn-primary">Detail</a>
                    @if (!$value->bukti)
                      <a class="btn btn-sm btn-warning" href="{{ base_url('transaksi/edit/' . $value->id_transaksi) }}" role="button">Upload Bukti</a>
                    @else
                      <a class="btn btn-sm btn-warning" href="{{ base_url('assets/uploads/bukti/' . $value->bukti) }}" role="button">Lihat Bukti</a>
                    @endif
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
        </div>
      </div>
    </div>
  </div>

@endsection