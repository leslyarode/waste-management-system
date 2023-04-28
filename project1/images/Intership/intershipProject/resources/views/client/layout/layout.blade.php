
<!doctype html>
<html>
<head>
   @include('client.layout.head')
</head>
<body class="bg-gradient-secondary">

    <div class="container">

        @yield('content')

    </div>
    <div class="card shadow mb-4">
    </div>
    @include('client.layout.footer')

</body>

</html>