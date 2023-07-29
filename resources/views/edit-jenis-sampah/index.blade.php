@extends('index')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Ubah Data Jenis Sampah</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <form action="{{ route('jenis-sampah.update', ['jenis_sampah_id' => $jenisSampah->jenis_sampah_id]) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="nama">Nama</label>
                </div>

                <div class="form-group">
                    <label for="harga_per_kg">Harga/KG</label>
                    <input type="number" class="form-control" id="harga_per_kg" name="harga_per_kg" value="{{ $jenisSampah->harga_per_kg }}">
                </div>

                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </form>
        </div>
        <!-- /.card-body -->
    </div>
@endsection
