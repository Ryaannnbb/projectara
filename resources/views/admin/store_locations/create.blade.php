@extends('admin.layout.app')

@section('title', 'Tambah Store Locations')

@section('main')
    <div class="content">
        <form class="mb-9" action="{{ route('store_locations.store') }}" method="POST">
            @csrf
            <div class="row g-3 flex-between-end mb-5">
                <div class="col-auto">
                    <h2 class="mb-2">Tambah Store Locations</h2>
                    <h5 class="text-700 fw-semi-bold">Silakan isi form di bawah ini untuk menambahkan lokasi toko baru.</h5>
                </div>
                <div class="col-auto">
                    <a class="btn btn-phoenix-secondary me-2 mb-2 mb-sm-0" href="{{ route('store_locations') }}">Batalkan</a>
                    <button class="btn btn-primary mb-2 mb-sm-0" type="submit">Tambah</button>
                </div>
            </div>
            <div class="row g-5 mb-5">
                <div class="col-12 col-xl-12">
                    <label for="namaKota"><h4 class="mb-3">Nama Kota</h4></label>
                    <input class="form-control @error('nama_kota') is-invalid @enderror" type="text" placeholder="Masukkan Nama Kota" name="nama_kota" id="namaKota" value="{{ old('nama_kota') }}"/>
                    @error('nama_kota')
                        <strong class="invalid-feedback">{{ $message }}</strong>
                    @enderror
                </div>
            </div>
            <div class="row g-5">
                <div class="col-12 col-xl-12">
                    <label for="namaToko"><h4 class="mb-3">Nama Toko</h4></label>
                    <input class="form-control @error('nama_toko') is-invalid @enderror" type="text" placeholder="Masukkan Nama Toko" name="nama_toko" id="namaToko" value="{{ old('nama_toko') }}"/>
                    @error('nama_toko')
                        <strong class="invalid-feedback">{{ $message }}</strong>
                    @enderror
                </div>
            </div>
        </form>
    </div>
@endsection
