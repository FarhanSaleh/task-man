<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="//cdn.datatables.net/2.0.7/css/dataTables.dataTables.min.css" />
    <title>{{ $title ?? "Task-Man" }}</title>
</head>

<body>
    {{ $slot }}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/2.0.7/js/dataTables.min.js"></script>
    <script>
        @if(session('success'))
        Swal.fire({
            icon: "success",
            title: "BERHASIL",
            text: "{{session('success')}}",
            showConfirmButton: false,
            timer: 2000
        })
        @elseif(session('error'))
        Swal.fire({
            icon: "error",
            title: "GAGAL!",
            text: "{{session('error')}}",
            showConfirmButton: false,
            timer: 2000
        })
        @endif

        $(document).ready(function() {
            let table = new DataTable('#myTable');
        });
    </script>
</body>

</html>