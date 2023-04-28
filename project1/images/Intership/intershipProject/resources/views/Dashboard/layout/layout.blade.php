
<!doctype html>
<html>
<head>
   @include('client.layout.head')
</head>
<body id="page-top">

    

        <!-- Page Wrapper -->
        <div id="wrapper">
        @include('Dashboard.layout.header')
        
        @yield('content')

        </div>
    
    @include('Dashboard.layout.footer')

</body>

</html>