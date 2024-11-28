@extends('admin.layout.app')

@section('main')
    <div class="content">
        <form class="mb-9" action="{{ route('kategori.update', $kategori->id) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="row g-3 flex-between-end mb-5">
                <div class="col-auto">
                    <h2 class="mb-2">Tambah Kategori</h2>
                    <h5 class="text-700 fw-semi-bold">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h5>
                </div>
                <div class="col-auto">
                    <a class="btn btn-phoenix-secondary me-2 mb-2 mb-sm-0" href="{{ route('kategori') }}">Batalkan</a>
                    <button class="btn btn-primary mb-2 mb-sm-0" type="submit">Tambah</button>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-12 col-xl-12">
                    <label for="namaKategori"><h4 class="mb-3">Nama Kategori</h4></label>
                    <input class="form-control @error('nama_kategori') is-invalid @enderror" type="text" placeholder="Masukkan Nama Kategori" name="nama_kategori" id="namaKategori" value="{{ old('nama_kategori', $kategori->nama_kategori) }}"/>
                    @error('nama_kategori')
                        <strong class="invalid-feedback">{{ $message }}</strong>
                    @enderror
                </div>
            </div>
        </form>
    </div>
@endsection
