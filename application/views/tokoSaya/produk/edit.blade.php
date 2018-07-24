@extends('template-tokoSaya')

@section('content-tokoSaya')
    <form action="{{ base_url('tokoSaya/produk/update/' . $produk->id_produk) }}" method="post" enctype="multipart/form-data">

        <div class="form-group">
            <label for="">Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ old('nama', $produk->nama) }}">
            @if($errors->has('nama'))
                <small class="text-danger">{{ $errors->first('nama') }}</small>
            @endif
        </div>

        <div class="form-group">
            <label for="">Kategori</label><br>
            <select name="id_kategori" class="custom-select">
                <option selected value="">Pilih kategori</option>
                @foreach($kategori as $value)
                    <option value="{{ $value->id_kategori }}" {{ $value->id_kategori == old('id_kategori', $produk->id_kategori) ? 'selected':'' }}>
                        {{ $value->nama }}
                    </option>
                @endforeach
            </select>
            @if($errors->has('id_kategori'))
                <small class="text-danger">{{ $errors->first('id_kategori') }}</small>
            @endif
        </div>

        <div class="form-group">
            <label for="">Deskripsi</label>
            <input type="text" name="deskripsi" class="form-control" value="{{ old('deskripsi', $produk->deskripsi) }}">
            @if($errors->has('deskripsi'))
                <small class="text-danger">{{ $errors->first('deskripsi') }}</small>
            @endif
        </div>

        <div class="form-group">
            <label for="">Harga</label>
            <input type="number" name="harga" class="form-control" value="{{ old('harga', $produk->harga) }}">
            @if($errors->has('harga'))
                <small class="text-danger">{{ $errors->first('harga') }}</small>
            @endif
        </div>

        <div class="form-group">
            <label for="">Satuan</label>
            <input type="text" name="satuan" class="form-control" value="{{ old('satuan', $produk->satuan) }}">
            @if($errors->has('satuan'))
                <small class="text-danger">{{ $errors->first('satuan') }}</small>
            @endif
        </div>

        <div class="form-group">
            <label for="">Foto</label>
            <input type="file" name="foto" class="form-control">
            <span class="text-muted">Biarkan kosong apabila tidak ingin merubah foto</span>
            @if($errors->has('foto'))
                <small class="text-danger">{{ $errors->first('foto') }}</small>
            @endif
        </div>
        <input type="checkbox" class="custom-control-input" id="customCheck1">

        <div class="form-group">
            <label for="">Status</label><br>
            <select name="status" class="custom-select">
                <option value="1" {{ old('status', $produk->status) ? 'selected' : '' }}>Tampilkan</option>
                <option value="0" {{ old('status', $produk->status) ? '' : 'selected' }}>Sembunyikan</option>
            </select>
        </div>

        <div class="form-group">
            <input class="btn btn-primary" type="submit" value="Simpan">
        </div>
    </form>
@endsection