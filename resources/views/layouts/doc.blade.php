<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    {{-- Custom CSS --}}
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">


    <title>Documentation</title>
</head>

<body>
    <div class="d-flex" id="wrapper">

        @include('partials.doc.sidebar')

        <div id="page-content-wrapper">

            @include('partials.doc.navbar')

            <div class="container border-bottom mb-2">
                <h1 class="mt-2">Dokumentasi</h1>
                <p>RFIDAPI adalah Application Programming Interfaces (APIs) yang dikembangkan oleh NCI Non-RS untuk
                    memungkinkan
                    integrasi antara aplikasi anda dan layanan RFID</p>
            </div>

            @yield('container')

        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Core theme JS-->
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
