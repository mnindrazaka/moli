@extends('admin/template')

@section('content')
<div class="page-wrapper">
  <div class="container-fluid">
    <div class="row page-titles">
      <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor">Transaksi</h3>
        {{-- <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol> --}}
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-block">
            <table id="myTable" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nomor Transaksi</th>
                  <th>Tanggal</th>
                  <th>Pembeli</th>
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
                  <td>{{ $value->pengguna->nama }}</td>                  
                  <td>{{ number_format($value->total) }}</td>
                  <td>{{ $value->status ? 'Sudah Dikonfirmasi' : 'Belum Dikonfirmasi' }}</td>
                  <td>
                    <a href="{{ base_url('admin/transaksi/show/' . $value->id_transaksi) }}" class="btn btn-sm btn-primary">Detail</a>
                    @if ($value->bukti)
                      <a class="btn btn-sm btn-warning" href="{{ base_url('assets/uploads/bukti/' . $value->bukti) }}" role="button">Lihat Bukti</a>
                      @if ($value->status != 1)
                        <a href="{{ base_url('admin/transaksi/confirm/' . $value->id_transaksi) }}" class="btn btn-sm btn-success">Konfirmasi</a>                  
                        <a href="{{ base_url('admin/transaksi/reject/' . $value->id_transaksi) }}" class="btn btn-sm btn-danger">Tolak</a>                  
                      @endif
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
  </div>

  <footer class="footer"> © 2017 MOLI | Admin </footer>
</div>
@endsection