<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('backend/dist/css/adminlte.min.css') }}">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<script>
    window.Laravel = { csrfToken: '{{ csrf_token() }}' };
</script>

@if (Auth::check())
<script>
    window.Laravel = {!!json_encode([
        'isLoggedin' => true,
        'user' => Auth::user()
    ])!!}
</script>
@else
    <script>
        window.Laravel = {!!json_encode([
            'isLoggedin' => false
        ])!!}
    </script>
@endif

<body id="app" class="dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    


    <!-- jQuery -->
    <script src="{{ asset('backend/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('backend/dist/js/adminlte.min.js') }}"></script>

    @stack('scripts')
</body>
</html>