<div>
    <link rel="stylesheet" href="sweetalert2.min.css">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.min.js"></script>

    @if (session('success'))
        <script>
            let timerInterval;
            Swal.fire({
                icon: "success",
                title: "Berhasil!",
                html: "{{ session('success') }}",
                timer: 2500,
                timerProgressBar: true,
                showConfirmButton: false
                // confirmButtonText: "Yes, accept!"
            })
        </script>
    @endif

    @if (session('error'))
        <script>
            let timerInterval;
            Swal.fire({
                icon: "error",
                title: "Gagal!",
                html: "{{ session('error') }}",
                // timer: 2500,
                // timerProgressBar: true,
                showConfirmButton: true
                // confirmButtonText: "Yes, accept!"
            })
        </script>
    @endif

    {{-- @error('jumlah')
    <script>
        let timerInterval;
        Swal.fire({
            icon: "error",
            title: "Gagal!",
            html: "{{ $message }}",
            confirmButtonText: "OK"
        })
    </script>
    @enderror --}}
</div>
