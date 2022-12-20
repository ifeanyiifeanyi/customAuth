<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }} | @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/fontawesome5.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap5.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.4.0/css/all.min.css" integrity="sha512-eBNnVs5xPOVglLWDGXyZnZZ2K2ixXhR/3aECgCpFnW2dGCd/yiqXZ6fcB3BubeA91kM6NX234b6Wrah8RiYAPA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body{
            background-color: #9921E8;
        }
        .fa-spinner{
            color: #f3c1de !important;
            font-size: 25px !important;
        }
    </style>
</head>
<body>
    <main>
        @yield('content')
    </main>
    <script src="{{ asset('js/jquery3.5.js') }}"></script>
    <script src="{{ asset('js/popper2.js') }}"></script>
    <script src="{{ asset('js/bootstrap5.js') }}"></script>
    @yield('scripts')
</body>
</html>
