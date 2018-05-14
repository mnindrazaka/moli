@extends('template-tokoSaya')

@section('content-tokoSaya')
    <form action="{{ base_url('tokoSaya/produk/store') }}" method="post" enctype="multipart/form-data">

        <div class="form-group">
            <label for="">Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ old('nama') }}">
            @if($errors->has('nama'))
                <small class="text-danger">{{ $errors->first('nama') }}</small>
            @endif
        </div>

        <div class="form-group">
            <label for="">Kategori</label><br>
            <select name="id_kategori" class="custom-select">
                <option selected value="">Pilih kategori</option>
                @foreach($kategori as $value)
                    <option value="{{ $value->id_kategori }}" {{ $value->id_kategori == old('id_kategori') ? 'selected':'' }}>
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
            <input type="text" name="deskripsi" class="form-control" value="{{ old('deskripsi') }}">
            @if($errors->has('deskripsi'))
                <small class="text-danger">{{ $errors->first('deskripsi') }}</small>
            @endif
        </div>

        <div class="form-group">
            <label for="">Harga</label>
            <input type="number" name="harga" class="form-control" value="{{ old('harga') }}">
            @if($errors->has('harga'))
                <small class="text-danger">{{ $errors->first('harga') }}</small>
            @endif
        </div>

        <div class="form-group">
            <label for="">Satuan</label>
            <input type="text" name="satuan" class="form-control" value="{{ old('satuan') }}">
            @if($errors->has('satuan'))
                <small class="text-danger">{{ $errors->first('satuan') }}</small>
            @endif
        </div>

        <div class="form-group">
            <label for="">Foto</label>
            <input type="file" name="foto" class="form-control">
            @if($errors->has('foto'))
                <small class="text-danger">{{ $errors->first('foto') }}</small>
            @endif
        </div>

        <div class="form-group">
            <input class="btn btn-primary" type="submit" value="Simpan">
        </div>
    </form>
@endsection