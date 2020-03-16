<!DOCTYPE html>
<html>
    <head>
        @include('includes.head')
        <link rel="stylesheet" href="{{url('assets/css/styles.css')}}">
    </head>
    <body class="sb-nav-fixed">
        <div id="layoutSidenav">
            @include('includes.header')
            <div class="layoutSidenav_nav">
                @include('includes.sidebar')
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        @yield('content')
                    </div>
                </main>
                @include('includes.footer')
              
            </div>
        </div>
        @include('includes.script')
    <script>
    
</script>
    </body>
   
</html>


