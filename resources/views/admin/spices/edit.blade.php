@extends('admin.layout.app')

@section('main')
    <div class="content">
        <form class="mb-9" action="{{ route('spices.update', $spices->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row g-3 flex-between-end mb-5">
                <div class="col-auto">
                    <h2 class="mb-2">Edit Produk</h2>
                    <h5 class="text-700 fw-semi-bold">Silakan lengkapi form di bawah ini untuk mengedit produk.</h5>
                </div>
                <div class="col-auto">
                    <a class="btn btn-phoenix-secondary me-2 mb-2 mb-sm-0" href="{{ route('spices') }}">Batalkan</a>
                    <button class="btn btn-primary mb-2 mb-sm-0" type="submit">Simpan</button>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-12 col-xl-8">
                    <div class="mb-3">
                        <label for="namaProduk">
                            <h4 class="mb-3">Nama Produk</h4>
                        </label>
                        <input class="form-control @error('nama_produk') is-invalid @enderror" id="namaProduk"
                            type="text" placeholder="Masukkan Nama Produk" name="nama_produk"
                            value="{{ old('nama_produk', $spices->nama_produk) }}" />
                        @error('nama_produk')
                            <strong class="invalid-feedback">{{ $message }}</strong>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label for="deskripsiProduk">
                            <h4 class="mb-3">Deskripsi Produk</h4>
                        </label>
                        <textarea class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsiProduk" name="deskripsi"
                            rows="5" placeholder="Masukkan Deskripsi Produk">{{ old('deskripsi', $spices->deskripsi) }}</textarea>
                        @error('deskripsi')
                            <strong class="invalid-feedback">{{ $message }}</strong>
                        @enderror
                    </div>
                    <div class="mb-5">
                        <label for="fotoProduk">
                            <h4 class="mb-3">Foto Produk</h4>
                        </label>
                        <input class="form-control @error('foto_produk') is-invalid @enderror" id="fotoProduk"
                            type="file" name="foto_produk">
                        <img class="mt-2" id="image-preview" src="#" alt="Preview"
                            style="display: none; width: 100%; height: auto; border-radius: 5px">
                        <strong class="invalid-feedback" id="image-error" style="display: none;">Inputan ini harus berupa
                            gambar</strong>
                        @if ($spices->foto_produk)
                            <img class="mt-2" id="current-image"
                                src="{{ asset('storage/spices/' . $spices->foto_produk) }}" alt="Current Image"
                                style="width: 100%; height: auto; border-radius: 5px">
                        @endif
                        @error('foto_produk')
                            <strong class="invalid-feedback">{{ $message }}</strong>
                        @enderror
                        <script>
                            document.getElementById('fotoProduk').addEventListener('change', function(e) {
                                const file = e.target.files[0];
                                const reader = new FileReader();
                                const imagePreview = document.getElementById('image-preview');
                                const imageError = document.getElementById('image-error');
                                const currentImage = document.getElementById('current-image');
                                const inputField = document.getElementById('fotoProduk');

                                if (file && file.type.startsWith('image/')) {
                                    reader.onload = function(e) {
                                        imagePreview.src = e.target.result;
                                        imagePreview.style.display = 'block';
                                        imageError.style.display = 'none';
                                        inputField.classList.remove('is-invalid');
                                        if (currentImage) {
                                            currentImage.style.display = 'none';
                                        }
                                    }
                                    reader.readAsDataURL(file);
                                } else {
                                    imagePreview.style.display = 'none';
                                    imageError.style.display = 'block';
                                    inputField.classList.add('is-invalid');
                                }
                            });
                        </script>
                    </div>
                </div>
                <div class="col-12 col-xl-4">
                    <div class="row g-2">
                        <div class="col-12 col-xl-12">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Lainnya</h4>
                                    <div class="row gx-3">
                                        <div class="col-12 col-sm-6 col-xl-12">
                                            <div class="mb-4">
                                                <div class="d-flex flex-wrap mb-2">
                                                    <label for="kategoriProduk" class="mb-0 text-1000 me-2">
                                                        <h5>Kategori</h5>
                                                    </label>
                                                    <a class="fw-bold fs--1" href="{{ route('kategori.create') }}">Tambahkan
                                                        Kategori Baru?</a>
                                                </div>
                                                <select class="form-select mb-3 @error('kategori') is-invalid @enderror"
                                                    id="kategoriProduk" name="kategori_id">
                                                    @if ($kategori->isEmpty())
                                                        <option value="">Belum ada data kategori</option>
                                                    @else
                                                        @foreach ($kategori as $kategoris)
                                                            <option value="{{ $kategoris->id }}"
                                                                {{ old('kategori_id', $spices->kategori_id) == $kategoris->id ? 'selected' : '' }}>
                                                                {{ $kategoris->nama_kategori }}</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                                @error('kategori_id')
                                                    <strong class="invalid-feedback">{{ $message }}</strong>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-xl-12">
                                            <div class="mb-4">
                                                <label for="hargaProduk" class="mb-2 text-1000">
                                                    <h5>Harga</h5>
                                                </label>
                                                <input class="form-control @error('harga') is-invalid @enderror"
                                                    id="hargaProduk" type="number" placeholder="Masukkan Harga"
                                                    name="harga" value="{{ old('harga', $spices->harga) }}" />
                                                @error('harga')
                                                    <strong class="invalid-feedback">{{ $message }}</strong>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
