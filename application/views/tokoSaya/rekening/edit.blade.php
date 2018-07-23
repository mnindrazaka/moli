@extends('template-tokoSaya')

@section('content-tokoSaya')
    <form action="{{ base_url('tokoSaya/rekening/update/' . $rekening->id_rekening) }}" method="post">

        <div class="form-group">
            <label for="">Nama Bank</label><br>
            <select name="id_bank" class="custom-select">
                <option selected value="">Pilih bank</option>
                @foreach($bank as $value)
                    <option value="{{ $value->id_bank }}" {{ $value->id_bank == old('id_bank', $rekening->id_bank) ? 'selected':'' }}>
                        {{ $value->nama }}
                    </option>
                @endforeach
            </select>
            @if($errors->has('id_bank'))
                <small class="text-danger">{{ $errors->first('id_bank') }}</small>
            @endif
        </div>

        <div class="form-group">
            <label for="">No Rekening</label>
            <input type="text" name="no" class="form-control" value="{{ old('no', $rekening->no) }}">
            @if($errors->has('no'))
                <small class="text-danger">{{ $errors->first('no') }}</small>
            @endif
        </div>

        <div class="form-group">
            <label for="">Atas Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ old('nama', $rekening->nama) }}">
            @if($errors->has('nama'))
                <small class="text-danger">{{ $errors->first('nama') }}</small>
            @endif
        </div>

        <div class="form-group">
            <input class="btn btn-primary" type="submit" value="Simpan">
        </div>
    </form>
@endsection