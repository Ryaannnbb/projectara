@extends('admin.layout.app')

@section('title', 'List Data Kategori')

@section('main')

@include('alert.sweetalert')
<div class="content">
    <div class="mb-9">
        <div class="row g-3 mb-4">
            <div class="col-auto">
                <h2 class="mb-0">Kategori</h2>
            </div>
        </div>
        <ul class="nav nav-links mb-3 mb-lg-2 mx-n3">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">
                    <span>All</span>
                    <span class="text-700 fw-semi-bold">({{ $kategori->count() }})</span>
                </a>
            </li>
        </ul>
        <div id="products"
            data-list='{"valueNames":["product","price","category","tags","vendor","time"],"page":10,"pagination":true}'>
            <div class="mb-4">
                <div class="d-flex flex-wrap gap-3">
                    <div class="ms-xxl-auto">
                        <a href="{{ route('kategori.create') }}" class="btn btn-primary" id="addBtn">
                            <span class="fas fa-plus me-2"></span>Tambah Kategori
                        </a>
                    </div>
                </div>
            </div>
            <div
                class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-white border-top border-bottom border-200 position-relative top-1">
                <div class="table-responsive scrollbar mx-n1 px-1">
                    <table class="table fs--1 mb-0">
                        <thead>
                            <tr>
                                <th class="white-space-nowrap fs--1 align-middle ps-0" style="max-width:20px; width:18px;">NO</th>
                                <th class="sort white-space-nowrap align-middle fs--2" scope="col" style="width:70px;"></th>
                                <th class="sort white-space-nowrap align-middle ps-4" scope="col" style="width:350px;">NAMA KATEGORI</th>
                                <th class="sort white-space-nowrap align-middle ps-4" scope="col" style="width:50px;">DIBUAT PADA</th>
                                <th class="sort text-end align-middle pe-0 ps-4" scope="col"></th>
                            </tr>
                        </thead>
                        <tbody class="list" id="products-table-body">
                            @if ($kategori->isEmpty())
                            <tr>
                                <td colspan="8" class="text-center py-4">
                                    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 200px; height: auto;">
                                        <img src="{{ asset('img/storyset/no-data-amico.svg') }}" alt="No data" style="width: 300px; height: auto; max-width: 100%;">
                                        <h3 class="mt-3 mb-0">Datanya masih kosong nih</h3>
                                    </div>
                                </td>
                            </tr>
                            @endif
                            @foreach ($kategori as $kategoris)
                            <tr class="position-static">
                                <td class="price align-middle fw-bold text-1000">
                                    {{ $loop->iteration }}
                                </td>
                                <td class="align-middle white-space-nowrap py-0">
                                </td>
                                <td class="product align-middle ps-4">
                                    <p class="fw-semi-bold line-clamp-3 mb-0">
                                        {{ $kategoris->nama_kategori }}
                                    </p>
                                </td>
                                <td class="time align-middle white-space-nowrap text-600 ps-4">
                                    {{ $kategoris->created_at->format('d M Y') }}
                                </td>
                                <td class="align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger">
                                    <div class="font-sans-serif btn-reveal-trigger position-static">
                                        <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">
                                            <span class="fas fa-ellipsis-h fs--2"></span>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end py-2">
                                            <a class="dropdown-item" href="{{ route('kategori.edit', $kategoris->id) }}">Edit</a>
                                            <div class="dropdown-divider"></div>
                                            <form action="{{ route('kategori.destroy', $kategoris->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="dropdown-item text-danger hapus">Hapus</button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{-- <div class="row align-items-center justify-content-between py-2 pe-0 fs--1">
                    <div class="col-auto d-flex">
                        <p class="mb-0 d-none d-sm-block me-3 fw-semi-bold text-900"
                            data-list-info="data-list-info"></p><a class="fw-semi-bold" href="#!"
                            data-list-view="*">View all<span class="fas fa-angle-right ms-1"
                                data-fa-transform="down-1"></span></a><a class="fw-semi-bold d-none"
                            href="#!" data-list-view="less">View Less<span
                                class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                    </div>
                    <div class="col-auto d-flex"><button class="page-link"
                            data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                        <ul class="mb-0 pagination"></ul><button class="page-link pe-0"
                            data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</div>
<script>
    $('.hapus').click(function(event) {
        event.preventDefault();

        let form = $(this).closest('form');

        Swal.fire({
            title: "Apakah Anda yakin?",
            text: "Anda akan menghapus data ini. Tindakan ini tidak dapat dibatalkan!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Ya, hapus!"
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit();
            }
        });
    });
</script>
@endsection
