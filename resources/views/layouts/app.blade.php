<html>
<head>
    <title> Halaman @yield('title')</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>
</head>
<body>
    @section('sidebar')
    Ini adalah master sidebar.
    @show
    <div class="container">
        @yield('content')
    </div>
    </body>
</html>