<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title', 'Contacts')</title>
    @yield('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/bs5.css') }}">
<link rel="stylesheet" href="{{asset('assets/css/dataTablesbootstrap5.min.css')}}">

</head>

<body>
    <header>
        @include('layouts.partials.navbar')
        <h3 class="text-center">@yield('h3', 'Contacts')</h3>
    </header>

    <main>
        <div class="m-3">
            @yield('content')
        </div>
    </main>




    @include('layouts.partials.footer')

    <script
  src="{{asset('assets/js/jquery-3.7.1.min.js')}}"integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/bs5.js') }}"></script>
    <script src="{{ asset('assets/js/faall.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/dataTables.bootstrap5.min.js') }}"></script>

    @yield('scripts')
</body>

</html>
