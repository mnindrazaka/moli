@extends('template-tokoSaya')

@section('content-tokoSaya')

    @if($jumlah_produk < $batas_produk || !$batas_produk)
        <a class="btn btn-primary mb-4" href="{{ base_url('tokoSaya/produk/create') }}">Tambah</a>
    @endif

    @if($batas_produk)
        @php $persentase = ($jumlah_produk / $batas_produk) * 100  @endphp
        <h6>Tersisa {{ $batas_produk - $jumlah_produk }} Produk Lagi</h6>
        <div class="progress mb-3">
            <div class="progress-bar" role="progressbar" style="width: {{ $persentase }}%" aria-valuenow="{{ $persentase }}" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
    @endif

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
                    <div class="btn-group">
                        <a href="{{ base_url('produk/show/' . $row->id_produk) }}" class="btn btn-primary">Detail</a>
                        <a href="{{ base_url('tokoSaya/produk/edit/' . $row->id_produk) }}" class="btn btn-warning">Edit</a>
                        <a href="{{ base_url('tokoSaya/produk/delete/' . $row->id_produk) }}" class="btn btn-danger">Hapus</a>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {!! $pagination !!}
@endsection