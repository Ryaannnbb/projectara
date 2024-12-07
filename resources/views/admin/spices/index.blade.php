    @extends('admin.layout.app')

    @section('title', 'List Spices Produk')

    @section('main')
    @include('alert.sweetalert')
    <div class="content">
        <div class="mb-9">
            <div class="row g-3 mb-4">
                <div class="col-auto">
                    <h2 class="mb-0">Products</h2>
                </div>
            </div>
            <ul class="nav nav-links mb-3 mb-lg-2 mx-n3">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">
                        <span>All</span>
                        <span class="text-700 fw-semi-bold">({{ $spices->count() }})</span>
                    </a>
                </li>
            </ul>
            <div id="products"
                data-list='{"valueNames":["product","price","category","tags","vendor","time"],"page":10,"pagination":true}'>
                <div class="mb-4">
                    <div class="d-flex flex-wrap gap-3">
                        <div class="ms-xxl-auto">
                            <a href="{{ route('spices.create') }}" class="btn btn-primary" id="addBtn">
                                <span class="fas fa-plus me-2"></span>Tambah Spices Produk
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
                                    <th class="sort white-space-nowrap align-middle ps-4" scope="col" style="width:350px;">NAMA PRODUK</th>
                                    <th class="sort align-middle text-end ps-4" scope="col" style="width:150px;">HARGA</th>
                                    <th class="sort align-middle text-end ps-4" scope="col" style="width:150px;">BERAT</th>
                                    <th class="sort align-middle ps-4" scope="col" style="width:150px;">KATEGORI</th>
                                    <th class="sort align-middle ps-4" scope="col" style="width:200px;">DESKRIPSI</th>
                                    <th class="sort white-space-nowrap align-middle ps-4" scope="col" style="width:50px;">DIBUAT PADA</th>
                                    <th class="sort text-end align-middle pe-0 ps-4" scope="col"></th>
                                </tr>
                            </thead>
                            <tbody class="list" id="products-table-body">
                                @if ($spices->isEmpty())
                                <tr>
                                    <td colspan="8" class="text-center py-4">
                                        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 200px; height: auto;">
                                            <img src="{{ asset('img/storyset/no-data-amico.svg') }}" alt="No data" style="width: 300px; height: auto; max-width: 100%;">
                                            <h3 class="mt-3 mb-0">Datanya masih kosong nih</h3>
                                        </div>
                                    </td>
                                </tr>
                                @endif
                                @foreach ($spices as $item)
                                <tr class="position-static">
                                    <td class="price align-middle fw-bold text-1000">
                                        {{ $loop->iteration }}
                                    </td>
                                    <td class="align-middle white-space-nowrap py-0">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal{{ $item->id }}">
                                            <img src="{{ asset('storage/product/' . $item->foto_produk) }}" alt="" width="53" />
                                        </a>

                                        <!-- Modal -->
                                        <div class="modal fade" id="imageModal{{ $item->id }}" tabindex="-1" aria-labelledby="imageModalLabel{{ $item->id }}" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="imageModalLabel{{ $item->id }}">{{ $item->nama_produk }}</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body text-center">
                                                        <img src="{{ asset('storage/product/' . $item->foto_produk) }}" alt="" class="img-fluid" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="product align-middle ps-4">
                                        <p class="fw-semi-bold line-clamp-3 mb-0">
                                            {{ $item->nama_produk }}
                                        </p>
                                    </td>
                                    <td class="price align-middle white-space-nowrap text-end fw-bold text-700 ps-4">
                                        Rp. {{ number_format($item->harga, 0, ',', '.') }}
                                    </td>
                                    <td class="price align-middle white-space-nowrap text-end fw-bold text-700 ps-4">
                                        {{ $item->berat }} Kg
                                    </td>
                                    <td class="category align-middle white-space-nowrap text-600 fs--1 ps-4 fw-semi-bold">
                                        {{ $item->kategori->nama_kategori }}
                                    </td>
                                    <td class="vendor align-middle text-start fw-semi-bold ps-4">
                                        {{ $item->deskripsi }}
                                    </td>
                                    <td class="time align-middle white-space-nowrap text-600 ps-4">
                                        {{ $item->created_at->format('d M Y') }}
                                    </td>
                                    <td class="align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger">
                                        <div class="font-sans-serif btn-reveal-trigger position-static">
                                            <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">
                                                <span class="fas fa-ellipsis-h fs--2"></span>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end py-2">
                                                <a class="dropdown-item" href="{{ route('spices.edit', $item->id) }}">Edit</a>
                                                <div class="dropdown-divider"></div>
                                                <form action="{{ route('spices.destroy', $item->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="dropdown-item text-danger hapus">Remove</button>
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
